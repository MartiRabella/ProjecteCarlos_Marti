<?php
if(isset($_COOKIE['contador']))
 {
   // Caduca en un año
   setcookie('contador', $_COOKIE['contador'] + 1, time() + 60);
   $mensaje = 'Número de visitas: ' . $_COOKIE['contador'];
 }

 ?>
<!--HOLA-->
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="icono.ico" />
    <title>CANTINA PEDRALBES</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">CANTINA PEDRALBES</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="index.php">Inicio</a>
        <a class="nav-link" href="menu.php">Menus</a>
        <a class="nav-link" href="admin.php">Administrador</a>
      </nav>
    </div>
  </header>
  <main role="main" class="inner cover">
    <h1 class="cover-heading">Pagina de la Cantina </h1>
    <p class="lead">En esta pagina podras hacer pedidos a la Cantina del instituto Pedralbes.</p>
    <p class="lead">
      <a href="menu.php" class="btn btn-lg btn-secondary">Hacer Pedido</a>
        <a href="admin.php" class="btn btn-lg btn-secondary">Administrador</a>
    </p>
  </main>
  <?php echo $mensaje ?>

  <?php include("footer.php")?>
</div>
</body>
</html>
