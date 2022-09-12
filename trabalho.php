<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
    background-color: #273747;
    background-size: cover;
    }
    div {
    background-color: rgba(255,255,255,.8);
    margin: 100px auto 100px auto;
    padding: 10px;
    width: 550px;
    min-height:300px;
}
</style>
</head>
<body>
    <div>
        <?php
            $numeros = [53, 82, 80, 66, 41, 64, 28, 99, 77, 57];
            print_r($numeros);
            echo "</br>Resultado previsto: Soma: 647</br>";
            echo "resultado obitido:".array_sum($numeros) ;
            
        ?>
    </div>
</body>
</html>