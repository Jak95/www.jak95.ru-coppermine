<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2012 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.20
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/themes/Jak95/theme.php $
  $Revision: 8359 $
  ********************************************
  This theme has had redundant CORE items removed
**********************************************/

define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_HAS_NAVBAR_GRAPHICS', 1);
define('THEME_HAS_NO_SUB_MENU_BUTTONS', 1);
define('THEME_HAS_PROGRESS_GRAPHICS', 1);

// HTML template for template sys_menu spacer
$template_sys_menu_spacer = '|';

// HTML template for template sub_menu
if ($CONFIG['browse_by_date'] != 0) {
    $browsebydatebutton = <<< EOT
                                        <td><img src="themes/Jak95/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                                <a href="{BROWSEBYDATE_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{BROWSEBYDATE_LNK}" rel="nofollow" class="greybox">{BROWSEBYDATE_LNK}</a>
                                        </td>
EOT;
} else {
    $browsebydatebutton = '';
}
$template_sub_menu = <<< EOT
                        <table cellpadding="0" cellspacing="0" border="0" class="top_menu_bttn" style="margin-left:2%">
                                <tr>
                                        <td><img src="themes/Jak95/images/top_menu_left.gif" border="0" alt="" /><br /></td>
                                        <!-- BEGIN custom_link -->
                                                                                <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                                <a href="{CUSTOM_LNK_TGT}" title="{CUSTOM_LNK_TITLE}">{CUSTOM_LNK_LNK}</a>
                                        </td>
                                        <td><img src="themes/Jak95/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <!-- END custom_link -->
                                        <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                                <a href="index.php" onmouseover="MM_showHideLayers('Menu1','','show')"><img src="themes/Jak95/images/home.gif" border="0" alt="" /><br /></a>
                                        </td>
                                        <td><img src="themes/Jak95/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img src="themes/Jak95/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                                <a href="{LASTUP_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{LASTUP_LNK}" rel="nofollow">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img src="themes/Jak95/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                                <a href="{LASTCOM_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{LASTCOM_LNK}" rel="nofollow">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img src="themes/Jak95/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                                <a href="{TOPN_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{TOPN_LNK}" rel="nofollow">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/Jak95/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                                <a href="{TOPRATED_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{TOPRATED_LNK}" rel="nofollow">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/Jak95/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                        <a href="{FAV_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{FAV_LNK}" rel="nofollow">{FAV_LNK}</a>
                                        </td>
                                        $browsebydatebutton
                                        <td><img src="themes/Jak95/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                         <td style="background-image:url(themes/Jak95/images/top_menu_button.gif);">
                                                <a href="{SEARCH_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                        <td><img src="themes/Jak95/images/top_menu_right.gif" border="0" alt="" /><br /></td>

                                </tr>
                        </table>
EOT;

// Function for the JavaScript inside the <head>-section
function theme_javascript_head()
{
    global $CONFIG, $JS, $LINEBREAK;
    $return = '';
    // Check if we have any variables being set using set_js_vars function
    $JS['vars']['not_default_theme'] = true;
    if (isset($JS['vars']) && count($JS['vars'])) {
        // Convert the $JS['vars'] array to json object string
        $json_vars = json_encode($JS['vars']);
        // Output the json object
        $return = <<< EOT
<script type="text/javascript">
/* <![CDATA[ */
    var js_vars = $json_vars;
/* ]]> */
</script>

EOT;
    }

    // Check if we have any js includes
    if (isset($JS['includes']) && count($JS['includes'])) {
    	// Bring the jquery core library to the very top of the list 
    	if (in_array('js/jquery-1.3.2.js', $JS['includes']) == TRUE) {
    		$key = array_search('js/jquery-1.3.2.js', $JS['includes']);
    		unset($JS['includes'][$key]);
    		array_unshift($JS['includes'], 'js/jquery-1.3.2.js');
    	}
        $JS['includes'] = CPGPluginAPI::filter('javascript_includes',$JS['includes']);
        // Include all the file which were set using js_include() function
        foreach ($JS['includes'] as $js_file) {
            $return .= '<script type="text/javascript" src="' . $js_file . '"></script>' . $LINEBREAK;
        }
    }

    $return .= <<< EOT

<script language="JavaScript" type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
</script>
EOT;
    return $return;
}

// Function to start a 'standard' table
function starttable($width = '-1', $title = '', $title_colspan = '1', $zebra_class = '', $return = false)
{
    global $CONFIG;

    if ($width == '-1') $width = $CONFIG['picture_table_width'];
    if ($width == '100%') $width = $CONFIG['main_table_width'];
    $text = <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0" class="maintable $zebra_class">

EOT;
    if ($title) {
        $title2 = <<<EOT
<!-- Start standard table title -->
<table align="center" width="$width" cellspacing="0" cellpadding="0" class="maintablea">
        <tr>
                <td>
                        <table width="100%" cellspacing="0" cellpadding="0" class="tableh1a">
                                <tr>
                                        <td class="tableh1a "><img src="themes/Jak95/images/tableh1a_bg_left.gif" alt="" /></td>
                                        <td class="tableh1a" style="font-weight:normal" width="100%">$title</td>
                                        <td class="tableh1a"><img src="themes/Jak95/images/tableh1a_bg_right.gif" alt="" /></td>
                                </tr>
                        </table>
                </td>
        </tr>
</table>
EOT;
        $text = $title2.$text;
    }
    if (!$return) {
        echo $text;
    } else {
        return $text;
    }
}

function theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip)
{
    global $CONFIG, $LINEBREAK;
    
    $superCage = Inspekt::makeSuperCage();

    $spacer = <<<EOT
        <tr>
                <td><img src="themes/Jak95/images/hline_left.gif" alt="" /><br /></td>
                <td width="100%" style="background-image:url(themes/Jak95/images/hline_bg.gif);" align="center"><img src="themes/Jak95/images/hline_blue_ball.gif" alt="" /><br /></td>
                <td><img src="themes/Jak95/images/hline_right.gif" alt="" /><br /></td>
        </tr>

EOT;

    echo '        <img src="images/spacer.gif" width="1" height="25" alt="" /><br />' . $LINEBREAK;
    echo '        <a name="top_display_media"></a>';
    starttable();
    echo $nav_menu;
    endtable();

    starttable();
    echo $picture;
    endtable();
    if ($CONFIG['display_film_strip'] == 1) {
        echo $film_strip;
    }
    if ($votes) {
        starttable();
        echo $spacer;
        endtable();

        echo $votes;

    }

    $picinfo = $superCage->cookie->keyExists('picinfo') ? $superCage->cookie->getAlpha('picinfo') : ($CONFIG['display_pic_info'] ? 'block' : 'none');
    echo '<div id="picinfo" style="display: ' . $picinfo . ';">' . $LINEBREAK;
    starttable();
    echo $spacer;
    endtable();
    starttable();
    echo $pic_info;
    endtable();
    echo '</div>' . $LINEBREAK;

    if ($comments) {
        starttable();
        echo $spacer;
        endtable();
        echo '<div id="comments">' . $LINEBREAK;
        echo $comments;
        echo '</div>' . $LINEBREAK;
    }
}

function theme_keywords_head()
{
    global $lang_list_categories, $lang_common;
    global $CONFIG, $CURRENT_ALBUM_DATA;

    $category_array = array();
	$cat = $CURRENT_ALBUM_DATA['category'];

    // first we build the category path: names and id
    if ($cat != 0) { //Categories other than 0 need to be selected

        if ($cat >= FIRST_USER_CAT) {

            $result = cpg_db_query("SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = " . USER_GAL_CAT);

            $row = mysql_fetch_assoc($result);

            $category_array[] = array(USER_GAL_CAT, $row['name']);

            $user_name = get_username($cat - FIRST_USER_CAT);

            if (!$user_name) {
                $user_name = $lang_common['username_if_blank'];
            }

            $category_array[] = array($cat, $user_name);

            $row['parent'] = 1;

        } else {

            $result = cpg_db_query("SELECT p.cid, p.name FROM {$CONFIG['TABLE_CATEGORIES']} AS c,
                {$CONFIG['TABLE_CATEGORIES']} AS p
                WHERE c.lft BETWEEN p.lft AND p.rgt
                AND c.cid = $cat
                ORDER BY p.lft");

            while ( ($row = mysql_fetch_assoc($result)) ) {
                $category_array[] = array($row['cid'], $row['name']);
            }

            mysql_free_result($result);
        }
    }

    $breadcrumb_links = array();
    $breadcrumb_texts = array();

    $breadcrumb_links[0] = '<a href="index.php">'.$lang_list_categories['home'].'</a>';
    $breadcrumb_texts[0] = $lang_list_categories['home'];

    $cat_order = 1;

    foreach ($category_array as $category) {

        $breadcrumb_links[$cat_order] = "<a href=\"index.php?cat={$category[0]}\">{$category[1]}</a>";
        $breadcrumb_texts[$cat_order] = $category[1];

        $cat_order += 1;
    }

    if (isset($CURRENT_ALBUM_DATA['aid'])) {
        $breadcrumb_links[$cat_order] = "<a href=\"thumbnails.php?album=".$CURRENT_ALBUM_DATA['aid']."\">".$CURRENT_ALBUM_DATA['title']."</a>";
        $breadcrumb_texts[$cat_order] = $CURRENT_ALBUM_DATA['title'];
    }

    return get_metakeywords($breadcrumb_links, $breadcrumb_texts);
}

global $I_AM;
$I_AM = 'Щербинин Евгений Витольдович';
	
function get_metakeywords($breadcrumb_links, $breadcrumb_texts)
{
	global $I_AM;
	
	$i = 0;
	$linebreak = "\r\n";
	
	$i = 0;
	$meta_content = $I_AM . ', Фотографии';
	
    foreach ($breadcrumb_texts as $breadcrumb_text_elt) {
		if ($i > 0) {// AND $i < count($breadcrumb_texts) - 1) {
			//$meta_content = $meta_content . $linebreak . '<meta content="' . $breadcrumb_text_elt . '" name="keywords" />';
			$meta_content = $meta_content . ', ' . str_replace(',', ';', $breadcrumb_text_elt);
		}
		$i++;
    }
	
	$meta_content = $linebreak . '<meta content="' . $meta_content . '" name="keywords" />';
	
	global $CURRENT_ALBUM_DATA;
	CPGPluginAPI::action('theme_thumbnails_wrapper_start', null);
    $description = $CURRENT_ALBUM_DATA['description'];
	if (isset($description))
	{
		$meta_content = $meta_content . $linebreak. '<meta content="' . $description . '" name="description" />'. $linebreak;
	} else {
		$meta_content = $meta_content . $linebreak. '<meta content="Фотосайт о путешествиях и о жизни. Автор Щербинин Евгений Витольдович." name="description" />'. $linebreak;
	}
	
	$return = <<< EOT
$meta_content
EOT;
    return $return;
}

function pageheader($section, $meta = '')
{
	global $I_AM;
	
    global $CONFIG, $THEME_DIR;
    global $template_header, $lang_charset, $lang_text_dir;

    $custom_header = cpg_get_custom_include($CONFIG['custom_header_path']);

    $charset = ($CONFIG['charset'] == 'language file') ? $lang_charset : $CONFIG['charset'];
	
	$title = theme_page_title($section);
	if ($title == 'Main') {
		$title = $I_AM . ' it`s me!';
	}
	
	if ($title == 'Главная') {
		$title = $I_AM . ' - это я!';
	}

    header('P3P: CP="CAO DSP COR CURa ADMa DEVa OUR IND PHY ONL UNI COM NAV INT DEM PRE"');
    header("Content-Type: text/html; charset=$charset");
    user_save_profile();
	
	$meta_content = theme_keywords_head();
	$meta = $meta . $meta_content;

    $template_vars = array(
        '{LANG_DIR}' => $lang_text_dir,
        '{TITLE}' => $title,
        '{CHARSET}' => $charset,
        '{META}' => $meta,
        '{GAL_NAME}' => $CONFIG['gallery_name'],
        '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
        '{SYS_MENU}' => theme_main_menu('sys_menu'),
        '{SUB_MENU}' => theme_main_menu('sub_menu'),
        '{ADMIN_MENU}' => theme_admin_mode_menu(),
        '{CUSTOM_HEADER}' => $custom_header,
        '{JAVASCRIPT}' => theme_javascript_head(),
        '{MESSAGE_BLOCK}' => theme_display_message_block(),
    );
    
    $template_vars = CPGPluginAPI::filter('theme_pageheader_params', $template_vars);
    echo template_eval($template_header, $template_vars);

    // Show various admin messages
    adminmessages();
}

function theme_credits() {
    $return = <<< EOT

<div class="footer" align="left" style="padding:10px;display:block;visibility:visible; font-family: Verdana,Arial,sans-serif; font-size: 0.5em">Powered by <a href="http://coppermine-gallery.net/" title="Coppermine Photo Gallery" rel="external">Coppermine Photo Gallery</a></div>
EOT;
    return $return;
}


?>