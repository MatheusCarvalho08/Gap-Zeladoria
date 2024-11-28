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
	<link rel="stylesheet" href="css/cadastrovisitante.css">
	<link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
	<title>Cadastrar Encomendas</title>
</head>
<body>
	<header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
				<li class="nav-item"><a href="consultapedestre.php">Consultar Visitante | Pedestre</a></li>
                <li class="nav-item"><a href="index.php">Início</a></li>
                <li class="nav-item"><a href="consultavisitante-veiculo.php">Consultar Visitante | Veículo</a></li>
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
		<h1>Cadastrar Visitantes</h1>
	</center>
	<br>
	<div class="select-table">
        <div>
            <input type="radio" id="table1_field" name="table_select" value="table1" checked>
            <label for="table1_field">Pedestre</label>
        </div>
        <div>
            <input type="radio" id="table2_field" name="table_select" value="table2">
            <label for="table2_field">Veiculos</label><br>
        </div>
    </div>
<div class="main active">
	<section class="pedestre_veiculo" id="table1">
		<form action="consultapedestre.php" method="POST">
			<div class="input-cadastro active">
			<center><h2>Pedestre</h2></center>
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
				</fieldset>	

				<fieldset>	
					<div class="container">
						<input type="text" required name="visita" id="visita">
						<label>Empresa/Visita</label>
					</div>
				</fieldset>

				<fieldset>
					<div class="container">
						<input type="text" required name="autorizado" id="autorizado" placeholder="">
						<label class="text">Autorizado Por</label>
					</div>

					<div class="select">
						<select name="unidade" id="unidade" required>
								<option selected disabled>Buscar por Bloco</option>
								<option value="Bloco 1">Bloco 1</option>
								<option value="Bloco 2">Bloco 2</option>
								<option value="Bloco 3">Bloco 3</option>
								<option value="Bloco 4">Bloco 4</option>
								<option value="Bloco 5">Bloco 5</option>
						</select>
					</div>
				</fieldset>

				<fieldset>
					<input type="submit" name="submit" id="submit" class="button" value="Cadastrar Entrada" />
				</fieldset>
			</div>	
		</form>

		<img src="imgs/perfil.png" alt="Registro">
	</section>
</div>

<div class="main">
	<section class="pedestre_veiculo" id="table2">
		<form action="consultavisitante-veiculo.php" method="POST">
			<div class="input-cadastro">
			<center><h2>Pedestre</h2></center>
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
				</fieldset>	

				<fieldset>	
					<div class="container">
						<input type="text" required name="visita" id="visita">
						<label>Empresa/Visita</label>
					</div>
				</fieldset>

				<fieldset>
					<div class="container">
						<input type="text" required name="autorizado" id="autorizado" placeholder="">
						<label class="text">Autorizado Por</label>
					</div>

					<div class="select">
						<select name="unidade" id="unidade" required>
								<option selected disabled>Buscar por Bloco</option>
								<option value="Bloco 1">Bloco 1</option>
								<option value="Bloco 2">Bloco 2</option>
								<option value="Bloco 3">Bloco 3</option>
								<option value="Bloco 4">Bloco 4</option>
								<option value="Bloco 5">Bloco 5</option>
						</select>
					</div>
				</fieldset>
			</div>	

			<div class="input-cadastro-veiculo" id="input-cadastro">
				<center><h2>Veículo</h2></center>
				<fieldset>
					<div class="container">
						<input type="text" required name="modelo" id="modelo" autofocus>
						<label>Modelo</label>
					</div>
				</fieldset>	

				<fieldset>	
					<div class="container">
						<input type="text" required name="cor" id="cor">
						<label>Cor</label>
					</div>

					<div class="container">
						<input type="text" required name="placa" id="placa">
						<label>Placa</label>
					</div>
				</fieldset>

				<fieldset>
					<div class="container">
						<input type="text" required name="observacao" id="observacao" autofocus>
						<label>Observação</label>
					</div>
				</fieldset>	

				<center><fieldset>
					<input type="submit" name="submit" id="submit" class="button" value="Cadastrar Entrada" />
				</fieldset></center>
			</div>
		</form>
	</section>
</div>

<script src="js/cadastrarvisitante.js"></script>
</body>
</html>