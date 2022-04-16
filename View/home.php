<?php
require 'Controller/controller.php';
?>

<h3>Cadastrar Livro</h3>
<form action="" method="post">
    <p>
        Nome do Livro:
        <input type="text" name="livro">
        Autor:
        <input type="text" name="autor">
        <input type="submit" value="Cadastrar" name="cadastrar">
    </p>
</form>

<h3>Pesquisar no banco de dados</h3>
<form method="post">
    Pesquisar por nome do Autor:
    <p>
        Autor:
        <input type="text" name="autor">
        <input type="submit" value="Pesquisar" name="pesquisar">
    </p>
</form>

<?php

if(isset($_POST['cadastrar'])){ #se o botão name="cadastrar" foi clickado
    $livro = $_POST['livro'];
    $autor = $_POST['autor'];

    $instance = new Controller();
    $instance->salvar($livro, $autor);
}

if(isset($_POST['pesquisar'])){ #se o botão name="pesquisar_livro" foi clickado
    $autor = $_POST['autor'];

    $instance = new Controller();
    $instance->listar($autor);

}

?>
