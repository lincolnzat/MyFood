<?php
session_start();
//print_r($_SESSION);
if(!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset ($_SESSION['senha']);
  header('Location: entrar.php');
}
$logado = $_SESSION['email'];


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilo.css">
  <title>MyFood - Delivery de comida e mercado</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="img/burger.png" width="100px" height="100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Entregador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Restaurante e Mercado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Carreiras</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary" href="sair.php" role="button">Sair</a>
        </li>
        </ul>
    </div>
  </nav>
  <figure class="text-center">
    <blockquote class="blockquote">
      <h1 class="display-5">Seja bem vindo(a)! <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b></h1>
    </blockquote>