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
	<link rel="stylesheet" href="css/checklist.css">
	<link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
	<title>Check List</title>
</head>
<body>
	<header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
				<li class="nav-item"><a href="/gap/sistema/cadastrarespacos.php">Reserva de Espaços</a></li>
                <li class="nav-item"><a href="/gap/sistema/index.php">Início</a></li>
				<li class="nav-item"><a href="consultahome.php">Consultar Check List</a></li>
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
		<form action="consultahome.php" method="POST">
			<div class="input-cadastro" id="input-cadastro">
				<center><h2>Check List de Patrimônio</h2></center>
				<br>
				<fieldset>
					<br>
					<center><label for="checkboxes">Opções adicionais:</label></center><br>
					<center><div class="checkbox-home">
						<div class="input-home">
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Projetor">
									<label for="text">Projetor</label>
										<br>
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Aparelho SKY">
									<label for="text">Aparelho SKY</label>
										<br>
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Controle SKY">
									<label for="text">Controle SKY</label>
										<br>
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Ar Condicionado">
									<label for="text">Ar Condicionado</label>
										<br>
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Controle Ar">
									<label for="text">Controle Ar</label>
										<br>
									<input type="checkbox" class="substituted" name="checkboxes[]" value="6 Almofadas">
									<label for="text">6 Almofadas</label>
								</div>
								<div class="input-home1">
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Cortinas">
									<label for="text">Cortinas</label>
										<br>		
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Sofá">
									<label for="text">Sofá</label>
										<br>
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Portas e Janelas">
									<label for="text">Portas e Janelas</label>
										<br>
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Lâmpadas">
									<label for="text">Lâmpadas</label>
										<br>
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Micro-Ondas">
									<label for="text">Micro-Ondas</label>
										<br>
									<input type="checkbox" class="substituted" name="checkboxes[]" value="Outros">
									<label for="text">Outros</label>
								</div>	
					</div></center>
				</fieldset>	
<br>
				<fieldset>
					<div class="container">
						<input type="text" required name="nome" id="nome" autofocus>
						<label>Nome do Solicitante</label>
					</div>

					<div class="container">
						<input type="text" required name="sobrenome" id="sobrenome" autofocus>
						<label>Sobrenome do Solicitante</label>
					</div>
				</fieldset>	

				<fieldset>
					<div class="container">
						<input type="text" required name="bloco" id="bloco" autofocus>
						<label>Apartamento - Bloco</label>
					</div>

					<div class="container">
						<input type="text" required name="telefone" id="telefone" autofocus>
						<label>Telefone do Solicitante</label>
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

				<center><fieldset>
					<input type="submit" name="submit" id="submit" class="button" value="Check List" />
				</fieldset></center>
			</div>
		</form>
		<img src="imgs/checklist.webp" alt="Check List">
	</section>
</div>

<script src="js/cadastrarvisitante.js"></script>
</body>
</html>