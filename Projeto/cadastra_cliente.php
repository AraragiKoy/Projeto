<?php
    require("conecta.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $faixa = $_POST['faixa'];
    $genero = $_POST['genero'];
    // verifica se há informção antes de enviar ao banco
    $opcoes = isset($_POST['produto']) ? $_POST['produto'] : null;
    // organiza as checkbox em uma string antes de enviar ao banco
    $produto = implode(",", $opcoes);
    $recado = $_POST['recado'];

    $sql = "INSERT INTO cliente (nome_cli, email_cli, faixa_cli, genero_cli, produto_cli, recado_cli)
    VALUES ('$nome', '$email', '$faixa', '$genero', '$produto', '$recado')";
    //faz a conexao e retorna o resutado
    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Cupom Registrado com Sucesso!</h1>";
      echo "<a href='index.html'><input type='button' value='Página Inicial'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>