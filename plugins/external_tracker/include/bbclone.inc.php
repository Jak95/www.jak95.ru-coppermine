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

//define('_BBC_PAGE_NAME', 'Test');
define('_BBCLONE_DIR', $row['tracker']);
define('COUNTER', _BBCLONE_DIR.'mark_page.php');
if (is_readable(COUNTER)) include_once(COUNTER);
?>
