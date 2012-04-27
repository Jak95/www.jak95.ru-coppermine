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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/logs/log_header.inc.php $
  $Revision: 8359 $
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

?>Апр 23, 2012 - 15:26 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:26 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:27 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:27 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:27 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:27 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:27 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:28 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:28 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:29 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC
' in last_pictures.php on line 45 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 23, 2012 - 15:30 - While executing query 'SELECT r.pid, 
CONCAT('http://www.jak95.ru/coppermine/', r.`filepath`, r.`filename`) AS filename,
r.title
FROM `cpg15_pictures` AS r
, 
(
	SELECT h.`pid`, MAX(h.`sdate`) AS sdate
	FROM `cpg15_hit_stats` AS h
	GROUP BY h.`pid`--, h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.approved = 'YES'
AND r.hits > 0
ORDER BY h1.`sdate` DESC' in last_pictures.php on line 52 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' h.`sdate`
	ORDER BY sdate DESC
	LIMIT 50
) AS h1
WHERE r.`pid` = h1.pid
AND r.a' at line 9
---
Апр 24, 2012 - 11:20 - While executing query 'SELECT exifData FROM cpg15_exif WHERE pid = ' in include/exif_php.inc.php on line 39 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
---
Апр 24, 2012 - 11:20 - While executing query 'SELECT exifData FROM cpg15_exif WHERE pid = ' in include/exif_php.inc.php on line 39 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
---
Апр 24, 2012 - 11:20 - While executing query 'SELECT exifData FROM cpg15_exif WHERE pid = ' in include/exif_php.inc.php on line 39 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
---
Апр 24, 2012 - 11:21 - While executing query 'SELECT exifData FROM cpg15_exif WHERE pid = ' in include/exif_php.inc.php on line 39 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
---
Апр 24, 2012 - 12:38 - While executing query 'SELECT exifData FROM cpg15_exif WHERE pid = ' in include/exif_php.inc.php on line 39 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
---
Апр 26, 2012 - 10:05 - While executing query '' in sitemap_plus.php on line 125 the following error was encountered: 
Query was empty
---
Апр 26, 2012 - 10:05 - While executing query '' in sitemap_plus.php on line 125 the following error was encountered: 
Query was empty
---
Апр 26, 2012 - 10:08 - While executing query '' in sitemap_plus.php on line 125 the following error was encountered: 
Query was empty
---
Апр 26, 2012 - 10:09 - While executing query '' in sitemap_plus.php on line 125 the following error was encountered: 
Query was empty
---
Апр 26, 2012 - 10:09 - While executing query '' in sitemap_plus.php on line 125 the following error was encountered: 
Query was empty
---
Апр 26, 2012 - 14:31 - While executing query 'SELECT r.pid, r.aid, filepath, filename, url_prefix, pwidth, pheight, filesize, ctime, r.title, r.keywords, r.votes, pic_rating, hits, caption, r.owner_id FROM cpg15_pictures AS r
                    WHERE ((aid = 8  AND aid NOT IN (8, 46, 80) ) )AND approved='YES'
                    ORDER BY position DESC, pid DESC
                     LIMIT 0 ,-25' in include/functions.inc.php on line 1305 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-25' at line 4
---
Апр 26, 2012 - 15:22 - While executing query 'SELECT r.pid, r.aid, filepath, filename, url_prefix, pwidth, pheight, filesize, ctime, r.title, r.keywords, r.votes, pic_rating, hits, caption, r.owner_id FROM cpg15_pictures AS r
                    WHERE ((aid = 13  AND aid NOT IN (8, 46, 80) ) )AND approved='YES'
                    ORDER BY position DESC, pid DESC
                     LIMIT 0 ,-59' in include/functions.inc.php on line 1305 the following error was encountered: 
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-59' at line 4
---
