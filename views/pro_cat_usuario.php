<?php

include("../includes/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <title>Asociacion Ganadera</title>
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">

    <a class="navbar-brand" href="productos_usuarios.php">Asociacion Ganadera</a>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link" href="categoriausuario.php">Categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lector.php">informacion del usuario</a>
        </li>
      </ul>

    </div>
    </div>
  </nav>
<body>

  <div id="content">
    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 mb-3">
            <center>
              <h1>Productos</h1>
            </center>
            <a href="productos_usuarios.php"><input class="btn btn-primary" type="button" value="volver a productos"></a>
          </div>
          <div class="col-sm-12">
            <div class="table-responsive">
              <table class="table table-dark table-striped">
                <thead>

                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Cantidad</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $categoria = $_GET['categoria'];
                  extract($_POST);
                  $sql = "SELECT * FROM producto WHERE categoria = '$categoria'";
                  $producto = mysqli_query($con, $sql);
                  if ($producto->num_rows > 0) {
                    foreach ($producto as $key => $row) {
                    }
                  ?>
                      <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['categoria'] ?></th>
                        <th><?= $row['cantidad'] ?></th>

                      </tr>



                  <?php
                    }
                   else
                  ?>
                  <?php
                  ?>


                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
          </div>
    </section>
  </div>

</html>