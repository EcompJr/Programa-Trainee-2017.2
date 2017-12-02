
var status = 0, status2 = 0;

function quebra(event){

	var img = document.getElementById(event.target.id);
	
	if (img.id == "bulb1" && status != 1) {
		status = 1
		img.src = "assets/images/plant.png";
	}
	if(event.target.id == "bulb2" && status2 != 1){
		status2 = 1;
		img.src = "assets/images/plant.png";
	}
	
		
}

function acende(event){
	var img = document.getElementById(event.target.id);	

	if (event.target.id == "bulb1" && status ==0) {	
		img.src = "assets/images/on.png";
	}
	if (event.target.id == "bulb2" && status2 ==0) {
		img.src = "assets/images/on.png";
	}

}

function apaga(event){
	var img = document.getElementById(event.target.id);

	if (event.target.id == "bulb1" && status ==0) {	
		img.src = "assets/images/off.png";
	}
	if (event.target.id == "bulb2" && status2 ==0) {
		img.src = "assets/images/off.png";
	}
}

