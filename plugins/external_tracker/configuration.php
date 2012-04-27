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
if (file_exists("./lang/{$CONFIG['lang']}.php")) {
  	require "./lang/{$CONFIG['lang']}.php";
} else {
	require './lang/english.php';
}
$name = 'External tracker';
$description = $lang_plugin_external_tracker['description'];
$author = '<a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=56739" rel="external" class="external">papukaija</a>';
$author .= $lang_plugin_external_tracker['credits'].' <a href="plugins/external_tracker/README.txt" title="README.txt">README.txt';
$version = '2.0';
$plugin_cpg_version = array('min' => '1.5');
$announcement_icon = cpg_fetch_icon('announcement', 1);
$config_icon = cpg_fetch_icon('config', 1);
/*
 * $install_info is displayed with the title of a plugin that is NOT installed and
 * can be used to present extra information.
 */
$install_info = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td><a href="http://forum.coppermine-gallery.net/index.php/topic,65174.0.html" rel="external" class="admin_menu" title="{$lang_plugin_external_tracker['supp_thread']}">{$announcement_icon} {$lang_plugin_external_tracker['supp_thread']}</a></td>
    </tr>
    <tr>
    	<td>
    		{$lang_plugin_external_tracker['support_track']}: Google Analytics, Open Web Analytics (OWA), BBClone, CrawlTrack {$lang_plugin_external_tracker['and']} Piwik, Yandex.
    	</td>
    </tr>
    </table>
EOT;
/*
 * $extra_info is displayed with the title of a plugin that IS installed and
 * can be used to present extra information.
 */
$extra_info= <<<EOT
<a href="index.php?file=external_tracker/cookie" class="admin_menu" title="{$lang_plugin_external_tracker['install_cookie']}">{$lang_plugin_external_tracker['install_cookie']}</a>
<a href="index.php?file=external_tracker/plugin_config" class="admin_menu" title="{$lang_gallery_admin_menu['admin_lnk']}">{$config_icon}{$lang_gallery_admin_menu['admin_lnk']}</a>
<a href="http://forum.coppermine-gallery.net/index.php/topic,65174.0.html" rel="external" class="admin_menu" title="{$lang_plugin_external_tracker['supp_thread']}">{$announcement_icon} {$lang_plugin_external_tracker['supp_thread']}</a>
EOT;
?>
