function cambiar_texto(){
	document.getElementById("texto").style.color = "red";
}

function original(){
	document.getElementById("texto").style.color = "black";
}

function pintar(){
	document.getElementById("imagen").innerHTML = "<img class=\"paisa\" src=\"paisaje.png\">";
}
function aparecer(){
	let Myvar = setTimeout(pintar,2000);
}
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}

document.getElementById("button").onmouseover = cambiar_texto;
document.getElementById("button").onmouseout = original;
document.getElementById("ima").onclick = aparecer;


