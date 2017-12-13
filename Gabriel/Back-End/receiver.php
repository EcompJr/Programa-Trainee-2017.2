<?php
	echo "Nome:";
	if (isset($_POST["Nome"])) {
		echo $_POST["Nome"];
	}
	
	echo "<br>Idade:";
	echo $_POST["idade"];

?>
<br><a href="index.php">Pagina inicial</a>