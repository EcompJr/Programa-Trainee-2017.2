<?php
	
	/*
	var_dump($_POST["nome"]);
	var_dump($_POST["sobrenome"]);
	var_dump($_POST["senha"]);
	var_dump($_POST["cargo"]);
	var_dump($_POST["data"]);
	var_dump($_POST["email"]);
*/
	if($_POST["nome"] == "Kayo" 
	&& $_POST["email"] == "kayo@ecompjr.com.br" 
	&& $_POST["senha"] == "123456" 
	&& $_POST["data"] == "1994-07-14" 
	&& $_POST["sobrenome"]=="Costa" 
	&& $_POST["cargo"] == "Diretor de Recursos Humanos" ){

		echo "Nome: ".$_POST["nome"] ." ".$_POST["sobrenome"];
		echo "<br>";
		echo "Email: ".$_POST["email"];
		echo "<br>";
		echo "Senha: ".$_POST["senha"];
		echo "<br>";
		if($_POST["data"]== "1994-07-14"){
			$h = "14/07/1994";
		}
		echo "Data de Nascimento: ".$h;		
		echo "<br>";
		echo "Cargo na Empresa: ".$_POST["cargo"];
		echo "<h1>Usuário cadastrado com sucesso</h1>";

	}else{
		echo "Dados incorretos, por favor tente novamente";
	}
	
?>