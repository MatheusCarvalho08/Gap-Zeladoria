<?php
include_once('config.php');

$sql = "SELECT * FROM feedbacks ORDER BY id DESC";
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


  if(!empty($_GET['search']))
  {
      $data = $_GET['search'];
      $sql = "SELECT * FROM feedbacks WHERE id LIKE '%$data%' or nome LIKE '%$data%' or cpf LIKE '%$data%' LIKE '%$data%' or nome ORDER BY id DESC";
  }
  else
  {
      $sql = "SELECT * FROM feedbacks ORDER BY id DESC";
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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/consulta.css">
    <title>Consultar Feedbacks | ADM</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="ocorrencia.php">Cadastrar Ocorrência</a></li>
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

<!-- Main -->
 <br><br><br><br><br><br>
<main class="main-container">
        <center><div class="main-title">
          <h2>PÁGINA DE CONSULTA DOS FEEDBACKS</h2>
        </div></center>

        <div class="m-5">
        <table class="table text-white table-bg">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Quanto gostou do site de 1 a 5</th>
                  <th scope="col">Avaliação</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['rate']."</td>";
                        echo "<td>".$user_data['avalie']."</td>";
                        echo "<td>
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
            window.location = 'feedbacks.php?search='+search.value;
        }
</script>

</html>