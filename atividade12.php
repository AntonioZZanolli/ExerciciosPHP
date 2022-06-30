<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atividade 12</title>
</head>
<body>
	<form action="#">
		<p>Primeiro valor: <input type="text" name="val1" placeholder="val1"></p>
		<p>Segundo valor: <input type="text" name="val2" placeholder="val2"></p>
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>

<?php 
if (count($_GET) > 0 && isset($_GET['val1']) && isset($_GET['val2']) && intval($_GET) && $_GET['val1'] != '' && $_GET['val2'] != '') 
	{
	
	$val1 = $_GET['val1'];
	$val2 = $_GET['val2'];
	$calculo = 0;

	for ($i= 0; $i < $val1; $i++) { 
		$calculo += $val2;
	}

	for ($i=0; $i < $val1 ; $i++) { 
		if ($i < $val1-1) {
			echo $val2.' + ';
		}else{
			echo $val2.' = '.$calculo;
		}
	}
	
}
?>