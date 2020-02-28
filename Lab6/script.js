function cambiar_texto(){
	document.getElementById("texto").style.color = "red";
}
function original(){
	document.getElementById("texto").style.color = "black";
}

document.getElementById("button").onmouseover = cambiar_texto;
document.getElementById("button").onmouseout = original;
