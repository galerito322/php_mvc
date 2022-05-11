<?php
    //Vai realizar a conexão com a base dados
    class ConexaoPDO{

        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "biblioteca";
        
        public function getConexao(){
            try{
                $conn = new PDO(
                        "mysql:host=$this->servername;dbname=$this->dbname", 
                        $this->username, 
                        $this->password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                throw $e;
            }
            return $conn;
        }

    }
?>