$(document).ready(function(){
	$("#texto1").hide();
	$("#botao0").click(function(){
		$("#texto1").show();
	});
	$("#botao1").click(function(){

		var texto0 = document.getElementById('texto0');
		var texto1 = document.getElementById('texto1');
		var string0 = document.getElementById('texto0').value;
		var string1 = document.getElementById('texto1').value;
		var soma = string0.length + string1.length;
		
		if(soma > 10){
			$("#botao0").hide();
			$("#botao1").hide();
			$("#texto0").hide();
			$("#texto1").hide();
			$("#titulo").hide();
			alert("Valido!");
		}else{
			alert("Invalido!");
		}
	});
});

function validaCampo(){
	var campo = document.getElementById('campo');
	var txt   = document.getElementById('campo').value;
	var n     = txt.length;
	if(n < 6){
	  alert("O Texto digitado tem " + n + " caracteres");
	  return false;
	  campo.focus();
	}
  	return true;
  	}

