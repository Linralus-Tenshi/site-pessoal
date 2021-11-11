<?php

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$comentario = $_POST['comentario'];

$sql = "insert into comentarios (nome, turma, comentario) values ('$nome', '$turma', '$comentario')";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=sitepessoal','William K.','IYWlA6pK6bjJhjIH');
$conexao->exec($sql);

header("Location: comment.php");

die();

?>