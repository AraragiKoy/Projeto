<?php
    require("conecta.php");

    $email = $_POST['email'];
    $cupom = $_POST['cupom'];
    //faz uma consulta ao banco e pega o id do cliente atraves do email
    $sql = mysqli_query($conn,"SELECT id_cli FROM cliente WHERE (email_cli= '$email')");
    $idcli= mysqli_fetch_assoc($sql);

    //caso haja informacoes da continuidade no processo de cadastro de cupom
    if (mysqli_num_rows($sql) > 0) {
      $sql = "INSERT INTO cupons (num_cupom, id_cli_FK) VALUES ('$cupom', '$idcli[id_cli]')";
      mysqli_query($conn, $sql);

      echo "<center><h1>Cupom Registrado com Sucesso!</h1>";
      echo "<a href='index.html'><input type='button' value='Página Inicial'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>