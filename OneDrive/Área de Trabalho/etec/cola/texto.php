<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
    
    </section>
    <div>
        
        <?php
        $titulo = $_GET['titulo'];
        $conteudo  = $_GET['conteudo'];
        $autor = $_GET['autor'];
        if ($titulo == '' || $conteudo == '' || $autor == ''){
            switch ($titulo){
                case "":
                echo 'Insira o titulo do texto<br>';
            }
            switch($conteudo){
                case"":
                    echo 'insira o conteudo$conteudo do texto<br>';
            }
            switch($autor){
                case"":
                    echo'insira o autor do texto<br>';
            }
            
        }
        else if($titulo <> "" || $conteudo <> "" || $autor <> "") {
            echo '<img src="./imagem/imagem1.png" alt="" height="200px" width="100%" >';
            echo '<p>'.'Titulo: '. $titulo.'</p>'. '<br>';
            echo '<p>'.'Conteudo: '.$conteudo.'</p>'. '<br>';
            echo '<p>'.'Autor: '.$autor.'</p>';
        }
        
        ?>
    </div>
</body>
</html>

