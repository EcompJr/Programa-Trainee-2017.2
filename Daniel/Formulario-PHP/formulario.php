<?php

		if ($_POST["nome"] == "Daniel Santana" && $_POST["email"] == "daniel@ecomp.br" && $_POST["senha"] == "123456" && $_POST["data"] == "18/03/1997" && $_POST["cargo"] == "trainee") {
			
			echo  "NOME : ", $_POST["nome"], "<br>";
			echo  "EMAIL : ", $_POST["email"], "<br>";
			echo "SENHA : ", $_POST["senha"], "<br>";
			echo "NASCIMENTO : ", $_POST["data"], "<br>";
			echo "CARGO : ", $_POST["cargo"];



		}else{
			echo "Dados incorretos";
		}
		


 ?>