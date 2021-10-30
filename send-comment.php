<?php

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$comentario = $_POST['comentario'];

$sql = "insert into comentario (nome, turma, comentario) values ('$nome', '$turma', '$comentario')";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=sitepessoal','William K.','IYWlA6pK6bjJhjIH');
$conexao->exec($sql);

echo<<<HTML
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta chaset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentário Enviado!</title>
    <link rel="stylesheet" href="css/style.css">
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
            <a href="#redes-sociais">redes sociais</a><a href="#hobbies">hobbies</a><a href="#comentários">comentários</a>
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

            <h1>Muito obrigado pelo comentário, $nome!</h1>

        <p>Sua turma: $turma</p>
        <p>Seu comentário: $comentario</p>

        </div>
        
        <hr />

        <div class="banner-area">
            <img src="imagens/banner/footer-banner.gif" class="banner">
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
HTML;
?>