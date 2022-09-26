<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    
    </section>
    <div>
        
        <?php
        $titulo = $_GET['titulo'];
        $corpo  = $_GET['corpo'];
        $autor = $_GET['autor'];
        if ($titulo == '' || $corpo == '' || $autor == ''){
            switch ($titulo){
                case "":
                echo 'Insira o titulo do texto<br>';
            }
            switch($corpo){
                case"":
                    echo 'insira o corpo do texto<br>';
            }
            switch($autor){
                case"":
                    echo'insira o autor do texto<br>';
            }
            
        }
        else if($titulo <> "" || $corpo <> "" || $autor <> "") {
            echo '<img src="../iamgem/imagem1.png" alt="" height="200px" width="550px" >';
            echo '<p>'.'Titulo: '. $titulo.'</p>'. '<br>';
            echo '<p>'.'Conteudo: '.$corpo.'</p>'. '<br>';
            echo '<p>'.'Autor: '.$autor.'</p>';
        }
        ?>
    </div>
</body>
</html>

