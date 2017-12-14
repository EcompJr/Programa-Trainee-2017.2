<?php
	require_once("MyDatabase.class.php");
	require_once("Connection.class.php");
	require_once("Member.class.php");

	$database = new MyDatabase();
	$member = new Member($_POST["Nome"], $_POST["senha"],$_POST["email"], $_POST["date"]);
	echo "Usuário cadastrado não importando oq estivesse escrito<br>";
	$database-> addMember($member);
	
?>
<br><a href="index.php">Voltar</a>


