<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="icono.ico" />
    <title>CANTINA PEDRALBES</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

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
      <h3>Resumen de la compra</h3>
      <?php include("listacompra.php") ?>
    </div>
    <div>
      <h3>Formulario</h3>
      <form action="comprobar.php" method="post">

      <div class="form-row">
        <div class="col-md-6 mb-2">
          <label for="validationServer01">Nombre</label>
          <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="col-md-6 mb-2">
          <label for="validationServer02">Apellidos</label>
          <input type="text" class="form-control" name="apellidos" required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-2">
            <label for="validationServer03">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="col-md-6 mb-2">
            <label for="validationServer04">Telefono</label>
            <input type="number" class="form-control" name="telefono" required>
        </div>
      </div>
        <button class="btn btn-lg btn-secondary" type="submit">Enviar</button>
      </form>
    </div>
  </main>

  <?php include("footer.php") ?>
</div>
</body>
</html>
