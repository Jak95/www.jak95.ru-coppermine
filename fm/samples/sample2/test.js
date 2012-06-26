/*global alert, console*/
function test1() {
	//'use strict';
	alert('www');
	return false;
}

function test() {

	var man = {
		hands : 2,
		legs : 2,
		heads : 1
	},
	i = 0;
	//myname = "eeee";

	function test3() {
		//alert(myname);
		var myname1 = "www";
		alert(myname1);
	}

	//test3();
	//alert(myname);

	if (typeof (Object.prototype.clone) === "undefined") {
		Object.prototype.clone = function () {alert("wwww"); };
	}

	for (i in man) {
		if (man.hasOwnProperty(i)) {
			console.log(i, ":", man[i]);
		}
	}
	//man.clone();
	f = function () {
		var local = 1;
		eval("local = 3; console.log(local)");
		console.log(local);
	};	
	f();

	return false;
}