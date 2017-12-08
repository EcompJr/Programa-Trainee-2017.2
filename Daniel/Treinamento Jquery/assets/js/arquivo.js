
$(document).ready(function() {

	$("#botaosobrenome").click(function(){
		$("form").append("<input type = 'text' id = 'sobrenome' name = 'sobrenome' placeholder = 'Sobrenome'>");
	});

	$("#enviardados").click(function(){

		var nome = $("#botaonome").val();
		var sobrenome = $("#sobrenome").val();
		
		var nomeCompleto = (nome + sobrenome).length;

		if (nomeCompleto > 10) {
			alert("Nome Válido");
		}else{
			alert("Nome Invalido");
		}
		
	});

});
