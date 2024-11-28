<?php

session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['id']);
      unset($_SESSION['senha']);
      header('Location: /gap/login_portaria/index.php');
  }
  $logado = $_SESSION['id'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="css/index.css">
	<title>Reserva do Espaço Mulher</title>
</head>
<body>
	<header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
				<li class="nav-item"><a href="/gap/portaria/cadastrarespacos.php">Reserva de Espaços</a></li>
                <li class="nav-item"><a href="/gap/portaria/index.php">Início</a></li>
				<li class="nav-item"><a href="consultarmulher.php">Consultar Reserva do Espaço Mulher</a></li>
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
	<br><br>
<div class="main">
	<section>
		<form action="consultarmulher.php" method="POST">
			<h1>Reserva do Espaço Mulher</h1>
			<fieldset>
				<div class="container">
					<input type="text" required name="nome" id="nome" autofocus>
					<label>Nome</label>
				</div>

                <div class="container">
					<input type="text" required name="sobrenome" id="sobrenome">
					<label>Sobrenome</label>
				</div>
                
			</fieldset>

			<fieldset>
                <div class="container">
					<input type="text" required name="cpf" id="cpf">
					<label>CPF do Morador</label>
				</div>
			</fieldset>	

			<fieldset>
				<div class="container">
					<input type="text" required name="telefone" id="telefone">
					<label>Telefone</label>
				</div>

				<div class="container">
					<input type="text" required name="bloco" id="bloco">
					<label>Apartamento - Bloco</label>
				</div>
			</fieldset>

			<fieldset>
				<div class="container" id="horario">
					<input type="time" required name="horario" id="horario">
					<label>Horário da reserva</label>
				</div>

				<div class="container">
					<input type="date" required name="data_reserva" id="data_reserva" placeholder="">
					<label class="data">Data da Reserva</label>
				</div>
			</fieldset>

			<fieldset>
				<input type="submit" name="submit" id="submit" class="button" value="Reservar" />
			</fieldset>
		</form>

		<img src="imgs/mulher.jpeg" alt="Registro">
	</section>
</div>

<script src="js/index.js"></script>
</body>
</html>