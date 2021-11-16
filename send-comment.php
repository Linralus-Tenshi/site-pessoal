<?php

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$comentario = $_POST['comentario'];
$data = date("d/m/Y - H:i");
date_default_timezone_set('America/Sao_Paulo');


$sql = "insert into comentarios (nome, turma, comentario, data) values ('$nome', '$turma', '$comentario', '$data')";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=sitepessoal','root','');
$conexao->exec($sql);

header("Location: comment.php");

die();

?>