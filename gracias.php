<?php

  setcookie('hechopedido', "valorcookies",time() + 24*60*60);

  $nombre = $_POST['Nombre'] ;
  $email = $_POST['Email'];
  $movil = $_POST['Telf'];
  $pedido = $_POST['pedido'];

  $todo = $nombre . "<br>". $email . "<br>" . $movil . "<br>" . $pedido . "<br>" . "<br>";

  $fp = fopen("pedidos.txt", "w") or die ("Error al crear el txt");
  fwrite($fp, $todo);
  fclose($fp);

 ?>

<!doctype html>
<html lang="es">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="icono.ico" />
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">
    <link href="css/cover.css" rel="stylesheet">

    <title>CANTINA PEDRALBES</title>



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
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">CANTINA PEDRALBES</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link " href="index.php">Inicio</a>
        <a class="nav-link active" href="menu.php">Menus</a>
        <a class="nav-link" href="admin.php">Administrador</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <div class="">
      <p>Tu Pedido a quedado registrado.</p>
      <p>Ya se esta preparando.</p>
    </div>


  </main>
  <?php include("footer.php")?>
</div>
</body>
</html>
