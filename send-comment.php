<?php

$nome = $_POST['txtnome'];
$turma = $_POST['turma'];
$comentario = $_POST['comentario'];

echo "<h1>Comentário:</h1>";
echo "<p>Nome: $nome </p>";
echo "<p>Turma: $turma </p>";
echo "<p>Recado: $comentario </p>";

$sql = "insert into comentario (nome, turma, recado) values ('$nome', '$turma', '$comentario')";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=pessoal','root','');
$conexao->exec($sql);

echo "<h2>Comentário enviado com sucesso</h2>";

?>