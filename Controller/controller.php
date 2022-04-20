<?php

require '../Model/model.php';

class Controller{

    public function salvar($livro, $autor){
   
        $instacia = new Model();
        $instacia->save($livro, $autor); 
    }

    public function listar($autor){   

        $instacia = new Model();
        $instacia->find($autor); 
    }

}







