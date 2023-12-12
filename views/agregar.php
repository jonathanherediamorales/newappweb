<?php

include("../includes/connection.php");

$sql = "SELECT * FROM producto";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body>
  <div class="form">
    <h1>Agregar Productos</h1>
    <p></p>
    <form action="insert_producto.php" method="POST">
      <input type="hidden" name="id" value="<?= $row['id'] ?>">
      <div class="row g-3">
        <div class="col">
          <label type="text" class="form-label">Nombre</label>
          <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" autocomplete="off" required>
        </div>
        <div class="col">
          <label type="text" class="form-label">Categoria</label>
          <select name="categoria" class="form-control" required>
          <option value="">selecciona una opcion</option>
            <option value="alimento">alimento</option>
            <option value="medicamentos">medicamentos</option>
            <option value="suplementos">suplementos</option>
          </select>
        </div>
        <div class="col">
          <label type="text" class="form-label">Cantidad</label>
          <input type="text" name="cantidad" class="form-control" placeholder="cantidad" aria-label="cantidad" autocomplete="off" required>
        </div>
      </div>
      <input class="btn btn-primary" type="submit" value="agregar">
  </div>
</body>

</html>