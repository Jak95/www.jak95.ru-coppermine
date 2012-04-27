<?php

/*
	Google sitemap generator for PHP4.1+ and CPG 1.2+
	
	Correct by CPG 1.5.20 for photo more 50000
*/

// use time of last comment on a pic as lastmod ? (if false then we just use pic's upload time (ie. db, not EXIF) which is cheaper)
define('INC_COMMENT_TIMES', false);

// dump the sitemap to a specified file (or generally anything accessible via fopen()), or false to output straight to user agent. 
// Be aware that if you enable this and the output buffer exceeds php's memory limit and ini_set() fails the script will crash and burn.
// Use a .gz or .xml.gz ending if you are making a compressed file.

$re_fn = 'can_cm_sitemap_test';
$re_ext = '.xml';
define('LINEBREAK', '');

global $Filename;
$Filename = $re_fn.$re_ext;

// [0.0 <= priority <= 1.0]
define('P_DISPLAYIMAGE', 0.5);
define('P_ALBUM', 0.5);
define('P_CATEGORY', 0.5);

// [changefreq = always || hourly || daily || weekly || monthly || yearly || never]
define('CF_DISPLAYIMAGE', 'unspecified');
define('CF_ALBUM', 'unspecified');
define('CF_CATEGORY', 'unspecified');

define('IN_COPPERMINE', true);
require('include/init.inc.php');

// This should work as it is, but hardcode if necessary.
define('CPG14', version_compare(COPPERMINE_VERSION, "1.4.0", ">="));
define('PHP5', version_compare(phpversion(), "5", ">="));

// No user servicable parts below here

function lmdate($timestamp)
{
	if (PHP5){
		return date('c', $timestamp);
	} else {
		return date('Y-m-d\TH:i:s+00:00', $timestamp - date('Z'));
	}
}

$base = rtrim($CONFIG['ecards_more_pic_target'], '/');

function create_file($filename)
{
	$result = fopen($filename, 'w');
	
	fputs($result, '<?xml version="1.0" encoding="UTF-8"?>'. LINEBREAK);
	fputs($result, '<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">'. LINEBREAK);
	return $result;
}

function writeurl_1($fp, $base)
{
	fputs($fp, '<url>');
	fputs($fp, '<loc>'.$base.'</loc>');
	fputs($fp, '<priority>1.0</priority>');
	fputs($fp, '</url>'.LINEBREAK);
	return '';
}

function writeurl_2($fp, $base, $cid)
{
	fputs($fp, '<url>');
	fputs($fp, '<loc>'.$base.'/index.php?cat='.$cid.'</loc>');
	if (CF_CATEGORY != 'unspecified') fputs($fp, '<changefreq>'.CF_CATEGORY.'</changefreq>');
	if (P_CATEGORY != '0.5') fputs($fp, '<priority>'.P_CATEGORY.'</priority>');
	fputs($fp, '</url>'.LINEBREAK);
	return '';
}

function writeurl_3($fp, $base, $aid, $lastmod)
{
	fputs($fp, '<url>');
	fputs($fp, '<loc>'.$base.'/thumbnails.php?album='.$aid.'</loc>');
	fputs($fp, '<lastmod>'.lmdate($lastmod).'</lastmod>');
	if (CF_ALBUM != 'unspecified') fputs($fp, '<changefreq>'.CF_ALBUM.'</changefreq>');
	if (P_ALBUM != '0.5') fputs($fp, '<priority>'.P_ALBUM.'</priority>');
	fputs($fp, '</url>'.LINEBREAK);
	return '';
}
	
function writeurl_4($fp, $base, $pid, $lastmod)
{
	fputs($fp, '<url>');
	fputs($fp, '<loc>'.$base.'/displayimage.php?pos=-'.$pid.'</loc>');
	fputs($fp, '<lastmod>'.lmdate($lastmod).'</lastmod>');
	if (CF_DISPLAYIMAGE != 'unspecified') fputs($fp, '<changefreq>'.CF_DISPLAYIMAGE.'</changefreq>');
	if (P_DISPLAYIMAGE != '0.5') fputs($fp, '<priority>'.P_DISPLAYIMAGE.'</priority>');
	fputs($fp, '</url>'.LINEBREAK);
	return '';
}

function writeurl_5($fp)
{
	fputs($fp, '</urlset>'.LINEBREAK);
	return '';
}

function close_file($fp, $filename)
{
	$result = '';
	echo fclose($fp);
	$result = 'Completed, and dumped to ' . $filename;
	
	return $result;
}

$fp = create_file($Filename);
$proc = '';
$count = 0;

$query = "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']}";
echo $query.'<br/>';

$cats = cpg_db_query($query);

$pass = CPG14 ? "AND (ISNULL(alb_password) OR alb_password = '')" : '';

writeurl_1($fp, $base);
$count = $count + 1;

while(list($cid) = mysql_fetch_row($cats))
{
	writeurl_2($fp, $base, $cid);
	$count = $count + 1;
	
	$iteration = 1;
	
$query = "SELECT a.aid, MAX(ctime) FROM {$CONFIG['TABLE_ALBUMS']} AS a 
	INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid 
	WHERE visibility = 0 ".$pass." AND a.category = ".$cid." GROUP BY a.aid";
	
	echo $query.'<br/>';
	
	$albs = cpg_db_query($query);
	while(list($aid, $lastmod) = mysql_fetch_row($albs))
	{
		writeurl_3($fp, $base, $aid, $lastmod);
		$count = $count + 1;
		
		$query = "SELECT pid, ctime FROM {$CONFIG['TABLE_ALBUMS']} 
			AS a INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid WHERE p.aid = '$aid'";
		echo $query.'<br/>';
		
		$pics = cpg_db_query($query);
	
		while(list($pid, $lastmod) = mysql_fetch_row($pics))
		{
			if (INC_COMMENT_TIMES){
				$query = "SELECT UNIX_TIMESTAMP(MAX(msg_date)) FROM {$CONFIG['TABLE_COMMENTS']} 
				AS c INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.pid = c.pid 
				WHERE p.pid = '$pid' GROUP BY p.pid";
				echo $query.'<br/>';
				
				$com = cpg_db_query($query);
				if (mysql_num_rows($com)) list($lastmod) = mysql_fetch_row($com);
				mysql_free_result($com);
			}
			if ($count > 40000) {
				writeurl_5($fp);
				$count = $count + 1;

				$tmp = close_file($fp, $Filename);
				$proc = $proc.$tmp;
				
				$Filename = $re_fn.$iteration.$re_ext;
				echo $Filename;
				$iteration = $iteration + 1;
				
				$fp = create_file($Filename);
				$count = 0;
				writeurl_1($fp, $base);
				$count = $count + 1;
				writeurl_2($fp, $base, $cid);
				$count = $count + 1;
				writeurl_3($fp, $base, $aid, $lastmod);
				$count = $count + 1;
			}
			
			writeurl_4($fp, $base, $pid, $lastmod);
			$count = $count + 1;
		}
	}	
}
writeurl_5($fp);

$proc = $proc.close_file($fp, $Filename);
echo ($proc);

?>