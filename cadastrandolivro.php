<?php
include_once 'conexao.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$foto = $_POST['foto'];
$descricao = $_POST['descricao'];
$catid = $_POST['categoria'];


$sql = "INSERT INTO livros (Titulo, Autor, Foto, Descricao, CategoriaID) VALUES ('$titulo', '$autor', '$foto', '$descricao', '$catid')";

if (!$conn){
    die("Conexão falhou:" . mysqli_connect_error());
}else
    echo "Livro cadastrado com sucesso!";

?>