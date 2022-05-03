<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
</head>
<body>
    <form action="#">
        <p>Insira um valor: <input type="text" name="numero"></p>
    </form>
</body>
</html>

<?php
if(count($_GET) > 0 && isset($_GET['numero']) && $_GET != ''){
    $numero = $_GET['numero'];

    if($numero > 0){
        echo('Valor positivo');
    }
    elseif ($numero == 0) {
        echo('Valor é nulo');
    }
    else{
        echo('Valor negativo');
    }
}

?>