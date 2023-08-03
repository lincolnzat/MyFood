<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'myfood';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*if ($conexao->connect_errno)
    {
        echo "Deu erro!";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }*/
?>