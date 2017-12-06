var quebrada = false;
var quebrada2 = false;

function acenderLamp(estado){
    document.getElementById(estado).src = "imagens/acesa.jpg";
}
function apagarLamp(estado){
    document.getElementById(estado).src = "imagens/apagada.jpg";
}

function voltar (estado){
    if(estado == "lampadaA"){
        quebrada = false;
    }
    else{
        quebrada2 = false;
    }
    document.getElementById(estado).src="imagens/quebrada.jpg";
}

function quebradaLamp(estado){
    document.getElementById(estado).src ="imagens/quebrada.jpg";
    if (estado == "lampadaA"){
        quebrada = true;
    }
    else{
        quebrada2 = true;
    }
}
function Controller (event,valor){
     if ((quebrada == false && event.target.id=="lampadaA") || (quebrada2==false && event.target.id=="lampadaA2")){
        switch(valor){
            case 'acenderL':
                acenderLamp(event.target.id);
                break;
            case 'apagarL':
                apagarLamp(event.target.id);
                break;
            case 'quebrarL':
                quebradaLamp(event.target.id);
                break;
    
       }
    }
    
    else if((quebrada==true && event.target.id == "lampadaA" ) || (quebrada2==true && event.target.id=="lampadaA2")){
      if(valor== 'voltarL'){
            voltar(event.target.id);
        }
    }

}





