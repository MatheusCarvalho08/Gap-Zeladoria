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


// Conectar ao banco de dados
$dbHost = 'localhost';  // Note: "Localhost" deve ser em minúsculas
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'gap';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$sql = "SELECT * FROM hometheater ORDER BY id DESC";
$result = $conn->query($sql);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

    // Obter os valores dos checkboxes
    $checkboxes = isset($_POST['checkboxes']) && is_array($_POST['checkboxes']) ? $_POST['checkboxes'] : [];
    $checkboxesConcatenados = implode(', ', $checkboxes);

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os valores dos campos de entrada
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
    $bloco = isset($_POST['bloco']) ? $_POST['bloco'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $horario = isset($_POST['horario']) ? $_POST['horario'] : '';
    $data_reserva = isset($_POST['data_reserva']) ? $_POST['data_reserva'] : '';

    // Preparar a consulta SQL
    $stmt = $conn->prepare("INSERT INTO hometheater (checkboxes, nome, sobrenome, bloco, telefone, horario, data_reserva) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Falha na preparação da declaração: " . $conn->error);
    }

    // Vincular os parâmetros e executar a consulta
    $stmt->bind_param("sssssss", $checkboxesConcatenados, $nome, $sobrenome, $bloco, $telefone, $horario, $data_reserva);
    $stmt->execute();

    if ($stmt->error) {
        die("Erro ao executar a declaração: " . $stmt->error);
    }

    $stmt->close();
} 

if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM hometheater WHERE id LIKE '%$data%' or nome LIKE '%$data%' or telefone LIKE '%$data%' ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM hometheater ORDER BY id DESC";
}

$result = $conn->query($sql);
$conn->close();
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
    <title>Consultar Check lIST | ADM</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Gap Zeladoria"></a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="/gap/portaria/cadastrarespacos.php">Reserva de Espaços</a></li>
                <li class="nav-item"><a href="/gap/portaria/index.php">Início</a></li>
                <li class="nav-item"><a href="/gap/portaria/reservadeespacos/checklist.php">Check List</a></li>
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
          <h2>PÁGINA DE CONSULTA DO CHECK LIST</h2>
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
                  <th scope="col">Check List</th>
                  <th scope="col">Nome do Morador</th>
                  <th scope="col">Sobrenome</th>
                  <th scope="col">Apartamento - Bloco</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Horário da reserva</th>
                  <th scope="col">Data da Reserva</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['checkboxes']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['sobrenome']."</td>";
                        echo "<td>".$user_data['bloco']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['horario']."</td>";
                        echo "<td>".$user_data['data_reserva']."</td>";
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
            window.location = 'consultahome.php?search='+search.value;
        }
</script>

</html>