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
	<link rel="stylesheet" href="css/cadastroocorrencia.css">
	<title>Reserva da Churrasqueira</title>
</head>
<body>
	<header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
				<li class="nav-item"><a href="consultaocorrencia.php">Consultar Ocorrências</a></li>
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
		<form action="consultaocorrencia.php" method="POST">
			<h1>Registrar Ocorrências</h1>
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
					<input type="text" required name="cpf" id="cpf">
					<label>CPF</label>
			</div>

			<div class="container" id="data">
					<input type="date" required name="data_ocorrencia" id="data_ocorrencia" placeholder="">
					<label class="data">Data da Ocorrência</label>
			</div>

			</fieldset>

			<fieldset>
                <div class="container">
					<input type="text" required name="ocorrencia" id="ocorrencia">
					<label>Ocorrência</label>
				</div>
			</fieldset>

			<fieldset>
                <div class="container">
					<input type="text" required name="telefone" id="telefone">
					<label>Telefone</label>
				</div>

				<div class="container">
					<input type="text" required name="bloco" id="bloco" placeholder="">
					<label class="text">Apartamento - Bloco</label>
				</div>
			</fieldset>

			<fieldset>
				<input type="submit" name="submit" id="submit" class="button" value="Registrar" />
			</fieldset>
		</form>

		<img src="imgs/ocorrencia.png" alt="ocorrencia">
	</section>
</div>

<script src="js/index.js"></script>
</body>
</html>