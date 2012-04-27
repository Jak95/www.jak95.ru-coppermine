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
  
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// submit your lang file for this plugin on the coppermine forums
// plugin will try to use the configured language if it is available.

if (file_exists("./plugins/slideshowit/lang/{$CONFIG['lang']}.php")) {
  require "./plugins/slideshowit/lang/{$CONFIG['lang']}.php";
} else {require "./plugins/slideshowit/lang/english.php";}

?>