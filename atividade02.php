<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
</head>
<body>
    <form action="#">
        <p>Insira um número: 
            <input type="text" name="numero">
        </p>
    </form>
</body>
</html>

<?php
if(count($_GET) > 0 && isset($_GET['numero']) && $_GET != ''){
    $numero = $_GET['numero'];

    if($numero < 10){
        echo('O valor não é igual ou maior a 10');
    }
    else{
        echo('O valor é igual ou maior que 10');
    }
}

?>