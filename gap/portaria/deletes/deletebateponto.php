<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM bateponto WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM bateponto WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: /gap/sistema/consultarbateponto.php');
   
?>