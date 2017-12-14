<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<form action="submit.php" method="POST">
		Nome:
		<input type="text" name="nome" placeholder="Nome">
		<br>
		Email:
		<input type="email" name="email" placeholder="youremail@xxxxxx">
		<br>
		Senha:
		<input type="password" name="senha" placeholder="Senha">
		<br>
		Data:
		<input type="date" name="data">
		<br>
		Cargo:
		<input type="text" name="cargo" placeholder="Ex: Diretor de Projetos">
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>