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
        <a class="nav-link" href="index.php">Inicio</a>
        <a class="nav-link active" href="menu.php">Menus</a>
        <a class="nav-link" href="admin.php">Administrador</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <div>
      <h1>Tus Datos</h1>

      <?php

        print_r($_COOKIE['lista']);

        $hora = time();

        echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
        echo "Apellidos: "; echo $_POST['apellidos']; echo "<br/>";
        echo "Telefono: "; echo $_POST['telefono']; echo "<br/>";
        echo "E-mail: "; echo $_POST['email']; echo "<br/>";

        //file_put_contents("pedido.txt",$cookie,FILE_APPEND | LOCK_EX);

      ?>
    </div>
    <div class="lead">
      <a href="gracias.php" class="btn btn-lg btn-secondary">Enviar</a>
      <a href="carrito.php" class="btn btn-lg btn-secondary">Volver a Escribir</a>
    </div>

  </main>
  <?php include("footer.php")?>
</div>
</body>
</html>
