$(document).ready(function(){
    $("p").click(function(){
        $(this).hide(500);
    });

    $("h1").click(function(){

    });

    $("#inputSobrenome").hide();

    $("#buttonSobrenome").click(function(){
    	$("#inputSobrenome").show();
    });

    $("#buttonSubmit").click(function(){
    	if($("#inputSobrenome").val() == "")
    		alert("Por favor, escreva seu sobrenome");
    });
});
