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
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/hometheater.css">
	<link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
	<title>Home theater</title>
</head>
<body>
	<header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
				<li class="nav-item"><a href="/gap/sistema/cadastrarespacos.php">Reserva de Espaços</a></li>
                <li class="nav-item"><a href="/gap/sistema/index.php">Início</a></li>
				<li class="nav-item"><a href="consultasolicitacao.php">Consultar Solicitação de Uso</a></li>
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
	<br><br><br><br><br><br><br><br>
	<center>
		<h1>Home theater</h1>
	</center>
	<br>

<div class="main">
	<section class="pedestre_veiculo" id="table2">
		<form action="consultasolicitacao.php" method="POST">
			<div class="input-cadastro">
			<center><h2>Solicitação de Uso</h2></center>
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
						<input type="text" required name="documento" id="documento">
						<label>Documento</label>
					</div>

					<div class="container">
						<input type="text" required name="bloco" id="bloco">
						<label>Apartamento - Bloco</label>
					</div>
				</fieldset>

				<fieldset class="home_theater">
					<div class="container">
						<input type="text" required name="telefone" id="telefone" placeholder="">
						<label class="text">Telefone</label>
					</div>

					<div class="select">
						<select name="horario_disp" id="horario_disp" required>
								<option selected disabled>Escolher Horário de uso</option>
								<option value="1ºHorário: 9:00 às 10:00">1ºHorário: 9:00 às 10:00</option>
								<option value="2ºHorário: 11:00 às 14:00">2ºHorário: 11:00 às 14:00</option>
								<option value="3ºHorário: 15:00 às 18:00">3ºHorário: 15:00 às 18:00</option>
								<option value="4ºHorário: 19:00 às 22:00">4ºHorário: 19:00 às 22:00</option>
						</select>
					</div>
				</fieldset>

				<fieldset>	
					<div class="container" id="horario_reserva">
						<input type="time" required name="horario" id="horario">
						<label>Horário da reserva</label>
					</div>

					<div class="container">
						<input type="date" required name="data_reserva" id="data_reserva" placeholder="">
						<label class="data">Data da Reserva</label>
					</div>
				</fieldset>

				<fieldset>
					<input type="submit" id="submit" name="submit" class="button" value="Cadastrar Solicitação" />
				</fieldset>
			</div>	
		</form>
		<img src="imgs/home.png" alt="Registro">
	</section>
</div>

<script src="js/cadastrarvisitante.js"></script>
</body>
</html>