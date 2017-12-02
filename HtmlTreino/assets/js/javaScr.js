function button(){
	document.getElementById("buttonSubmit").innerHTML = "SUBMIT";
}

function alertText(){
	console.log("You're on a special text");
}

var status1 = 0; 
var status2 = 0;

function on(idgh){
	if(id == "Lamp1"){
		if(status1 != 2){
			document.getElementById(id).src = "assets/image/lamp1.jpg";
			status1 = 1;
		}
	}else if(id == "Lamp2"){
		if(status2 != 2){
			document.getElementById(id).src = "assets/image/lamp1.jpg";
			status2 = 1;
		}
	}
}

function off(id){
	if(id == "Lamp1"){	
		if(status1 != 2){
			document.getElementById(id).src = "assets/image/lamp0.jpg";
			status1 = 0;
		}
	}else if(id == "Lamp2"){
		if(status2 != 2){
			document.getElementById(id).src = "assets/image/lamp0.jpg";
			status2 = 0;
		}
	}
}

function toBreak(id){
	if(id == "Lamp1"){
		document.getElementById(id).src = "assets/image/lamp2.jpg";
		status1 = 2;
	}else if (id == "Lamp2") {
		document.getElementById(id).src = "assets/image/lamp2.jpg";
		status2 = 2;
	}
}
