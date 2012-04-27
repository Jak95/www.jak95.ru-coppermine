<?php
/*******************************************************
  Coppermine 1.5.x Plugin - LightBox (NotesFor.net)
  ******************************************************
  Copyright (c) 2009-2010 Joe Carver and Helori Lamberty
  ******************************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/lightbox_notes_for_net/configuration.php $
  $Revision: 7123 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-25 08:38:55 +0100 (Mo, 25 Jan 2010) $
  *****************************************************/
  /*******************************************************
			Version 3.1 - 21 June 2010
  *******************************************************/

require_once('./plugins/lightbox_notes_for_net/init.inc.php');
$name = $lang_plugin_lightbox_notes_for_net['display_name'];
$configuration_link = '<a href="index.php?file=lightbox_notes_for_net/admin" class="admin_menu">' . $lightbox_notes_for_net_icon_array['configure'] . sprintf($lang_plugin_lightbox_notes_for_net['configure_plugin_x'], $lang_plugin_lightbox_notes_for_net['display_name']) . '</a> ';
$documentation_link = '<a href="plugins/lightbox_notes_for_net/docs/' . $documentation_file . '.htm" class="admin_menu">' . $lightbox_notes_for_net_icon_array['documentation'] . $lang_plugin_lightbox_notes_for_net['plugin_documentation'] . '</a> ';
$announcement_thread = '<a href="http://forum.coppermine-gallery.net/index.php/topic,62905.0.html" class="admin_menu">' . $lightbox_notes_for_net_icon_array['announcement'] . $lang_plugin_lightbox_notes_for_net['announcement_thread'] . '</a>';
$extra_info = $configuration_link . $documentation_link . $announcement_thread;
$install_info = $documentation_link . $announcement_thread;
$author='Joe Carver ' . $lang_plugin_lightbox_notes_for_net['aka'] . ' i-imagine';

$version='3.1';
$plugin_cpg_version = array('min' => '1.5');
$description = $lang_plugin_lightbox_notes_for_net['description'];
?>