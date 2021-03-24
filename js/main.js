"use strict";

const htmlTag = document.querySelector('html');
const bodyTag = document.querySelector('body');
const myNav   = document.querySelector('nav');
const myElem = document.querySelector('nav li a');

let scrolled = () => {
	let dec = scrollY / (bodyTag.scrollHeight - innerHeight);
	return Math.floor(dec * 100);
}

addEventListener('scroll', () => {

	myNav.style.setProperty('background', scrolled() > 50 ?
		"var(--color2)" : "var(--color1)");
})

$(function(){

$("#thtml").hide();
$("#tphp").hide();
$("#tjquery").hide();
$("#tcss").hide();

$("#imghtml").click(function(){

 $("#thtml").fadeToggle(800);
});
$("#imgphp").click(function(){

 $("#tphp").fadeToggle(800);
});
$("#imgjquery").click(function(){

 $("#tjquery").fadeToggle(800);
});
$("#imgcss").click(function(){

 $("#tcss").fadeToggle(800);
});
});