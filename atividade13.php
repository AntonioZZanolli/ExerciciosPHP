<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atividade 13</title>
</head>
<body>
	<form action="#">
		<p>Dígite algo: <input type="text" name="val" placeholder="blablablabla"></p>
		<input type="submit">
	</form>
</body>
</html>

<?php 
if (count($_GET) > 0 && isset($_GET['val']) && $_GET['val'] != '') {
	$val = $_GET['val'];
	$size = strlen($val);

	echo nl2br('Número de caracteres = '.$size."\n");
	for ($i=0; $i < $size; $i++) { 
		echo $i.' ';
	}
}

?>