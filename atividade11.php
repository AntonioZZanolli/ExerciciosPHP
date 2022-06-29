<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atividade 11</title>
</head>
<body>
	<form action="#">
		<p>Informe o primeiro número: <input type="text" name="val1" placeholder="val1"></p>
		<p>Informe o segundo número: <input type="text" name="val2" placeholder="val2"></p>
        <input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>

<?php 
if(count($_GET) > 0 && isset($_GET['val1']) && isset($_GET['val2']) && intval($_GET) && $_GET['val1'] != '' && $_GET['val2'] != ''){
	$val1 = $_GET['val1'];
	$val2 = $_GET['val2'];

	for ($i=$val1+1; $i < $val2 ; $i++) { 
		echo $i." ";
	}
}
?>