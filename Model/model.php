<?php

class Model {

   public function save($livro, $autor) {
      // Create connection
      $conn = mysqli_connect("localhost", "root", "", "biblioteca"); #servaname, username, password, database
      // Check connection
      if (!$conn) { #se não for encontrado
         echo "Error";
      }
      
      #comandos para inserir no banco de dados
      $sql = "INSERT INTO livros (nome_livro, autor) VALUES ('$livro', '$autor')";
      mysqli_query($conn, $sql);

      echo "O livro ($livro) do autor ($autor) foi inserido no banco de dados";

      }

   public function find($autor) {
      // Create connection
      $conn = mysqli_connect("localhost", "root", "", "biblioteca"); #servaname, username, password, database
      // Check connection
      if (!$conn) { #se não for encontrado
         echo "Error";
      }
   
      #comandos para visualizar no banco de dados
      $sql = "SELECT id, nome_livro, autor FROM livros WHERE autor='$autor'";
      $result = mysqli_query($conn, $sql);
   
      echo "<br><p> O autor:($autor) possui os livros: </p><br>";
   
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<br>" . $row["nome_livro"]. " / ----- id: " . $row["id"]. "";
         }
      }

   public function update() {
      // logica para atualizar no banco
   }

   public function remove() {
      // logica para remover do banco
   }

   public function listAll() {
      // logica para listar o banco
   }

}

?>
