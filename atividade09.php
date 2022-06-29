<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atividade 09</title>
</head>
<body>
	<form action="#">
		<p>Informe um número: <input type="text" name="numero"></p>
	</form>	
</body>
</html>

<?php 
if(count($_GET) > 0 && isset($_GET['numero']) && $_GET != ''){
	$numero = $_GET['numero'];
	$x = 0;

	echo(' Impressão do programa: ');
	for($x = 0; $x <= $numero; $x++){
		echo(" $x");
	}
}

 ?>