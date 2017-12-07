


$(document).ready(function(){
	
		
	$("#id1").click(function(){
		$("body").append("<input type='text' name='nomse' id='nome1' placeholde'sobrenome'>");
	});

	$("#id2").click(function(){
		var tamanho = $("#nome").val() + " " +$("#nome1").val();
		if(tamanho.length < 10){
			alert("É muito pequeno");
		}
		else{
			alert("ACEITO");
		}
	});

	
});
