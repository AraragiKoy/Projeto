<?php
    include('conecta.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupons Cadastrados</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen">
</head>

<body>
    <center>
        <h1>Cupons Cadastrados</h1>
        
        <form action="">
            <input name="pesquisa" placeholder="Digite o email do cliente" type="email">
            <button type="submit">Pesquisar</button>
            <br><br>
        </form>
        <table border="4">
            <tr>
                <td colspan="5">Cupons</td>
            </tr>
            <?php
                //verifica se já existe alguma informção no GET
                if(!isset($_GET['pesquisa'])) {            
                } else {
                    // tratamento da sintaxe, melhor segurança no GET
                    $pesquisa = $_GET['pesquisa']; 
                    // criacao do select
                    $sql1 = mysqli_query($conn, "SELECT id_cli FROM cliente WHERE email_cli = '$pesquisa'");
                    $id = mysqli_fetch_assoc($sql1);
                    $sql2 = mysqli_query($conn, "SELECT * FROM cupons WHERE id_cli_FK = '$id[id_cli]'");

                    // apos resposta do banco o array é salvo ou uma mensagem de erro é apresentada                     
                    if ($sql2->num_rows == 0) { 
                    ?>
                        <tr>
                            <td colspan="3">Email não encontrado</td>
                        </tr>
                    <?php     
                    } else {
                        while($dados = $sql2->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>'.$dados['num_cupom'].'</td>';
                            echo '</tr>';
                        }
                    }
                }   
            ?>   
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>