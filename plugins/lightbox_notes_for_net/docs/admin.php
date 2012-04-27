<?php
/*******************************************************
  Coppermine 1.5.x Plugin - LightBox (NotesFor.net)
  ******************************************************
  Copyright (c) 2009-2010 Joe Carver and Helori Lamberty
  ******************************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/lightbox_notes_for_net/admin.php $
  $Revision: 7123 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-25 08:38:55 +0100 (Mo, 25 Jan 2010) $
  *****************************************************/
  /*******************************************************
			Version 3.1 - 21 June 2010
  *******************************************************/

require_once('./plugins/lightbox_notes_for_net/init.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

global $lang_plugin_php, $CONFIG, $lang_common, $lang_pluginmgr_php, $lang_admin_php;
if (in_array('js/jquery.spinbutton.js', $JS['includes']) != TRUE) {
	$JS['includes'][] = 'js/jquery.spinbutton.js';
}
if (in_array('plugins/lightbox_notes_for_net/admin.js', $JS['includes']) != TRUE) {
	$JS['includes'][] = 'plugins/lightbox_notes_for_net/admin.js';
}
list($timestamp, $form_token) = getFormToken();
pageheader(sprintf($lang_plugin_lightbox_notes_for_net['configure_plugin_x'], $lang_plugin_lightbox_notes_for_net['display_name']));

// get sanitized POST parameters
if ($superCage->post->keyExists('submit')) {
	//Check if the form token is valid
	if(!checkFormToken()){
		cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
	}
  // Define the sanitization patterns
  $sanitization_array = array(
      'plugin_lightbox_nfn_border' => array('type' => 'int', 'min' => '0', 'max' => '99'),
      'plugin_lightbox_nfn_sizespeed' => array('type' => 'int', 'min' => '0', 'max' => '2000'),
      'plugin_lightbox_nfn_notimer' => array('type' => 'checkbox', 'min' => '0', 'max' => '1'),
      'plugin_lightbox_nfn_image_exit' => array('type' => 'int', 'min' => '0', 'max' => '1'),
      'plugin_lightbox_nfn_caption' => array('type' => 'checkbox', 'min' => '0', 'max' => '1'),
      'plugin_lightbox_nfn_maxpics' => array('type' => 'int', 'min' => '1', 'max' => '3000'),
      'plugin_lightbox_nfn_buttonset' => array('type' => 'int', 'min' => '0', 'max' => '1'),
	  'plugin_lightbox_nfn_nocorner' => array('type' => 'checkbox', 'min' => '0', 'max' => '1'),
      'plugin_lightbox_nfn_fade_swap' => array('type' => 'checkbox', 'min' => '0', 'max' => '1'),
      'plugin_lightbox_nfn_slidetime' => array('type' => 'int', 'min' => '1', 'max' => '9999'),
      'plugin_lightbox_nfn_imagefade' => array('type' => 'int', 'min' => '1', 'max' => '3000'),
      'plugin_lightbox_nfn_containerfade' => array('type' => 'int', 'min' => '1', 'max' => '3000'),	
      'plugin_lightbox_nfn_resize' => array('type' => 'int', 'min' => '0', 'max' => '1'),
      'plugin_lightbox_nfn_download' => array('type' => 'int', 'min' => '0', 'max' => '2'),	  
  );

  $config_changes_counter = 0;
  foreach ($sanitization_array as $san_key => $san_value) {
      if (isset($CONFIG[$san_key]) == TRUE) { // only loop if config value is set --- start
          if ($san_value['type'] == 'checkbox') { // type is checkbox --- start
            if ($superCage->post->getInt($san_key) == $san_value['max'] && $CONFIG[$san_key] != $san_value['max']) {
                $CONFIG[$san_key] = $san_value['max'];
                cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='{$CONFIG[$san_key]}' WHERE name='$san_key'");
                $config_changes_counter++;
            } elseif($superCage->post->getInt($san_key) == $san_value['min'] && $CONFIG[$san_key] != $san_value['min']) {
                $CONFIG[$san_key] = $san_value['min'];
                cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='{$CONFIG[$san_key]}' WHERE name='$san_key'");
                $config_changes_counter++;
            } elseif($superCage->post->keyExists($san_key) != TRUE && $CONFIG[$san_key] != '0') {
                $CONFIG[$san_key] = 0;
                cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='{$CONFIG[$san_key]}' WHERE name='$san_key'");
                $config_changes_counter++;
            }
          } // type is checkbox --- end
          if ($san_value['type'] == 'int') { // type is integer --- start
              if ($superCage->post->getInt($san_key) <= $san_value['max'] && $superCage->post->getInt($san_key) >= $san_value['min'] && $superCage->post->getInt($san_key) != $CONFIG[$san_key]) {
                  $CONFIG[$san_key] = $superCage->post->getInt($san_key);
                  cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='{$CONFIG[$san_key]}' WHERE name='$san_key'");
                  $config_changes_counter++;
              }
          } // type is integer --- end
          if ($san_value['type'] == 'raw') { // type is raw --- start
              if (isset($san_value['regex_ok']) == TRUE && preg_match($san_value['regex_ok'], $superCage->post->getRaw($san_key)) && $superCage->post->getRaw($san_key) != $CONFIG[$san_key]) {
                  $CONFIG[$san_key] = $superCage->post->getRaw($san_key);
				  if ($superCage->post->getRaw($san_key) == 'none') {
					$CONFIG[$san_key] = '';
				  }
                  cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='{$CONFIG[$san_key]}' WHERE name='$san_key'");
                  $config_changes_counter++;
              }
          } // type is raw --- end
          if ($san_value['type'] == 'array') { // type is array --- start              
          $evaluate_value = $superCage->post->getRaw($san_key);
              if (is_array($evaluate_value) && isset($san_value['regex_ok']) == TRUE && isset($san_value['delimiter']) == TRUE) {
                  $temp = '';
                  for ($i = 0; $i <= count($evaluate_value); $i++) {
                      if (preg_match($san_value['regex_ok'], $evaluate_value[$i])) {
                          $temp .= $evaluate_value[$i] . $san_value['delimiter'];
                      }
                  }
                  unset($evaluate_value);
                  $evaluate_value = rtrim($temp, $san_value['delimiter']);
                  unset($temp);
              }
              if ($evaluate_value != $CONFIG[$san_key]) {
                  $CONFIG[$san_key] = $evaluate_value;
                  cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='{$CONFIG[$san_key]}' WHERE name='$san_key'");
                  $config_changes_counter++;
              }
          } // type is array --- end
      } // only loop if config value is set --- end
  }
}

// Set the option output stuff 
if ($CONFIG['plugin_lightbox_nfn_notimer'] == '1') {
	$option_output['plugin_lightbox_nfn_notimer'] = 'checked="checked"';
} else { 
	$option_output['plugin_lightbox_nfn_notimer'] = '';
}

if ($CONFIG['plugin_lightbox_nfn_image_exit'] == '0') {
	$option_output['plugin_lightbox_nfn_image_exit_0'] = 'checked="checked"';
	$option_output['plugin_lightbox_nfn_image_exit_1'] = '';
} elseif ($CONFIG['plugin_lightbox_nfn_image_exit'] == '1') {
	$option_output['plugin_lightbox_nfn_image_exit_0'] = '';
	$option_output['plugin_lightbox_nfn_image_exit_1'] = 'checked="checked"';
}

if ($CONFIG['plugin_lightbox_nfn_caption'] == '1') {
	$option_output['plugin_lightbox_nfn_caption'] = 'checked="checked"';
} else { 
	$option_output['plugin_lightbox_nfn_caption'] = '';
}

if ($CONFIG['plugin_lightbox_nfn_buttonset'] == '0') {
	$option_output['plugin_lightbox_nfn_buttonset_0'] = 'checked="checked"';
	$option_output['plugin_lightbox_nfn_buttonset_1'] = '';
} elseif ($CONFIG['plugin_lightbox_nfn_buttonset'] == '1') {
	$option_output['plugin_lightbox_nfn_buttonset_0'] = '';
	$option_output['plugin_lightbox_nfn_buttonset_1'] = 'checked="checked"';
}

if ($CONFIG['plugin_lightbox_nfn_nocorner'] == '1') {
	$option_output['plugin_lightbox_nfn_nocorner'] = 'checked="checked"';
} else { 
	$option_output['plugin_lightbox_nfn_nocorner'] = '';
}
if ($CONFIG['plugin_lightbox_nfn_fade_swap'] == '1') {
	$option_output['plugin_lightbox_nfn_fade_swap'] = 'checked="checked"';
} else { 
	$option_output['plugin_lightbox_nfn_fade_swap'] = '';
}
if ($CONFIG['plugin_lightbox_nfn_resize'] == '1') {
	$option_output['plugin_lightbox_nfn_resize'] = 'checked="checked"';
} else { 
	$option_output['plugin_lightbox_nfn_resize'] = '';
}
if ($CONFIG['plugin_lightbox_nfn_download'] == '0') {
	$option_output['plugin_lightbox_nfn_download_no'] = 'selected="selected"';
} else { 
	$option_output['plugin_lightbox_nfn_download_no'] = '';
}	
if ($CONFIG['plugin_lightbox_nfn_download'] == '1') {
	$option_output['plugin_lightbox_nfn_download_usr'] = 'selected="selected"';
} else { 
	$option_output['plugin_lightbox_nfn_download_usr'] = '';
}	
if ($CONFIG['plugin_lightbox_nfn_download'] == '2') {
	$option_output['plugin_lightbox_nfn_download_all'] = 'selected="selected"';
} else { 
	$option_output['plugin_lightbox_nfn_download_all'] = '';
}	
		
	   		$chk_radlast = 'selected="selected"';

$superCage = Inspekt::makeSuperCage();
echo <<< EOT
<form name="cpgform" id="cpgform" action="{$_SERVER['REQUEST_URI']}" method="post">
EOT;
starttable('100%', $lightbox_notes_for_net_icon_array['configure'] . sprintf($lang_plugin_lightbox_notes_for_net['configure_plugin_x'], $lang_plugin_lightbox_notes_for_net['display_name']), 2, 'cpg_zebra');
if ($superCage->post->keyExists('submit')) {
    echo <<< EOT
	<tr>
		<td class="tableh2" colspan="2">
EOT;
    if ($config_changes_counter > 0) {
        msg_box('', $lang_plugin_lightbox_notes_for_net['settings_saved'], '', '', 'success');
    } else {
        msg_box('', $lang_plugin_lightbox_notes_for_net['no_changes'], '', '', 'validation');
    }
echo <<< EOT
		</td>
	</tr>
EOT;
}

echo <<< EOT
        <tr>
            <td> 
                {$lang_plugin_lightbox_notes_for_net['resize']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_resize" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['resize']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="checkbox" name="plugin_lightbox_nfn_resize" id="plugin_lightbox_nfn_resize" class="checkbox" value="1" {$option_output['plugin_lightbox_nfn_resize']} />
                <label for="plugin_lightbox_nfn_resize" class="clickable_option">{$lang_common['yes']}</label>
            </td>
        </tr>
        <tr>
            <td> 
                {$lang_plugin_lightbox_notes_for_net['show_download']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_show_download" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['show_download']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                
  			<select name="plugin_lightbox_nfn_download" id="plugin_lightbox_nfn_download" input type="text" class="listbox" >
                 <option value="0" {$option_output['plugin_lightbox_nfn_download_no']}>{$lang_plugin_lightbox_notes_for_net['show_download_no']}</option>
                 <option value="1" {$option_output['plugin_lightbox_nfn_download_usr']}>{$lang_plugin_lightbox_notes_for_net['show_download_logged']}</option>
                 <option value="2" {$option_output['plugin_lightbox_nfn_download_all']}>{$lang_plugin_lightbox_notes_for_net['show_download_all']}</option>
            </select>
            </td>
        </tr>
        <tr>
            <td> 
                {$lang_plugin_lightbox_notes_for_net['display_slideshow_timer_bar']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_timer_bar" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['slideshow_timer']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="checkbox" name="plugin_lightbox_nfn_notimer" id="plugin_lightbox_nfn_notimer" class="checkbox" value="1" {$option_output['plugin_lightbox_nfn_notimer']} />
                <label for="plugin_lightbox_nfn_notimer" class="clickable_option">{$lang_common['yes']}</label>
            </td>
        </tr>
        <tr>
            <td> 
                 {$lang_plugin_lightbox_notes_for_net['on_exit_goto']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_exit" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['on_exit_goto']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td> 
                <input type="radio" name="plugin_lightbox_nfn_image_exit" id="plugin_lightbox_nfn_image_exit_0" class="radio" value="0" {$option_output['plugin_lightbox_nfn_image_exit_0']} /><label for="plugin_lightbox_nfn_image_exit_0" class="clickable_option">{$lang_plugin_lightbox_notes_for_net['return_to_first']}</label>&nbsp;
			    <input type="radio" name="plugin_lightbox_nfn_image_exit" id="plugin_lightbox_nfn_image_exit_1" class="radio" value="1" {$option_output['plugin_lightbox_nfn_image_exit_1']} /><label for="plugin_lightbox_nfn_image_exit_1" class="clickable_option">{$lang_plugin_lightbox_notes_for_net['return_to_last']}</label>
            </td>
        </tr>
        <tr>
            <td> 
                 {$lang_plugin_lightbox_notes_for_net['image_caption_below_title']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_caption" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['image_caption_below_title']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="checkbox" name="plugin_lightbox_nfn_caption" id="plugin_lightbox_nfn_caption" class="checkbox" value="1" {$option_output['plugin_lightbox_nfn_caption']} />
                <label for="plugin_lightbox_nfn_caption" class="clickable_option">{$lang_common['yes']}</label>
            </td>
        </tr>
        <tr>			
            <td>
                 {$lang_plugin_lightbox_notes_for_net['border_width']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_border" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['border_width']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="text" name="plugin_lightbox_nfn_border" id="plugin_lightbox_nfn_border" class="textinput" size="4" maxlength="2" value="{$CONFIG['plugin_lightbox_nfn_border']}" style="text-align:right;" /> {$lang_plugin_lightbox_notes_for_net['pixels']}
            </td>
        </tr>
        <tr>			
            <td>
                 {$lang_plugin_lightbox_notes_for_net['files_in_album_list']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_alblist" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['files_in_album_list']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="text" name="plugin_lightbox_nfn_maxpics" id="plugin_lightbox_nfn_maxpics" class="textinput" size="4" maxlength="4" value="{$CONFIG['plugin_lightbox_nfn_maxpics']}" style="text-align:right;" /> {$lang_plugin_lightbox_notes_for_net['files_listed']}
            </td>
        </tr>
        <tr>
            <td> 
                 {$lang_plugin_lightbox_notes_for_net['button_set']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_buttonset" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['button_set']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td> 
                <input type="radio" name="plugin_lightbox_nfn_buttonset" id="plugin_lightbox_nfn_buttonset_0" class="radio" value="0" {$option_output['plugin_lightbox_nfn_buttonset_0']} /><label for="plugin_lightbox_nfn_buttonset_0" class="clickable_option">{$lang_plugin_lightbox_notes_for_net['use_theme_buttons']}</label>&nbsp;
			    <input type="radio" name="plugin_lightbox_nfn_buttonset" id="plugin_lightbox_nfn_buttonset_1" class="radio" value="1" {$option_output['plugin_lightbox_nfn_buttonset_1']} /><label for="plugin_lightbox_nfn_buttonset_1" class="clickable_option">{$lang_plugin_lightbox_notes_for_net['use_plugin_buttons']}</label>
            </td>
        </tr>
        <tr>
            <td> 
                 {$lang_plugin_lightbox_notes_for_net['show_corner']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_corner" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['show_corner']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="checkbox" name="plugin_lightbox_nfn_nocorner" id="plugin_lightbox_nfn_nocorner" class="checkbox" value="1" {$option_output['plugin_lightbox_nfn_nocorner']} />
                <label for="plugin_lightbox_nfn_nocorner" class="clickable_option">{$lang_common['yes']}</label>
            </td>
        </tr>	
        <tr>
            <td> 
                 {$lang_plugin_lightbox_notes_for_net['swap_by_fade']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_fade" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['swap_by_fade']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td> 
                <input type="checkbox" name="plugin_lightbox_nfn_fade_swap" id="plugin_lightbox_nfn_fade_swap" class="checkbox" value="1" {$option_output['plugin_lightbox_nfn_fade_swap']} />
                <label for="plugin_lightbox_nfn_fade_swap" class="clickable_option">{$lang_common['yes']}</label>
            </td>
        </tr>	
        <tr>			
            <td>
                 {$lang_plugin_lightbox_notes_for_net['slideshow_timer']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_timer" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['slideshow_timer']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="text" name="plugin_lightbox_nfn_slidetime" id="plugin_lightbox_nfn_slidetime" class="textinput" size="4" maxlength="4" value="{$CONFIG['plugin_lightbox_nfn_slidetime']}" style="text-align:right;" /> {$lang_plugin_lightbox_notes_for_net['milliseconds']}
            </td>
        </tr>
        <tr>			
            <td>
                 {$lang_plugin_lightbox_notes_for_net['image_swap_time']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_swap" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['image_swap_time']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="text" name="plugin_lightbox_nfn_sizespeed" id="plugin_lightbox_nfn_sizespeed" class="textinput" size="4" maxlength="4" value="{$CONFIG['plugin_lightbox_nfn_sizespeed']}" style="text-align:right;" /> {$lang_plugin_lightbox_notes_for_net['milliseconds']}
            </td>
        </tr>		
        <tr>			
            <td>
                 {$lang_plugin_lightbox_notes_for_net['image_fadein']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_fadein" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['image_fadein']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="text" name="plugin_lightbox_nfn_imagefade" id="plugin_lightbox_nfn_imagefade" class="textinput" size="4" maxlength="4" value="{$CONFIG['plugin_lightbox_nfn_imagefade']}" style="text-align:right;" /> {$lang_plugin_lightbox_notes_for_net['milliseconds']}
            </td>
        </tr>
        <tr>			
            <td>
                 {$lang_plugin_lightbox_notes_for_net['container_fadeout']} <a href="plugins/lightbox_notes_for_net/docs/{$documentation_file}.htm#config_fadeout" class="greybox" title="{$lang_plugin_lightbox_notes_for_net['container_fadeout']}"><img src="images/help.gif" width="13" height="11" border="0" alt="" /></a>
            </td>
            <td>
                <input type="text" name="plugin_lightbox_nfn_containerfade" id="plugin_lightbox_nfn_containerfade" class="textinput" size="4" maxlength="4" value="{$CONFIG['plugin_lightbox_nfn_containerfade']}" style="text-align:right;" /> {$lang_plugin_lightbox_notes_for_net['milliseconds']}
            </td>
        </tr>	
        <tr>			
            <td class="tablef">
            </td>
            <td class="tablef">
                <input type="hidden" name="form_token" value="{$form_token}" />
    			<input type="hidden" name="timestamp" value="{$timestamp}" />
    			<button type="submit" class="button" name="submit" value="{$lang_plugin_lightbox_notes_for_net['submit']}">{$lightbox_notes_for_net_icon_array['ok']}{$lang_plugin_lightbox_notes_for_net['submit']}</button> 
            </td>
        </tr>
        </td>		
EOT;

endtable();
echo <<< EOT
</form>
EOT;

pagefooter();

?>