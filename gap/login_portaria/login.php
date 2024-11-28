<?php

session_start();

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['id']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $id = $_POST['id'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM portarialogin WHERE id = '$id' and senha = '$senha'";
        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['id']);
            unset($_SESSION['senha']);
            header('Location: /gap/login_adm/index.php');
        }
        else
        {
            $_SESSION['id'] = $id;
            $_SESSION['senha'] = $senha;         
            header('Location: /gap/portaria/index.php');
        }
    }
?>

