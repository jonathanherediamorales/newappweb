<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

  header("Location: ../includes/login.php");
  die();
}



include("../includes/connection.php");

$id = null;
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO producto VALUES('$id','$nombre','$categoria','$cantidad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: productos.php");
}else{

}

?>