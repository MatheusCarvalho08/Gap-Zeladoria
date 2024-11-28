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
	<link rel="stylesheet" href="css/cadastrarencomenda.css">
	<link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
	<title>Cadastrar Encomendas</title>
</head>
<body>
	<header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
				<li class="nav-item"><a href="consultaencomendas.php">Consultar Encomendas</a></li>
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
	<br><br><br><br><br><br><br><br>
	<center>
		<h1>Cadastrar Encomendas</h1>
	</center>
	<br>
<div class="main active">
	<section class="pedestre_veiculo" id="table1">
		<form action="consultaencomendas.php" method="POST">
			<div class="input-cadastro active">
			<center><h2>Encomendas</h2></center>
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
						<input type="text" required name="bloco" id="bloco">
						<label>Apertamento - Bloco</label>
					</div>

				</fieldset>		

				<fieldset>		

					<div class="container">
						<input type="text" required name="tipo" id="tipo" placeholder="">
						<label class="text">Tipo de Encomenda</label>
					</div>

					<div class="container">
						<input type="text" required name="codigo" id="codigo" placeholder="">
						<label class="text">Código de Barras</label>
					</div>

				</fieldset>

				<fieldset>	
					<div class="container">
						<input type="date" required name="data_entrega" id="data_entrega" placeholder="">
						<label class="data">Data de Entrega</label>
					</div>

					<div class="container" id="horario">
						<input type="time" required name="hora_entrega" id="hora_entrega">
						<label>Horário da Entrega</label>
					</div>

				</fieldset>		

				<fieldset>
					<input type="submit" name="submit" id="submit" class="button" value="Cadastrar Encomenda" />
				</fieldset>
			</div>	
		</form>

	<div class="codigo">
		<h2>Leitor de Código de Barras</h2>
		<div id="camera"></div>
		<h4>O Código de Barras vai aparecer aqui:</h4>
		<div id="resultado"></div>
	</div>	

    <script src="js/quagga.js"></script>

    <script>

        Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#camera')    // Or '#yourElement' (optional)
            },
            decoder: {
                readers: ["code_128_reader"]
            }
        }, function (err) {
            if (err) {
                console.log(err);
                return
            }
            console.log("Initialization finished. Ready to start");
            Quagga.start();
        });

        Quagga.onDetected(function (data) {
            console.log(data.codeResult.code);
            document.querySelector('#resultado').innerText = data.codeResult.code;
        });

    </script>		

	</section>
</div>

<script src="js/cadastrarencomenda.js"></script>
</body>
</html>