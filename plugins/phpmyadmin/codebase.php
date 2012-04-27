<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.x
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/phpmyadmin/codebase.php $
  $Revision: 8123 $
  $LastChangedBy: eenemeenemuu $
  $Date: 2010-12-07 10:08:46 +0100 (Di, 07 Dez 2010) $
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

$thisplugin->add_filter('admin_menu','phpmyadmin_admin_menu_button');


function phpmyadmin_admin_menu_button($admin_menu) {
    global $CONFIG;
    $new_button = '<li><a href="index.php?file=phpmyadmin/index"><span>';
    if ($CONFIG['enable_menu_icons'] == 2) {
        $new_button .= '<img src="./plugins/phpmyadmin/images/icons/pma.png" border="0" width="16" height="16" alt="" class="icon" />';
    }
    $new_button .= 'phpMyAdmin</span></a></li>';
    $look_for = '<!-- END documentation -->'; // This is where you determine the place in the admin menu
    $admin_menu = str_replace($look_for, $look_for . $new_button, $admin_menu);
    return $admin_menu;
}


global $PHP_SELF;

if ($PHP_SELF == 'logout.php') {

    /* Create signon session */
    $session_name = 'phpmyadminsession';
    session_name($session_name);
    session_start();
    
    /* Store their credentials */
    $_SESSION['PMA_single_signon_user'] = '';
    $_SESSION['PMA_single_signon_password'] = '';
    $_SESSION['PMA_single_signon_host'] = '';
       
    /* Close that session */
    session_write_close();
}
