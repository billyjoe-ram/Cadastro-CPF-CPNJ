<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/cadastro.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <title>Atividade de Cadastro</title>

</head>

<body>

    <?php

    $nome = "";
    $telefone = "";
    $email = "";
    $endereco = "";
    $codigocpf = "";
    $codigocnpj = "";
    $razao = "";
    $fantasia = "";
    $data = "";
    $dadoscompletos = false;

    ?>

    <header class="header-main">
        <h1>Cadastro</h1>
    </header>

    <div class="container">

        <form action="sistema/recebemensagem.php" method="post" id="formul">

            <input type="text" name="txtnome" id="txtnome" placeholder="Nome Completo" class="field long-field" value="<?php echo $nome; ?>"></br>

            <input type="email" name="txtemail" placeholder="E-mail" class="field long-field" value="<?php echo $email; ?>"></br>

            <input type="text" name="date" id="txtdata" placeholder="Data de Nascimento" maxlength="11" class="field short-field date" value="<?php echo $data; ?>">

            <input type="tel" name="txttelefone" id="txttelefone" maxlength="11" class="field short-field phone_with_ddd" placeholder="Telefone" value="<?php echo $telefone; ?>"></br>

            <input type="text" name="txtendereco" id="txtendereco" placeholder="Endereço" value="<?php echo $endereco; ?>" class="field long-field"></br>


            <label for="cpf">Pessoa Física</label>

            <input type="radio" id="pf" name="pessoa" value="pf">
            
            <input type="radio" id="pj" name="pessoa" value="pj">
            
            <label for="cnpj">Pessoa Jurídica</label></br>


            <input type="text" name="txtcpf" id="txtcpf" placeholder="CPF" maxlength="14" class="field short-field cpf" value="<?php echo $codigocpf; ?>"></br>

            <input type="text" name="txtcnpj" id="txtcnpj" placeholder="CNPJ" value="<?php echo $codigocnpj; ?>" class="field short-field"></br>


            <input type="text" name="txtrazao" id="txtrazao" placeholder="Razão Social" value="<?php echo $razao; ?>" class="field long-field"></br>

            <input type="text" name="txtfantasia" id="txtfantasia" placeholder="Nome Fantasia" value="<?php echo $fantasia; ?>" class="field long-field"></br>


            <input type="submit" value="Enviar">
        </form>

    </div>

    <script src="js/scripts.js"></script>
</body>

</html>