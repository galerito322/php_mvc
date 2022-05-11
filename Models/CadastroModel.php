<?php

    class CadastroModel{

        #private $id;
        private $livro;
        private $autor;

       /*  function setId($id){
            $this->id = $id;
        }
 
        function getId(){
             return $this->id;
        } */

        function setLivro($livro){
            $this->livro = $livro;
        }

        function getLivro(){
            return $this->livro;
        }

        function setAutor($autor){
           $this->autor = $autor;
        }

        function getAutor(){
            return $this->autor;
        }

    }

?>