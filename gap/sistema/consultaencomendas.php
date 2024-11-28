<?php
include_once('config.php');

$sql = "SELECT * FROM encomendas ORDER BY id DESC";
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

    $result = mysqli_query($conexao, "INSERT INTO encomendas(nome,sobrenome,documento,bloco,tipo,codigo,data_entrega,hora_entrega) VALUES ('$nome','$sobrenome','$documento','$bloco','$tipo','$codigo','$data_entrega','$hora_entrega')");
}


  if(!empty($_GET['search']))
  {
      $data = $_GET['search'];
      $sql = "SELECT * FROM encomendas WHERE id LIKE '%$data%' or nome LIKE '%$data%' or documento LIKE '%$data%' or telefone LIKE '%$data%' ORDER BY id DESC";
  }
  else
  {
      $sql = "SELECT * FROM encomendas ORDER BY id DESC";
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
    <title>Consultar Encomendas | ADM</title>
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
          <h2>PÁGINA DE CONSULTA DE ENCOMENDAS NÃO RETIRADAS</h2>
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
                  <th scope="col">Data da Entrega</th>
                  <th scope="col">Hora da Entrega</th>
                  <th scope="col">Confirmar Entrega</th>
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
                        <a class='btn btn-sm btn-primary' href='retiradaencomendas.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
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
            window.location = 'consultaencomendas.php?search='+search.value;
        }
</script>

</html>