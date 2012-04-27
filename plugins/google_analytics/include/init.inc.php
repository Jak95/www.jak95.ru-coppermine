<?php
/*********************************************
  Coppermine 1.5.x Plugin - Google Anylytics 
  ********************************************
  Copyright (c) 2009 papukaija
  
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

if (file_exists("./plugins/google_analytics/lang/{$CONFIG['lang']}.php")) {
  	require "./plugins/google_analytics/lang/{$CONFIG['lang']}.php";
} else {
	require './plugins/google_analytics/lang/english.php';
}
?>
