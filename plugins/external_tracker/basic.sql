#/*********************************************
#  Coppermine 1.5.x Plugin - External tracker
#  ********************************************
#  Copyright (c) 2009 - 2010 papukaija
#  
#  This program is free software; you can redistribute it and/or modify
#  it under the terms of the GNU General Public License version 3
#  as published by the Free Software Foundation.
#
#  ********************************************
#  $HeadURL$
#  $Revision$
#**********************************************/

INSERT IGNORE INTO CPG_plugin_external_tracker (`service_name_short`, `service_name_full`, `tracker`, `tracker_extra`, `help_url`) VALUES ('google', 'Google Analytics', 'UA-1234567-8', '', 'http://www.google.com/support/analytics/bin/answer.py?&answer=55603');
INSERT IGNORE INTO CPG_plugin_external_tracker (`service_name_short`, `service_name_full`, `tracker`, `tracker_extra`, `help_url`) VALUES ('piwik', 'Piwik', 'domain.tld/path-to-piwik/', 'ID-SITE', 'http://piwik.org/docs/javascript-tracking/');
INSERT IGNORE INTO CPG_plugin_external_tracker (`service_name_short`, `service_name_full`, `tracker`, `tracker_extra`, `help_url`) VALUES ('bbclone', 'BBClone', 'relative-path-to-bbclone/', '', 'http://help.bbclone.de/index.php?n=Setup.ActivationCode');
INSERT IGNORE INTO CPG_plugin_external_tracker (`service_name_short`, `service_name_full`, `tracker`, `tracker_extra`, `help_url`) VALUES ('owa', 'Open Web Analytics', 'relative-path-to-owa/', 'SITE-ID', 'http://wiki.openwebanalytics.com/index.php?title=PHP_Invocation');
INSERT IGNORE INTO CPG_plugin_external_tracker (`service_name_short`, `service_name_full`, `tracker`, `tracker_extra`, `help_url`) VALUES ('crawl', 'CrawlTrack', 'relative-path-to-crawltrack/', 'CRAWL-SITE', 'http://www.crawltrack.net/doccms.php');
