<?php 

 require_once 'classes/Categoria.php';

 $categoria =  new Categoria();

 $nome = $_POST['nome'];

 $categoria->nome = $nome;

$categoria->inserir();//atribuindo o valor passado na query de inserção

header('Location:categorias.php');//header do php serve como o redirection das paginas



