<?php
    require("conecta.php");
    //recebimento dos dados do POST
    if ($_POST['action'] == 'atualizar') {
      
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $faixa = $_POST['faixa'];
      $genero = $_POST['genero'];
      // criacao da mensagem para o banco de dados
      $sql = ("UPDATE cliente SET nome_cli='$nome', email_cli='$email', faixa_cli='$faixa', genero_cli='$genero' WHERE id_cli='$id'");
      // envio dos dados e tomada de decisao
        if ($conn->query($sql) === TRUE) {
          echo "<center><h1>Informações Atualizadas com Sucesso!</h1>";
          echo "<a href='index.html'><input type='button' value='Página Inicial'></a></center>";
        } else {
          echo "<h3>OCORREU UM ERRO NA ATUALIZAÇÃO: </h3>: " . $sql . "<br>" . $conn->error;
          echo "<a href='index.html'><input type='button' value='Página Inicial'></a></center>";
        }   
    } else if ($_POST['action'] == 'excluir') {
      //recebimento dos dados do POST 
      if ($_POST['action'] == 'excluir') {
        
        $id = $_POST['id'];

        // criacao da mensagem para o banco de dados
        $sql = ("DELETE FROM cliente WHERE id_cli='$id'");
        // envio dos dados e tomada de decisao
          if ($conn->query($sql) === TRUE) {
            echo "<center><h1>Informações Deletadas com Sucesso!</h1>";
            echo "<a href='index.html'><input type='button' value='Página Inicial'></a></center>";
          } else {
            echo "<h3>OCORREU UM ERRO AO DELETAR: </h3>: " . $sql . "<br>" . $conn->error;
            echo "<a href='index.html'><input type='button' value='Página Inicial'></a></center>";
          }
      } else {
        echo "<h3>OCORREU UM ERRO NO POST: </h3>: " . $sql . "<br>" . $conn->error;
        echo "<a href='index.html'><input type='button' value='Página Inicial'></a></center>";
      }
    }  
?>