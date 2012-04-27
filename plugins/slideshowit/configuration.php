<?php
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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/slideshowit/configuration.php $
  $Revision: 7119 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-24 21:39:28 +0100 (So, 24 Jan 2010) $
  ****************************************************/
  
$name='slideshowit';
$description  = 'Uses a JavaScript to display a highly configurable slideshow on album list page.  The images are scaled to fit the screen size of the browser window.';
$description .= 'To enable this plugin, you will have to add "slideshowit" to "the content of the main page" in coppermines config in the section "Album list view".';
$description .= ' The setting should look like "slideshowit/breadcrumb/catlist/alblist" or similar. For details, review the documentation that comes with coppermine.';

$author='<a href="http://www.genefyoung.com">Gene F. Young</a>';
$version='1.4';
$plugin_cpg_version = array('min' => '1.5');
$extra_info = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="admin_menu"><a href="index.php?file=slideshowit/admin" title="Go to Configure slideshowit">Go directly to slideshowit Manager</a></td>
    </tr>
    </table>
EOT;

?>