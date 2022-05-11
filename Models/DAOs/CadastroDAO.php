<?php

   require '../Conexao/ConexaoPDO.php';

   class CadastroDAO {

      public function salvar($cadastroModel) {

         try {
            $conexaoPDO = new ConexaoPDO();
            $conn = $conexaoPDO->getConexao();

            $sql = "INSERT INTO livros (nome_livro, autor) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1,$cadastroModel->getAutor());
            $stmt->bindParam(2,$cadastroModel->getLivro());
            $stmt->execute();
            
         #echo "O livro ($livro) do autor ($autor) foi inserido no banco de dados";
         } catch(Exception $e) {
            throw $e;
         }
         $conn = null;
      }

      function buscar(){

         $conexaoPDO = new ConexaoPDO();
         $conn = $conexaoPDO->getConexao();

         $sql = "SELECT * FROM livros WHERE autor = ?";
         $stmt = $conn->prepare($sql);
         $stmt->bindParam(1,$autor);
         $stmt->execute();

         $lista = array();
         while($objPDO = $stmt->fetch(PDO::FETCH_OBJ)){
             //converti o objeto PDO em ContatoModelo
            $cadastroModel = new CadastroModel();
            #$cadastroModel->setId($objPDO->id);
            $cadastroModel->setLivro($objPDO->livro);
            $cadastroModel->setAutor($objPDO->autor);
            array_push($lista, $cadastroModel);                    
         }        
         return $lista;
      }

   }

?>
