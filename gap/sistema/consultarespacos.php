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
  <title>Consultar Reserva de Espaços</title>
</head>
<body>
<header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
				<li class="nav-item"><a href="cadastrarespacos.php">Reservas de Espaços</a></li>
                <li class="nav-item"><a href="index.php">Início</a></li>
                <li class="nav-item"><a href="cadastrarvisitante.php">Cadastrar Visitante</a></li>
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
    <h1>Consultar Reserva de Espaços</h1>
    <div class="conteiner">
        <a href="reservadeespacos/consultarsalaodefestas.php" class="btn">Resarva do Salão de Festas</a>
        <a href="reservadeespacos/consultargourmet.php" class="btn">Resarva do Espaço Gourmet</a>
        <a href="reservadeespacos/consultarchurras.php" class="btn">Resarva da Churrasqueira</a>
        <a href="reservadeespacos/home_consulta.php" class="btn">Reserva do Home Theater</a>
        <a href="reservadeespacos/consultarjogos.php" class="btn">Reserva de Jogos Adultos</a>
        <a href="reservadeespacos/consultargame.php" class="btn">Reserva do Game/Teen</a>
        <a href="reservadeespacos/consultarmulher.php" class="btn">Reserva do Espaço Mulher</a>
        <a href="reservadeespacos/consultargaragem.php" class="btn">Reserva da Garage Band</a>
        <a href="reservadeespacos/consultarquadra.php" class="btn">Reserva da Quadra</a>
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