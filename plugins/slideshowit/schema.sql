#/******************************************************
#  Coppermine 1.5.x Plugin - SlideShowIt
#  *****************************************************
#  Copyright (c) 2010 Gene F. Young (www.genefyoung.com)
#  *****************************************************
#  This program is free software; you can redistribute 
#  it and/or modify it under the terms of the GNU General
#  Public License as published by the Free Software 
#  Foundation; either version 3 of the License, or (at 
#  your option) any later version.
#  *****************************************************
#  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/slideshowit/schema.sql $
#  $Revision: 7119 $
#  $LastChangedBy: gaugau $
#  $Date: 2010-01-24 21:39:28 +0100 (So, 24 Jan 2010) $
#  ****************************************************/
#

CREATE TABLE IF NOT EXISTS `CPG_mod_slideshowit` (
  `slideshowit_album` 		varchar(100) 	default 'random',
  `slideshowit_albumid` 	int(2) 		default '2',
  `slideshowit_align` 		varchar(15) 	default 'center',
  `slideshowit_numberofpics` 	int(2) NOT NULL default '10',
  `slideshowit_skipportrait` 	int(2) NOT NULL default '0',
  `slideshowit_speed` 		int(2) NOT NULL default '3',
  `slideshowit_usemeta` 	int(2) NOT NULL default '0',
  `slideshowit_control_dir` 	int(2) NOT NULL default '0',
  `slideshowit_control_loc` 	int(2) NOT NULL default '0',
  `slideshowit_hover_text` 	int(2) NOT NULL default '0',
  `slideshowit_User_Selection` 	int(2) NOT NULL default '0',
  `slideshowit_Direct_Link` 	int(2) NOT NULL default '0',
  `slideshowit_Show_Title` 	int(2) NOT NULL default '0',
  `slideshowit_Filter_Enable` 	int(2) NOT NULL default '0',
  `slideshowit_User_List_Loc` 	int(2) NOT NULL default '0'
);
