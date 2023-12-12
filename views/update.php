<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

  header("Location: ../includes/login.php");
  die();
}



include("../includes/connection.php");

$id = $_GET['id'];

$sql = "SELECT * FROM producto WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="form">
    <h1>Editar Productos</h1>

        <div class="row g-3">
            <form action="edit_producto.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <div class="row g-3">
                    <div class="col">
                        <label type="text" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" value="<?= $row['nombre'] ?>" autocomplete="off" required>
                    </div>
                    <div class="col">
                        <label type="text" class="form-label">Categoria</label>
                        <select name="categoria" class="form-control" value="<?= $row['categoria'] ?>" required>
                            <option value="">selecciona una opcion</option>
                            <option value="alimento">alimento</option>
                            <option value="medicamentos">medicamentos</option>
                            <option value="suplementos">suplementos</option>
                        </select>
                    </div>
                    <div class="col">
                        <label type="text" class="form-label">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control" placeholder="cantidad" aria-label="cantidad" value="<?= $row['cantidad'] ?>" autocomplete="off" required>
                    </div>
                </div>

                <center><input class="w-25 p-3" class="btn btn-primary"  type="submit" value="actualizar"></center>
                


            </form>
        </div>
</body>

</html>