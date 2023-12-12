<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

  header("Location: ../includes/login.php");
  die();
}


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

<div class="container is-fluid">




  <div class="col-xs-12">
    <h1>Bienvenido Lector <?php echo $_SESSION['nombre']; ?></h1>
    <br>
    <h1>Lista de usuarios</h1>
    <br>
    <div>
      <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Log Out
        <i class="fa fa-power-off" aria-hidden="true"></i>
      </a>
    </div>
    <br>
    <br>
    </form>
    <table class="table table-dark table-striped" id="table_id">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Fecha</th>
          <th>Rol</th>
        </tr>
      </thead>
      <tbody>
        
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "bd_ganadera");
        $SQL = "SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
user.fecha, permisos.rol FROM user
LEFT JOIN permisos ON user.rol = permisos.id";
        $dato = mysqli_query($conexion, $SQL);
        if ($dato->num_rows > 0) {
          while ($fila = mysqli_fetch_array($dato)) {
        ?>
            <tr>
              <td><?php echo $fila['nombre']; ?></td>
              <td><?php echo $fila['correo']; ?></td>
              <td><?php echo $fila['telefono']; ?></td>
              <td><?php echo $fila['fecha']; ?></td>
              <td><?php echo $fila['rol']; ?></td>

            <?php
          }
        } else {

            ?>
            <tr class="text-center">
              <td colspan="16">No existen registros</td>
            </tr>


          <?php

        }

          ?>


          </body>
    </table>



</html>