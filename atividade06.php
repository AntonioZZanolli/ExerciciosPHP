<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 06</title>
</head>
<body>
    <form action="#">
        <p>Nota 1: <input type="text" name="Nota1"></p>
        <p>Nota 2: <input type="text" name="Nota2"></p>
        <p>Nota 3: <input type="text" name="Nota3"></p>
        <p>Nota 4:<input type="text" name="Nota4"></p>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
if (count($_GET) > 0 && isset($_GET['submit']) && $_GET != 0) {
    $Nota1 = $_GET['Nota1'];
    $Nota2 = $_GET['Nota2'];
    $Nota3 = $_GET['Nota3'];
    $Nota4 = $_GET['Nota4'];

    $media = ($Nota1 + $Nota2 + $Nota3 + $Nota4) / 4;
    
    if ($media < 7.0) {
        echo('Você foi reprovado');
    }
    else{
        echo('Você passou');
    }
}

?>