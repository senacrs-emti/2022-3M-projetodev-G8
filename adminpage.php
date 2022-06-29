<?php

include_once 'conexao.php';

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Pagina de cadastro</title>
</head>
  
<body>
    <form action="cadastrandolivro.php" method="post">
        <div class="cad-box">
            <h1>Insira as informações abaixo:</h1>
  
            <div class="textbox">
                <input type="text" placeholder="Título"
                         name="titulo" value="">
            </div>
  
            <div class="textbox">
                <input type="text" placeholder="Autor"
                         name="autor" value="">
            </div>

            <div class="textbox">
                <input type="text" placeholder="Foto (faça upload GitHub)"
                         name="foto" value="">
            </div>

            <div class="textbox">
                <input type="text" placeholder="Descrição"
                         name="descricao" value="">
            </div>
  

            <div class="textbox">
                <select class="form-select" id="categoria" name="categoria">
                    <option selected>Selecione a categoria do livro</option>
                    <option value="1">Ação e Aventura</option>
                    <option value="2">Comédia</option>
                    <option value="3">Drama</option>
                    <option value="4">Ficção</option>
                    <option value="5">Romance</option>
                    <option value="6">Suspense</option>
                    <option value="7">Terror</option>
                    <option value="8">Ler antes de morrer</option>
                </select>
            </div>

            <input class="button" type="submit"
                     name="cadastrar" value="Cadastrar Livro">
        </div>
    </form>

</body>
  
</html>