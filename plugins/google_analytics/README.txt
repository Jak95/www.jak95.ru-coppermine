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

This plugin adds Google Analytics's tracking code to every page if you aren\'t 
logged in as admin. An additional cookie based exclusion is also available after
the installation of this plugin.

The testing has been done with cpg1.5.2.

Features:

    * multilingual (currently: en,fr,fi,de,nl)
    * will put tracker code in all pages except if an admin has logged in or if the user has installed an optional cookie
    * won't overwrite  any core files (eg. anycontent.php or theme.php)
    * theme independent
