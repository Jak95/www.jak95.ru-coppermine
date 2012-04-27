<?php
/*********************************************
  Coppermine 1.5.x Plugin - External tracker
  ********************************************
  Copyright (c) 2009 - 2010 papukaija
  
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  $HeadURL$
  $Revision$
**********************************************/

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
require('./plugins/external_tracker/include/init.inc.php');

$data = 'no';
$days = '3650';//10 years
$date_of_expiry = time() + 60 * 60 * 24 * $days;
setcookie($CONFIG['cookie_name'].'_ext_stats', $data, $date_of_expiry, $CONFIG['cookie_path']);

//redirecting user
pageheader($lang_common['information'],"<meta http-equiv=\"refresh\" content=\"10;url=$url\">");
msg_box($lang_common['information'], $lang_plugin_external_tracker['clean_up_inst'], $lang_common['continue'], $CONFIG['ecards_more_pic_target']);
pagefooter();
?>
