<?php
  $_server = "localhost";
  $_user = "root";
  $_password = "";
  $_db = "techbip";
  
  $_conn = mysqli_connect($_server, $_user, $_password, $_db);

  if (mysqli_connect_errno()) {
    die("Conexão falhou: " . mysqli_connect_errno());
  }

  $_consult_clients = "SELECT name, cpf, service FROM clientes";

  $_consult_query = mysqli_query($_conn, $_consult_clients);

  if (!$_consult_query) {
    die("Falha na consulta ao banco de dados.");
  }

  mysqli_close($_conn);

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../src/myicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBip - Clientes</title>
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/list/style.css">
</head>
<body>
    <header>
      <a href="../home/">
        <img src="../../src/logo2.png" alt="logo" id="logo-header">
      </a>
      <h4>O que fazer quando seu computador estiver com problema? Procura a TechBip, a gente resolve teu problema!</h4>
    </header>
    <div class="container">
      <h1>CLIENTES</h1>
        <table>
          <thead>
            <td>NOME:</td>
            <td>CPF:</td>
            <td>SERVIÇO:</td>
          </thead>
          <tbody>
            <?php
              while ($_clients = mysqli_fetch_row($_consult_query)) {
                echo"
                  <tr>
                    <td> $_clients[0]</td>
                    <td> $_clients[1]</td>
                    <td> $_clients[2]</td>
                  </tr>
                ";                
              }
            ?>
          </tbody>
        </table>
    </div>
    <script type="text/javascript" src="../../script/index.js"></script>
</body>
</html>
