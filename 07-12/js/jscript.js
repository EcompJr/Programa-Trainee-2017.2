$(document).ready(function(){
	$("#texto1").hide();
	$("#botao0").click(function(){
		$("#texto1").show();
	});
	$("#botao1").click(function(){
		$("#botao0").hide();
		$("#botao1").hide();
		$("#texto0").hide();
		$("#texto1").hide();
		$("#titulo").hide();
		alert("Dados Enviados!");
	});
});

