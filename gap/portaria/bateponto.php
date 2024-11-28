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
	<link rel="stylesheet" href="css/bateponto.css">
	<title>Bate Ponto</title>
</head>
<body>
	<header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
				<li class="nav-item"><a href="consultarbateponto.php">Consultar Bate Ponto</a></li>
                <li class="nav-item"><a href="index.php">Início</a></li>
				<li class="nav-item"><a href="cadastrarvisitante.php">Cadastrar Visitantes</a></li>
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
		<form action="consultarbateponto.php" method="POST">
			<h1>Bate Ponto</h1>
			<fieldset>
				<div class="container">
					<input type="text" required name="nome" id="nome" autofocus>
					<label>Nome</label>
				</div>

				<div class="container">
					<input type="text" required name="sobrenome" id="sobrenome" autofocus>
					<label>Sobrenome</label>
				</div>
                
			</fieldset>

			<fieldset>

			<div class="container">
					<input type="text" required name="documento" id="documento">
					<label>Documento</label>
			</div>

			<div class="container">
					<input type="text" required name="telefone" id="telefone">
					<label>Telefone</label>
				</div>

			</fieldset>

			<fieldset>
                <div class="container" id="data">
					<input type="date" required name="data_entrada" id="data_entrada">
					<label>Data de Entrada</label>
				</div>

				<div class="container" id="horario">
						<input type="time" required name="hora_entrada" id="hora_entrada">
						<label>Horário de Entrada</label>
				</div>
			</fieldset>

			<fieldset>

				<div class="container" id="data">
					<input type="date" required name="data_saida" id="data_saida" placeholder="">
					<label class="data">Data de Saída</label>
				</div>

				<div class="container" id="horario">
					<input type="time" required name="hora_saida" id="hora_saida">
					<label>Horário de Saída</label>
				</div>
			</fieldset>

			<fieldset>
				<input type="submit" name="submit" id="submit" class="button" value="Registrar" />
			</fieldset>
		</form>

		<img src="imgs/bateponto.png" alt="Bate Ponto">
	</section>
</div>

<script src="js/index.js"></script>
</body>
</html>