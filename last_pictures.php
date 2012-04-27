<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2012 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.20
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/showthumb.php $
  $Revision: 8359 $
**********************************************/

define('IN_COPPERMINE', true);
require("include/init.inc.php");

Header("content-type: application/x-javascript");

$query = "SELECT 
r.pid, r.`filepath`, r.`filename`, 
r.title, r.ctime, ex.`exifData` AS exif
FROM `cpg15_pictures` AS r
LEFT OUTER JOIN `cpg15_exif` AS ex ON ex.pid = r.`pid`,
(
   SELECT h.`pid`, MAX(h.`sdate`) AS sdate
   FROM `cpg15_hit_stats` AS h
   GROUP BY h.`pid`
   ORDER BY sdate DESC
   LIMIT 51
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC";

$list = array();
$result = cpg_db_query($query);
$row = mysql_fetch_assoc($result);
$filenames = array();
$sitealbumpath = 'http://www.jak95.ru/coppermine/albums/';

$keyExtended = array("normal", "href", "caption", "getdate");
global $lang_date;


while ( ($row = mysql_fetch_assoc($result)) ) {
	$normalfilename = 'normal_' . $row[filename];
	$href = $row[filename];
	$filepath = $row[filepath];
	$pid = $row[pid];
	$fullname = $sitealbumpath.$filepath.$normalfilename;
	$hrefname = $sitealbumpath.$filepath.$href;
	$title = $row[title];
	$exif = unserialize($row[exif]);
	
	$subIFD = $exif[SubIFD];
	if (isset($subIFD) && isset($subIFD[DateTimeOriginal])) {
		$createtime = $subIFD[DateTimeOriginal];
	} else {
		$createtime = strftime("%Y:%m:&d %H:%M:%S", $row[ctime]); //2007:10:23 08:08:22
	}
	
	//echo $fullname;
	
	$values = array($fullname, $hrefname, $title, $createtime);
	$subarray = array_combine($keyExtended, $values);
	@array_push ($filenames, $subarray);
}
/*
$ret = '[';
while ( ($row = mysql_fetch_assoc($result)) ) {
	$filename = $row[filename];
	$title = $row[title];
	$ret = $ret.$filename.": {caption:'".$title."'},";
	//$values = array($filename, array("caption" =>$title));
	//@array_push ($filenames, $row[filename]);
}
$ret = substr($ret, 0, strlen($ret) - 1);
$ret = $ret.']';
*/
mysql_free_result($result);

//echo $ret;
echo json_encode($filenames);

?>