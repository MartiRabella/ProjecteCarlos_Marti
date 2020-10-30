<?php

if (isset($_COOKIE['hechopedido'])) {
  header('Location: error.php');
}

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    	
    <script src=”js.js” language=”Javascript”></script>
		<script type="text/javascript" src="js.js"></script>
		<link type="text/css" href="csssueldo.css" rel="stylesheet" media="screen"/>

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
        <a class="nav-link" href="menu.php">Menus</a>
        <a class="nav-link active" href="admin.php">Administrador</a>
      </nav>
    </div>
  </header>

  <div id="todo" class="todoNo">
			<div id="menu" class="menuNo">


				<!--Producto del 1 al 9-->
				<div id="div1" name="DIVS"></div>
				<div id="div2" name="DIVS"></div>
				<div id="div3" name="DIVS"></div>
				<div id="div4" name="DIVS"></div>
				<div id="div5" name="DIVS"></div>
				<div id="div6" name="DIVS"></div>
				<div id="div7" name="DIVS"></div>
				<div id="div8" name="DIVS"></div>
				<div id="div9" name="DIVS"></div>


				<!--Botones de compra-->
				<div id="divbotones">
					<input type="button" id="botonTotal" value="Calcular total"/>
					<input type="button" id="botonDatos" value="Datos personales" disabled="disabled"/>
					<input type="button" id="botonConfirmar" value="Confirmar pedido"/>
				 </div>


				<!--zona de compra, tablas, formularios, etc.-->
				<div id="divZonaCompra" class="divZonaCompraNo">


					<!--Carrito de la compra-->
					<div id="divTotal" class="divsNo">
						<p><b>Carrito de la compra, si quiere hacer alguna modificacion aun esta a tiempo:</b></p>
						<table id="tablaTotal"></table>
					</div>


					<!--Datos personales-->
					<div id="divDatos" class="divsNo">
						<p><b>Introduzca sus datos personales:</b></p>

							<div id="divDatosPersonales0">
								<div id="divDatosPersonales1">
									<label>Nombre completo:</label><br/>
									<input type="text" id="nombre" value="" size="26" /><br/>

								</div>
								<div id="divDatosPersonales2">
									<label>Telefono movil:</label><br/>
									<input type="text" id="movil" value="" size="8" maxlength="9"/><br/>

									<label>Email:</label><br/>
									<input type="text" id="email1" value="" size="25" /><br/>

									<label>Repita el email:</label><br/>
									<input type="text" id="email2" value="" size="25" />
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>


  <?php include("footer.php") ?>
</div>
</body>
</html>
