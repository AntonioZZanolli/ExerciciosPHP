<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atividade 14</title>
</head>
<body>
	<form action="#">
		<p>Dígite algo: <input type="text" name="val1" placeholder="Dígite algo"></p>
		<p>Dígite algo: <input type="text" name="val2" placeholder="Dígite algo"></p>
		<input type="submit">
	</form>
</body>
</html>

<?php 
if (count($_GET) && isset($_GET['val1']) && isset($_GET['val2']) && $_GET['val1'] != '' && $_GET['val2'] != '') {
	$val1 = $_GET['val1'];
	$val2 = $_GET['val2'];
	$size1 = strlen($val1);
	$size2 = strlen($val2);

	if ($size1 != $size2) {
		$validar = false;
	}else{
		for ($i=0; $i < $size1 ; $i++) { 
			if ($val1[$i] == $val2[$i]) {
				$validar = true;
			}else{
				$validar = false;
			}
		}
	}
	if ($validar == true) {
		echo "São iguais";
	}else{
		echo "São diferentes";
	}
}else{
	echo "Valor inválido";
}
?>