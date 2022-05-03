<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>
<body>
    <form action="#">
        <p>A: <input type="text" name="A"></p>
        <p>B: <input type="text" name="B"></p>
        <p>C: <input type="text" name="C"></p>
        <p>D: <input type="text" name="D"></p>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
if(count($_GET) > 0 && isset($_GET['submit']) && $_GET != ''){
    $A = $_GET['A'];
    $B = $_GET['B'];
    $C = $_GET['C'];
    $D = $_GET['D'];

    if(($A + $C) > ($B * $D)){
        echo('A+C é maior que B+D');
    } 
    elseif(($A + $C) == ($B * $D)){
        echo('A+C é igual a B+D');
    }
    else{
        echo('A+C é diferente de B+D');
    }
}
?>