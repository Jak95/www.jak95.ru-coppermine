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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/phpmyadmin/index.php $
  $Revision: 8123 $
  $LastChangedBy: eenemeenemuu $
  $Date: 2010-12-07 10:08:46 +0100 (Di, 07 Dez 2010) $
**********************************************/

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

/* Create signon session */
$session_name = 'phpmyadminsession';
session_name($session_name);
session_start();

/* Store their credentials */
$_SESSION['PMA_single_signon_user'] = $CONFIG['dbuser'];
$_SESSION['PMA_single_signon_password'] = $CONFIG['dbpass'];
$_SESSION['PMA_single_signon_host'] = $CONFIG['dbserver'];
   
/* Close that session */
session_write_close();

pageheader('phpMyAdmin');

echo <<< EOT

<iframe src="plugins/phpmyadmin/phpMyAdmin/" width="100%" height="800px" style="border: 0px">
    <a href="plugins/phpmyadmin/phpMyAdmin/">click here</a>
</iframe>

EOT;

pagefooter();
