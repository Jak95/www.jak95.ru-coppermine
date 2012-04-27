/******************************************************
  Coppermine 1.5.x Plugin - SlideShowIt
  *****************************************************
  Copyright (c) 2010 Gene F. Young (www.genefyoung.com)
  *****************************************************
  This program is free software; you can redistribute 
  it and/or modify it under the terms of the GNU General
  Public License as published by the Free Software 
  Foundation; either version 3 of the License, or (at 
  your option) any later version.
  *****************************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/slideshowit/readme.txt $
  $Revision: 7119 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-24 21:39:28 +0100 (So, 24 Jan 2010) $
  ****************************************************/

What it does:
-------------
Uses a JavaScript to display slideshow on front page.  The images are scaled up/down to fit the
available Browser window.  Controls are provided to play in forward/reverse direction, to play/pause,
to pause and go to previous or next image. Clicking on the image can be configured to go directly
to the image or to the album containing the image.

This plugin has been created for cpg1.5.x.

=========================================================================

How to install:
---------------
* Unzip
* Upload folder 'slideshowit' into Coppermine's plugins folder
* Go to plugin manager page and install it
* Go to slideshowit Manager on the admin menu and make your selections

How to enable:
--------------
* To enable this plugin, you'll have to add "slideshowit" to "the content of the main page" in coppermine's 
config in the section "Album list view". The setting should look like "slideshowit/breadcrumb/catlist/alblist" 
or similar. For details, review the documentation that comes with coppermine (inside the docs folder) in 
the section "The gallery configuration page" > "Album list view" > "The content of the main page".

How to configure:
-----------------
* Use the additional button 'slideshowit Manager' in admin menu.

Options you can select:

Use meta albums from list on the next line					--->	yes or no
Choose a Meta album for use as slideshowit display			--->	Random, Last Upload, Most Viewed, Top Rated.   	
Or if not using a meta album choose an album to display   	--->	If not using meta albums the choose any other Visible Album   	
Number of pictures in the Slideshow 						--->	(4-60)   	
Slideshow speed in ~seconds 								--->	(1-10)   	
How should SlideShow be aligned   							--->	Left, Center, Right	
Select whether Controls are Vertical or Horizontal   		--->	Vertical or Horizontal
Select where Controls are located   						---> Left if vertical or Top if Horizontal
															---> Right if vertical or Bottom if Horizontal
Skip portait mode pictures   								--->	yes or no
Enable hover text when mouse over slides? 	  				--->	yes or no
Enable User SlideShow Album Selection   					--->	yes or no
Click goes directly to Image vs. going to Image Album  		--->	yes or no
Show Album Description as Title above slideshow   			--->	yes or no
Enable Image transitions for Browsers that support it?   	--->	yes or no
Location of list allowing user to select SlideShow album. 	--->	yes or no

=========================================================================

Browser Compatibility:
----------------------
The JavaScript slider is tested and works perfectly in these browsers:
- IE 6/7/8
- Firefox 

It probably works fine in many other browsers, too.

=========================================================================

Credits:
--------
This plugin is written by Gene F. Young. I looked at "slider" by Timos-Welt as a model to start with.
Don't try to contact the plugin author for support - post on the board publicly instead.

=========================================================================

Change log:
-----------

v1.0 (2010/01/07)
-----------------
* initial release

v1.1 (2010/01/07)
-----------------
* Corrected directory structure naming convention to not have uppercase.

