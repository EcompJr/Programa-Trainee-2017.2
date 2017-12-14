<?php 
	if($_POST["nome"] == "Kayo Costa" 
		&& $_POST["email"] == "kayo@ecompjr.com.br" 
		&& $_POST["senha"] == "123456" 
		&& $_POST["data"] == "1994-10-07" 
		&& $_POST["cargo"] == "Diretor de Recursos Humanos"){
		echo "Usuario Cadastrado <br>";
		echo "Nome: ".$_POST["nome"]."<br>";
		echo "Senha: ".$_POST["senha"]."<br>";
		echo "Email".$_POST["email"]."<br>";
		echo "Data de Nascimento:".$_POST["data"]."<br>";
		echo "Cargo:".$_POST["cargo"]."<br>";
	}else{
		echo "Usuario Não cadastrado <br> Motivo: Os dados estão incorretos.";
	}
	
 ?>
