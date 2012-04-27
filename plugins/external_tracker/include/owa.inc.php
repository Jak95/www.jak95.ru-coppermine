<?php
/*********************************************
  Coppermine 1.5.x Plugin - External tracker
  ********************************************
  Copyright (c) 2009 - 2010 papukaija
  
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  $HeadURL$
  $Revision$
**********************************************/
// include the necessary files
require_once("{$row['tracker']}/owa_php.php");

// Create a new Instance of OWA
$owa = new owa_php($config);

// Create a new OWA event object
$event = $owa->makeEvent();

// Set the Event Type, in this case a "cpg view"
$event->setEventType('cpg_view');

// Set the ID of the site being tracked
$event->setSiteId("$row['tracker_extra']");

// Set the title of the page
//$event->setPageTitle('some page title');

// Set the type of page
//$event->setPageType('Gallery view');   

// Track the page request request
$owa->trackEvent($event);

//js helper
$owa = & new owa_php;
$owa->placeHelperPageTags();
?>
