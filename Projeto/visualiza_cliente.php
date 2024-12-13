<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Cadastrados</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen">    
</head>

<body>
    <center>
        <h1>Clientes Cadastrados</h1>

        <table border="4">
            <tr>
                <td>Código</td>
                <td>NOME</td>
                <td>EMAIL</td>
                <td>FFAIXA ETARIA</td>
                <td>GENERO</td>
                <td>FAVORITOS</td>
                <td>Editar</td>
                
            </tr>
            <?php
                require("conecta.php");
                // busca os dados e organiza em uma tabela
                $dados_select = mysqli_query($conn, "SELECT * FROM cliente");

                while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<form method="POST" action="atualiza_cliente.php">';
                        echo '<tr>';
                        echo '<td><input disable name="id" value="'.$dado[0].'"></td>';
                        echo '<td><input disable name="nome" value="'.$dado[1].'"></td>';
                        echo '<td><input disable name="email" value="'.$dado[2].'"></td>';
                        echo '<td><input disable name="faixa" value="'.$dado[3].'"></td>';
                        echo '<td><input disable name="genero" value="'.$dado[4].'"></td>';
                        echo '<td><input disable name="favoritos" value="'.$dado[5].'"></td>';
                        echo '<td><input type= "submit" value="Editar cliente: '.$dado[0].'"></td>';
                        echo '</tr>';
                        echo '</form>';
                }
            ?>
            
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>