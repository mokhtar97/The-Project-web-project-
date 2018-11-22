var myinput=document.getElementById("input"),
    myevent=document.getElementById("et");
	
	myinput.onkeyup=function(){
		"use strict";
		myevent.innerHTML=myinput.value*10;
	};
