<?php
/**************************************************
  Coppermine 1.5.x Plugin - slideshowit $VERSION$=1.1
  *************************************************
  Copyright (c) 2010 Gene F. Young (genefyoung.com)
  *************************************************
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ***************************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...'); }
//language variables
$lang_plugin_slideshowit = array(
'slideshowit_config_info' => '&nbsp;&nbsp;&nbsp;&nbsp;To enable this plugin, you\'ll have to add "slideshowit" to 
"the content of the main page" in coppermine\'s config in the section "Album list view". 
The setting should look like "slideshowit/breadcrumb/catlist/alblist" or similar. 
For details, review the documentation that comes with coppermine (inside the docs folder) in 
the section "The gallery configuration page" > "Album list view" > "The content of the main page".',
'slideshowit_usemeta' => 'Use meta albums from list on the next line',
'slideshowit_override_note' => 'Note using meta albums overrides<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;viewer slideshow selection option below.',
'slideshowit_albummeta' => 	'Choose a Meta album for use as slideshowit display',
'slideshowit_album' => 		'<strong>Or if not using a meta album</strong> choose an album to display',
'album' => 'Choose a gallery to display',
'slideshowit_numberofpics' => 'Number of pictures in the Slideshow',
'slideshowit_speed'  => 'Slideshow speed in ~seconds',
'align' => 'How should slideshow be aligned',
'slideshowit_control_dir' => 'Select whether Controls are Vertical or Horizontal',
'slideshowit_control_vert' => 'Vertical',
'slideshowit_control_horiz'=> 'Horizontal',
'slideshowit_control_loc' => 'Select where Controls are located',
'slideshowit_control_left' => 'Left &nbsp;&nbsp;if vertical or Top &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if Horizontal',
'slideshowit_control_top'  => 'Right if vertical or Bottom if Horizontal',
'slideshowit_skipportrait' => 'Skip portait mode pictures?',
'slideshowit_hover_text' => 'Enable hover text when mouse over images?',
'slideshowit_User_Selection'=> 'Enable viewer to select slideshow album?',
'slideshowit_User_List_Loc' => 'Location of list allowing viewer to select slideshow album?',
'slideshowit_Direct_Link'=> 'Click goes directly to Image vs. going to Image album?',
'slideshowit_Show_Title'=> 'Show Album Description as Title above slideshow?',
'slideshowit_Filter_Enable' => 'Enable Image transitions for Browsers that support it?',
'slideshowit_manager'  => 'SlideShowIt',
'display_name' => 'SlideshowIt PlugIn Configuration',
'main_title' => 'SlideshowIt PlugIn',
'version' => 'v1.1',
'pluginmanager' => 'Plugin Manager',
'yes' => 'yes',
'no' => 'no',
'submit_button' => 'Submit',
'update_success' => 'Values updated successfully.',
'left' => 'left',
'right' => 'right',
'center' => 'center',
'bottom' => 'bottom',
'top' => 'top',
);
?>