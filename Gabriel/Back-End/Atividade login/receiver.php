<?php
	
	$nome=$_POST["Nome"];
	if ($_POST["Nome"] == "Kayo Costa" && $_POST["email"] == "kayo@ecompjr.com.br" && $_POST["senha"] == "123456" && $_POST["date"] == "07/10/1994" && $_POST["cargo"] == "Diretor de Recursos Humanos"){
		echo "Bem vindo <br> $nome";
	}
	else{
		echo "sai daqui seu feio";
	}
	

?>
<br><a href="index.php">Voltar</a>

