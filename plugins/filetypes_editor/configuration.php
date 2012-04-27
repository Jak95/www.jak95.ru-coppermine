<?php
/**************************************************
  Coppermine 1.5.x Plugin - filetypes_editor
  *************************************************
  Copyright (c) 2009 Nibbler
  *************************************************
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 3 of the License, or
  (at your option) any later version.
  ********************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/filetypes_editor/configuration.php $
  $Revision: 7125 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-25 18:03:41 +0100 (Mo, 25 Jan 2010) $
  **************************************************/

require_once "./plugins/filetypes_editor/init.inc.php";
$filetypes_editor_init_array = fte_init();
$lang_plugin_filetypes_editor = $filetypes_editor_init_array['language']; 
$filetypes_editor_icon_array = $filetypes_editor_init_array['icon'];
$name = $lang_plugin_filetypes_editor['plugin_name'];
$description = $lang_plugin_filetypes_editor['plugin_description'];
$author = sprintf($lang_plugin_filetypes_editor['author'], 
                  '<a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=941" rel="external" class="external">Nibbler</a>',
                  '<a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=2" rel="external" class="external">Joachim Müller</a>');
$version = '2.1';
$plugin_cpg_version = array('min' => '1.5');
$extra_info = <<<EOT
    {$lang_plugin_filetypes_editor['plugin_extra']}
    <a href="index.php?file=filetypes_editor/editor" class="admin_menu">{$filetypes_editor_icon_array['filetype']}{$lang_plugin_filetypes_editor['config_name']}</a><br />
    <a href="http://forum.coppermine-gallery.net/index.php/topic,59917.0.html" title="&laquo;{$lang_plugin_filetypes_editor['plugin_name']}&raquo; - {$lang_plugin_filetypes_editor['announcement_thread']}" class="admin_menu external">{$filetypes_editor_icon_array['announcement']}{$lang_plugin_filetypes_editor['announcement_thread']}</a>
EOT;

$install_info=<<<EOT
    {$lang_plugin_filetypes_editor['plugin_description_detail']}<br />&nbsp;<br />
    <a href="http://forum.coppermine-gallery.net/index.php/topic,59917.0.html" title="&laquo;{$lang_plugin_filetypes_editor['plugin_name']}&raquo; - {$lang_plugin_filetypes_editor['announcement_thread']}" class="admin_menu external">{$filetypes_editor_icon_array['announcement']}{$lang_plugin_filetypes_editor['announcement_thread']}</a>
EOT;
?>
