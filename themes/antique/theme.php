<?php
$album_desc = get_album_desc($_GET[album]);

// Function for writing a pageheader
function pageheader($section, $meta = '')
{
    global $CONFIG, $THEME_DIR;
    global $template_header, $lang_charset, $lang_text_dir;

    $custom_header = cpg_get_custom_include($CONFIG['custom_header_path']);

        $charset = ($CONFIG['charset'] == 'language file') ? $lang_charset : $CONFIG['charset'];

    header('P3P: CP="CAO DSP COR CURa ADMa DEVa OUR IND PHY ONL UNI COM NAV INT DEM PRE"');
        header("Content-Type: text/html; charset=$charset");
    user_save_profile();

    $template_vars = array('{LANG_DIR}' => $lang_text_dir,
        '{TITLE}' => $CONFIG['gallery_name'] . ' - ' . strip_tags(bb_decode($section)),
        '{CHARSET}' => $charset,
        '{META}' => $meta,
        '{GAL_NAME}' => $CONFIG['gallery_name'],
        '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
        '{CUSTOM_HEADER}' => $custom_header,
        );

    echo template_eval($template_header, $template_vars);
}

// Function for writing a pagefooter
function pagefooter()
{
    //global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_SERVER_VARS;
    global $USER, $USER_DATA, $ALBUM_SET, $CONFIG, $time_start, $query_stats, $queries;;
    global $template_footer;

    $custom_footer = cpg_get_custom_include($CONFIG['custom_footer_path']);

    if ($CONFIG['debug_mode']==1 || ($CONFIG['debug_mode']==2 && GALLERY_ADMIN_MODE)) {
    cpg_debug_output();
    }

    $template_vars = array(
        '{SYS_MENU}' => theme_main_menu('sys_menu'),
        '{SUB_MENU}' => theme_main_menu('sub_menu'),
        '{ADMIN_MENU}' => theme_admin_mode_menu(),
		'{CUSTOM_FOOTER}' => $custom_footer,
        '{VANITY}' => (defined('THEME_IS_XHTML10_TRANSITIONAL') && $CONFIG['vanity_block']) ? theme_vanity() : '',
    );

    echo template_eval($template_footer, $template_vars);
}

// Creates buttons from a template using an array of tokens
// this function is used in this file it needs to be declared before being called.
function assemble_template_buttons($template_buttons,$buttons) {
    $counter=0;
    $output='';

    foreach ($buttons as $button)  {
      if (isset($button[4])) {
         $spacer=$button[4];
      } else {
      $spacer='';
      }

        $params = array(
            '{SPACER}'     => $spacer,
            '{BLOCK_ID}'   => $button[3],
            '{HREF_TGT}'   => $button[2],
            '{HREF_TITLE}' => $button[1],
            '{HREF_LNK}'   => $button[0]
            );
        $output.=template_eval($template_buttons, $params);
    }
    return $output;
}

// Template used for tabbed display
$template_tab_display = array('left_text' => '<td width="100%%" align="left" valign="middle" class="tableh1_compact" style="white-space: nowrap"><b>{LEFT_TEXT}</b></td>' . "\n",
    'tab_header' => '',
    'tab_trailer' => '',
    'active_tab' => '<td><img src="images/spacer.gif" width="1" height="1" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="tableb_compact"><b>%d</b></td>',
    'inactive_tab' => '<td><img src="images/spacer.gif" width="1" height="1" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="navmenu"><a href="{LINK}"><b>%d</b></a></td>' . "\n",
    'inactive_prev_tab' => '<td><img src="images/spacer.gif" width="1" height="1" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="navmenu"><a href="{LINK}"><b>PREV</b></a></td>' . "\n",
    'inactive_next_tab' => '<td><img src="images/spacer.gif" width="1" height="1" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="navmenu"><a href="{LINK}"><b>NEXT</b></a></td>' . "\n",
);

// HTML template for sys menu
$template_sys_menu = <<<EOT
<h2>System Menu</h2>
<ul>
<!-- BEGIN home -->
                                            <li><a href="{HOME_TGT}" title="{HOME_TITLE}">Gallery Home</a></li>
<!-- END home -->
<!-- BEGIN my_gallery -->
                                            <li><a href="{MY_GAL_TGT}" title="{MY_GAL_TITLE}">{MY_GAL_LNK}</a></li>
<!-- END my_gallery -->
<!-- BEGIN allow_memberlist -->
                                            <li><a href="{MEMBERLIST_TGT}" title="{MEMBERLIST_TITLE}">{MEMBERLIST_LNK}</a></li>
<!-- END allow_memberlist -->
<!-- BEGIN my_profile -->
                                            <li><a href="{MY_PROF_TGT}" title="{MY_PROF_LNK}">{MY_PROF_LNK}</a></li>
<!-- END my_profile -->
<!-- BEGIN faq -->
                                            <li><a href="{FAQ_TGT}" title="{FAQ_TITLE}">{FAQ_LNK}</a></li>
<!-- END faq -->
<!-- BEGIN enter_admin_mode -->
                                            <li><a href="{ADM_MODE_TGT}" title="{ADM_MODE_TITLE}">{ADM_MODE_LNK}</a></li>
<!-- END enter_admin_mode -->
<!-- BEGIN leave_admin_mode -->
                                            <li><a href="{USR_MODE_TGT}" title="{USR_MODE_TITLE}">{USR_MODE_LNK}</a></li>
<!-- END leave_admin_mode -->
<!-- BEGIN upload_pic -->
                                            <li><a href="{UPL_PIC_TGT}" title="{UPL_PIC_TITLE}">{UPL_PIC_LNK}</a></li>
<!-- END upload_pic -->
<!-- BEGIN register -->
                                            <li><a href="{REGISTER_TGT}" title="{REGISTER_TITLE}">{REGISTER_LNK}</a></li>
<!-- END register -->
<!-- BEGIN login -->
                                            <li><a href="{LOGIN_TGT}" title="{LOGIN_LNK}">{LOGIN_LNK}</a></li>
<!-- END login -->
<!-- BEGIN logout -->
                                            <li><a href="{LOGOUT_TGT}" title="{LOGOUT_LNK}">{LOGOUT_LNK}</a></li>
<!-- END logout -->
</ul>
EOT;


// HTML template for sub menu
$template_sub_menu = <<<EOT
<h2>Sub Menu</h2>
<ul>
<!-- BEGIN custom_link -->
                                            <li><a href="{CUSTOM_LNK_TGT}" title="{CUSTOM_LNK_TITLE}">{CUSTOM_LNK_LNK}</a></li>
<!-- END custom_link -->
<!-- BEGIN album_list -->
                                            <li><a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a></li>
<!-- END album_list -->
                                            <li><a href="{LASTUP_TGT}" title="{LASTUP_LNK}">{LASTUP_LNK}</a></li>
                                            <li><a href="{LASTCOM_TGT}" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a></li>
                                            <li><a href="{TOPN_TGT}" title="{TOPN_LNK}">{TOPN_LNK}</a></li>
                                            <li><a href="{TOPRATED_TGT}" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a></li>
                                            <li><a href="{FAV_TGT}" title="{FAV_LNK}">{FAV_LNK}</a></li>
                                            <li><a href="{SEARCH_TGT}" title="{SEARCH_LNK}">{SEARCH_LNK}</a></li>

</ul>
EOT;

// HTML template for gallery admin menu
$template_gallery_admin_menu = <<<EOT
<h2>Admin Menu</h2>
<ul>
<!-- BEGIN admin_approval -->
                                            <li><a href="editpics.php?mode=upload_approval" title="{UPL_APP_TITLE}">{UPL_APP_LNK}</a></li>
<!-- END admin_approval -->
                                            <li><a href="admin.php" title="{ADMIN_TITLE}">{ADMIN_LNK}</a></li>
                                            <li><a href="catmgr.php" title="{CATEGORIES_TITLE}">{CATEGORIES_LNK}</a></li>
                                            <li><a href="albmgr.php{CATL}" title="{ALBUMS_TITLE}">{ALBUMS_LNK}</a></li>
                                            <li><a href="groupmgr.php" title="{GROUPS_TITLE}">{GROUPS_LNK}</a></li>
                                            <li><a href="usermgr.php" title="{USERS_TITLE}">{USERS_LNK}</a></li>
                                            <li><a href="banning.php" title="{BAN_TITLE}">{BAN_LNK}</a></li>
                                            <li><a href="reviewcom.php" title="{COMMENTS_TITLE}">{COMMENTS_LNK}</a></li>
<!-- BEGIN log_ecards -->
                                            <li><a href="db_ecard.php" title="{DB_ECARD_TITLE}">{DB_ECARD_LNK}</a></li>
<!-- END log_ecards -->
                                            <li><a href="picmgr.php" title="{PICTURES_TITLE}">{PICTURES_LNK}</a></li>
                                            <li><a href="searchnew.php" title="{SEARCHNEW_TITLE}">{SEARCHNEW_LNK}</a></li>
                                            <li><a href="util.php" title="{UTIL_TITLE}">{UTIL_LNK}</a></li>
                                            <li><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}">{MY_PROF_LNK}</a></li>
<!-- BEGIN documentation -->
                                            <li><a href="{DOCUMENTATION_HREF}" title="{DOCUMENTATION_TITLE}" target="cpg_documentation">{DOCUMENTATION_LNK}</a></li>
<!-- END documentation -->
</ul>                                       
EOT;

// HTML template for user admin menu
$template_user_admin_menu = <<<EOT

                                            <li><a href="albmgr.php" title="{ALBMGR_TITLE}">{ALBMGR_LNK}</a></li>
                                            <li><a href="modifyalb.php" title="{MODIFYALB_TITLE}">{MODIFYALB_LNK}</a></li>
                                            <li><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}">{MY_PROF_LNK}</a></li>
                                            <li><a href="picmgr.php" title="{PICTURES_TITLE}">{PICTURES_LNK}</a></li>
                                       
                                            
EOT;

// HTML template for title row of the thumbnail view (album title + sort options)
$template_thumb_view_title_row = <<<EOT

                        <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td width="100%" class="statlink"><h2>{ALBUM_NAME}</h2></td>
                                <td><img src="images/spacer.gif" width="1" alt="" /></td>
                        </tr>
				<tr><td class="albumdesc">
                        {$album_desc}
                        </td></tr>
                        </table>

EOT;

function theme_display_album_list(&$alb_list, $nbAlb, $cat, $page, $total_pages)
{

    global $CONFIG, $STATS_IN_ALB_LIST, $statistics, $template_tab_display, $template_album_list, $lang_album_list;

    $theme_alb_list_tab_tmpl = $template_tab_display;

    $theme_alb_list_tab_tmpl['left_text'] = strtr($theme_alb_list_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_album_list['album_on_page']));
    $theme_alb_list_tab_tmpl['inactive_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
    $theme_alb_list_tab_tmpl['inactive_next_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_next_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
    $theme_alb_list_tab_tmpl['inactive_prev_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_prev_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));

    $tabs = create_tabs($nbAlb, $page, $total_pages, $theme_alb_list_tab_tmpl);

    $album_cell = template_extract_block($template_album_list, 'album_cell');
    $empty_cell = template_extract_block($template_album_list, 'empty_cell');
    $tabs_row = template_extract_block($template_album_list, 'tabs');
    $stat_row = template_extract_block($template_album_list, 'stat_row');
    $spacer = template_extract_block($template_album_list, 'spacer');
    $header = template_extract_block($template_album_list, 'header');
    $footer = template_extract_block($template_album_list, 'footer');
    $rows_separator = template_extract_block($template_album_list, 'row_separator');

    $count = 0;

    $columns = $CONFIG['album_list_cols'];
    $column_width = ceil(100 / $columns);
    $thumb_cell_width = $CONFIG['alb_list_thumb_size'] + 2;

    starttable('100%');

    if ($STATS_IN_ALB_LIST) {
        $params = array('{STATISTICS}' => $statistics,
            '{COLUMNS}' => $columns,
            );
        echo template_eval($stat_row, $params);
    }

    echo $header;

    if (is_array($alb_list)) {
        foreach($alb_list as $album) {
            $count ++;

            $params = array('{COL_WIDTH}' => $column_width,
                '{ALBUM_TITLE}' => $album['album_title'],
                '{THUMB_CELL_WIDTH}' => $thumb_cell_width,
                '{ALB_LINK_TGT}' => "thumbnails.php?album={$album['aid']}",
                '{ALB_LINK_PIC}' => $album['thumb_pic'],
                '{ADMIN_MENU}' => $album['album_adm_menu'],
                '{ALB_DESC}' => myTruncate($album['album_desc'], 30, " "), // the number changes the # of characters printed for the album description.
                '{ALB_INFOS}' => $album['album_info'],
                );

            echo template_eval($album_cell, $params);

            if ($count % $columns == 0 && $count < count($alb_list)) {
                echo $rows_separator;
            }
        }
    }

    $params = array('{COL_WIDTH}' => $column_width,
          '{SPACER}' => $thumb_cell_width
          );
    $empty_cell = template_eval($empty_cell, $params);

    while ($count++ % $columns != 0) {
        echo $empty_cell;
    }

    echo $footer;
    // Tab display
    $params = array('{COLUMNS}' => $columns,
        '{TABS}' => $tabs,
        );
    echo template_eval($tabs_row, $params);

    endtable();

    echo $spacer;
}

// Function to display first level Albums of a category
function theme_display_album_list_cat(&$alb_list, $nbAlb, $cat, $page, $total_pages)
{
    global $CONFIG, $STATS_IN_ALB_LIST, $statistics, $template_tab_display, $template_album_list_cat, $lang_album_list;
    if (!$CONFIG['first_level']) {
        return;
    }

    $theme_alb_list_tab_tmpl = $template_tab_display;

    $theme_alb_list_tab_tmpl['left_text'] = strtr($theme_alb_list_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_album_list['album_on_page']));
    $theme_alb_list_tab_tmpl['inactive_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));

    $tabs = create_tabs($nbAlb, $page, $total_pages, $theme_alb_list_tab_tmpl);
    // echo $template_album_list_cat;
    $template_album_list_cat1 = $template_album_list_cat;
    $album_cell = template_extract_block($template_album_list_cat1, 'c_album_cell');
    $empty_cell = template_extract_block($template_album_list_cat1, 'c_empty_cell');
    $tabs_row = template_extract_block($template_album_list_cat1, 'c_tabs');
    $stat_row = template_extract_block($template_album_list_cat1, 'c_stat_row');
    $spacer = template_extract_block($template_album_list_cat1, 'c_spacer');
    $header = template_extract_block($template_album_list_cat1, 'c_header');
    $footer = template_extract_block($template_album_list_cat1, 'c_footer');
    $rows_separator = template_extract_block($template_album_list_cat1, 'c_row_separator');

    $count = 0;

    $columns = $CONFIG['album_list_cols'];
    $column_width = ceil(100 / $columns);
    $thumb_cell_width = $CONFIG['alb_list_thumb_size'] + 2;

    starttable('100%');

    if ($STATS_IN_ALB_LIST) {
        $params = array('{STATISTICS}' => $statistics,
            '{COLUMNS}' => $columns,
            );
        echo template_eval($stat_row, $params);
    }

    echo $header;

    if (is_array($alb_list)) {
        foreach($alb_list as $album) {
            $count ++;

            $params = array('{COL_WIDTH}' => $column_width,
                '{ALBUM_TITLE}' => $album['album_title'],
                '{THUMB_CELL_WIDTH}' => $thumb_cell_width,
                '{ALB_LINK_TGT}' => "thumbnails.php?album={$album['aid']}",
                '{ALB_LINK_PIC}' => $album['thumb_pic'],
                '{ADMIN_MENU}' => $album['album_adm_menu'],
                '{ALB_DESC}' => myTruncate($album['album_desc'], 30, " "), // the number changes the # of characters printed for the album description.
                '{ALB_INFOS}' => $album['album_info'],
                );

            echo template_eval($album_cell, $params);

            if ($count % $columns == 0 && $count < count($alb_list)) {
                echo $rows_separator;
            }
        }
    }

    $params = array('{COL_WIDTH}' => $column_width,
          '{SPACER}' => $thumb_cell_width
          );
    $empty_cell = template_eval($empty_cell, $params);

    while ($count++ % $columns != 0) {
        echo $empty_cell;
    }

    echo $footer;
    // Tab display
    $params = array('{COLUMNS}' => $columns,
        '{TABS}' => $tabs,
        );
    echo template_eval($tabs_row, $params);

    endtable();

    echo $spacer;
}

// Get the name of an album
function get_album_desc($aid)
{
    global $CONFIG;
    global $lang_errors;
    $result = cpg_db_query("SELECT description from {$CONFIG['TABLE_ALBUMS']} WHERE aid='$aid'");
    $count = mysql_num_rows($result);
    if ($count > 0) {
        $row = mysql_fetch_array($result);
        return bb_decode($row['description']);
    } else {
        return "Album not found";
    } 
}

// Function for truncating long text strings.
// Original PHP code by Chirp Internet: www.chirp.com.au
// Please acknowledge use of this code by including this header.
// Adapted for Coppermine Photo Gallery use by Billy Bullock - www.billygbullock.com
function myTruncate($string, $limit, $break=".", $pad="...")
{
	// return with no change if string is shorter than $limit
	if(strlen($string) <= $limit) return $string;
	
	// is $break present between $limit and the end of the string?
	if(false !== ($breakpoint = strpos($string, $break, $limit))) {
		if($breakpoint < strlen($string) - 1) {
			$string = substr($string, 0, $breakpoint) . $pad;
		}
	}
	
	return $string;
}

function theme_display_thumbnails(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $page, $total_pages, $sort_options, $display_tabs, $mode = 'thumb')
{
    global $CONFIG;
    global $template_thumb_view_title_row,$template_fav_thumb_view_title_row, $lang_thumb_view, $template_tab_display, $template_thumbnail_view, $lang_album_list;

    static $header = '';
    static $thumb_cell = '';
    static $empty_cell = '';
    static $row_separator = '';
    static $footer = '';
    static $tabs = '';
    static $spacer = '';

    if ($header == '') {
        $thumb_cell = template_extract_block($template_thumbnail_view, 'thumb_cell');
        $tabs = template_extract_block($template_thumbnail_view, 'tabs');
        $header = template_extract_block($template_thumbnail_view, 'header');
        $empty_cell = template_extract_block($template_thumbnail_view, 'empty_cell');
        $row_separator = template_extract_block($template_thumbnail_view, 'row_separator');
        $footer = template_extract_block($template_thumbnail_view, 'footer');
        $spacer = template_extract_block($template_thumbnail_view, 'spacer');
    }

    $cat_link = is_numeric($aid) ? '' : '&amp;cat=' . $cat;
    $uid_link = (isset($_GET['uid']) && is_numeric($_GET['uid'])) ? '&amp;uid=' . $_GET['uid'] : '';

    $theme_thumb_tab_tmpl = $template_tab_display;

    if ($mode == 'thumb') {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $aid == 'lastalb' ? $lang_album_list['album_on_page'] : $lang_thumb_view['pic_on_page']));
        $theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . $uid_link . '&amp;page=%d'));
        $theme_thumb_tab_tmpl['inactive_next_tab'] = strtr($theme_thumb_tab_tmpl['inactive_next_tab'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . $uid_link . '&amp;page=%d'));
        $theme_thumb_tab_tmpl['inactive_prev_tab'] = strtr($theme_thumb_tab_tmpl['inactive_prev_tab'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . $uid_link . '&amp;page=%d'));
    } else {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_thumb_view['user_on_page']));
        $theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
        $theme_thumb_tab_tmpl['inactive_next_tab'] = strtr($theme_thumb_tab_tmpl['inactive_next_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
        $theme_thumb_tab_tmpl['inactive_prev_tab'] = strtr($theme_thumb_tab_tmpl['inactive_prev_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
    }

    $thumbcols = $CONFIG['thumbcols'];
    $cell_width = ceil(100 / $CONFIG['thumbcols']) . '%';

    $tabs_html = $display_tabs ? create_tabs($nbThumb, $page, $total_pages, $theme_thumb_tab_tmpl) : '';
    // The sort order options are not available for meta albums
    if ($sort_options) {
        $param = array('{ALBUM_NAME}' => $album_name,
            '{AID}' => $aid,
            '{PAGE}' => $page,
            '{NAME}' => $lang_thumb_view['name'],
            '{TITLE}' => $lang_thumb_view['title'],
            '{DATE}' => $lang_thumb_view['date'],
            '{SORT_TA}' => $lang_thumb_view['sort_ta'],
            '{SORT_TD}' => $lang_thumb_view['sort_td'],
            '{SORT_NA}' => $lang_thumb_view['sort_na'],
            '{SORT_ND}' => $lang_thumb_view['sort_nd'],
            '{SORT_DA}' => $lang_thumb_view['sort_da'],
            '{SORT_DD}' => $lang_thumb_view['sort_dd'],
            '{POSITION}' => $lang_thumb_view['position'],
            '{SORT_PA}' => $lang_thumb_view['sort_pa'],
            '{SORT_PD}' => $lang_thumb_view['sort_pd'],
            );
        $title = template_eval($template_thumb_view_title_row, $param);
    } else if ($aid == 'favpics' && $CONFIG['enable_zipdownload'] == 1) { //Lots of stuff can be added here later
       $param = array('{ALBUM_NAME}' => $album_name,
                             '{DOWNLOAD_ZIP}'=>$lang_thumb_view['download_zip']
                               );
       $title = template_eval($template_fav_thumb_view_title_row, $param);
    }else{
        $title = $album_name;
    }


    if ($mode == 'thumb') {
        starttable('100%', $title, $thumbcols);
    } else {
        starttable('100%');
    }

// Add 2nd Tab call here
if ($display_tabs) {
        $params = array('{THUMB_COLS}' => $thumbcols,
            '{TABS}' => $tabs_html
            );
        echo template_eval($tabs, $params);
    }
// End 2nd Tab call


    echo $header;

    $i = 0;
    foreach($thumb_list as $thumb) {
        $i++;
        if ($mode == 'thumb') {
            if ($aid == 'lastalb') {
                $params = array('{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}' => "thumbnails.php?album={$thumb['aid']}",
                    '{THUMB}' => $thumb['image'],
                    '{CAPTION}' => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu']
                    );
            } else {
                $params = array('{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}' => "displayimage.php?album=$aid$cat_link&amp;pos={$thumb['pos']}$uid_link",
                    '{THUMB}' => $thumb['image'],
                    '{CAPTION}' => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu']
                    );
            }
        } else {
            $params = array('{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}' => "index.php?cat={$thumb['cat']}",
                '{THUMB}' => $thumb['image'],
                '{CAPTION}' => $thumb['caption'],
                '{ADMIN_MENU}' => ''
                );
        }
        echo template_eval($thumb_cell, $params);

        if ((($i % $thumbcols) == 0) && ($i < count($thumb_list))) {
            echo $row_separator;
        }
    }
    for (;($i % $thumbcols); $i++) {
        echo $empty_cell;
    }
    echo $footer;

    if ($display_tabs) {
        $params = array('{THUMB_COLS}' => $thumbcols,
            '{TABS}' => $tabs_html
            );
        echo template_eval($tabs, $params);
    }

    endtable();
    echo $spacer;
}
?>