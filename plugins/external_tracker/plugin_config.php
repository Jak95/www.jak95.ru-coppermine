<?php
/*********************************************
  Coppermine 1.5.x Plugin - External tracker
  ********************************************
  Copyright (c) 2009 - 2010 papukaija
  
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  $HeadURL$
  $Revision$
**********************************************/
require_once 'plugins/external_tracker/include/init.inc.php';

global $CONFIG, $lang_plugin_external_tracker, $lang_gallery_admin_menu, $lang_common;
//$action = $superCage->server->getEscaped('REQUEST_URI');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

// Form's data handler
function external_tracker_configuration_submit() {
	global $CONFIG;
	$superCage = Inspekt::makeSuperCage();
	// Populate the form fields and run the queries for the submit form
    $config_changes_counter = 0;
	
    // Service tracker
    $service_tracker_array = $superCage->post->getRaw('service_tracker'); // We have an array, so we'll need to use getRaw and sanitize later
    $result = cpg_db_query("SELECT service_id, tracker FROM {$CONFIG['TABLE_PREFIX']}plugin_external_tracker");
  
    $query_array = array();
    while ($row = mysql_fetch_assoc($result)) {
    	if ($service_tracker_array[$row['service_id']] != $row['tracker']) { // Only update the db if the new value doesn't match the old value
			$query_array[] = "UPDATE {$CONFIG['TABLE_PREFIX']}plugin_external_tracker SET tracker='{$service_tracker_array[$row['service_id']]}' WHERE service_id='{$row['service_id']}'";
			$config_changes_counter++;
		}
    }
    mysql_free_result($result);
    if (isset($query_array) == TRUE) {
        foreach ($query_array as $query) {
            cpg_db_query($query);
        }
    }
    unset($query_array);
    
    // Extra tracker
    $tracker_extra_array = $superCage->post->getRaw('tracker_extra'); // We have an array, so we'll need to use getRaw and sanitize later
    $result = cpg_db_query("SELECT service_id, tracker_extra FROM {$CONFIG['TABLE_PREFIX']}plugin_external_tracker");

    $query_array = array();
    while ($row = mysql_fetch_assoc($result)) {
    	if ($tracker_extra_array[$row['service_id']] != $row['tracker_extra']) { // Only update the db if the new value doesn't match the old value
			$query_array[] = "UPDATE {$CONFIG['TABLE_PREFIX']}plugin_external_tracker SET tracker_extra='{$tracker_extra_array[$row['service_id']]}' WHERE service_id='{$row['service_id']}'";
			$config_changes_counter++;
		}
    }
    mysql_free_result($result);
    if (isset($query_array) == TRUE) {
        foreach ($query_array as $query) {
            cpg_db_query($query);
        }
    }
    unset($query_array);

    // Service activating/disabling
    $service_active_array = $superCage->post->getRaw('service_active'); // We have an array, so we'll need to use getRaw and sanitize later
    $result = cpg_db_query("SELECT service_id, service_active FROM {$CONFIG['TABLE_PREFIX']}plugin_external_tracker");
    
    $query_array = array();
    while ($row = mysql_fetch_assoc($result)) {
        if ($service_active_array[$row['service_id']] == 1 && $row['service_active'] == 'NO') {
            $query_array[] = "UPDATE {$CONFIG['TABLE_PREFIX']}plugin_external_tracker SET service_active='YES' WHERE service_id='{$row['service_id']}'";
            $config_changes_counter++;
        } elseif (isset($service_active_array[$row['service_id']]) == FALSE && $row['service_active'] == 'YES') {
            $query_array[] = "UPDATE {$CONFIG['TABLE_PREFIX']}plugin_external_tracker SET service_active='NO' WHERE service_id='{$row['service_id']}'";
            $config_changes_counter++;
        }
    } // end while loop
    mysql_free_result($result);
    if (isset($query_array) == TRUE) {
        foreach ($query_array as $query) {
            cpg_db_query($query);
        }
    }
    unset($query_array);
    
	return $config_changes_counter;
}
// Form submit?
$additional_submit_information=''; //for php notice error if the form isn't submitted
if ($superCage->post->keyExists('submit') == TRUE) {
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
	$config_changes_counter = external_tracker_configuration_submit();
	if ($config_changes_counter > 0) {
		$additional_submit_information = '<div class="cpg_message_success">' . $lang_plugin_external_tracker['changes_saved'] . '</div>';
	} else {
		$additional_submit_information = '<div class="cpg_message_validation">' . $lang_plugin_external_tracker['no_changes'] . '</div>';
	}
}

pageheader('External tracker');
echo '<form action="" method="post" name="social_bookmarks_config" id="social_bookmarks_config">';
starttable('100%', 'External tracker by <a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=56739" rel="external" class="external">papukaija</a> - <a href="pluginmgr.php" class="admin_menu">'.$lang_gallery_admin_menu['pluginmgr_lnk'].'</a>', '5');
list($timestamp, $form_token) = getFormToken();

echo <<< EOT
<tr>
	<th valign="top" class="tableh1">
		{$lang_plugin_external_tracker['active']}
	</th>
	<th valign="top" class="tableh1">
		{$lang_plugin_external_tracker['service_name']}
	</th>
	<th valign="top" class="tableh1">
		{$lang_plugin_external_tracker['tracker']}
	</th>
	<th valign="top" class="tableh1">
		{$lang_plugin_external_tracker['extra_settings']}
	</th>
	<th valign="top" class="tableh1">
		{$lang_plugin_external_tracker['help']}
	</th>
</tr>
EOT;
//See TODO.txt
$result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PREFIX']}plugin_external_tracker ORDER BY service_name_full");
$loopCounter = 0;
while ($row = mysql_fetch_assoc($result)) { //Form styling
    if ($loopCounter/2 == floor($loopCounter/2)) {
        $tableCellStyle = 'tableb tableb_alternate';
    } else {
        $tableCellStyle = 'tableb';
    }

	if ($row['service_active'] == 'YES') {
		$option_output['service'] = 'checked="checked"';
	} else {
		$option_output['service'] = '';
	}
	$link_title = sprintf($lang_plugin_external_tracker['help_for_service'], $row['service_name_full']);

	$loopCounter++;
	echo <<< EOT
		<tr>
		    <td valign="top" align="center" class="{$tableCellStyle}">
		        <input type="checkbox" class="checkbox" name="service_active[{$row['service_id']}]" id="service_active_{$row['service_id']}" value="1" {$option_output['service']} />
		    </td>
		    <td valign="top" class="{$tableCellStyle}">
		        <label for="service_active_{$row['service_id']}" class="clickable_option">
		        {$row['service_name_full']}
		        </label>
		    </td>
		    <td valign="top" class="{$tableCellStyle}">
		        <input type="text" class="textinput" name="service_tracker[{$row['service_id']}]" id="service_tracker[{$row['service_id']}]" value="{$row['tracker']}" />
		    </td>
		    <td valign="top" class="{$tableCellStyle}">
		        <input type="text" class="textinput" name="tracker_extra[{$row['service_id']}]" id="tracker_extra[{$row['service_id']}]" value="{$row['tracker_extra']}" />
		    </td>
			<td valign="top" class="{$tableCellStyle}">
		        <a href="{$row['help_url']}" rel="external">
		        <img src="images/link.gif" border="0" width="16" height="16" alt="" title="{$link_title}" />
		        </a>
		    </td>
		</tr>
EOT;
}
mysql_free_result($result);

echo <<< EOT
<tr>
	<td valign="middle" class="tablef">
	</td>
	<td valign="middle" class="tablef" colspan="5">
		<input type="hidden" name="form_token" value="{$form_token}" />
		<input type="hidden" name="timestamp" value="{$timestamp}" />
		<input name="submit" type="submit" value="{$lang_common['apply_changes']}" />
	</td>
</tr>
EOT;

endtable();
echo <<< EOT
{$additional_submit_information}
</form>
EOT;

pagefooter();
ob_end_flush();
?>
