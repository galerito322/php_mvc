<?php
    require 'CadastroController.php';
    
    $controlador = $_GET['controlador'];
    $acao = $_GET['acao'];
    
    echo $controlador. " ";
    echo $acao. " ";

    if($controlador == "cadastroController"){
        //controlador CadastroController
        $cadastroController = new CadastroController();
        if($acao == "salvar"){
            //metodo de salvar
            $livro = $_POST['livro'];
            $autor = $_POST['autor'];
            try{
                $cadastroController->salvar($livro, $autor);
                 //deu tudo certo
                //redireciono o usuário para tela de sucesso
                header('Location: ../View/sucessoCadastro.html');
            }catch(Exception $e){
                //deu erro
                //redireciono o usuário para tela de erro
                header('Location: ../View/erroCadastroView.html');
            }


        }else{
            if($acao == "buscar"){
                $autor = $_POST['autor'];
                //metodo de buscar contatos
                $listaContatos = $cadastroController->buscar($autor);
                session_start();
                $_SESSION['lista'] = $listaContatos;
                header('Location: ../View/mostrarContatosView.php');
            }
        }
    }


?>