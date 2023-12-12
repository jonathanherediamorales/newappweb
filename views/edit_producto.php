<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

  header("Location: ../includes/login.php");
  die();
}




include('../includes/connection.php');

$id=$_POST['id'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];

$sql= "UPDATE producto SET nombre='$nombre', categoria='$categoria', cantidad='$cantidad' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header('Location: productos.php');
}else{

}

?>