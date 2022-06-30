<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atividade 15</title>
</head>
<body>
	<form action="#">
		<p>Insíra uma frase: <input type="text" name="texto" placeholder="Dígite um texto"></p>
		<p>Insíra uma palavra: <input type="text" name="palavra" placeholder="Dígite uma palavra"></p>
		<input type="submit">
	</form>
</body>
</html>

<?php 
if (count($_GET) && isset($_GET['texto']) && isset($_GET['palavra']) && $_GET['texto'] != '' && $_GET['palavra'] != '') {
	$texto = $_GET['texto'];
	$palavra = $_GET['palavra'];

	
}
?>