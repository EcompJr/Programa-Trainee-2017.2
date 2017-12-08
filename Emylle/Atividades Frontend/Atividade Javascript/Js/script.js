
var cont = 0;

function mudaImagem(i, id) {    
		
	if (i == 1 && cont == 0 && (id == 'imagem1' || id == 'imagem2')) {
       	document.getElementById(id).src="imagens/lampAcesa.jpg";
	
   	}else if (i == 2 && (id == 'imagem1'|| id == 'imagem2')) {       
    	document.getElementById(id).src="imagens/lampQuebrada.jpg"; 
    	cont = 1;

    }else if (i == 3 && cont == 0 && (id == "imagem1" || id == "imagem2")) {
	    document.getElementById(id).src="imagens/lampApagada.jpg";
    }

}