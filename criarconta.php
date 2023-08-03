<?php 
  if (isset($_POST['submit']))
  {
   /* print_r($_POST['nome']); //CÓDIGO DE TESTE
    print_r('<br>');
   print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['senha']);*/

     include_once('conexao.php');

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
  }
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
          <a class="nav-link" href="criarconta.php">Criar conta</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary" href="entrar.php" role="button">Entrar</a>
        </li>
      </ul>
    </div>
  </nav>
 
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/imgconta.png" height="1600px" width="1600px"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="criarconta.php" method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Crie sua conta!</p>
            </div>

          <div class="clearfix"></div>

          <div class="form-outline mb-4">
            <input type="text" name="nome" id="nome" class="form-control form-control-lg"
              placeholder="Digite o seu nome" />
            <label class="form-label" for="form3Example3">Nome</label>
            
          </div>

        <!-- Endereço de e-mail -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="email" class="form-control form-control-lg"
              placeholder="Digite um endereço de e-mail válido" />
            <label class="form-label" for="form3Example3">Endereço de e-mail</label>
           
          </div>

          <!-- Senha -->
          <div class="form-outline mb-3">
            <input type="password" name="senha" id="senha" class="form-control form-control-lg"
              placeholder="Digite sua senha" />
            <label class="form-label" for="form3Example4">Senha</label>
            </div>
         
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Cadastrar</button>
             </div>
            </form>