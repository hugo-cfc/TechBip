<?php
  $_resultado = 0;
  if (isset($_POST["result"])) {
    $_number_1 = isset($_POST["num1"]) ? $_POST["num1"] : 0;  
    $_number_2 = isset($_POST["num2"]) ? $_POST["num2"] : 0;
    $_resultado = $_number_1 + $_number_2;
  }
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../src/myicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBip</title>
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/home/style.css">
</head>
<body>
    <header>
        <img src="../../src/logo2.png" alt="logo" id="logo-header">
        <h4>O que fazer quando seu computador estiver com problema? Procura a TechBip, a gente resolve teu problema!</h4>
    </header>
    <div class="container">
        <h3>Agende sua vistoria!</h3>
        <div class="form-div">
            <form action="../../server/conexao.php" method="post">
                <label for="name" name="name" >Nome:</label>
                <input type="text" name="name" id="name" placeholder="Digita nome">
                <label for="cpf" >CPF:</label>
                <input type="number" name="cpf" id="cpf" placeholder="000.000.000-00" data-mask="000.000.000-00">
                <div id="radio-container">
                    <label >Selecione o serviço:</label>
                    <span>
                        <input type="radio" name="service" value="manutencao">Manutenção
                    </span>
                    <span>
                        <input type="radio" name="service" value="reparo">Reparo
                    </span>
                    <span>
                        <input type="radio" name="service" value="instalacao">Instalação de APP
                    </span>
                    <span>
                        <input type="radio" name="service" value="linux">Linux
                    </span>
                    <span>
                        <input type="radio" name="service" value="windows">Windows
                    </span>                                 
                    <button type="submit" name="submit_form" class="buttonForm">Enviar</button>
                  </div>
            </form>
            <a href="../list/index.php"><button class="buttonForm">Lista de cadastrados</button></a>
            <form action="index.php" name="calc" method="POST">
              <label>Calcule (Soma)</label>                      
              <input type="number" name="num1" placeholder="Digite um número"><br>
              <input type="number" name="num2" placeholder="Digite outro número"><br>
              <button type="submit" name="result" class="buttonForm button-calc">Calcular</button>
              <button type="reset" class="buttonForm button-calc">Limpar</button><br>
              <label>Resultado:</label>                      
                <input 
                  type="text"
                  name="resp"
                  id="resp"
                  placeholder="Resultado"
                  value="<?php                           
                    echo $_resultado;
                  ?>" 
                  readonly="true"><br>
            </form>               
        </div>
        <div class="div-desc">
            <div>
                <h2>Manutenção Preventiva</h2>
                <p>
                    A manutenção preventiva está voltada para a realização de tarefas de manutenção que possuem como objetivo a prevenir e evitar problemas que causem a parada ou a redução no desempenho dos equipamentos, gerando prejuízos e colocando em risco a segurança e integridade física de funcionários.
                </p>
                <p>
                    Na manutenção preventiva, os equipamentos costumam passar por lubrificação de componentes e revisão completa dos sistemas elétricos e mecânicos.
                </p>            
            </div>
            <div>
                <h2>Manutenção Corretiva</h2>
                <p>
                    A manutenção corretiva deve ser evitada e substituída a todo custo por políticas de manutenção preventiva. Quando ocorre a necessidade de uma manutenção corretiva, significa que determinada máquina apresentou falhas que impedem o seu funcionamento adequado, interrompendo assim a linha de produção da empresa. Nesta hora a equipe de manutenção precisa agir o mais rápido possível para reparar ou substituir componentes danificados, com o intuito de retornar com a produção o mais rápido possível, minimizando os impactos.
                </p>
                <p>
                    Para isso, é preciso contar com uma equipe de manutenção altamente capacitada.
                </p>            
            </div>
            <div>
                <h2>Formatação de Computador</h2>
                <p>
                    Como tudo é apagado, a formatação também acaba com aqueles programas difíceis de desinstalar que atrasam a vida do usuário, assim como barras de navegador e outros. Outra vantagem igualmente importante é ficar totalmente seguro. Com a formatação, qualquer vírus ou praga que estava escondida na máquina é excluída.
                </p>          
            </div>
            <div>
                <h2>Limpeza do Computador</h2>
                <p>
                    Além da limpeza interna, é importante fazer uma "faxina lógica", ou seja, limpar arquivos temporários, erros no registro, desfragmentar os discos e o registro para que o computador fique mais rápido na execução de sua tarefas.
                </p> <br>
                <div>
                    <a href="https://www.hardware.com.br">Para mais informações sobre o assunto, confere aqui!</a>
                </div>          
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../../script/index.js"></script>
</body>
</html>
