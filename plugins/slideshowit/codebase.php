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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/slideshowit/codebase.php $
  $Revision: 7119 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-24 21:39:28 +0100 (So, 24 Jan 2010) $
  ****************************************************/
  
if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

global $CONFIG,$lang_plugin_slideshowit;
require ('./plugins/slideshowit/include/init.inc.php');
global $slideshowit_set;
require ('./plugins/slideshowit/include/load_slideshowitset.php');

/* only need if supporting drop down slideshowit album selection */
$slideshowit_superCage = Inspekt::makeSuperCage();

if($slideshowit_superCage->post->keyExists('update')){
  $slideshowit_albumid =$slideshowit_superCage->post->getAlnum('slideshowit_albumid');
  
  $s="UPDATE `{$CONFIG['TABLE_PREFIX']}mod_SlideShowIt` SET slideshowit_albumid=('$slideshowit_albumid')";
//  echo $s;	
  cpg_db_query($s); 
}
/**/
// Add plugin_install action
$thisplugin->add_action('plugin_install','slideshowit_install');

// Add page_start action for config button
$thisplugin->add_action('page_start','slideshowit_page_start');

// Add plugin_uninstall action
$thisplugin->add_action('plugin_uninstall','slideshowit_uninstall');

// Add search display action
$thisplugin->add_filter('plugin_block','slideshowit_mainpage');

// Add filter for page head
$thisplugin->add_filter('page_meta','slideshowit_head');

// include some stuff in page header
function slideshowit_head() {        
	global $template_header, $CONFIG;
    
	$slideshowit_headcode = <<<EOS
<!-- Begin Slideshow Headcode -->
<script type="text/javascript" src="plugins/slideshowit/slideshowit.js"></script>
<link rel="stylesheet" href="plugins/slideshowit/slideshowit_style.css" type="text/css" />
<!-- End Slideshow Headcode -->

EOS;

	$template_header = str_replace('{META}','{META}'.$slideshowit_headcode,$template_header);
}

// add config button
function slideshowit_add_config_button($href,$title,$target,$link)
{
  global $template_gallery_admin_menu;
  $new_template = $template_gallery_admin_menu;
  $button = template_extract_block($new_template,'documentation');
  $params = array(
      '{DOCUMENTATION_HREF}' => $href,
      '{DOCUMENTATION_TITLE}' => $title,
      'target="cpg_documentation"' => $target,
      '{DOCUMENTATION_LNK}' => $link,
   );
   $new_button="<!-- BEGIN $link -->".template_eval($button,$params)."<!-- END $link -->\n";
   template_extract_block($template_gallery_admin_menu,'documentation',"<!-- BEGIN documentation -->" . $button . "<!-- END documentation -->\n" . $new_button);
}

function slideshowit_page_start()
{ 
	global $lang_plugin_slideshowit;

	if (GALLERY_ADMIN_MODE) {
    	slideshowit_add_config_button('index.php?file=slideshowit/admin',$lang_plugin_slideshowit['slideshowit_manager'],'',$lang_plugin_slideshowit['slideshowit_manager']);
    } 
}
//if (!GALLERY_ADMIN_MODE) die('Access denied');

function slideshowit_mainpage($matches)
{ 
        global $CONFIG,$lang_plugin_slideshowit,$FORBIDDEN_SET,$slideshowit_set,$lang_meta_album_names,$META_ALBUM_SET;
        if( strtolower( $matches[1]) != 'slideshowit') {
//        if($matches[1] != 'slideshowit' || GALLERY_ADMIN_MODE) {
          return $matches;
        }
        $slideshowit_speed			=$slideshowit_set['slideshowit_speed'];
        $slideshowit_usemeta		=$slideshowit_set['slideshowit_usemeta'];
        $slideshowit_align			=$slideshowit_set['slideshowit_align'];
        $slideshowit_album			=$slideshowit_set['slideshowit_album'];
        $slideshowit_albumid		=$slideshowit_set['slideshowit_albumid'];
  		$slideshowit_limit			=$slideshowit_set['slideshowit_numberofpics']; // maximum pics to show
		$slideshowit_skipportrait 	=$slideshowit_set['slideshowit_skipportrait'];
		$slideshowit_control_dir 	=$slideshowit_set['slideshowit_control_dir'];
		$slideshowit_control_loc 	=$slideshowit_set['slideshowit_control_loc'];
		$slideshowit_hover_text 	=$slideshowit_set['slideshowit_hover_text'];
		$slideshowit_User_Selection =$slideshowit_set['slideshowit_User_Selection'];
		$slideshowit_Direct_Link 	=$slideshowit_set['slideshowit_Direct_Link'];
		$slideshowit_Show_Title 	=$slideshowit_set['slideshowit_Show_Title'];
		$slideshowit_Filter_Enable  =$slideshowit_set['slideshowit_Filter_Enable'];
		$slideshowit_User_List_Loc  =$slideshowit_set['slideshowit_User_List_Loc'];
		            
echo "<!-- Start slideshowit PlugIn Table-->\n";
//starttable("100%", $lang_meta_album_names[$slideshowit_set['slideshowit_album']]);
starttable("100%");
?>
<tr>
 <td>
  <div id="slideshowit_area">
<?php

  $slideshowit_FORBIDDEN_SET = "";
  if ($FORBIDDEN_SET != "") $slideshowit_FORBIDDEN_SET = "AND $FORBIDDEN_SET";
  
  if ($slideshowit_usemeta == 1) { //Use meta albums	
	  if ($slideshowit_set['slideshowit_album'] == "toprated") {		// request string for meta album toprated
	    $slideshowit_query = "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE filename like '%.jpg' AND filename not like 'youtube_%' AND approved = 'YES' $slideshowit_FORBIDDEN_SET AND votes >= '{$CONFIG['min_votes_for_rating']}' $META_ALBUM_SET ORDER BY pic_rating DESC, votes DESC, pid DESC LIMIT $slideshowit_limit";
	  } else if ($slideshowit_set['slideshowit_album'] == "topn") {  // request string for meta album most viewed
	    $slideshowit_query = "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE filename like '%.jpg' AND filename not like 'youtube_%' AND approved = 'YES' $slideshowit_FORBIDDEN_SET AND hits > 0 $META_ALBUM_SET ORDER BY hits DESC, filename LIMIT $slideshowit_limit";  
	  } else if ($slideshowit_set['slideshowit_album'] == "lastup") { // request string for meta album last uploads
    	$slideshowit_query = "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE filename like '%.jpg' AND filename not like 'youtube_%' AND approved = 'YES' $slideshowit_FORBIDDEN_SET $META_ALBUM_SET ORDER BY pid DESC LIMIT $slideshowit_limit";  
  	  } else {  												// request string for meta album random pics
		$slideshowit_query = "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE filename like '%.jpg' AND filename not like 'youtube_%' AND approved = 'YES' $slideshowit_FORBIDDEN_SET $META_ALBUM_SET ORDER BY RAND() LIMIT $slideshowit_limit";
      }
  } else { 														//use real albums with aid  	  
	$slideshowit_query = "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE filename like '%.jpg' AND filename not like 'youtube_%' AND approved = 'YES' $slideshowit_FORBIDDEN_SET  AND `aid` = $slideshowit_albumid ORDER BY position ASC LIMIT $slideshowit_limit";  
  }

$result = cpg_db_query($slideshowit_query);
$i=0;
//$slideshowit_control_dir = 1;
//$slideshowit_control_loc = 1;
$control =<<<EOT
			<td><b id='slideshowitTitle' class="slideshowit_title">title</b></td>
EOT;

$control_title =<<<EOT
		<tr width="100%" align="center"><td align="
EOT;
$control_title .= $slideshowit_align;

$control_title .=<<<EOT
" colspan="3"><b id='slideshowitTitle' class="slideshowit_caption">title</b></td></tr>
EOT;

$control_caption =<<<EOT
	<tr><td style="text-align: center; line-height: 20px;" ><b id='slideshowitTitle' class="slideshowit_caption">title</b></td></tr>
EOT;

$controls_horiz =<<<EOT
<tr align="center">
	<td>
		<table align="center" style="width:80px; height:16px; line-height:16px;" >
			<tr >
				<td width="15px"><a class="Controls" href="#" onclick="javascript:control('R');"><b title="Play in Reverse direction" 	class="reverse">&nbsp;</b></a></td>
				<td width="15px"><a class="Controls" href="#" onclick="javascript:control('B');"><b title="See previous picture" 			class="back">&nbsp;</b></a></td>
				<td width="15px"><a class="Controls" href="#" onclick="javascript:control('T');"><b id='Xplay' title="Pause/Play">&nbsp;</b></a></td>
				<td width="15px"><a class="Controls" href="#" onclick="javascript:control('N');"><b title="See next picture" 		class="next">&nbsp;</b></a></td>
				<td width="15px"><a class="Controls" href="#" onclick="javascript:control('F');"><b title="Play in Forward direction" 	class="forward">&nbsp;</b></a></td>
			</tr>
		</table>
	</td>
</tr>
EOT;

$controls_vert =<<<EOT
		<td width="50px">
			<table  height="auto">
				<tr><td><a class="Controls" href="#" onclick="javascript:control('R');"><b title="Play in Reverse direction" 	class="reverse">&nbsp;</b></a></td></tr>
				<tr><td><a class="Controls" href="#" onclick="javascript:control('B');"><b title="See previous picture" 			class="back">&nbsp;</b></a></td></tr>
				<tr><td><a class="Controls" href="#" onclick="javascript:control('T');"><b id='Xplay' title="Pause/Play">&nbsp;</b></a></td></tr>
				<tr><td><a class="Controls" href="#" onclick="javascript:control('N');"><b title="See next picture" 		class="next">&nbsp;</b></a></td></tr>
				<tr><td><a class="Controls" href="#" onclick="javascript:control('F');"><b title="Play in Forward direction" 	class="forward">&nbsp;</b></a> </td></tr>
			</table>
		</td>
EOT;
$controls_vert_placeholder =<<<EOT
		<td width="50px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
EOT;


echo "<table width=\"100%\">\n<!-- Begin Title Row -->";
	if ($slideshowit_Show_Title) {
		echo "<tr>\n<td align=\"$slideshowit_align\" colspan=\"3\">";
		echo "<b class=\"slideshowit_title\">" . get_album_title($slideshowit_albumid,$slideshowit_usemeta) . "</b>";
		echo "</td>\n</tr>\n<!-- End Title Row -->";
	}	

	if ($slideshowit_User_Selection && !$slideshowit_usemeta && !$slideshowit_User_List_Loc) {  //create dropdown selection list
		echo '<tr><td align="' . $slideshowit_align . '" colspan="3">'
			. '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" name="slideshowit_settings"><b class="slideshowit_selection">' . $lang_plugin_slideshowit['album'] . "</b>"
			. '<select name="slideshowit_albumid" id="slideshowit_albumid">';
		
		create_drop_list($slideshowit_set['slideshowit_albumid']);
	 
		echo '</select>' ."\n"
			. '<input name="update" type="hidden" id="update" value="1" />' ."\n"
			. '<input name="Submit" type="submit" value="' . $lang_plugin_slideshowit['submit_button'] . '" />'. "\n"
			. '</form>'
			. '</td></tr>';
	}	
	 
	if ($slideshowit_control_dir == 0 && $slideshowit_control_loc == 1) {			//  01 horiz top
		echo $control_caption;									//Caption below the title 								
		echo $controls_horiz;									//controls are a row at top after title								
		echo "<!-- Begin Middle row -->\n<tr><td>";
					
	} else	if ($slideshowit_control_dir == 1 && $slideshowit_control_loc == 1) {  	//11 = vertical left
		echo "<!-- Begin Middle row -->\n<tr>";			
		echo $controls_vert;									//controls are a column
		echo '<td width="100%" style="padding-top: 0px">';		//start picture area
		
	} else if ($slideshowit_control_dir == 1 && $slideshowit_control_loc == 0 ) { 	//10 vertical right
		echo "<!-- Begin Middle row -->\n<tr>";			
		echo $controls_vert_placeholder;									//controls are a column
		echo '<td  width="100%" style="padding-top: 0px">';		//start picture area
		
	} else if ($slideshowit_control_dir == 0 && $slideshowit_control_loc == 0 ) { 	//00 horiz bottom
		echo "<!-- Begin Middle row -->\n<tr>";			
		echo '<td  style="padding-top: 10px">';					//start picture area
	}	
?>		
		<div id="slideshowitPosition" style="height:auto" align="<? echo $slideshowit_align; ?>">
			<a class="slideshowitlink" id="slideshowitA" href="" title="" >
				<img class="slideshowitlink" id="slideshowitPicture" src="" width="" height="" alt="" />
			</a>
		</div>

<? if ($slideshowit_control_dir == 0 && $slideshowit_control_loc == 1) {			//  01 horiz top
		echo "</td></tr>\n<!-- End Middle row -->";
					
	} else	if ($slideshowit_control_dir == 1 && $slideshowit_control_loc == 1) {  	//11 = vertical left
		echo "</td>\n";			
		echo $controls_vert_placeholder;									//controls are a column
		echo "</tr><!-- End Middle row -->\n";		
		echo $control_title;			
		
	} else if ($slideshowit_control_dir == 1 && $slideshowit_control_loc == 0 ) { 	//10 vertical right
		echo "</td>" . $controls_vert;							// end picture area and start new colum for controls
		echo "</tr><!-- End Middle row -->\n";
		echo $control_title;			
		
	} else if ($slideshowit_control_dir == 0 && $slideshowit_control_loc == 0 ) { 	//00 horiz bottom
		echo "</td></tr>\n<!-- End Middle row -->";			
		echo $control_caption;									//Caption below the title 								
		echo $controls_horiz;									//controls are a row at bottom after picture								
	}
	
	if ($slideshowit_User_Selection && !$slideshowit_usemeta && $slideshowit_User_List_Loc) {
		echo '<tr><td align="' . $slideshowit_align . '" colspan="3">'
			. '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" name="slideshowit_settings"><b class="slideshowit_selection">' . $lang_plugin_slideshowit['album'] . "</b>"
			. '<select name="slideshowit_albumid" id="slideshowit_albumid">';
		
		create_drop_list($slideshowit_set['slideshowit_albumid']);
	 
		echo '</select>' . "\n"
			. '<input name="update" type="hidden" id="update" value="1" />' . "\n"
			. '<input name="Submit" type="submit" value="' . $lang_plugin_slideshowit['submit_button'] . '" />' . "\n"
			. '</form>'
			. '</td></tr>';
	}
?>	
	</table>   
   </div> <!-- end slideshowit_area -->
  </td>
 </tr>
<?php
endtable();

echo "\n" . '<script type="text/javascript">';
$count = mysql_num_rows($result);
$first = true;
$i = 0;
echo "var Picture= new Array();\n var Title= new Array();\n var Width= new Array();\n var Height= new Array();\n var Link= new Array();\n var Caption= new Array();";
while($row = mysql_fetch_array($result)){
	if ( $row['pheight'] < $row['pwidth'] || !$slideshowit_skipportrait ) { // check if portrait image and skipping
		if ( $slideshowit_Direct_Link == 1 ) $link = "displayimage.php?pos=-" . $row['pid'];	// link of direct to displayimage  MAKE config option latter GFY
		else $link = "thumbnails.php?album=" . $slideshowit_albumid;							// OR link of pic thumbnails
		$file = "albums/".$row['filepath'].$row['filename'];	// path of pic
		echo "\nPicture[" . $i . "]  = '" . $file ."';";
		echo "\nTitle[" . $i . "]  = " . '"' . $row['title'] . '"' . ";";
		echo "\nWidth[" . $i . "]  = " . '"' . $row['pwidth'] . '"' . ";";
		echo "\nHeight[" . $i . "]  = " . '"' . $row['pheight'] . '"' . ";";
		echo "\nLink[" . $i . "]  = " . '"' . $link . '"' . ";";
		if ($slideshowit_hover_text == 1 )	echo "\nCaption[" . $i . "]  = " . '"' . $row['caption'] . '"' . ";";
		else echo "\nCaption[" . $i . "]  = " . '""' . ";";
		$i = $i + 1;
	}
}
$i--;
echo "var direction = 1;var paused = 0; var pointer = -2; var max = $i; var filter_enabled = " . $slideshowit_Filter_Enable .";\n";
echo 'RunSlideShowWithLinks("slideshowitPicture","slideshowitA","slideshowitTitle","slideshowitPosition"' . "," . $slideshowit_speed . ",$i);\n</script>";//
// free memory
mysql_free_result($result);

echo "<!-- End slideshowit PlugIn Table-->\n";
}

// Install
function slideshowit_install()
{
	global $CONFIG, $thisplugin;
    require 'include/sql_parse.php';

    // create table
    $db_schema = $thisplugin->fullpath . '/schema.sql';
    $sql_query = fread(fopen($db_schema, 'r'), filesize($db_schema));
    $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);
    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');

    foreach($sql_query as $q) { 
      cpg_db_query($q);
    }
    
    // insert default values
    $db_schema = $thisplugin->fullpath . '/basic.sql';
    $sql_query = fread(fopen($db_schema, 'r'), filesize($db_schema));
    $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);
    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');
  
    foreach($sql_query as $q) { 
      cpg_db_query($q);
    }
           return true;
}

// Unnstall and drop settings table
function slideshowit_uninstall()
{
        global $CONFIG;
        cpg_db_query("DROP TABLE IF EXISTS {$CONFIG['TABLE_PREFIX']}mod_slideshowit");
        return true;
}

function create_drop_list($slideshowit_albumid) {
	global $CONFIG;

	$sql = "select `aid`, `title`, `visibility` from `{$CONFIG['TABLE_PREFIX']}albums` ORDER BY pos ASC";
//	echo "$sql<br>";
	$res = cpg_db_query($sql);
    while ($row = mysql_fetch_assoc($res)){
    	if ($row["visibility"] == 0) {
			$albumnumid = $row["aid"];
			$albumnum = $row["title"];
			if ($slideshowit_albumid == $albumnumid) {$selstr = " selected=\"selected\""; } else {$selstr = ""; }
//			$selstr = "";
			echo "\n" . '<option value="' . $albumnumid .'"' . $selstr . '>' . $albumnum . '</option>'; 
		}
	} 
}

function get_album_title($slideshowit_albumid,$usemeta) {
	global $CONFIG;
	global $slideshowit_set;
	
	if ($usemeta == 1) { //Use meta albums	
	  	if ($slideshowit_set['slideshowit_album'] == "toprated") {		// request string for meta album toprated
			$title = "Top Rated";
	  	} else if ($slideshowit_set['slideshowit_album'] == "topn") {  // request string for meta album most viewed
			$title = "Most viewed";
	  	} else if ($slideshowit_set['slideshowit_album'] == "lastup") { // request string for meta album last uploads
			$title = "Last uploaded";
  	  	} else {  												// request string for meta album random pics
			$title = "Random";
      	}
		return $title;
	} else { 														//use real albums with aid  	  
		$sql = "select `aid`, `title`, `description`, `visibility` from `{$CONFIG['TABLE_PREFIX']}albums` WHERE `aid` = $slideshowit_albumid ";
		$res = cpg_db_query($sql);
		while ($row = mysql_fetch_assoc($res)){
			return $row["description"];
//return $sql;
		} 
	}
}

?>