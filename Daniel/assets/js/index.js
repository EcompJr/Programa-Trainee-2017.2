var lam = false;
var lam2 = false;

function acesa(estado){

	if (lam ==false || lam2 == false){ 
	document.getElementById(estado).src = "assets/imagens/acesa.jpg";
	}

}

function apagada(estado){
	
	if (lam == false || lam2 == false){
	document.getElementById(estado).src = "assets/imagens/apagada.jpg"
}

}
function quebrada(estado){

	document.getElementById(estado).src = "assets/imagens/quebrada.jpeg"
	if(estado == "l1"){
		lam = true;
	}else{
		lam2 = true;
	}
}
function controle (event, valor){

		if ((event.target.id == "l1" && lam == false) || (event.target.id == "l2" && lam2 == false)) {
		switch(valor){
			
			case "acender":
				acesa(event.target.id);
				break;
			case "apagar":
				apagada(event.target.id);
				break;
			case "quebrada":
				if(lam==false ){
					quebrada(event.target.id);
				}
				else if(lam2==false){
					quebrada(event.target.id);

				}
				break;
			}
		
		}
	
		}