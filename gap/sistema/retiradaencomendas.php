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

	include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM encomendas WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $sobrenome = $user_data['sobrenome'];
                $documento = $user_data['documento'];
                $bloco = $user_data['bloco'];
                $tipo = $user_data['tipo'];
                $codigo = $user_data['codigo'];
                $data_entrega = $user_data['data_entrega'];
                $hora_entrega = $user_data['hora_entrega'];
            }
        }
        else
        {
            header('Location: consultaencomendas.php');
        }
    }
    else
    {
        header('Location: consultaencomendas.php');
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/cadastrarencomenda.css">
	<link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
	<title>Confirmar Retirada da Encomenda</title>
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
		<h1>Confirmar Retirada da Encomenda</h1>
	</center>
	<br>
<div class="main active">
	<section class="pedestre_veiculo" id="table1">
		<form action="encomendasretiradas.php" method="POST">
			<div class="input-cadastro active">
			<center><h2>Encomendas</h2></center>
				<fieldset>
					<div class="container">
						<input type="text" required name="nome" id="nome" autofocus value=<?php echo $nome;?>>
						<label>Nome</label>
					</div>

					<div class="container">
						<input type="text" required name="sobrenome" id="sobrenome" value=<?php echo $sobrenome;?>>
						<label>Sobrenome</label>
					</div>
					
				</fieldset>

				<fieldset>

					<div class="container">
						<input type="text" required name="documento" id="documento" value=<?php echo $documento;?>>
						<label>Documento</label>
					</div>
				</fieldset>	

				<fieldset>	
					<div class="container">
						<input type="text" required name="bloco" id="bloco" value=<?php echo $bloco;?>>
						<label>Apertamento - Bloco</label>
					</div>

				</fieldset>		

				<fieldset>		

					<div class="container">
						<input type="text" required name="tipo" id="tipo" placeholder="" value=<?php echo $tipo;?>>
						<label class="text">Tipo de Encomenda (Carta, Sedex...)</label>
					</div>

					<div class="container">
						<input type="text" required name="codigo" id="codigo" placeholder="" value=<?php echo $codigo;?>>
						<label class="text">Código de Barras</label>
					</div>

				</fieldset>

				<fieldset>	
					<div class="container">
						<input type="date" required name="data_entrega" id="data_entrega" placeholder="" value=<?php echo $data_entrega;?>>
						<label class="data">Data de Entrega</label>
					</div>

					<div class="container" id="horario">
						<input type="time" required name="hora_entrega" id="hora_entrega" value=<?php echo $hora_entrega;?>>
						<label>Horário da Entrega</label>
					</div>

				</fieldset>		

				<fieldset>
					<input type="hidden" name="id" value=<?php echo $id;?>>
					<input type="submit" name="submit" id="submit" class="button" value="Confirmar Retirada da Encomenda" />
				</fieldset>
			</div>	
		</form>

		<img src="imgs/box.png" alt="Registro">
	</section>
</div>

<script src="js/cadastrarencomenda.js"></script>
</body>
</html>