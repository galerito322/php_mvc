<?php
    require '../Models/CadastroModel.php';
    session_start();
    $listaCadastros = $_SESSION['lista'];

    if(count($listaCadastros) > 0){
        foreach($listaCadastros as $cadastro){
            echo $cadastro->getLivro() . "  ";
            echo $cadastro->getAutor() . "<br>";
        }
    }else{
        echo "Não possui registro!";
    }

?>