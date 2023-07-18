/**************************
Flexy Foot Custom Bric 
Built By Blocs Builder
©2020 Better Thought Group
Updated: Nov 14 2020
www.blocsbuilder.com
***************************/
 document.addEventListener("DOMContentLoaded", () => {
    var flexyTop = document.querySelector('.page-container');	// Page container
  	var getSettings = document.getElementById('flexy-foot'); // Find Settings
  	var footer = getSettings.getAttribute('data-footer'); // Get Footer ID
 	var flexyFooter = document.getElementById(footer); // 
 	flexyTop.classList.add("d-flex", "flex-column", "min-vh-100");
 	flexyFooter.classList.add("mt-auto");
 });