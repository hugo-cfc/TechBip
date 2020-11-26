<?php
  $_name = $_POST['name'];
  $_cpf = $_POST['cpf'];
  $_service = $_POST['service'];
   
  $_server = "localhost";
  $_user = "root";
  $_password = "";
  $_db = "techbip";
  
  $_conn = mysqli_connect($_server, $_user, $_password, $_db);

  if (mysqli_connect_errno()) {
    die("Conexão falhou: " . mysqli_connect_errno());
  }

  $registerDates = "INSERT INTO clientes (name,cpf,service) VALUES ('$_name', '$_cpf', '$_service')";
  $resgister = mysqli_query($_conn, $registerDates);

  mysqli_close($_conn)
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../src/myicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBip - Cadastrado</title>
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/sucess/style.css">
</head>
<body>
    <header> 
      <a href="../home/">
        <img src="../../src/logo2.png" alt="logo" id="logo-header">
      </a>
      <h4>O que fazer quando seu computador estiver com problema? Procura a TechBip, a gente resolve teu problema!</h4>
    </header>
    <div class="container">
      <h1>CLIENTE CADASTRADO</h1>
      <div class="container-buttons">
        <a href="../home/"><button class="buttonForm buttonForm1">HOME</button></a>
        <a href="../list/"><button class="buttonForm">VER CADASTROS</button></a>
      </div>
    </div>
    <script type="text/javascript" src="../../script/index.js"></script>
</body>
</html>


