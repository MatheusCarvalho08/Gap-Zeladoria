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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Unidades</title>
    <link rel="stylesheet" href="css/unidades.css">
   
</head>
<body>
<center><header>
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
    </header></center>

<!-- ===== Unidades ===== -->
<main>
    <div class="container">
        <h1 class="heading">Locais onde o Sistema está operando</h1>
            <center><hr></center>
            <br>
                <div class="unidades">
                    <div class = "filter-btns">
                        <button type = "button" class = "filter-btn active-btn" onclick="filterElements('Todos')">Todos</button>
                        <button type = "button" class = "filter-btn" onclick="filterElements('zonasul')">Zona Sul</button>
                        <button type = "button" class = "filter-btn" onclick="filterElements('zonanorte')">Zona Norte</button>
                        <button type = "button" class = "filter-btn" onclick="filterElements('zonaleste')">Zona Leste</button>
                        <button type = "button" class = "filter-btn" onclick="filterElements('zonaoeste')">Zona Oeste</button>
                    </div>
                </div>
            <br><br>    
        <div class="box-container">
            <div class="box zonasul show">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!3m2!1spt-BR!2sbr!4v1724718808901!5m2!1spt-BR!2sbr!6m8!1m7!1sYfMrbaw3juhj2FGof_XycQ!2m2!1d-23.24197857866176!2d-45.91086680180735!3f7.485948290369031!4f4.966171346000081!5f0.7820865974627469"></iframe>
                <h3>Condomínio Res Isadora</h3>
                <ul>
                    <li><h4>Zona - Bairro:</h4>Zona Sul - Parque Industrial</li>
                    <li><h4>Endereço:</h4>R. Penedo, 260 - Conj. Res. Trinta e Um de Marco, São José dos Campos - SP, 12237-070</li>
                    <li><h4>Atendimento 24h:</h4> Sim</li>
                </ul>
            </div>
            <div class="box zonasul show">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14664.20247590056!2d-45.9093133!3d-23.241245!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc355c2019bdab%3A0x29208f48d98501fe!2sCampo%20di%20Savoya!5e0!3m2!1spt-BR!2sbr!4v1724721083114!5m2!1spt-BR!2sbr"></iframe>
                <h3>Campo di Savoya</h3>
                <ul>
                    <li><h4>Zona - Bairro:</h4>Zona Sul - Parque Industrial</li>
                    <li><h4>Endereço:</h4> R. Icatu, 390 - Parque Industrial, São José dos Campos - SP, 12235-649</li>
                    <li><h4>Atendimento 24h:</h4> Sim</li>
                </ul>
            </div>
            <div class="box zonanorte show">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14675.849753113087!2d-45.92363573436713!3d-23.135048183319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc375185675819%3A0xbb72c7d1608306e8!2sCondom%C3%ADnio%20residencial%20Mantiqueira!5e0!3m2!1spt-BR!2sbr!4v1724721334787!5m2!1spt-BR!2sbr"></iframe>
                <h3>Condomínio Residencial da Mantiqueira</h3>
                <ul>
                    <li><h4>Zona - Bairro:</h4>Zona Norte - Vila Paiva</li>
                    <li><h4>Endereço:</h4> R. Alto Campestre - São José dos Campos, SP, 12213-648</li>
                    <li><h4>Atendimento 24h:</h4> Sim</li>
                </ul>
            </div>
            <div class="box zonanorte show">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d324.2034214794564!2d-45.89307145343299!3d-23.172280196221593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc49a53311360f%3A0xce200d78ac411406!2sCondominio%20Residencial%20Das%20Palmeiras!5e0!3m2!1spt-BR!2sbr!4v1724721561563!5m2!1spt-BR!2sbr"></iframe>
                <h3>Condominio Residencial Das Palmeiras</h3>
                <ul>
                    <li><h4>Zona - Bairro:</h4>Zona Norte - Vila Zizinha</li>
                    <li><h4>Endereço:</h4>R. Kenkiti Shimomoto, 180 - Vila Zizinha, São José dos Campos - SP, 12211-020</li>
                    <li><h4>Atendimento 24h:</h4> Sim</li>
                </ul>
            </div>
            <div class="box zonaleste show">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d324.20854131219926!2d-45.78038384385455!3d-23.170166184648483!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4d7443867327%3A0x8b5dfa5330a7621c!2sResidencial%20Monte%20Belo!5e0!3m2!1spt-BR!2sus!4v1724721761207!5m2!1spt-BR!2sus"></iframe>
                <h3>Residencial Monte Belo</h3>
                <ul>
                    <li><h4>Zona - Bairro:</h4>Zona Leste - Jardim São José 2</li>
                    <li><h4>Endereço:</h4>R. Adelaide Louzada Franco do Amaral, 101 - Jardim Sao Jose II, São José dos Campos - SP, 12223-480, Brasil</li>
                    <li><h4>Atendimento 24h:</h4> Sim</li>
                </ul>
            </div>
            <div class="box zonaleste show">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2593.631452970229!2d-45.78219274230525!3d-23.172069563585854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4d17e151fea9%3A0x5ac285c8764babe!2sVillagio%20In%C3%AAs%201!5e0!3m2!1spt-BR!2sus!4v1724721889700!5m2!1spt-BR!2sus"></iframe>
                <h3>Villagio Inês 1</h3>
                <ul>
                    <li><h4>Zona - Bairro:</h4>Zona Leste - Jardim Santa Ines 3</li>
                    <li><h4>Endereço:</h4>Av. Luiz Carlos Amancio Pereira, 06 - Jardim Santa Ines III, São José dos Campos - SP, 12248-698, Brasil</li>
                    <li><h4>Atendimento 24h:</h4> Sim</li>
                </ul>
            </div>
            <div class="box zonaoeste show">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3666.59134227224!2d-45.885249!3d-23.221559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4a18d66d9607%3A0xf5056529b51b07a3!2sCondom%C3%ADnio%20Residencial%20Campo%20Belo!5e0!3m2!1spt-BR!2sus!4v1724722262900!5m2!1spt-BR!2sus"></iframe>
                <h3>Condomínio Residencial Campo Belo</h3>
                <ul>
                    <li><h4>Zona - Bairro:</h4>Zona Oeste - Jardim Satélite</li>
                    <li><h4>Endereço:</h4>R. Pedro Tursi, 291 - Jardim Satélite, São José dos Campos - SP, 12230-075, Brasil</li>
                    <li><h4>Atendimento 24h:</h4> Sim</li>
                </ul>
            </div>
            <div class="box zonaoeste show">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3666.434410650124!2d-45.875513000000005!3d-23.227274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4ac2b206e8b7%3A0x64436f48cc31098d!2sR.%20Ap%C3%A1%20-%20Vila%20Sao%20Bento%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP%2C%2012231-580%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1724722342592!5m2!1spt-BR!2sus"></iframe>
                <h3>Vila Sao Bento</h3>
                <ul>
                    <li><h4>Zona - Bairro:</h4>Zona Oeste - Vila São Bento</li>
                    <li><h4>Endereço:</h4>Vila Sao Bento, São José dos Campos - SP, 12231-580, Brasil</li>
                    <li><h4>Atendimento 24h:</h4> Sim</li>
                </ul>
            </div>
        </div>
    </div>
</main>
<br><br><br><br>
<!--===== FOOTER - 6 Parte =====-->
    <footer class="footer">
    <center><p class="footer__title"><div class="titulo-rodape"><a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a></div></p></center>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
        </div>
        <p class="footer__copy">© 2024 ADM - Administrador - Todos os direitos reservados | Desenvolvido por <a href="#">Matheus Carvalho</a></p>
    </footer>

<!--===== JS =====-->
<script src="js/unidades.js"></script>
</body>
</html>