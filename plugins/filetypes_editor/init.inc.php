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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/filetypes_editor/init.inc.php $
  $Revision: 7125 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-25 18:03:41 +0100 (Mo, 25 Jan 2010) $
  **************************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

function fte_init() {
    global $CONFIG, $lang_plugin_filetypes_editor, $filetypes_editor_icon_array;
    require "./plugins/filetypes_editor/lang/english.php";
    if ($CONFIG['lang'] != 'english' && file_exists("./plugins/filetypes_editor/lang/{$CONFIG['lang']}.php")) {
        require "./plugins/filetypes_editor/lang/{$CONFIG['lang']}.php";
    }
    if ($CONFIG['enable_menu_icons'] == 2) {
        $filetypes_editor_icon_array['audio'] = '<img src="./plugins/filetypes_editor/images/icons/audio.png" border="0" width="16" height="16" alt="" class="icon" />';
        $filetypes_editor_icon_array['document'] = '<img src="./plugins/filetypes_editor/images/icons/document.png" border="0" width="16" height="16" alt="" class="icon" />';
        $filetypes_editor_icon_array['image'] = '<img src="./plugins/filetypes_editor/images/icons/image.png" border="0" width="16" height="16" alt="" class="icon" />';
        $filetypes_editor_icon_array['movie'] = '<img src="./plugins/filetypes_editor/images/icons/movie.png" border="0" width="16" height="16" alt="" class="icon" />';
        $filetypes_editor_icon_array['qt'] = '<img src="./plugins/filetypes_editor/images/icons/quicktime.png" border="0" width="16" height="16" alt="" class="icon" />';
        $filetypes_editor_icon_array['rmp'] = '<img src="./plugins/filetypes_editor/images/icons/real.png" border="0" width="16" height="16" alt="" class="icon" />';
        $filetypes_editor_icon_array['swf'] = '<img src="./plugins/filetypes_editor/images/icons/flash.png" border="0" width="16" height="16" alt="" class="icon" />';
        $filetypes_editor_icon_array['wmp'] = '<img src="./plugins/filetypes_editor/images/icons/wmp.png" border="0" width="16" height="16" alt="" class="icon" />';
    } else {
        $filetypes_editor_icon_array['audio'] = '';
        $filetypes_editor_icon_array['document'] = '';
        $filetypes_editor_icon_array['image'] = '';
        $filetypes_editor_icon_array['movie'] = '';
        $filetypes_editor_icon_array['qt'] = '';
        $filetypes_editor_icon_array['rmp'] = '';
        $filetypes_editor_icon_array['swf'] = '';
        $filetypes_editor_icon_array['wmp'] = '';
    }
    if ($CONFIG['enable_menu_icons'] >= 1) {
        $filetypes_editor_icon_array['filetype'] = '<img src="./plugins/filetypes_editor/images/icons/filetype.png" width="16" height="16" border="0" alt="" class="icon" />';
    } else {
        $filetypes_editor_icon_array['filetype'] = '';
    }
    $filetypes_editor_icon_array['announcement'] = cpg_fetch_icon('announcement', 1);
    $filetypes_editor_icon_array['plugin_manager'] = cpg_fetch_icon('plugin_mgr', 2);
    $filetypes_editor_icon_array['edit'] = cpg_fetch_icon('edit',0);
    $filetypes_editor_icon_array['add'] = cpg_fetch_icon('add',2);
    $filetypes_editor_icon_array['delete'] = cpg_fetch_icon('delete',2);
    $filetypes_editor_icon_array['ok'] = cpg_fetch_icon('ok',2);
    $filetypes_editor_icon_array['cancel'] = cpg_fetch_icon('cancel',2);
    $filetypes_editor_icon_array['none'] = cpg_fetch_icon('cancel',2);
    $return['language'] = $lang_plugin_filetypes_editor;
    $return['icon'] = $filetypes_editor_icon_array;
    return $return;
}
?>