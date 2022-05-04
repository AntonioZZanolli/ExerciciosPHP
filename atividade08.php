<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 08</title>
</head>
<body>
    <form action="#">
        <p>Informe seu salário: <input type="text" name="salario"></p>
    </form>
</body>
</html>

<?php
if(count($_GET) > 0 && isset($_GET['salario']) && $_GET != ''){
    $salario = $_GET['salario'];
    if ($salario > 300) {
        $reajuste = $salario * 0.3;
    }
    else {
        $reajuste = $salario * 0.5;
    }
    echo('O reajuste do salário será de um adicional de '. $reajuste);
}

?>