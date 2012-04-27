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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/filetypes_editor/editor.php $
  $Revision: 7125 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-25 18:03:41 +0100 (Mo, 25 Jan 2010) $
  **************************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');
require_once "./plugins/filetypes_editor/init.inc.php";

pageheader($lang_plugin_filetypes_editor['plugin_name']);

if (!GALLERY_ADMIN_MODE) {
    	cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$player_types = array(''    => $lang_plugin_filetypes_editor['no_player'],
					  'WMP' => $lang_plugin_filetypes_editor['wmp'],
					  'SWF' => $lang_plugin_filetypes_editor['swf'],
					  'QT'  => $lang_plugin_filetypes_editor['qt'],
					  'RMP' => $lang_plugin_filetypes_editor['rmp'],
					  'HTMLA' => $lang_plugin_filetypes_editor['htmlaudio'],
					  'HTMLV' => $lang_plugin_filetypes_editor['htmlvideo'],
					  );
										
if ($superCage->get->keyExists('update') == TRUE || $superCage->post->keyExists('update') == TRUE || $superCage->get->keyExists('ext') == TRUE){

if ($superCage->get->keyExists('ext') == TRUE){
	$get_ext = $superCage->get->getAlnum('ext');
	$sql = "SELECT * FROM {$CONFIG['TABLE_FILETYPES']} WHERE extension = '$get_ext'";
	$result = cpg_db_query($sql);
	$filedata = mysql_fetch_assoc($result);
	mysql_free_result($result);
	$add_update = $lang_plugin_filetypes_editor['update'];
	$add_icon = $filetypes_editor_icon_array['ok'];
} else {
	$filedata = false;
	$add_update = $lang_plugin_filetypes_editor['add'];
	$add_icon = $filetypes_editor_icon_array['add'];
}

echo '<form action="index.php?file=filetypes_editor/editor" method="post" name="updateform">';

$content_dropdown = '<select name="file[content]" class="listbox">';

$content_types = array('image', 'movie', 'audio', 'document');

foreach ($content_types as $content_type){
	$selected = ($filedata && $content_type == $filedata['content']) ? 'selected="selected"' : '';
	$content_dropdown .= "<option value=\"$content_type\" $selected>". $lang_plugin_filetypes_editor[$content_type] . '</option>';
}

$content_dropdown .= '</select>';

$player_dropdown = '<select name="file[player]" class="listbox">';

foreach ($player_types as $type => $label){
	$selected = ($filedata && $type == $filedata['player']) ? 'selected="selected"' : '';
	$player_dropdown .=  "<option value=\"$type\" $selected>". $label . '</option>';
}

$player_dropdown .= '</select>';

$presel_extension = $filedata ? $filedata['extension'] : '';
$presel_mime = $filedata ? $filedata['mime'] : '';

starttable("50%", $lang_plugin_filetypes_editor['enter_filetype_details'], 2);

echo <<< EOT

	<tr>
		<td class="tableb" width="60%">
			{$lang_plugin_filetypes_editor['file_extension']} ({$lang_plugin_filetypes_editor['file_extension_detail']}):
		</td>
		<td class="tableb" valign="top" width="40%">
			<input class="textinput" maxlength="7" size="4" name="file[extension]" type="text" value="$presel_extension"/>
		</td>
	</tr>
	
	<tr>
		<td class="tableb" width="60%">
			{$lang_plugin_filetypes_editor['mime_type']} ({$lang_plugin_filetypes_editor['mime_type_detail']}):
		</td>
		<td class="tableb" valign="top" width="40%">
			<input class="textinput" maxlength="30" name="file[mime]" type="text" value="$presel_mime"/>
		</td>
	</tr>
	
	<tr>
		<td class="tableb" width="60%">
			{$lang_plugin_filetypes_editor['content_type']}
		</td>
		<td class="tableb" valign="top" width="40%">
			$content_dropdown
		</td>
	</tr>

	<tr>
		<td class="tableb" width="60%">
			Associated Player
		</td>
		<td class="tableb" valign="top" width="40%">
			$player_dropdown
		</td>
	</tr>
	
<tr>
	<td colspan="2" align="center" class="tablef">
		<button type="submit" class="button" name="addit" id="addit" value="{$add_update}">{$add_icon}{$add_update}</button>
		<button type="cancel" class="button" name="cancel" id="cancel" value="{$lang_plugin_filetypes_editor['cancel']}">{$filetypes_editor_icon_array['cancel']}{$lang_plugin_filetypes_editor['cancel']}</button>
	</td>
</tr>

EOT;

endtable();
echo '</form>';
pagefooter();
die();

} elseif ($superCage->post->keyExists('addit')){
	
	$post_file = $superCage->post->getRaw('file'); // This page is admin-only, so we can consider this pretty safe
	$filedata = array_map('mysql_real_escape_string', $post_file);

	$ops = array();
	
	foreach ($filedata as $name => $value){
		$ops[] = "`$name` = '$value'";
	}
	
	$newdata = implode(', ', $ops);
	
	cpg_db_query("REPLACE INTO {$CONFIG['TABLE_FILETYPES']} SET $newdata");
	
} elseif ($superCage->post->keyExists('delete')){
	
	$extensions = array();
	$post_cid_array = $superCage->post->getRaw('cid_array');// This page is admin-only, so we can consider this pretty safe
	
	foreach($post_cid_array as $extension){
		$extensions[] = "`extension` = '" . mysql_real_escape_string($extension) . "'";
	}
	
	$extquery = implode(' OR ', $extensions);
	
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_FILETYPES']} WHERE $extquery");
		
}

?>
              <script type="text/javascript" language="javascript">
<!--

function selectAll(d,box) {
  var f = document.editForm;
  for (i = 0; i < f.length; i++) {
    //alert (f[i].name.indexOf(box));
    if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
      if (d.checked) {
        f[i].checked = true;
      } else {
        f[i].checked = false;
      }
    }
  }
  if (d.name == "checkAll") {
      document.getElementsByName('checkAll2')[0].checked = document.getElementsByName('checkAll')[0].checked;
  } else {
      document.getElementsByName('checkAll')[0].checked = document.getElementsByName('checkAll2')[0].checked;
  }
}

-->
</script>
<form action="index.php?file=filetypes_editor/editor" method="post" name="editForm">
<?php
starttable('100%', $filetypes_editor_icon_array['filetype'] . $lang_plugin_filetypes_editor['plugin_name'], 6);

echo <<< EOT
        <tr>
			<td class="tableh1" valign="middle" align="center">
				<input type="checkbox" name="checkAll" onClick="selectAll(this,'cid_array');" class="checkbox" title="{$lang_common['check_uncheck_all']}" />
			</td>
			<td class="tableh1"><span class="statlink">{$lang_plugin_filetypes_editor['file_extension']}</span></td>
			<td class="tableh1"><span class="statlink">{$lang_plugin_filetypes_editor['mime_type']}</span></td>
			<td class="tableh1"><span class="statlink">{$lang_plugin_filetypes_editor['content_type']}</span></td>
			<td class="tableh1"><span class="statlink">{$lang_plugin_filetypes_editor['associated_player']}</span></td>
			<td class="tableh1">{$lang_common['edit']}</td>
        </tr>
EOT;

$result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_FILETYPES']} ORDER BY extension ASC");

$i = 0;

while (++$i && $row = cpg_db_fetch_row($result)){
	
	$player = $player_types[$row['player']];
	if ($i/2 == floor($i/2)) {
		$cell_style = 'tableb';
	} else {
		$cell_style = 'tableb tableb_alternate';
	}
	if (array_key_exists($row['content'], $filetypes_editor_icon_array) == TRUE) {
		$content_icon = $filetypes_editor_icon_array[$row['content']];
	} else {
		$content_icon = '';
	}
	if (array_key_exists(strtolower($row['player']), $filetypes_editor_icon_array) == TRUE) {
		$player_icon = $filetypes_editor_icon_array[strtolower($row['player'])];
	} else {
		$player_icon = $filetypes_editor_icon_array['none'];
	}
	
	echo  <<< EOT

<tr>
	<td class="{$cell_style}" valign="top" align="center">
		<input name="cid_array[]" id="check{$i}" type="checkbox" value="{$row['extension']}" />
	</td>
	<td class="{$cell_style}"><label for="check{$i}">{$row['extension']}</label></td>
	<td class="{$cell_style}">{$row['mime']}</td>
	<td class="{$cell_style}">{$content_icon}{$row['content']}</td>
	<td class="{$cell_style}">{$player_icon}{$player}</td>
	<td class="{$cell_style}"><a href="index.php?file=filetypes_editor/editor&ext={$row['extension']}">{$filetypes_editor_icon_array['edit']}</a></td>
</tr>

EOT;

}

echo <<< EOT

<tr>
	<td colspan="6" align="center" class="tablef">
		<button type="submit" class="button" name="delete" id="delete" value="{$lang_plugin_filetypes_editor['delete_selected_filetypes']}">{$filetypes_editor_icon_array['delete']}{$lang_plugin_filetypes_editor['delete_selected_filetypes']}</button>
		<button type="submit" class="button" name="update" id="update" value="{$lang_plugin_filetypes_editor['add_new_filetype']}">{$filetypes_editor_icon_array['add']}{$lang_plugin_filetypes_editor['add_new_filetype']}</button>
	</td>
</tr>

EOT;

endtable();
echo '</form>';
pagefooter();
?>