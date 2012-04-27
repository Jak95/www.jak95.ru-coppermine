<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.x
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/phpmyadmin/configuration.php $
  $Revision: 8123 $
  $LastChangedBy: eenemeenemuu $
  $Date: 2010-12-07 10:08:46 +0100 (Di, 07 Dez 2010) $
**********************************************/

$name = 'phpMyAdmin';
$description = 'This plugin embedds the well-known database manipulation tool phpMyAdmin (version 2.11.9.6) into the layout of coppermine. The coppermine dev team recommends using phpMyAdmin to be used for the purposes of modifying Coppermine tables or performing database backups (dumps).';
$author = 'Nibbler';
$version = '1.5';
$install_info = 'If you install this plugin you will get a link on your admin menu that will load phpMyAdmin in an iframe. It uses the database information from Coppermine so there is no additional configuration required.<br />&nbsp;<br />';
$extra_info = 'This copy of phpMyAdmin only contains the default theme, only the English language and no documentation in order to keep the plugin small. Exporting to PDF has also been removed. You can add or replace any files manually via FTP after installation if you please.<br />Use the phpMyAdmin-link from the admin menu or the one below:<br />&nbsp;<br /><a href="index.php?file=phpmyadmin/index" class="admin_menu">';
if ($CONFIG['enable_menu_icons'] == 2) {
    $extra_info .= '<img src="./plugins/phpmyadmin/images/icons/pma.png" border="0" width="16" height="16" alt="" class="icon" />';
}
$extra_info .= 'phpMyAdmin</a> ';
$announcement = '<a href="http://forum.coppermine-gallery.net/index.php/topic,60908.0.html" class="admin_menu">';
if ($CONFIG['enable_menu_icons'] == 2) {
    $announcement .= '<img src="./plugins/phpmyadmin/images/icons/announcement.png" border="0" width="16" height="16" alt="" class="icon" />';
}
$announcement .= 'Announcement thread</a>';
$extra_info .= $announcement;
$install_info .= $announcement;
?>