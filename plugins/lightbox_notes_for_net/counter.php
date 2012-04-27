<?php
/*******************************************************
  Coppermine 1.5.x Plugin - LightBox (NotesFor.net)
  ******************************************************
  Copyright (c) 2009-2010 Joe Carver and Helori Lamberty
  ******************************************************
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/lightbox_notes_for_net/counter.php $
  $Revision: 6986 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-02 11:41:26 +0100 (Sa, 02 Jan 2010) $
  *****************************************************/
  /*******************************************************
			Version 3.1 - 21 June 2010
  *******************************************************/

define("IN_COPPERMINE", true);
global $CONFIG, $USER;
// only count if not in admin mode 
if (!GALLERY_ADMIN_MODE) {

  // init pid variable
  $enlcnt_pid = '';

  // create Inspekt instance to sanitize data
  $enlcnt_superCage = Inspekt::makeSuperCage();

  // check if GET variable a exists
  if ($enlcnt_superCage->get->keyExists('a'))
  {
    // if yes, get Variable a
    $pid = $enlcnt_superCage->get->getInt('a');

   // increase pic counter in database
    if ((!USER_IS_ADMIN && $CONFIG['count_admin_hits'] == 0 || $CONFIG['count_admin_hits'] == 1) && !in_array($pid, $USER['liv']) && $superCage->cookie->keyExists($CONFIG['cookie_name'] . '_data')) {
        add_hit($pid);
        if (count($USER['liv']) > 4) array_shift($USER['liv']);
        array_push($USER['liv'], $pid);
    }
  }
}

?>