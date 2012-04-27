<?php
/**************************************************
  Coppermine 1.5.x Plugin - remote_videos
  *************************************************
  Copyright (c) 2009-2010 eenemeenemuu
  *************************************************
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 3 of the License, or
  (at your option) any later version.
  ********************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/remote_videos/configuration.php $
  $Revision: 7781 $
  $LastChangedBy: eenemeenemuu $
  $Date: 2010-07-17 22:52:17 +0200 (Sa, 17 Jul 2010) $
  **************************************************/

$name = 'Remote Videos';
$description = 'Upload videos from video file hosters to your gallery (YouTube, Google, Yahoo!, ...)';
$author = '<a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=24278" rel="external" class="external">eenemeenemuu</a>';
$version = '1.8';
$plugin_cpg_version = array('min' => '1.5');
$announcement_icon = cpg_fetch_icon('announcement', 1);
$config_icon = cpg_fetch_icon('config', 1);

$extra_info = <<<EOT
    <a href="index.php?file=remote_videos/admin" class="admin_menu">{$config_icon}$name {$lang_gallery_admin_menu['admin_lnk']}</a>
    <a href="http://forum.coppermine-gallery.net/index.php/topic,60195.0.html" rel="external" class="admin_menu">{$announcement_icon}Announcement thread</a>
EOT;

$install_info = <<<EOT
    <a href="http://forum.coppermine-gallery.net/index.php/topic,60195.0.html" rel="external" class="admin_menu">{$announcement_icon}Announcement thread</a>
    <strong>Please consider your country's law, if you are liable when embedding content.</strong>
EOT;

?>
