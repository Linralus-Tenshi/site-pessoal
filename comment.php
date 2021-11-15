<?php

$sql = "SELECT * FROM comentarios";
date_default_timezone_set('America/Sao_Paulo');


$conexao = new PDO('mysql:host=127.0.0.1;dbname=sitepessoal','William K.','IYWlA6pK6bjJhjIH');

$resultado = $conexao->query($sql);
$lista = $resultado->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/comment-style.css">
    <!-- desenvolvido por William Kalel v0.0.9 -->
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="imagens/favicon/site.webmanifest">
</head>
<body>

        <!-- header -->
    <div class="header" >
        <div class="title logo">
            <h1>William Kalel</h1>
        </div>
        
        <div class="title menu">
            <a href="index.html">home</a>
        </div>
    </div>

        <!-- banner -->
    <div class="banner-area" id="header">
        <img src="imagens/banner/banner.gif" class="banner">
    </div>

        <hr />

        <!-- content -->
    <div class="structure">
        <div class="content-text">

            <h1><a href="form-comment.html">Clique aqui</a> para deixar o seu comentário.</h1>

                <h2>Comentários:</h2>
			
            <?php foreach ($lista as $linha): ?>
                <div class="comment-area">
                    <div class="area info">
                        <p>Nome: <?php echo $linha['nome'] ?></p>
                        <p>Turma: <?php echo $linha['turma'] ?></p>
                        <p>Nº: <?php echo $linha['id'] ?></p>
                        <p><?php echo $linha['data'] ?></p>
                    </div>
				    
                    <div class="area comment">
                        <p><?php echo $linha['comentario'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        
        </div>
        
        <div class="footer-area">
            <div class="footer left">
                <p>Desenvolvido por William Kalel - 2021</p>
            </div>

            <div class="footer right">
                <p>Todos os direitos reservados</p>
            </div>
        </div>
    </div>
</body>
</html>