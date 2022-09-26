    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <img src="" alt="">
        <div >
            <?php
            $user = $_POST['Login'];
            $senhas = $_POST['senhas'];
            if ($user == "etec" && $senhas == "etec"){
                echo '<form action="texto.php" method="get">
                <label for="text">Titulo:</label><br>
                <input type="text" name="titulo" id="titulo"><br>
                <label for="text">Conteudo:</label><br>
                <textarea name="conteudo" id="conteudo" cols="30" rows="10" ></textarea><br>
                <label for="text">Autor:</label><br>
                <input type="text" name="autor" id="autor"><br>
                <input type="submit" value="enviar">
            </form> ';
            }
            else if($user <> "etec"){
                echo  "login incorreto";
            }
            else if ($senhas <> "etec"){
                echo "senhas incorreta";
            }
            ?>
            
        </div>        
    </body>
    </html>
    