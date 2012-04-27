<?php
/*******************************************************
  Coppermine 1.5.x Plugin - LightBox (NotesFor.net)
  ******************************************************
  Copyright (c) 2009-2010 Joe Carver and Helori Lamberty
  ******************************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/lightbox_notes_for_net/codebase.php $
  $Revision: 7123 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-25 08:38:55 +0100 (Mo, 25 Jan 2010) $
  *****************************************************/
  /*******************************************************
			Version 3.1 - 21 June 2010
  *******************************************************/
  
require_once('include/init.inc.php');
if (!defined('IN_COPPERMINE')) 
{
    die('Not in Coppermine...');
}
	global $USER, $CONFIG, $CPG_PHP_SELF;

// Add plugin_install action
$thisplugin->add_action('plugin_install','lightbox_notes_for_net_install');

// Add plugin_uninstall action
$thisplugin->add_action('plugin_uninstall','lightbox_notes_for_net_uninstall');

// Add a filter for the image pop-up
$thisplugin->add_filter('file_data','lightbox_nfn_theme_html_picture');

// Add a filter for the gallery header on image page only	
	if ($CPG_PHP_SELF == 'displayimage.php') {
$thisplugin->add_filter('page_meta','lightbox_notes_for_net_header');
// Function to modify the gallery header - add .ccs and .js vars
// config to set values for var settings to js array
function lightbox_notes_for_net_header($html) {
	global $CONFIG, $JS, $THEME_DIR, $lang_plugin_lightbox_notes_for_net, $template_header, $USER;
	
		require_once('./plugins/lightbox_notes_for_net/init.inc.php');
		if (in_array('plugins/lightbox_notes_for_net/script.js', $JS['includes']) != TRUE) {
		$JS['includes'][] = 'plugins/lightbox_notes_for_net/script.js';
        }

		
        set_js_var('plugin_lightbox_nfn_border', $CONFIG['plugin_lightbox_nfn_border']);		
  	    set_js_var('plugin_lightbox_nfn_sizespeed', $CONFIG['plugin_lightbox_nfn_sizespeed']);  
		set_js_var('plugin_lightbox_nfn_slidetime', $CONFIG['plugin_lightbox_nfn_slidetime']);
        set_js_var('plugin_lightbox_nfn_imagefade', $CONFIG['plugin_lightbox_nfn_imagefade']);
        set_js_var('plugin_lightbox_nfn_containerfade', $CONFIG['plugin_lightbox_nfn_containerfade']);
				
      	set_js_var('plugin_lightbox_nfn_notimer', $CONFIG['plugin_lightbox_nfn_notimer']);
	    set_js_var('plugin_lightbox_nfn_image_exit', $CONFIG['plugin_lightbox_nfn_image_exit']);
		set_js_var('plugin_lightbox_nfn_nocorner', $CONFIG['plugin_lightbox_nfn_nocorner']);
        set_js_var('plugin_lightbox_nfn_fade_swap', $CONFIG['plugin_lightbox_nfn_fade_swap']);
		set_js_var('plugin_lightbox_nfn_resize', $CONFIG['plugin_lightbox_nfn_resize']);

        if ($CONFIG['plugin_lightbox_nfn_buttonset'] == '1') {
            set_js_var('plugin_lightbox_nfn_image_loading', 'plugins/lightbox_notes_for_net/images/loading.gif');
            set_js_var('plugin_lightbox_nfn_image_btnprev', 'plugins/lightbox_notes_for_net/images/prev.png');
            set_js_var('plugin_lightbox_nfn_image_btnnext', 'plugins/lightbox_notes_for_net/images/next.png');
            set_js_var('plugin_lightbox_nfn_image_btnclose', 'plugins/lightbox_notes_for_net/images/close.png');
            set_js_var('plugin_lightbox_nfn_image_btnbottomprev', 'plugins/lightbox_notes_for_net/images/back_bot.png');
            set_js_var('plugin_lightbox_nfn_image_btnbottomnext', 'plugins/lightbox_notes_for_net/images/start.png');
            set_js_var('plugin_lightbox_nfn_image_btnplay', 'plugins/lightbox_notes_for_net/images/start.png');
            set_js_var('plugin_lightbox_nfn_image_btnstop', 'plugins/lightbox_notes_for_net/images/pause.png');
        } else {
            if (defined('THEME_HAS_NAVBAR_GRAPHICS')) {
                $theme_navbar_folder = $THEME_DIR;
            } else {
                $theme_navbar_folder = '';
            }
            if (defined('THEME_HAS_PROGRESS_GRAPHICS')) {
                $theme_image_folder = $THEME_DIR;
            } else {
                $theme_image_folder = '';
            }
            set_js_var('plugin_lightbox_nfn_image_loading', $theme_image_folder . 'images/loader.gif');
            set_js_var('plugin_lightbox_nfn_image_btnprev', $theme_navbar_folder . 'images/icons/left.png');
            set_js_var('plugin_lightbox_nfn_image_btnnext', $theme_navbar_folder . 'images/icons/right.png');
            set_js_var('plugin_lightbox_nfn_image_btnclose', $theme_navbar_folder . 'images/icons/close.png');
            set_js_var('plugin_lightbox_nfn_image_btnbottomprev', $theme_navbar_folder . 'images/icons/left.png');
            set_js_var('plugin_lightbox_nfn_image_btnbottomnext', $theme_navbar_folder . 'images/icons/right.png');
            set_js_var('plugin_lightbox_nfn_image_btnplay', $theme_navbar_folder . 'images/icons/slideshow.png');
            set_js_var('plugin_lightbox_nfn_image_btnstop', $theme_navbar_folder . 'images/icons/cancel.png');
        }
        set_js_var('lang_lightbox_nfn_image', $lang_plugin_lightbox_notes_for_net['image']);
        set_js_var('lang_lightbox_nfn_of', $lang_plugin_lightbox_notes_for_net['of']);
        set_js_var('lang_lightbox_nfn_previous', $lang_plugin_lightbox_notes_for_net['previous']);
        set_js_var('lang_lightbox_nfn_next', $lang_plugin_lightbox_notes_for_net['next']);
        set_js_var('lang_lightbox_nfn_close', $lang_plugin_lightbox_notes_for_net['close']);
        set_js_var('lang_lightbox_nfn_start_slideshow', $lang_plugin_lightbox_notes_for_net['start_slideshow']);
        set_js_var('lang_lightbox_nfn_pause_slideshow', $lang_plugin_lightbox_notes_for_net['pause_slideshow']);
        set_js_var('lang_lightbox_nfn_downloadtext', $lang_plugin_lightbox_notes_for_net['download_text']);
        set_js_var('lang_lightbox_nfn_downloadtitle', $lang_plugin_lightbox_notes_for_net['download_title']);
         

		$border = $CONFIG['plugin_lightbox_nfn_border']; 
		$lightbox_meta = <<< EOT
<link rel="stylesheet" href="plugins/lightbox_notes_for_net/style.css" type="text/css" media="screen" /> 
<style type="text/css"> #lightbox-container-image {height: 100%; padding: {$border}px;} </style>
EOT;
    
	return $lightbox_meta . $html;
    }	
	}
// End head 
	
// Image pop-up substitute with LightBox 
function lightbox_nfn_theme_html_picture($html) {
	global  $USER, $FORBIDDEN_SET, $slideshow_pic_html, $mime_content, $CURRENT_PIC_DATA, $CONFIG, $pic_html;
	if ($CONFIG['allow_unlogged_access'] == 3 || (USER_ID && $CONFIG['allow_unlogged_access'] <= 2)) {
	$mime_content = cpg_get_type($html['filename']);
	if ($mime_content['content']=='image') {
        if (preg_match('/^youtube_(.*)\.jpg$/', $CURRENT_PIC_DATA['filename'], $ytmatches)){
    		$vid = $ytmatches[1];
      		$slideshow_pic_html = '<object width="560" height="350"><param name="movie" value="http://www.youtube.com/v/'. $vid . '"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/'. $vid . '" type="application/x-shockwave-flash" wmode="transparent" width="560" height="350"></embed></object><br />';
                $html['html'] = $slideshow_pic_html;
    	} elseif (isset($image_size['reduced'])) {
			$slideshow_pic_html = lightbox_list($html);
			$html['html'] = $slideshow_pic_html;
        } else {
		$slideshow_pic_html = lightbox_list($html);
		$html['html'] = $slideshow_pic_html;
		}	
    }
	return $html;	
    } else {	
	    if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
        $html['html'] = $CURRENT_PIC_DATA['html'];
	    return $html;		
        }
    }
    }
// End LightBox substitution

//Create slideshow piclist, add script to page
function lightbox_list($picId) {
    global $lang_display_image_php, $CONFIG, $thisplugin, $LINEBREAK;
	
	// Set max size/count of picture list plugin_lightbox_nfn_maxpics
	$lb_max  = $CONFIG['plugin_lightbox_nfn_maxpics'];
	if ($lb_max <= 1) {
		$max = -1;
	} else {
		$max = $lb_max;
	}
	$picList = '';
	
// Script to displayimage page with a few variables 
		$slide_time = $CONFIG['plugin_lightbox_nfn_slidetime'];      
		$resize = $CONFIG['plugin_lightbox_nfn_sizespeed'];
		$imfade = $CONFIG['plugin_lightbox_nfn_imagefade']; 
		$fadeinout = $CONFIG['plugin_lightbox_nfn_containerfade'];
		$swap_style = $CONFIG['plugin_lightbox_nfn_fade_swap'];
		$border = $CONFIG['plugin_lightbox_nfn_border']; 
  
  		$show_download = $CONFIG['plugin_lightbox_nfn_download'];
		if ((USER_ID && $show_download == 1) || ($show_download == 2)){
		$download_show = 1;
		} else  {
		$download_show = 0;	
		}
    
	$picList = <<< EOT
$LINEBREAK
<script type="text/javascript"><!--
jQuery(function() {var settings = {showDownload: $download_show, slideShowTimer: $slide_time, containerResizeSpeed: $resize, imageFade: $imfade, inFade: $fadeinout, swapFade: $swap_style}, settings;
$('a.lightbox').lightBox(settings); });//-->	
</script>
$LINEBREAK
EOT;

	$i = 0;
	$pid = $picId['pid'];
		
	$superCage = Inspekt::makeSuperCage();
	$lb_alb=$superCage->get->getRaw('album');
	$lb_ran=$superCage->get->getRaw('random');

	
	$aid = (empty($lb_alb) || $lb_ran || 
	$superCage->get->getRaw('lastup')) ? $picId['aid'] : $lb_alb;
	

	$pic_data = get_pic_data($aid, $pic_count, $album_name, -1, -1, false);
	$imax = 0;			//counter
	$max = $max/2;
	foreach ($pic_data as $picture){
		if ($picture['pid'] == $pid) {
		//the number of the picture in  order
    		$picnumber = $imax;
		}
    	$imax++;
	}	

	//Check beginning and ending of album
	if(! ($max == ((-1)/2))){
		if ($imax > $max){
			if ($picnumber < $max || $picnumber == 0){
				$down = 0;
				$up = 0 + ($max*2);
			}elseif (($picnumber + $max) > $imax){
				$down = $imax - ($max*2);
				$up = $imax;
			}else{
				$down = $picnumber - $max;
				$up = $picnumber + $max;
			}
		}else{
			$down = 0;
			$up = $imax;
		}
	}else{
			$down = 0;
			$up = $imax;
	}
	$pic_already_shown = false; //fix to remove duplicate entries
	foreach ($pic_data as $picture) {
		if ($i >= $down && $i <= $up){
			if($CONFIG['thumb_use']=='ht' && $picture['pheight'] > $CONFIG['picture_width'] ){
			  $condition = true;
			}elseif($CONFIG['thumb_use']=='wd' && $picture['pwidth'] > $CONFIG['picture_width']){
			  $condition = true;
			}elseif($CONFIG['thumb_use']=='any' && max($picture['pwidth'], $picture['pheight']) > $CONFIG['picture_width']){
			  $condition = true;
			}else{
			$condition = false;
			}
			$picture_page = "./displayimage.php?album=".$picture['aid']."&pos=-".$picture['pid'];
			if (is_image($picture['filename'])) {
			$superCage = Inspekt::makeSuperCage();
				if ($CONFIG['make_intermediate'] && $condition ) {
					$picture_url = get_pic_url($picture, 'normal');
				} else {
					$picture_url = get_pic_url($picture, 'fullsize');
				}
				$picture_url_fullsize = get_pic_url($picture, 'fullsize');
				// add config here
				$pic_title = ($picture['title'] ? $picture['title'] : strtr(preg_replace("/(.+)\..*?\Z/", "\\1", htmlspecialchars($picture['filename'])), "_", " "));
				
				$picture_page .= '#top_display_media';
				
				// 	variable set caption plugin_lightbox_nfn_caption	
				$pic_caption = '';
				$show_caption = $CONFIG['plugin_lightbox_nfn_caption'];
				if ($show_caption == 1) {
				$pic_caption = ($picture['caption'] ? $picture['caption'] : strtr(preg_replace("/(.+)\..*?\Z/", "\\1", htmlspecialchars($picture['caption'])), "_", " "));
				}
				
				if ($picture['pid'] == $pid && !$pic_already_shown ) {
					$picList .= "<a href=\"$picture_url_fullsize\" picpage=\"$picture_page\" class=\"lightbox\" pid=\"$picture[pid]\" title=\"$pic_title\" caption=\"$pic_caption\">";
					$picList .= "<img src=\"$picture_url\" class=\"image\" border=\"0\" alt=\"$lang_display_image_php[view_fs]\" /><br />";
					$picList .= "</a>\n";
					$pic_already_shown = true; //fix to remove duplicate entries
				}else{
					$picList .= "<a href=\"$picture_url_fullsize\" picpage=\"$picture_page\" class=\"lightbox\" pid=\"$picture[pid]\" title=\"$pic_title\" caption=\"$pic_caption\" rel=\"nofollow\"></a>\n";
			    }
			}
		}
	$i++;
	}
	return $picList;
}
//End of piclist

// Install the plugin
function lightbox_notes_for_net_install() {
	global $CONFIG, $thisplugin;
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_border', '8')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_sizespeed', '820')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_notimer', '0')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_image_exit', '1')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_caption', '1')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_maxpics', '1')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_buttonset', '1')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_nocorner', '0')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_fade_swap', '0')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_slidetime', '6800')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_imagefade', '980')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_containerfade', '980')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_resize', '1')");
	cpg_db_query("INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (`name`, `value`) VALUES ('plugin_lightbox_nfn_download', '0')");
	return true;		
}

// Uninstall the plugin 
function lightbox_notes_for_net_uninstall() {
	global $CONFIG, $thisplugin;
	//remove the records from config
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_border'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_sizespeed'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_notimer'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_image_exit'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_caption'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_maxpics'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_buttonset'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_nocorner'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_fade_swap'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_slidetime'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_imagefade'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_containerfade'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_resize'");
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_lightbox_nfn_download'");
	return true;		
}

?>