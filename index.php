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
  <figure class="text-center">
    <blockquote class="blockquote">
      <h1 class="display-5"><b>Tudo para facilitar seu dia a dia.</b></h1>
      <p>O que você precisa está aqui. Peça e receba onde estiver.</p>
    </blockquote>

    <div class="row">
      <div class="col-10">
    <form class="d-flex" role="search">
    <img src="img/localizacao.png" height="50px" width="50px"><input class="form-control me-2" type="search" placeholder="Endereço de entrega e número" aria-label="Search">
       <button class="btn btn-danger" type="submit">Buscar</button>
      </form>
  </div>
  </div>


    <div class='row'>
      <div class='col-3'>
        <div class="cardS" style="width: 24rem;">
          <img class="card-img-top" src="img/cardrestaurante.png" alt="Card image cap">
        </div>
      </div>
      <div class='col-6'>
        <div class="cardS" style="width: 24rem;">
          <img class="card-img-top" src="img/cardmercado.png" alt="Card image cap">
        </div>
      </div>
    </div>


    <div class='row'>
      <div class='col-2'>
        <div class="card2">
          <img src="img/bebidas1.png" class="card-img-top" alt="Bebidas" style="width: 10rem;" />
          <div class="card-body">
            <h5 class="card-title">Bebidas</h5>
          </div>
        </div>
      </div>
      <div class='col-2'>
        <div class="card2">
          <img src="img/farmacia2.png" class="card-img-top" alt="Farmácia" style="width: 10rem;" />
          <div class="card-body">
            <h5 class="card-title">Farmácia</h5>
          </div>
        </div>
      </div>
      <div class='col-2'>
        <div class="card2">
          <img src="img/petshop.png" class="card-img-top" alt="Pet shop" style="width: 10rem;" />
          <div class="card-body">
            <h5 class="card-title">Pet shop</h5>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <figure class="text-center">
      <blockquote class="blockquote">
        <h3>Os melhores restaurantes</h3>
      </blockquote>

      <div class="container">
      <div class="row">
      <?php 
      $servidor = 'localhost';
      $usuario = 'root';
      $senha = '';
      $banco = 'myfood';

      $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

      if(mysqli_connect_errno()) trigger_error(mysqli_connect_errno());
      $sql = 'SELECT cd_restaurante, nm_restaurante, ds_restaurante, img_restaurante FROM tb_restaurantes';
      $query = $mysqli->query($sql);
      while ($restaurante = $query->fetch_array()) {
        echo "<div class='card' style='width: 10rem;'>
        <img class='card-img-top' src='$restaurante[img_restaurante]' alt='Card image cap'>
        <div class='card-body'>
          <h6 class='card-title'>$restaurante[nm_restaurante]</h6>
          <p class='card-text'>$restaurante[ds_restaurante]</p>
        </div>
      </div>";
    
      }

      ?>
      </div>
      </div>
      
      <script src="js/bootstrap.js"></script>
</body>

</html>