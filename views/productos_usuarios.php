<?php

include("../includes/connection.php");
$sql = "SELECT * FROM producto";
$query = mysqli_query($con, $sql);



?>
<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="CSS/style.css" rel="stylesheet">
  <title>asociacion ganadera</title>

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
  <div class="form" class="table table-dark table-hover">
    <h2>Productos Registrados</h2>

    <table class="table table-dark table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">categoria</th>
          <th scope="col">cantidad</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <?php while ($row = mysqli_fetch_array($query)) : ?>
        <tr>

          <th><?= $row['id'] ?></th>
          <th><?= $row['nombre'] ?></th>
          <th><?= $row['categoria'] ?></th>
          <th><?= $row['cantidad'] ?></th>


        </tr>
      <?php endwhile; ?>
      </tr>
      </tbody>
    </table>
</body>

</html>