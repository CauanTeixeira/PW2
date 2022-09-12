<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            $numeros = [53, 82, 80, 66, 41, 64, 28, 99, 77, 50];
            print_r($numeros);
            echo "</br>Resultados esperados: Maior: 99; Menor: 28; Média: 64";
            echo "</br> Maior valor do array: ".max($numeros);
            echo "</br> Menor valor di array: ". min($numeros);
            echo "</br> a media dos valores são: ".array_sum($numeros)/count($numeros)
        ?>
    </div>
</body>
</html>