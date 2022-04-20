<?php

require '../Model/model.php';

class Controller{

    public function salvar($livro, $autor){
        #echo "Dentro do metodo salvar()";
        
        $instacia = new Model();
        $instacia->save($livro, $autor); #chama o metodo save() da classe model
    }

    public function listar($autor){   
        #echo "Dentro do metodo listar()";

        $instacia = new Model();
        $instacia->find($autor); #chama o metodo save() da classe model  
    }

}







