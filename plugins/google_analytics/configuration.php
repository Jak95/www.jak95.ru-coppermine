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
if (!defined('IN_COPPERMINE')) {  
    die('Not in Coppermine...');  
} 

// Include the language file require ('./plugins/google_analytics/lang/english.php'); 
if (file_exists("./plugins/google_analytics/lang/{$CONFIG['lang']}.php")) { 
    require ("./plugins/google_analytics/lang/{$CONFIG['lang']}.php"); 
} 

// Common variables to all languages
$version='1.4';
$plugin_cpg_version = array('min' => '1.5');
$name='Google Analytics';


$author = $lang_google_analytics['author'];
if ( is_null($author)) {  
    $author='<a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=56739" rel="external" class="external">papukaija</a>, v1.1 by <a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=24278" rel="external" class="external">André</a>';
}

$description = $lang_google_analytics['plugin_description'];
if ( is_null($description)) {  
    $description='Desc: This plugin adds <a href="http://www.google.com/analytics/" rel="external" class="external">Google Analytics</a>\'s tracking code to every page if you aren\'t logged in as admin. An additional cookie based exclusion is also available after the installation of this plugin.';
}

/*
 * $install_info is displayed with the title of a plugin that is NOT installed and
 * can be used to present extra information.
 */
$install_info = $lang_google_analytics['plugin_details_installed'];
if ( is_null($install_info)) {  
    $install_info = '<a href="http://forum.coppermine-gallery.net/index.php/topic,61232.0.html" rel="external" class="admin_menu external">'.cpg_fetch_icon('announcement', 1).'Announcement thread for '.$name.' plugin</a>';
}

/*
 * $extra_info is displayed with the title of a plugin that IS installed and
 * can be used to present extra information.
 */
$extra_info = $lang_google_analytics['plugin_details_notinstalled'];
if ( is_null($extra_info)) {  
    $extra_info = '<a href="index.php?file=google_analytics/cookie" title="Install or update the cookie">Install or update the cookie</a><br /><a href="http://forum.coppermine-gallery.net/index.php/topic,61232.0.html" rel="external" class="admin_menu external">'.cpg_fetch_icon('announcement', 1).'Announcement thread for '.$name.' plugin</a>';
}

?>

