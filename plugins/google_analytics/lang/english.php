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
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...'); }

$lang_google_analytics = array(
'ga_yes'            => 'Yes',
'ga_no'             => 'No',
'ga_install'        => 'Install',
'ga_cancel'         => 'Cancel',
'ga_submit'         => 'Submit',
'clean_up_question' => 'Remove settings?',
'clean_up_note'     => '** This will prevent Google Analytics to track your gallery. **',
'clean_up_inst'     => 'The cookie is intalled or updated with success. The cookie will expire in 10 years.',

'plugin_description'          => 'This plugin adds <a href="http://www.google.com/analytics/" rel="external" class="external">Google Analytics</a>\'s tracking code to every page if you aren\'t logged in as admin. An additional cookie based exclusion is also available after the installation of this plugin.',

'plugin_details_notinstalled' => '<a href="http://forum.coppermine-gallery.net/index.php/topic,61232.0.html" rel="external" class="admin_menu external">'.cpg_fetch_icon('announcement', 1).'Announcement thread for '.$name.' plugin</a>',

'plugin_details_installed'    => '<a href="index.php?file=google_analytics/cookie" title="Install or update the cookie">Install or update the cookie</a><br /><a href="http://forum.coppermine-gallery.net/index.php/topic,61232.0.html" rel="external" class="admin_menu external">'.cpg_fetch_icon('announcement', 1).'Announcement thread for '.$name.' plugin</a>',

'author'            => '<a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=56739" rel="external" class="external">papukaija</a>, v1.1 by <a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=24278" rel="external" class="external">Andr&#233;</a>',
);
?>
