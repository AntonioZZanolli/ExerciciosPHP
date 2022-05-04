<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 07</title>
</head>
<body>
    <form action="#">
        <p>Informe a altura: <input type="text" name="altura"></p>
        <input type="radio" id="M" name="sexo" value="M">
        <label for="Masculino">Masculino</label><br>
        <input type="radio" id="F" name="sexo" value="F">
        <label for="Feminino">Feminino</label><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
if (count($_GET) > 0 && isset($_GET['submit']) && $_GET != 0) {
    $altura = $_GET['altura'];
    $sexo = $_GET['sexo'];

    if ($sexo == 'M') {
        $pesoIdeal = (72.7 * $altura) - 58;
    }
    else {
        $pesoIdeal = (62.1 * $altura) - 44.7;
    }
    echo('O peso ideal é de '. $pesoIdeal);
}

?>