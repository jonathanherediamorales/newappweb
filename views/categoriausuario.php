<?php


session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

  header("Location: ../includes/login.php");
  die();
}

include("../includes/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
<div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
        <a class="btn btn-primary" href="../views/Pro_cat_usuario.php"=<?php echo 'alimento'?>" role="button">alimento</a>

        </div>
        <div class="col">
        <a class="btn btn-primary" href="../views/Pro_cat_usuario.php"=<?php echo 'suplementos'?>" role="button">suplementos</a>
        </div>
        <div class="col">
        <a class="btn btn-primary" href="../views/Pro_cat_usuario.php"=<?php echo 'medicamentos'?>" role="button">Medicamentos</a>
        </div>
    </div>
</div>

    </div>
</div>
</body>
</html>