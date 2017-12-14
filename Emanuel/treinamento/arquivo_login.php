<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>		
		<?php

		$valores = array("vermelho"=>"bluezão", "blue"=>"redzão", "black"=>"cleiton");

		
		echo '<form action="dados_login.php" method="post" target="_blank">
				<input type="text" name="nome" placeholder="digite seu nome">Nome<br>
				<input type="text" name="sobrenome" placeholder="digite seu sobrenome">Sobrenome<br>
				<input type="email" name="email" placeholder="digite seu email">Email<br>
				<input type="password" name="senha" placeholder="digite sua senha">Senha<br>
				<input type="date" name="data">Nascimento<br>
				<input type="text" name="cargo" placeholder="Ex. Diretor de Marketing">Cargo<br>
				<input type="submit" name="enviar" value="Enviar">
			</form>';
			
		?>

		<!--
			$valores = array("vermelho"=>"bluezão", "blue"=>"redzão", "black"=>"claiton");

			echo $valores["black"];
		-->
	</body>
</html>