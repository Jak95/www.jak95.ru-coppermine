<?php

require '../../../include/config.inc.php';

/*
 * Servers configuration
 */
$i = 0;

/*
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'signon';
$cfg['Servers'][$i]['SignonSession'] = 'phpmyadminsession';

/* Server parameters */
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;

/* Select mysqli if your server has it */
$cfg['Servers'][$i]['extension'] = 'mysql';

$cfg['Servers'][$i]['only_db'] = $CONFIG['dbname'];

$cfg['Servers'][$i]['SignonURL'] = '../index.php';
$cfg['Servers'][$i]['LogoutURL'] = '../logout.php';
/*
 * End of servers configuration
 */

/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

?>
