var valor = 0;
var verificaLamp1 = 0;
var verificaLamp2 = 0;

function lampAcesa(event){
	
	if (event.target.id == "lamp1" && verificaLamp1 == 0 || event.target.id == "lamp2" && verificaLamp2 == 0){
		document.getElementById(event.target.id).src = "https://i.stack.imgur.com/ybxlO.jpg";
	}

}

function lampApaga(event){
	
	if (event.target.id == "lamp1" && verificaLamp1 == 0 || event.target.id == "lamp2" && verificaLamp2 == 0){
		document.getElementById(event.target.id).src = "https://i.stack.imgur.com/b983w.jpg";
	}

}

function lampQuebra(event){

	if (event.target.id == "lamp1" && verificaLamp1 == 0 || event.target.id == "lamp2" && verificaLamp2 == 0){
		document.getElementById(event.target.id).src = "https://i.stack.imgur.com/MRjsF.jpg";
		if(event.target.id == "lamp1"){
			verificaLamp1 = 1;
		}else{
			verificaLamp2 = 1;
		}
	}
	
}
