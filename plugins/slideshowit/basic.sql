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
#  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/slideshowit/basic.sql $
#  $Revision: 7119 $
#  $LastChangedBy: gaugau $
#  $Date: 2010-01-24 21:39:28 +0100 (So, 24 Jan 2010) $
#  ****************************************************/


INSERT INTO `CPG_mod_slideshowit` (
	slideshowit_album,
	slideshowit_albumid,
	slideshowit_align,
	slideshowit_numberofpics,
	slideshowit_skipportrait,
	slideshowit_speed,
	slideshowit_usemeta,
	slideshowit_control_dir,
	slideshowit_control_loc,
	slideshowit_hover_text,
	slideshowit_User_Selection,
	slideshowit_Direct_Link,
	slideshowit_Show_Title,
	slideshowit_Filter_Enable,
	slideshowit_User_List_Loc
)VALUES ('random',2,'center',10,0,3,0,0,0,0,0,0,0,0,0);