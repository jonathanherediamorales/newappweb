<?php

include("../includes/connection.php");

$id=$_GET["id"];

$sql="DELETE FROM producto WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: productos.php");
}else{

}

?>