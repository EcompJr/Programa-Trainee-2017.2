
var q = false;
var x = false;

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
/* LAMPADA 2 */
function quebra1(){
	document.getElementById("x").src = "quebrada.jpg"
	x = true;
}

function acende1(){
	if(x == false){
		document.getElementById("x").src = "acende.jpg"
	}else{
		return false;
	}
}

function normal1(){
	if(x != true){
		document.getElementById("x").src = "normal.jpg"
	}
}

function fix1(){
	if(x == "quebrada.jpg"){
		return false;
	}
}