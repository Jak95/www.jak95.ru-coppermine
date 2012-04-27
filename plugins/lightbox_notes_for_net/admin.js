/*******************************************************
/*******************************************************
  Coppermine 1.5.x Plugin - LightBox (NotesFor.net)
  ******************************************************
  Copyright (c) 2009-2010 Joe Carver and Helori Lamberty
  ******************************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/lightbox_notes_for_net/admin.php $
  $Revision: 6970 $
  $LastChangedBy: gaugau $
  $Date: 2009-12-31 15:57:05 +0100 (Do, 31. Dez 2009) $
  *****************************************************/
  /*******************************************************
			Version 3.0 - 13 June 2010
  *******************************************************/
  
$(document).ready(function() {
	$('#plugin_lightbox_nfn_sizespeed').SpinButton({min: 0,max: 2000, step: 20});
	$('#plugin_lightbox_nfn_border').SpinButton({min: 1,max: 99});
	$('#plugin_lightbox_nfn_maxpics').SpinButton({min: 1,max: 3000});
	$('#plugin_lightbox_nfn_slidetime').SpinButton({min: 10,max: 9990, step: 50});	
	$('#plugin_lightbox_nfn_imagefade').SpinButton({min: 0,max: 2000, step: 20});
	$('#plugin_lightbox_nfn_containerfade').SpinButton({min: 0,max: 2000, step: 20});	
});