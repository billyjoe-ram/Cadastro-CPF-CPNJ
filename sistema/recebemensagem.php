<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/recebe.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Seus Dados</title>
</head>
<body>
  <?php 
    $nome = "" ;
    $telefone = "" ;
    $email= "" ;
    $endereco = "";
    $codigocpf = "";
    $codigocnpj = "";
    $razao = "";
    $fantasia = "";
    $data = "";
    $conteudo = "";
    $dadoscompletos = false;

    if ($codigocpf = trim($_POST['txtcpf']) > "")
      if (isset($_POST['txtnome'], $_POST['txttelefone'], $_POST['txtdata'] , $_POST['txtemail'], $_POST['txtendereco'], $_POST['txtcpf'])) 
      {
        $nome = trim($_POST['txtnome']);
        $telefone = trim($_POST['txttelefone']);
        $email = trim($_POST['txtemail']);
        $endereco =  trim($_POST['txtendereco']);
        $data = trim($_POST['txtdata']);
        $codigocpf = trim($_POST['txtcpf']);
        if(!empty($nome) &&
          !empty($telefone) && 
          !empty($email) && 
          !empty($endereco) && 
          !empty($data) &&
          !empty($codigocpf)){
            $conteudo = "pf";
            $dadoscompletos = true;
          }
      }

    if ($codigocnpj = trim($_POST['txtcnpj']) > "")
      if (isset($_POST['txtrazao'], $_POST['txttelefone'], $_POST['txtfantasia'], $_POST['txtemail'], $_POST['txtendereco'], $_POST['txtcnpj']))
      {
        $razao = trim($_POST['txtrazao']);
        $telefone = trim($_POST['txttelefone']);
        $email = trim($_POST['txtemail']);
        $endereco =  trim($_POST['txtendereco']);
        $fantasia = trim($_POST['txtfantasia']);
        $codigocnpj = trim($_POST['txtcnpj']);

        if(!empty($razao) &&
        !empty($telefone) && 
        !empty($email) && 
        !empty($endereco) && 
        !empty($fantasia) &&
        !empty($codigocnpj)){
          $dadoscompletos = true;
          $conteudo = "pj";
        }
      }
  ?>
            
      
        <?php 
          if ($dadoscompletos) {
            echo "<div class='header'><h1>Dados Recebidos:</h1></div>" ;
            echo "<div class='content'>";
            if ($conteudo == "pf")
            {
              ?> <h3>Pessoa Física</h3> <?php
              echo "<div class='card'>";
              echo "Nome: $nome <br>" ;
              echo "CPF: $codigocpf <br>";
              echo "Data de Nascimento: $data <br> </div>";
            }
            else if ($conteudo == "pj")
            {
              ?> <h3>Pessoa Jurídica</h3> <?php
              echo "<div class='card'>";
              echo "Razão Social: $razao <br>" ;
              echo "Nome Fantasia: $fantasia <br>";
              echo "CNPJ: $codigocnpj <br> </div>";
            }
            echo "<div class='card'>";
            echo "Endereço: $endereco <br>";
            echo "Telefone: $telefone<br>";
            echo "E-mail: $email<br> </div>";
          }
          else 
            echo "<h3>Preencha os dados corretamente!<h3>";
          echo "</div>"
        ?>
      <img src="https://www.pixilart.net/images/art/effba22a6a7d083.gif?v=1491499546" alt="Cat">

</body>
</html>