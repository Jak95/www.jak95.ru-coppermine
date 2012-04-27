<?php
/**************************************************
  Coppermine 1.5.x Plugin - slideshowit $VERSION$=1.1
  *************************************************
  Copyright (c) 2010 Gene F. Young (genefyoung.com)
  *************************************************
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ***************************************************/

// Check if PlugIn is installed
$slideshowit_isinstalled = 0;

$slideshowitchk_result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PREFIX']}plugins");
while ($slideshowitchk_row = mysql_fetch_array($slideshowitchk_result)) {
		if ($slideshowitchk_row['name'] == "slideshowit") $slideshowit_isinstalled = 1;
}
mysql_free_result($slideshowitchk_result);

// When installed, load $slideshowit_set settings
if ($slideshowit_isinstalled) {

	$slideshowitresult = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PREFIX']}mod_slideshowit");
	while ($slideshowitrow = mysql_fetch_array($slideshowitresult)) {
	    $slideshowit_set = $slideshowitrow;
	  }
	mysql_free_result($slideshowitresult);
}
?>