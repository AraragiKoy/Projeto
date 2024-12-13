<!doctype html>
<html>

    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Título da página (aparece na aba) -->
        <title>Autalizar dados de cliente</title>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen">
    </head>

    <body>  
    <center>
        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Autalizar dados de cliente</h1>
            <p id="subtitulo">Complete os campos com suas informações</p>
            <br>
        </div>

        <?php
    $id = $_POST['id'];    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $faixa = $_POST['faixa'];
    $genero = $_POST['genero'];

?>

        <!-- Início do formulário -->
        <form method="POST" action="atualiza_exclui.php">

            <fieldset class="grupo">
                
                <?php echo '<input hidden type="text" name="id" id="id" value="'. $id .'">'?>
                <!-- Campo do nome completo com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nome" required><strong>Nome Completo*</strong></label>
                    <?php echo '<input type="text" name="nome" id="nome" value="'. $nome .'">'?>
                </div>

                <!-- Campo de email com legenda "email" e css de classe "campo"-->
                <div class="campo">
                    <label for="email" required><strong>Email*</strong></label>
                    <?php echo '<input type="text" name="email" id="email" value="'. $email .'">'?>
                </div>
            </fieldset>

            <!-- Campo de faixa etária com 3 opções de botões selecionáveis (radio button) e css de classe "campo" -->
            <div class="campo">
                <label><strong>Qual sua faixa etária?</strong></label>
                <label>
                    <?php 
                        if ($faixa == 'Menor que 18 anos') {
                            echo '<input type="radio" name="faixa" id="faixa" value="Menor que 18 anos" checked>Menor que 18 anos.';
                        } else {
                            echo '<input type="radio" name="faixa" id="faixa" value="Menor que 18 anos">Menor que 18 anos.';
                        }
                    ?>
                </label>
                <label>
                    <?php 
                        if ($faixa == '18 a 45 anos') {
                            echo '<input type="radio" name="faixa" id="faixa" value="18 a 45 anos" checked>18 a 45 anos.';
                        } else {
                            echo '<input type="radio" name="faixa" id="faixa" value="18 a 45 anos">18 a 45 anos.';
                        }
                    ?>
                </label>
                <label>
                <?php 
                    if ($faixa == '45 anos +') {
                        echo '<input type="radio" name="faixa" id="faixa" value="45 anos +" checked>45 anos +.';
                    } else {
                        echo '<input type="radio" name="faixa" id="faixa" value="45 anos +">45 anos +.';
                    }
                ?>
                </label>
            </div>

            <!-- Campo de gênero com 3 opções para escolha (select option) e css de classe "campo" -->
            <div class="campo">
                <label for="genero"><strong>Gênero</strong></label>
                <select name="genero" id="genero" required>
                    <option value="" disabled>Selecione</option>
                    <?php 
                    if ($genero == 'Masculino') {
                        echo '<option name="genero" value="Masculino" selected>Masculino</option>';
                    } else {
                        echo '<option name="genero" value="Masculino">Masculino</option>';
                    }

                    if ($genero == 'Feminino') {
                        echo '<option name="genero" value="Feminino" selected>Feminino</option>';
                    } else {
                        echo '<option name="genero" value="Feminino">Feminino</option>';
                    }

                    if ($genero == 'Outro') {
                        echo '<option name="genero" value="Outro" selected>Outro(s)</option>';
                    } else {
                        echo '<option name="genero" value="Outro">Outro(s)</option>';
                    }
                    ?>
                </select>
            </div>

            <!-- Botão para enviar o formulário -->
            <?php 
            echo '<button class="botao" name="action" type="submit" value="atualizar">Atualizar</button>';
            echo '<button name="action" type="submit" value="excluir">Excluir</button>';
            ?>
        </form>
    </center>
    </body>

</html>




