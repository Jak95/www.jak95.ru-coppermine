<?php
/*********************************************
  Coppermine 1.5.x Plugin - Google Anylytics 
  ********************************************
  Copyright (c) 2009 papukaija
  
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/
if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

//to install
$thisplugin->add_action('plugin_install','google_analytics_install');
$thisplugin->add_action('plugin_configure','google_analytics_configure');

//to uninstall with clean up
$thisplugin->add_action('plugin_uninstall','google_analytics_uninstall');
$thisplugin->add_action('plugin_cleanup','google_analytics_cleanup');

//to edit footer
$thisplugin->add_filter('gallery_footer','google_analytics_footer');

// Adds tracker code if user is not an admin or is using the optional cookie
function google_analytics_footer($html) {
	global $CONFIG;
	$superCage = Inspekt::makeSuperCage();
		
	if ($superCage->cookie->keyExists($CONFIG['cookie_name'] . '_ga-stats')) {
			$stats = $superCage->cookie->getRaw($CONFIG['cookie_name'].'_ga-stats');
		}
	else {
		if (!GALLERY_ADMIN_MODE){
			$stats = 'yes';
		}
	}
	
	if ($stats == 'yes') {
		$js = <<< EOT
	<script type="text/javascript">
   	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
   	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
   	</script>
   	<script type="text/javascript">
   	var pageTracker = _gat._getTracker("{$CONFIG['plugin_google_analytics_trackerid']}");
   	pageTracker._initData();
   	pageTracker._trackPageview();
   	</script>
EOT;
	}
	else {
		$js = '';// cookie/admin mode active
	}
$return = $js.$html;
return $return;
}


function google_analytics_install() {
    global $CONFIG, $lang_google_analytics;
	//loading the correct language
	require_once 'plugins/google_analytics/include/init.inc.php';
	$superCage = Inspekt::makeSuperCage();

	if($superCage->post->getAlpha('submit') == $lang_google_analytics['ga_install']){
		// delete previous plugin config options if necessary (just in case)
		cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name='plugin_google_analytics_trackerid'");
			
		$trackerid = $superCage->post->getEscaped('trackerid');
		$sql="INSERT INTO ".$CONFIG['TABLE_CONFIG']." VALUES ('plugin_google_analytics_trackerid', '$trackerid');";
		cpg_db_query($sql);
		return true;
	}
	else {
        return 1;
	}
}

function google_analytics_configure() {
	global $CONFIG, $lang_google_analytics;
	//loading the correct language
	require_once 'plugins/google_analytics/include/init.inc.php';
	$superCage = Inspekt::makeSuperCage();
	$action = $superCage->server->getEscaped('REQUEST_URI');

    echo <<< EOT
    <form name="cpgform" id="cpgform" action="{$action}" method="post">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
              <tr>
                <td class="tableb" align="right">
                  Google Analytics tracker id:
                </td>
                <td class="tableb">
                  <input type="text" name="trackerid" class="textinput" value="{$CONFIG['plugin_google_analytics_trackerid']}" title="UA-1234567-8" style="width:100%" />
                </td>
              </tr>
              <tr>
                <td class="tablef" colspan="2">
						<input type="submit" name="submit" class="button" value="{$lang_google_analytics['ga_install']}" />
						<input type="button" name="cancel" class="button" onclick="window.location='pluginmgr.php';" value="{$lang_google_analytics['ga_cancel']}" />
                </td>
              </tr>
            </table>
    </form>
EOT;
}

function google_analytics_cleanup($action) {
    global $CONFIG, $lang_google_analytics;
   
	require_once 'plugins/google_analytics/include/init.inc.php';
    $superCage = Inspekt::makeSuperCage();
	$form_action = $superCage->server->getEscaped('REQUEST_URI');
	
    if ($action == '1') {
        echo <<< EOT
    <form action="{$form_action}" method="post">
        <p>
            {$lang_google_analytics['clean_up_question']}<br />
            <span style="color:red">{$lang_google_analytics['clean_up_note']}</font>
        </p>
        <div style="margin:25;">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td><input type="radio" name="remove" value="1" /></td>
                <td>{$lang_google_analytics['ga_yes']}</td>
            </tr>
            <tr>
                <td><input type="radio" name="remove" checked="checked" value="0" /></td>
                <td>{$lang_google_analytics['ga_no']}</td>
            </tr>
        </table>
        </div>
        <br />
        <span>
           <input type="submit" name="submit" class="button" value="{$lang_google_analytics['ga_submit']}" />
           <input type="button" name="cancel" class="button" onClick="window.location='pluginmgr.php';" value="{$lang_google_analytics['ga_cancel']}" />
        </span>
    </form>
EOT;
    }
}

function google_analytics_uninstall() {
	global $CONFIG;

	// the cookie is removed always, config on request
	$superCage = Inspekt::makeSuperCage();
	if (!$superCage->post->keyExists('remove')) {
	    setcookie($CONFIG['cookie_name'].'_ga-stats', "no", time() - 60 * 10, $CONFIG['cookie_path']);
		return 1;
	}

	if ($superCage->post->getEscaped('remove')) {
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name='plugin_google_analytics_trackerid'");
        setcookie($CONFIG['cookie_name'].'_ga-stats', "no", time() - 60 * 10, $CONFIG['cookie_path']);
	}

    return true;
}
?>
