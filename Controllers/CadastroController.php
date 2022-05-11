<?php

require '../Models/CadastroModel.php';
require '../Models/DAOs/CadastroDAO.php';

class CadastroController{

    function salvar($livro, $autor){
        $cadastroModel = new CadastroModel();
        $cadastroModel->setlivro($livro);
        $cadastroModel->setAutor($autor);

        try{
            $cadastroDAO = new CadastroDAO();
            $cadastroDAO->salvar($cadastroModel); 
        
        }catch(Exception $e){
            throw $e;
        }
    }

    function buscar($autor){
        #echo 'passei aqui';
        //invocar o método do modelo para buscar pelo telefone,
        //o modelo vai devolver a resposta
        $contatoModel = new CadastroDAO();
        $listaCadastros = $contatoModel->buscar($autor);
        //redirecionar o usuário para view para ele ver o dados
        var_dump($listaCadastros);
        session_start();
        $_SESSION['lista'] = $listaCadastros;
        header('Location: ../View/mostrarContatosView.php');
    }

}







