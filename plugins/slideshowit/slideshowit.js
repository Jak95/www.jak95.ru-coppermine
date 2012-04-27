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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/branches/cpg1.5.x/plugins/slideshowit/slideshowit.js $
  $Revision: 7119 $
  $LastChangedBy: gaugau $
  $Date: 2010-01-24 21:39:28 +0100 (So, 24 Jan 2010) $
  ****************************************************/

var slideCache = new Array();

function RunSlideShowWithLinks(pictureID,linkID,titleID,positionID,displaySecs) {

	var max;	//max number of images
	var pointer = control("I");
	
	var nextImage = Picture[pointer];
	var nextTitle = Title[pointer];
	var nextWidth = Width[pointer];
	var nextHeight = Height[pointer];
	var nextLink = Link[pointer];	
	var nextCaption = Caption[pointer];

	if (slideCache[nextImage] && slideCache[nextImage].loaded) { //if an image is cached get the next one

	    var picture = document.getElementById(pictureID);		//see if pictures has filters
		if (picture.filters && filter_enabled) { picture.style.filter="blendTrans(duration=.5)"; picture.filters.blendTrans.Apply(); }

	    picture.src = nextImage;								//set the src= path
		picture.width = nextWidth;
		picture.height = nextHeight;
		picture.alt = nextCaption;

	    var windowSize = GetInsideWindowSize();

	 	var windowWidth=document.getElementById(positionID).offsetWidth;
	 	var windowHeight=document.getElementById(positionID).offsetHeight;

//set image width to screen width
		aspect = nextWidth/nextHeight;
		picture.width = windowSize.x - 240;			//these offsets are taken off the bottom to make image + controls + title etc fit
		picture.height = picture.width / aspect;
//if height is still/now too tall than set height to screen height and shrink width accordingly
	    scaled = "Not scaled.";
	    var windowSize = GetInsideWindowSize();
		if (picture.height > (windowSize.y - 200)) {    //these offsets are taken off the bottom to make image + controls + title etc fit
			picture.height = windowSize.y - 200;		//these offsets are taken off the bottom to make image + controls + title etc fit
			picture.width = picture.height * aspect;
			scaled = "Scaled! because height was too big.";		
		}
		document.getElementById(titleID).innerHTML = nextTitle; 
	
		document.getElementById(linkID).href = nextLink;			//set the href = value
		document.getElementById(linkID).title = nextCaption;		//set the title
	
		if (picture.filters  && filter_enabled) { picture.filters.blendTrans.Play(); } //play the pictures

	    setTimeout("RunSlideShowWithLinks('"+pictureID+"','"+linkID+"','"+titleID+"','"+positionID+"',"+displaySecs+")",displaySecs*1000);

	} else {
  	//if nothing cached then fall through, go cache an image, and set us to run again quickly
	    setTimeout("RunSlideShowWithLinks('"+pictureID+"','"+linkID+"','"+titleID+"','"+positionID+"',"+displaySecs+")",displaySecs*2);
	}
  // Cache the next image to improve performance.
  
	if (slideCache[nextImage] == null) { //nothing cached
	    slideCache[nextImage] = new Image;
	    slideCache[nextImage].loaded = false;	//not loaded
	    slideCache[nextImage].onload = function(){this.loaded=true};
	    slideCache[nextImage].src = nextImage;
	}
}  		

// Return the available content width and height space in browser window
function control(how){
	
	if (pointer == -2) { //init pointer on first time thru...
		pointer = 0;
		return pointer;
	}
		
	if (how == "I") {	
		if (!paused) {
			if ( direction > 0 ) {
				if( pointer < max) { pointer++; } else { pointer = 0;}
			} else {
				if ( pointer > 0) { pointer--; } else { pointer = max; }
			}
		}
	} else if (how=="R") {
		direction = -1;
	} else if(how=="F") {
		direction = +1;
	} else if (how=="B") { 
		paused = 1;
		if ( direction > 0) {		//increasing count so backup by decreasing
			pointer--; 	
			if (pointer < 0 ) pointer = max;	//if now below start set to max
		} else {								//decreasing count so backup by increasing
			pointer++; 						 	
			if (pointer > max ) pointer = 0;   //if now past max then set back to 0
		}	
	} else if (how=="N") {
		paused = 1;
		if ( direction < 0) {					//decreasing count so next by decreasing
			pointer--; 	
			if (pointer < 0 ) pointer = max;	//if now below start set to max
		} else {								//decreasing count so backup by increasing
			pointer++; 						 	
			if (pointer > max ) pointer = 0;   //if now past max then set back to 0
		}
	} else if (how=="T") {
		if (paused == 1) paused = 0; 
		else paused = 1;
	} 
		
	if (paused == 1) {
		document.getElementById('Xplay').innerHTML = '<span class="play">&nbsp;</span>';
	} else {
		document.getElementById('Xplay').innerHTML = '<span class="pause">&nbsp;</span>';
	} 
	return pointer;
}

function GetInsideWindowSize() {
	 if (window.innerWidth) {
		  return {x:window.innerWidth, y:window.innerHeight};
    }
    else
    {
		 var baseArray = document.getElementsByTagName("base");
		 if (baseArray.length == 0)
		 {
			 if (document.compatMode && document.compatMode.indexOf("CSS1") >= 0) {
				  return {x:document.body.parentNode.clientWidth, y:document.body.parentNode.clientHeight};
			 } else if (document.body && document.body.clientWidth) {
				  return {x:document.body.clientWidth, y:document.body.clientHeight};
			 }
		 }
		 else
		 {
			 if (document.body && document.body.clientWidth) {
				  return {x:document.body.clientWidth, y:document.body.clientHeight};
			 } else if (document.compatMode && document.compatMode.indexOf("CSS1") >= 0) {
				  return {x:document.body.parentNode.clientWidth, y:document.body.parentNode.clientHeight};
			 }
		 }
    }
    return {x:0, y:0};
}
