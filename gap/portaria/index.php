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

  if(isset($_POST['submit'])){

    include_once('config.php');

    $rate = $_POST['rate'];
    $avalie = $_POST['avalie'];

    $result = mysqli_query($conexao, "INSERT INTO feedbacks(rate,avalie) VALUES ('$rate','$avalie')");
}

?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>Portaria | ADM</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="cadastrarvisitante.php">Cadastrar Visitante</a></li>
                <li class="nav-item"><a href="index.php">Início</a></li>
                <li class="nav-item"><a href="cadastrarencomenda.php">Cadastrar Encomendas</a></li>
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
    <main>
        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Seja Bem-vindo</h4>
                <h1 class="text-h1">A Página da </h1>
                <h1 class="text-h1">Portaria</h1>
                <p>Nesta página você consegue Cadastrar/Consultar seu Clientes, além de fazer diversas outras coisas. </p>
                <a href="cadastrarvisitante.php" class="home-btn">Cadastrar Visitantes</a>
            </div>
            <div class="home-img">
                <img src="imgs/adm3.png" alt="Administração">
            </div>
        </section>
    </main>
    <div class="titulo" id="adm">
        <center><h1>Portaria</h1></center>
    </div>
    <br><br><br><br>
    <center><fieldset>
        <legend><b>Portaria</b></legend>
            <div class="conteiner">
                <a href="consultavisitante-veiculo.php"><i class='bx bxs-user-check'></i><br>Consultar Visitante|Veículo</a>
                <a href="cadastrarvisitante.php"><i class='bx bx-user-plus'></i><br>Cadastrar Visitantes</a>
                <a href="consultapedestre.php"><i class='bx bxs-user-check'></i><br>Consultar Visitante|Pedestre</a>
            </div>
            <div class="conteiner">
                <a href="consultaencomendas.php"><i class='bx bxs-box'></i><br>Encomendas Não Retiradas</a>
                <a href="cadastrarencomenda.php"><i class='bx bxs-package'></i><br>Cadastrar Encomendas</a>
                <a href="encomendasretiradas.php"><i class='bx bxs-calendar-check' ></i><br>Encomendas Retiradas</a>
            </div>
            <div class="conteiner">
                <a href="cadastrarespacos.php"><i class='bx bx-calendar'></i><br>Reserva de Espaços</a>
                <a href="ocorrencia.php"><i class='bx bx-alarm-exclamation' ></i><br>Cadastrar Ocorrência</a>
                <a href="consultarespacos.php"><i class='bx bx-calendar-exclamation' ></i><br>Consultar Reservas</a>
            </div>
            <center><div class="conteiner">
                <a href="bateponto.php"><i class='bx bxs-timer'></i><br>Salvar Bate Ponto</a>
                <a href="consultaocorrencia.php"><i class='bx bxs-alarm-exclamation'></i><br>Consultar Ocorrência</a>
                <a href="consultarbateponto.php"><i class='bx bx-timer' ></i><br>Consultar Bate Ponto</a>
            </div></center>
            <br>
    </fieldset></center>
<br><br><br><br><br><br><br>

    <!--===== Feedbacks  =====-->
    <section class="feedbacks">
        <center><h2 class="section-title">De o seu Feedback sobre o Site</h2></center>
        <br>
        <div class="feedbacks__container bd-grid">
        <center> <form action="/gap/portaria/index.php" method="POST" class="feedbacks__form">
                <h4 class="feedbacks-title">Avalie de 1 à 5 estrelas o site:</h4>
                <div class="rating">
                    <input type='radio' class="feedbacks-estrelas" hidden name='rate' id='rating_1' data-idx='4' value="5">	
                    <label for='rating_1'></label>
                    
                    <input type='radio' class="feedbacks-estrelas" hidden name='rate' id='rating_2' data-idx='3' value="4">
                    <label for='rating_2'></label>
                    
                    <input type='radio' class="feedbacks-estrelas" hidden name='rate' id='rating_3' data-idx='2' value="3">
                    <label for='rating_3'></label>
                    
                    <input type='radio' class="feedbacks-estrelas" hidden name='rate' id='rating_4' data-idx='1' value="2">
                    <label for='rating_4'></label>
                    
                    <input type='radio' class="feedbacks-estrelas" hidden name='rate' id='rating_5' data-idx='0' value="1">
                    <label for='rating_5'></label>
                    </div>
                <textarea name="avalie" id="avalie" cols="30" placeholder="Avalie o site Aqui:" rows="10" class="feedbacks__input"></textarea>
                <center><input type="submit" name="submit" id="submit" value="Enviar" class="btn"></center>
            </form></center>
        </div>
    </section>    

    <br><br><br><br><br>


    <!--===== FOOTER - 6 Parte =====-->
    <footer class="footer">
    <center><p class="footer__title"><div class="titulo-rodape"><a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a></div></p></center>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
        </div>
        <p class="footer__copy">© 2024 ADM - Portaria - Todos os direitos reservados | Desenvolvido por <a href="#">Matheus Carvalho</a></p>
    </footer>

    <script src="js/index.js"></script>
</body>
</html>

