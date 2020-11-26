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


