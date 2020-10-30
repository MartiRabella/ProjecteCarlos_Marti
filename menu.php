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

    <form action="carrito.php" method="post">
      <div>
        <div>
          <h3>Desayuno</h3>
          <table id="desayuno">
              <tr>
                  <th>Comida</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
              </tr>
              <tr>
                  <td>
                    <input type="checkbox" id="Jamon" name="check_list[]" value="Bocadillo Jamon">
                    <label for="jamon">Bocadillo Jamon Serrano</label>
                  </td>
                  <td>
                    <input type="number" name="Cantidad" value="check_list[]" min="0" max="5">
                  </td>
                  <td id="preu">1.80€</td>
              </tr>
              <tr>
                  <td>
                    <input type="checkbox" id="york" name="check_list[]" value="Bocadillo York">
                    <label for="york">Bocadillo Jamon York</label>
                  </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">1.80€</td>
              </tr>
              <tr>
                  <td>
                    <input type="checkbox" id="chorizo" name="check_list[]" value="Bocadillo chorizo">
                    <label for="chorizo">Bocadillo de chorizo</label>
                  </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">1.80€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="queso" name="check_list[]" value="Bocadillo queso">
                  <label for="queso">Bocadillo de queso</label>
                </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">1.80€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="lomo" name="check_list[]" value="Bocadillo lomo">
                  <label for="lomo">Bocadillo de lomo</label>
                </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">3.00€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="bacon" name="check_list[]" value="Bocadillo bacon">
                  <label for="bacon">Bocadillo de bacon</label>
                </td>
                 <td>
                   <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                 </td>
                 <td id="preu">3.00€</td>
              </tr>
          </table>
        </div>

        <div>
          <h3>Comidas</h3>

          <table id="comida">
              <tr>
                  <th>Comida</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="huevosPatatas" name="check_list[]" value="Plato Huevos Patatas">
                  <label for="huevosPatatas">Plato Huevos con Patatas</label>
                </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">4,50€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="lentejas" name="check_list[]" value="Lentejas Morcilla">
                  <label for="lentejas">Lentejas con morcilla</label>
                </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">5.00€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="macarrones" name="check_list[]" value="Macarrones Boloñesa">
                  <label for="macarrones">Macarrones a la boloñesa</label>
                </td>
                <td>
                  <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                </td>
                <td id="preu">4.50€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="verdura" name="check_list[]" value="Verdura Patatas">
                  <label for="verdura">Verdura con patatas</label>
                </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">4.50€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="brocoli" name="check_list[]" value="Brocoli Patatas">
                  <label for="brocoli">Brocoli con patatas</label>
                </td>
                <td>
                  <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                </td>
                <td id="preu">5.00€</td>
              </tr>
          </table>
        </div>
      </div>

        <div>
          <h3>Bebidas</h3>

          <table id="bebidas">
              <tr>
                  <th>Comida</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="cocacola" name="check_list[]" value="Coca-Cola">
                  <label for="cocacola">Coca-cola</label>
                </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">1.20€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="naranja" name="check_list[]" value="Fanta Naranja">
                  <label for="naranja">Fanta Naranja</label>
                </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">1.20€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="agua" name="check_list[]" value="Agua Mineral">
                  <label for="agua">Agua Mineral</label>
                </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">1.00€</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="nestea" name="check_list[]" value="Nestea">
                  <label for="nestea">Nestea</label>
                </td>
                  <td>
                    <input type="number" name="Cantidad" value="Cantidad" min="0" max="5">
                  </td>
                  <td id="preu">1.20€</td>
              </tr>

          </table>
        </div>


        <input type="submit" class="btn btn-lg btn-secondary" name="submit" value="Enviar">

      </form>


  <?php include("footer.php") ?>
</div>
</body>
</html>
