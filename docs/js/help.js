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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/docs/js/help.js $
  $Revision: 8359 $

  $Date: 2012-03-29 16:32:35 +0200 (Do, 29 Mrz 2012) $
**********************************************/

$(document).ready(function()
{
	$('#toc').replaceWith('');
	$('#docheader').replaceWith('');
	$('#doc_footer').replaceWith('');
});

$(function() {
    $(".cpg_zebra tr:even").addClass("tableb");
	$(".cpg_zebra tr:odd").addClass("tableb_alternate");
});