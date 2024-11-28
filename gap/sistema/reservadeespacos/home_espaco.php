<?php

session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['id']);
      unset($_SESSION['senha']);
      header('Location: /gap/login_adm/index.php');
  }
  $logado = $_SESSION['id'];

?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/reserva.css">
  <title>Reservas Espaços</title>
</head>
<body>
<header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
				<li class="nav-item"><a href="/gap/portaria/consultarespacos.php">Consultar Reservas</a></li>
                <li class="nav-item"><a href="/gap/portaria/index.php">Início</a></li>
                <li class="nav-item"><a href="/gap/portaria/cadastrarvisitante.php">Cadastrar Visitante</a></li>
            </ul>
            <div class="sair-menu">
                <a href="sair.php" class="sair">Sair</a>
            </div>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>    
<br><br><br><br><br><br><br><br><br>
<center><div class="main">
    <br>
    <h1>Reserva de Espaços</h1>
    <div class="conteiner">
        <a href="hometheater.php" class="btn">Solicitação de Uso <br> do Home Theater</a>
        <a href="checklist.php" class="btn">Check List <br>de Patrimônio</a>
    </div>
</div></center>     
<br>
<!--===== FOOTER - 6 Parte =====-->
    <footer class="footer">
    <center><p class="footer__title"><div class="titulo-rodape"><a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a></div></p></center>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
        </div>
        <p class="footer__copy">© 2024 ADM - Administrador - Todos os direitos reservados | Desenvolvido por <a href="#">Matheus Carvalho</a></p>
    </footer>

    <script src="js/index.js"></script>
</body>
</html>