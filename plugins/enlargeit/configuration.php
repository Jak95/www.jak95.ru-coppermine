<?php
/**************************************************
  Coppermine 1.5.x Plugin - EnlargeIt!
  *************************************************
  Copyright (c) 2010 Timos-Welt (www.timos-welt.de)
  *************************************************
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 3 of the License, or
  (at your option) any later version.
  ********************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/enlargeit/configuration.php $
  $Revision: 7119 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-24 21:39:28 +0100 (So, 24 Jan 2010) $
  **************************************************/
  
require('./plugins/enlargeit/init.inc.php');
  
$name = $lang_plugin_enlargeit['display_name'];
$description = $lang_plugin_enlargeit['description'];
$author = 'Timo Schewe (<a href="http://www.timos-welt.de/" rel="external" class="external">Timos-Welt</a>)';
$version = '1.15';
$plugin_cpg_version = array('min' => '1.5');
$install_info = $lang_plugin_enlargeit['install_info'];
$extra_info = $lang_plugin_enlargeit['extra_info'];
$announcement_thread = '<a href="http://forum.coppermine-gallery.net/index.php/topic,57424.0.html" rel="external" class="admin_menu">'.$enlargeit_icon_array['announcement'].$lang_plugin_enlargeit['announcement_thread'].'</a>';
$configuration_link = '<a href="index.php?file=enlargeit/admin" class="admin_menu">'.$enlargeit_icon_array['configure'].$lang_plugin_enlargeit['enlargeit_configuration'].'</a>';
$documentation_link = '<a href="plugins/enlargeit/docs/' . $documentation_file  . '.htm" class="admin_menu">'.$enlargeit_icon_array['documentation'].$lang_plugin_enlargeit['enlargeit_documentation'].'</a>';
$install_info .= '<br />' . $announcement_thread . '&nbsp;' . $documentation_link;
$extra_info .= '<br />' . $configuration_link . '&nbsp;' . $announcement_thread . '&nbsp;' . $documentation_link;
?>