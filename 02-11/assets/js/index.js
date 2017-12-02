
var q = false;

/*function button(){
	document.getElementById("p3").innerHTML = "Its JS";
}
function text(){
	alert("TROUXA");
}*/

function quebra(){
	document.getElementById("q").src = "quebrada.jpg"
	q = true;
}

function acende(){
	if(q == false){
		document.getElementById("q").src = "acende.jpg"
	}else{
		return false;
	}
}

function normal(){
	if(q != true){
			document.getElementById("q").src = "normal.jpg"
	}
}

function fix(){
	if(q == "quebrada.jpg"){
		return false;
	}
}