<!DOCTYPE html>
<html>
<head>
	<title>Login | Adm</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/logoicon.ico" type="image/x-icon">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/adm2.png">
		</div>
		<div class="login-content">
			<form action="login.php" method="post">
						<img src="img/avatar.svg">
						<h2 class="title">Login de Administrador</h2>
					<div class="input-div one">
						<div class="i">
								<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>ID</h5>
							<input type="password" class="input" id="id" name="id" required>
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"> 
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Senha</h5>
							<input type="password" class="input" id="senha" name="senha" required>
						</div>
					</div>
					<input type="submit" class="btn" name="submit" id="submit" value="Login">
            </form>
        </div>
    </div>

	<!-- Scripts -->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
