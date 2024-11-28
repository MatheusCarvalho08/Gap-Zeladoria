<?php
include_once('config.php');

$sql = "SELECT * FROM encomendas_retiradas ORDER BY id DESC";
$result = $conexao->query($sql);

session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['id']);
      unset($_SESSION['senha']);
      header('Location: /gap/login_adm/index.php');
  }
  $logado = $_SESSION['id'];

  if(isset($_POST['submit'])){

    include_once('config.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $documento = $_POST['documento'];
    $bloco = $_POST['bloco'];
    $tipo = $_POST['tipo'];
    $codigo = $_POST['codigo'];
    $data_entrega = $_POST['data_entrega'];
    $hora_entrega = $_POST['hora_entrega'];

    $result = mysqli_query($conexao, "INSERT INTO encomendas_retiradas(nome,sobrenome,documento,bloco,tipo,codigo,data_entrega,hora_entrega) VALUES ('$nome','$sobrenome','$documento','$bloco','$tipo','$codigo','$data_entrega','$hora_entrega')");
}


  if(!empty($_GET['search']))
  {
      $data = $_GET['search'];
      $sql = "SELECT * FROM encomendas_retiradas WHERE id LIKE '%$data%' or nome LIKE '%$data%' or documento LIKE '%$data%' or nome ORDER BY id DESC";
  }
  else
  {
      $sql = "SELECT * FROM encomendas_retiradas ORDER BY id DESC";
  }
  $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="shortcut icon" href="imgs/logoicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/consulta.css">
    <title>Consultar Encomendas Retiradas | ADM</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="cadastrarencomenda.php">Cadastrar Encomendas</a></li>
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

<!-- Main -->
 <br><br><br><br><br><br>
<main class="main-container">
        <center><div class="main-title">
          <h2>PÁGINA DE CONSULTA DE ENCOMENDAS RETIRADAS</h2>
        </div></center>

        <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
            <button onclick="searchData()" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>

        <div class="m-5">
        <table class="table text-white table-bg">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Sobrenome</th>
                  <th scope="col">Documento</th>
                  <th scope="col">Apartamento - Bloco</th>
                  <th scope="col">Tipo da Encomenda</th>
                  <th scope="col">Código de Barras</th>
                  <th scope="col">Data que foi entregue</th>
                  <th scope="col">Hora que foi entregue</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['sobrenome']."</td>";
                        echo "<td>".$user_data['documento']."</td>";
                        echo "<td>".$user_data['bloco']."</td>";
                        echo "<td>".$user_data['tipo']."</td>";
                        echo "<td>".$user_data['codigo']."</td>";
                        echo "<td>".$user_data['data_entrega']."</td>";
                        echo "<td>".$user_data['hora_entrega']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-danger' href='deletes/deleteencomenda.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                        </a>
                        </td>";
                        echo "</tr>";
                    }
                  ?>
              </tbody>
            </table>
        </div>
</main>

    <script src="js/index.js"></script>
</body>

<script>
        var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function(event) {
            if (event.key === "Enter") 
            {
                searchData();
            }
        });

        function searchData()
        {
            window.location = 'encomendasretiradas.php?search='+search.value;
        }
</script>

</html>