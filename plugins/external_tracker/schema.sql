#/*********************************************
#  Coppermine 1.5.x Plugin - External tracker
#  ********************************************
#    Copyright (c) 2009 - 2010 papukaija
#  
#  This program is free software; you can redistribute it and/or modify
#  it under the terms of the GNU General Public License version 3
#  as published by the Free Software Foundation.
#
#  ********************************************
#  $HeadURL$
#  $Revision$
#**********************************************/

CREATE TABLE IF NOT EXISTS `CPG_plugin_external_tracker` (
  service_id int(11) NOT NULL auto_increment,
  service_active enum('YES','NO') NOT NULL default 'NO',
  service_name_short varchar(10) NOT NULL default '',
  service_name_full varchar(25) NOT NULL default '',
  tracker varchar(30) NOT NULL default '',
  tracker_extra varchar(50) DEFAULT NULL,
  help_url varchar(255) NOT NULL default '',
  PRIMARY KEY  (service_id),
  UNIQUE KEY service_name_full (service_name_full),
  UNIQUE KEY help_url (help_url)
) TYPE=MyISAM COMMENT='Used to store settings for External tracker plugin.';
