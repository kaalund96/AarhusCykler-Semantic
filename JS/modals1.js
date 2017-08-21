// Get the modal
var tmodal1 = document.getElementById('tmodal1');
var tmodal2 = document.getElementById('tmodal2');
var tmodal3 = document.getElementById('tmodal3');
var tmodal4 = document.getElementById('tmodal4');
var tmodal5 = document.getElementById('tmodal5');
var tmodal6 = document.getElementById('tmodal6');
var tmodal7 = document.getElementById('tmodal7');
var tmodal8 = document.getElementById('tmodal8');
var tmodal9 = document.getElementById('tmodal9');
var tmodal10 = document.getElementById('tmodal10');
var tmodal11 = document.getElementById('tmodal11');

// Get the button that opens the modal
var tbtn1 = document.getElementById("btnT1");
var tbtn2 = document.getElementById("btnT2");
var tbtn3 = document.getElementById("btnT3");
var tbtn4 = document.getElementById("btnT4");
var tbtn5 = document.getElementById("btnT5");
var tbtn6 = document.getElementById("btnT6");
var tbtn7 = document.getElementById("btnT7");
var tbtn8 = document.getElementById("btnT8");
var tbtn9 = document.getElementById("btnT9");
var tbtn10= document.getElementById("btnT10");
var tbtn11 = document.getElementById("btnT11");

// Get the <span> element that closes the modal
var tspan1 = document.getElementsByClassName("Tclose1")[0];
var tspan2 = document.getElementsByClassName("Tclose2")[0];
var tspan3 = document.getElementsByClassName("Tclose3")[0];
var tspan4 = document.getElementsByClassName("Tclose4")[0];
var tspan5 = document.getElementsByClassName("Tclose5")[0];
var tspan6 = document.getElementsByClassName("Tclose6")[0];
var tspan7 = document.getElementsByClassName("Tclose7")[0];
var tspan8 = document.getElementsByClassName("Tclose8")[0];
var tspan9 = document.getElementsByClassName("Tclose9")[0];
var tspan10 = document.getElementsByClassName("Tclose10")[0];
var tspan11 = document.getElementsByClassName("Tclose11")[0];

// When the user clicks on the button, open the modal 
tbtn1.onclick = function() {tmodal1.style.display = "block";}
tbtn2.onclick = function() {tmodal2.style.display = "block";}
tbtn3.onclick = function() {tmodal3.style.display = "block";}
tbtn4.onclick = function() {tmodal4.style.display = "block";}
tbtn5.onclick = function() {tmodal5.style.display = "block";}
tbtn6.onclick = function() {tmodal6.style.display = "block";}
tbtn7.onclick = function() {tmodal7.style.display = "block";}
tbtn8.onclick = function() {tmodal8.style.display = "block";}
tbtn9.onclick = function() {tmodal9.style.display = "block";}
tbtn10.onclick = function() {tmodal10.style.display = "block";}
tbtn11.onclick = function() {tmodal11.style.display = "block";}

// When the user clicks on <span> (x), close the modal
tspan1.onclick = function() {tmodal1.style.display = "none";}
tspan2.onclick = function() {tmodal2.style.display = "none";}
tspan3.onclick = function() {tmodal3.style.display = "none";}
tspan4.onclick = function() {tmodal4.style.display = "none";}
tspan5.onclick = function() {tmodal5.style.display = "none";}
tspan6.onclick = function() {tmodal6.style.display = "none";}
tspan7.onclick = function() {tmodal7.style.display = "none";}
tspan8.onclick = function() {tmodal8.style.display = "none";}
tspan9.onclick = function() {tmodal9.style.display = "none";}
tspan10.onclick = function() {tmodal10.style.display = "none";}
tspan11.onclick = function() {tmodal11.style.display = "none";}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == tmodal1) {tmodal1.style.display = "none";}
	if (event.target == tmodal2) {tmodal2.style.display = "none";}
	if (event.target == tmodal3) {tmodal3.style.display = "none";}
	if (event.target == tmodal4) {tmodal4.style.display = "none";}
	if (event.target == tmodal5) {tmodal5.style.display = "none";}
	if (event.target == tmodal6) {tmodal6.style.display = "none";}
	if (event.target == tmodal7) {tmodal7.style.display = "none";}
	if (event.target == tmodal8) {tmodal8.style.display = "none";}
	if (event.target == tmodal9) {tmodal9.style.display = "none";}
	if (event.target == tmodal10) {tmodal10.style.display = "none";}
	if (event.target == tmodal11) {tmodal11.style.display = "none";}

}

