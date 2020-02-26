function escribir (){
  let cont1 = document.getElementById("password").value;
  let cont2 = document.getElementById("ver").value;
  if(cont1 == cont2){
    document.getElementById("texto").innerHTML = "<p>Las contraseñas coinciden</p>"
  }else{
    document.getElementById("texto").innerHTML = "<p>Las contraseñas no coinciden</p>"
  }
}

function calcular(){
	let obj1 = document.getElementById("item1").value;
	let obj2 = document.getElementById("item2").value;
	let obj3 = document.getElementById("item3").value;
	let total = (obj1*900)+(obj2*150)+(obj3*700);
	let totali = (total*.16)+(total);
	document.getElementById("subtotal").innerHTML = "<p>Sub-Total:  "+total+"</p>";
	document.getElementById("total").innerHTML = "<p>Total+IVA:  "+totali+"</p>";
}

document.getElementById("Validar").onclick = escribir;
document.getElementById("comprar").onclick = calcular;