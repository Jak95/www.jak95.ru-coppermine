<?php
/******************************************************
  Coppermine 1.5.x Plugin - SlideShowIt
  *****************************************************
  Copyright (c) 2010 Gene F. Young (www.genefyoung.com)
  *****************************************************
  This program is free software; you can redistribute 
  it and/or modify it under the terms of the GNU General
  Public License as published by the Free Software 
  Foundation; either version 3 of the License, or (at 
  your option) any later version.
  *****************************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/slideshowit/admin.php $
  $Revision: 7119 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-24 21:39:28 +0100 (So, 24 Jan 2010) $
  ****************************************************/

require('./plugins/slideshowit/include/init.inc.php');
require('./plugins/slideshowit/include/load_slideshowitset.php');

global $CONFIG,$lang_plugin_slideshowit;

$slideshowit_superCage = Inspekt::makeSuperCage();

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

if($lang_text_dir=='ltr') {
  $align="left";
  $direction="ltr";
}else {
  $align="right";
  $direction="rtl";
}

if($slideshowit_superCage->post->keyExists('update')) {
  $slideshowit_numberofpics = $slideshowit_superCage->post->getInt('slideshowit_numberofpics');
  $slideshowit_speed 		= $slideshowit_superCage->post->getInt('slideshowit_speed');
  $slideshowit_album 		= $slideshowit_superCage->post->getAlnum('slideshowit_album');
  $slideshowit_albumid 		= $slideshowit_superCage->post->getAlnum('slideshowit_albumid');
  $slideshowit_skipportrait = $slideshowit_superCage->post->getInt('slideshowit_skipportrait');
  $slideshowit_align 		= $slideshowit_superCage->post->getAlpha('slideshowit_align');
  $slideshowit_usemeta 		= $slideshowit_superCage->post->getInt('slideshowit_usemeta');
  $slideshowit_control_dir 	= $slideshowit_superCage->post->getInt('slideshowit_control_dir');
  $slideshowit_control_loc 	= $slideshowit_superCage->post->getInt('slideshowit_control_loc');
  $slideshowit_hover_text 	= $slideshowit_superCage->post->getInt('slideshowit_hover_text');
  $slideshowit_User_Selection 	= $slideshowit_superCage->post->getInt('slideshowit_User_Selection');
  $slideshowit_Direct_Link 	= $slideshowit_superCage->post->getInt('slideshowit_Direct_Link');
  $slideshowit_Show_Title 	= $slideshowit_superCage->post->getInt('slideshowit_Show_Title');
  $slideshowit_Filter_Enable  =$slideshowit_superCage->post->getInt('slideshowit_Filter_Enable');
  $slideshowit_User_List_Loc  =$slideshowit_superCage->post->getInt('slideshowit_User_List_Loc');

  
  // if someone types text into a number input field, set default value
  if($slideshowit_numberofpics != strval(intval($slideshowit_numberofpics))) $slideshowit_numberofpics = 15;
  if($slideshowit_numberofpics < 4 )	$slideshowit_numberofpics = 4;
  else if ($slideshowit_numberofpics > 60 ) $slideshowit_numberofpics = 60;
  
  if($slideshowit_speed != strval(intval($slideshowit_speed))) $slideshowit_speed = 1;
  if ($slideshowit_speed < 1)	$slideshowit_speed = 1;
  else if ($slideshowit_speed > 10) $slideshowit_speed = 10;

  $s="UPDATE `{$CONFIG['TABLE_PREFIX']}mod_slideshowit` SET "
  	. "slideshowit_hover_text=($slideshowit_hover_text),"
  	. "slideshowit_control_dir=($slideshowit_control_dir)," 
  	. "slideshowit_control_loc=($slideshowit_control_loc),"
  	. "slideshowit_usemeta=($slideshowit_usemeta),"
  	. "slideshowit_album=('$slideshowit_album')," 
  	. "slideshowit_albumid=('$slideshowit_albumid')," 
  	. "slideshowit_numberofpics=($slideshowit_numberofpics)," 
  	. "slideshowit_speed=($slideshowit_speed)," 
  	. "slideshowit_skipportrait=($slideshowit_skipportrait)," 
  	. "slideshowit_align=('$slideshowit_align'),"
  	. "slideshowit_User_Selection=('$slideshowit_User_Selection'),"
  	. "slideshowit_Direct_Link=('$slideshowit_Direct_Link'),"
  	. "slideshowit_Show_Title=('$slideshowit_Show_Title'),"
  	. "slideshowit_Filter_Enable=('$slideshowit_Filter_Enable'),"
  	. "slideshowit_User_List_Loc=('$slideshowit_User_List_Loc')";
  	
/**/  
  cpg_db_query($s); 
  pageheader($lang_plugin_slideshowit['display_name']);
//	echo $s;
  msg_box($lang_plugin_slideshowit['display_name'], $lang_plugin_slideshowit['update_success'], $lang_continue, 'index.php');
  pagefooter();
        exit;

}
/**/
pageheader($lang_plugin_slideshowit['display_name']);
?>


<?php
starttable('100%', $lang_plugin_slideshowit['main_title'].' - '.$lang_plugin_slideshowit['version'].'<b style="font-color: red"> by <a href="http://genefyoung.com" >Gene F. Young</b>', 3);
?>

<tr>
  <td class=tableh2 colSpan=3 onClick="show_section('section1')">
  	<span style="cursor: pointer">
  		<img title="Config" height=9 alt="" src="./images/descending.gif" width=9 border=0>
  			<strong><?php echo $lang_plugin_slideshowit['main_title']; ?>
  			</strong>
  	</span><br><br>
  	<span><?php echo $lang_plugin_slideshowit['slideshowit_config_info']; ?>
	</span><br><span>&nbsp;</span>
	</td>
</tr>
<tr>
  <td><form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="slideshowit_settings">
      <table class="maintable" cellSpacing="2" cellPadding="2" width="100%" align="<?php echo $align?>" border=0 id="section1">
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_usemeta']?>&nbsp;&nbsp;</td>
          <td><input name="slideshowit_usemeta" type="radio" value="1" <?php if($slideshowit_set['slideshowit_usemeta']) echo 'checked="checked"';?> id="slideshowit_usemeta"/>
            <?php echo $lang_plugin_slideshowit['yes']?>
            <input name="slideshowit_usemeta" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_usemeta']) echo 'checked="checked"';?> id="slideshowit_usemeta"/>
            <?php echo $lang_plugin_slideshowit['no']?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang_plugin_slideshowit['slideshowit_override_note']?>
          </td>   
        </tr>      
        <tr>
        	<td align="right"><?php echo $lang_plugin_slideshowit['slideshowit_albummeta']?>&nbsp;&nbsp;</td>
        	<td>
        	  <select name="slideshowit_album" id="slideshowit_album">
                 <option value="random" <?php if($slideshowit_set['slideshowit_album'] == "random") echo 'selected="selected"';?>><?php echo $lang_meta_album_names['random']?></option>
                 <option value="lastup" <?php if($slideshowit_set['slideshowit_album'] == "lastup") echo 'selected="selected"';?>><?php echo $lang_meta_album_names['lastup']?></option>
                 <option value="topn" <?php if($slideshowit_set['slideshowit_album'] == "topn") echo 'selected="selected"';?>><?php echo $lang_meta_album_names['topn']?></option>
                 <option value="toprated" <?php if($slideshowit_set['slideshowit_album'] == "toprated") echo 'selected="selected"';?>><?php echo $lang_meta_album_names['toprated']?></option>
              </select>
          </td>
        </tr>
		<tr>
        	<td align="right"><?php echo $lang_plugin_slideshowit['slideshowit_album']?>&nbsp;&nbsp;</td>
		  	<td>
        		<select name="slideshowit_albumid" id="slideshowit_albumid">
          	       <?php create_album_list($slideshowit_set['slideshowit_albumid']); ?>
		  		</select>
		  	</td>
		</tr>
        <tr>
          <td width="50%" align="right">
            <?php echo $lang_plugin_slideshowit['slideshowit_numberofpics']?> (4-60)&nbsp;&nbsp;
          </td>
          <td width="50%">
            <input id="slideshowit_numberofpics" name="slideshowit_numberofpics" type="int" value="<?php echo $slideshowit_set['slideshowit_numberofpics']?>">
          </td>
        </tr>
        <tr>
          <td width="50%" align="right">
            <?php echo $lang_plugin_slideshowit['slideshowit_speed']?>&nbsp;(1-10)&nbsp;&nbsp;
          </td>
          <td width="50%">
            <input id="slideshowit_speed" name="slideshowit_speed" type="int" value="<?php echo $slideshowit_set['slideshowit_speed']?>">
          </td>
        </tr>
        <tr>
        	<td align="right"><?php echo $lang_plugin_slideshowit['align']?>&nbsp;&nbsp;</td>
        	<td>
        	  <select name="slideshowit_align" id="slideshowit_align">
                 <option value="left"   <?php if($slideshowit_set['slideshowit_align'] == 'left') echo 'selected="selected"';?>><?php echo $lang_plugin_slideshowit['left']?></option>
                 <option value="center" <?php if($slideshowit_set['slideshowit_align'] == 'center') echo 'selected="selected"';?>><?php echo $lang_plugin_slideshowit['center']?></option>
                 <option value="right"  <?php if($slideshowit_set['slideshowit_align'] == 'right') echo 'selected="selected"';?>><?php echo $lang_plugin_slideshowit['right']?></option>
              </select>
          </td>
        </tr>        
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_control_dir']?>&nbsp;&nbsp;</td>
          <td><input name="slideshowit_control_dir" type="radio" value="1" <?php if($slideshowit_set['slideshowit_control_dir']) echo 'checked="checked"';?> id="slideshowit_control_dir"/>
            <?php echo $lang_plugin_slideshowit['slideshowit_control_vert']?>
            <input name="slideshowit_control_dir" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_control_dir']) echo 'checked="checked"';?> id="slideshowit_control_dir"/>
            <?php echo $lang_plugin_slideshowit['slideshowit_control_horiz']?>
          </td>   
        </tr>
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_control_loc']?>&nbsp;&nbsp;</td>
          <td><input name="slideshowit_control_loc" type="radio" value="1" <?php if($slideshowit_set['slideshowit_control_loc']) echo 'checked="checked"';?> id="slideshowit_control_loc"/>
            <?php echo $lang_plugin_slideshowit['slideshowit_control_left']?><br>
              <input name="slideshowit_control_loc" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_control_loc']) echo 'checked="checked"';?> id="slideshowit_control_loc"/>
            <?php echo $lang_plugin_slideshowit['slideshowit_control_top']?>
          </td>   
        </tr>
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_skipportrait']?>&nbsp;&nbsp;</td>
          <td><input name="slideshowit_skipportrait" type="radio" value="1" <?php if($slideshowit_set['slideshowit_skipportrait']) echo 'checked="checked"';?> id="slideshowit_skipportrait"/>
            <?php echo $lang_plugin_slideshowit['yes']?>
            <input name="slideshowit_skipportrait" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_skipportrait']) echo 'checked="checked"';?> id="slideshowit_skipportrait"/>
            <?php echo $lang_plugin_slideshowit['no']?>
          </td>   
        </tr>
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_hover_text']?>&nbsp;&nbsp;</td>
          <td><input name="slideshowit_hover_text" type="radio" value="1" <?php if($slideshowit_set['slideshowit_hover_text']) echo 'checked="checked"';?> id="slideshowit_hover_text"/>
            <?php echo $lang_plugin_slideshowit['yes']?>
            <input name="slideshowit_hover_text" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_hover_text']) echo 'checked="checked"';?> id="slideshowit_hover_text"/>
            <?php echo $lang_plugin_slideshowit['no']?>
         </td>    
        </tr>
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_User_Selection']?>&nbsp;&nbsp;</td>
          <td><input name="slideshowit_User_Selection" type="radio" value="1" <?php if($slideshowit_set['slideshowit_User_Selection']) echo 'checked="checked"';?> id="slideshowit_User_Selection"/>
            <?php echo $lang_plugin_slideshowit['yes']?>
              <input name="slideshowit_User_Selection" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_User_Selection']) echo 'checked="checked"';?> id="slideshowit_User_Selection"/>
            <?php echo $lang_plugin_slideshowit['no']?> 
		  </td>
        </tr>
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_User_List_Loc']?>&nbsp;&nbsp;</td>
          <td><input name="slideshowit_User_List_Loc" type="radio" value="1" <?php if($slideshowit_set['slideshowit_User_List_Loc']) echo 'checked="checked"';?> id="slideshowit_User_List_Loc"/>
            <?php echo $lang_plugin_slideshowit['bottom']?>
              <input name="slideshowit_User_List_Loc" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_User_List_Loc']) echo 'checked="checked"';?> id="slideshowit_User_List_Loc"/>
            <?php echo $lang_plugin_slideshowit['top']?>
          </td>   
        </tr>
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_Direct_Link']?>&nbsp;&nbsp;</td>
          <td><input name="slideshowit_Direct_Link" type="radio" value="1" <?php if($slideshowit_set['slideshowit_Direct_Link']) echo 'checked="checked"';?> id="slideshowit_Direct_Link"/>
            <?php echo $lang_plugin_slideshowit['yes']?>
              <input name="slideshowit_Direct_Link" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_Direct_Link']) echo 'checked="checked"';?> id="slideshowit_Direct_Link"/>
            <?php echo $lang_plugin_slideshowit['no']?> 
		 </td>
        </tr>
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_Show_Title']?>&nbsp;&nbsp;</td>
          <td><input name="slideshowit_Show_Title" type="radio" value="1" <?php if($slideshowit_set['slideshowit_Show_Title']) echo 'checked="checked"';?> id="slideshowit_Show_Title"/>
            <?php echo $lang_plugin_slideshowit['yes']?>
              <input name="slideshowit_Show_Title" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_Show_Title']) echo 'checked="checked"';?> id="slideshowit_Show_Title"/>
            <?php echo $lang_plugin_slideshowit['no']?>
          </td>   
        </tr>
        <tr>
          <td align="right">
          	<?php echo $lang_plugin_slideshowit['slideshowit_Filter_Enable']?>&nbsp;&nbsp;</td>
          <td>
          	<input name="slideshowit_Filter_Enable" type="radio" value="1" <?php if($slideshowit_set['slideshowit_Filter_Enable']) echo 'checked="checked"';?> id="slideshowit_Filter_Enable"/>
            	<?php echo $lang_plugin_slideshowit['yes']?>
            <input name="slideshowit_Filter_Enable" type="radio" value="0" <?php if(!$slideshowit_set['slideshowit_Filter_Enable']) echo 'checked="checked"';?> id="slideshowit_Filter_Enable"/>
            	<?php echo $lang_plugin_slideshowit['no']?> 
<!--            	
				<input type="checkbox" name="slideshowit_Filter_Enable" id="slideshowit_Filter_Enable" value="1" class="checkbox" />
					<label for="<?php echo $lang_plugin_slideshowit['slideshowit_Filter_Enable']?>" class="clickable_option"><?php echo $lang_plugin_slideshowit['slideshowit_Filter_Enable']?></label> 
-->        
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
            <input name="update" type="hidden" id="update" value="1" /></td>
        </tr>  
        <tr>
          <td>&nbsp;</td>
          <td align="left"><input name="Submit" type="submit" value="<?php echo $lang_plugin_slideshowit['submit_button']?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
      </table>
    </form></td>
	</tr>    

<?php 
/*<input type="checkbox" name="display_graph_label" id="display_graph_label" value="1" class="checkbox" />
	<label for="display_graph_label" class="clickable_option">Display graph</label> */			

endtable();
pagefooter();
ob_end_flush();

function create_album_list($slideshowit_albumid) {
	global $CONFIG;

	$sql = "select `aid`, `title`, `visibility` from `{$CONFIG['TABLE_PREFIX']}albums`";
//	echo "$sql<br>";
	$res = cpg_db_query($sql);
    while ($row = mysql_fetch_assoc($res)){
    	if ($row["visibility"] == 0) {
			$albumnumid = $row["aid"];
			$albumnum = $row["title"];
			if ($slideshowit_albumid == $albumnumid) {$selstr = " selected=\"selected\""; } else {$selstr = ""; }
			echo "\n" . '<option value="' . $albumnumid .'"' . $selstr . '>' . $albumnum . '</option>'; 
		}
	} 
}

?>