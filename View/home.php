<?php
require '../Controller/controller.php';
?>

<h3>Cadastrar Livro</h3>
<form method="POST">
    Nome do Livro:
    <input type="text" name="livro">
    Autor:
    <input type="text" name="autor">
    <input type="submit" value="Cadastrar" name="cadastrar"> 
</form>

<h3>Pesquisar no Banco de Dados</h3>
<form method="POST">
    Pesquisar livros do autor:
        <input type="text" name="autor">
        <input type="submit" value="Pesquisar" name="pesquisar">
</form>

<?php

if(isset($_POST['cadastrar'])){
    $livro = $_POST['livro'];
    $autor = $_POST['autor'];

    $instance = new Controller();
    $instance->salvar($livro, $autor);
}

if(isset($_POST['pesquisar'])){ 
    $autor = $_POST['autor'];

    $instance = new Controller();
    $instance->listar($autor);

}

?>
