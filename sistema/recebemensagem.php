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
        !empty($codigocpf))
          $dadoscompletos = true;
    }
  if ($codigocnpj = trim($_POST['txtcnpj']) > ""){
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
      !empty($codigocnpj))
        $dadoscompletos = true;
    }
  }

  echo "<p>";
        if ($dadoscompletos) {
          echo "<h3>Dados Recebidos:</h3>" ;
          if ($codigocpf > "")
          {
            echo "Nome: $nome <br>" ;
            echo "CPF: $codigocpf <br>";
            echo "Data de Nascimento: $data <br>";
          }
          else 
          {
            echo "Razão Social: $razao <br>" ;
            echo "Nome Fantasia: $fantasia <br>";
            echo "CNPJ: $codigocnpj <br>";
          }
          echo "Endereço: $endereco <br>";
          echo "Telefone: $telefone<br>";
          echo "E-mail: $email<br>";
          echo "</p>";
        }
        else 
          echo "<h3>Preencha os dados corretamente!<h3>";
?>