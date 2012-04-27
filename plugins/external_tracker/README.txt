*********************************************
  Coppermine 1.5.x Plugin - External tracker
*********************************************
  Copyright (c) 2009 - 2010 papukaija
  
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

**********************************************
  $HeadURL$
  $Revision$
**********************************************
This plugin adds a tracking code to every page if the user isn't logged in 
as admin. An additional cookie based exclusion is also available after the 
installation of this plugin.


Features:

    * multilingual (currently: en,fr,fi and partly de,nl,ch,es)
    * puts tracker code in all pages except if an admin has logged in or if the user has installed an optional cookie
    * doesn't overwrite any core files (eg. anycontent.php or theme.php)
    * theme independent

Supported trackers:
    * Google Analytics
    * Piwik
    * Open Web Analytics (OWA)
    * BBClone
    * CrawlTrack


About the config screen's Extra setting:

This setting is used to give the tracker a second setting. Depending on the
tracker, this setting is mandatory for the tracker to work. If completing the 
field for a specific tracker is necessary, then the field is prefilled with some
text (ID-SITE, for example). Currently this field is only used for site IDs.

Credits:

* Written by papukaija
* v. 1.1 has been contributed by André
* v. 1.4 includes some optimisations by Joachim
* Database and form related code are taken from the Social bookmark plugin

    Translators:
    * André (for German)
    * tjiepie (for Dutch)
    * a-m (for Chinese)
    * jmatute (for Spanish)

The trackers' codes are taken from the tracker's documentation.
All trademarks are property of their owners.
