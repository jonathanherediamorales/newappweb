<?php
   
require_once ("_db.php");




if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_user';
            acceso_user();
            break;

            case 'acceso';
            acceso();
            break;



		}

	}

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","bd_ganadera");
		extract($_POST);
		$consulta="UPDATE user SET nombre = '$nombre', correo = '$correo', telefono = '$telefono',
		password ='$password', rol = '$rol' WHERE id = '$id' ";

		mysqli_query($conexion, $consulta);


		header('Location: ../views/usuario.php');

}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","bd_ganadera");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM user WHERE id= $id";

    mysqli_query($conexion, $consulta);


    header('Location: ../views/usuario.php');

}

function acceso_user() {
    $nombre=$_POST['nombre'];
    $password=$_POST['password'];
    session_start();
    $_SESSION['nombre']=$nombre;

    $conexion=mysqli_connect("localhost","root","","bd_ganadera");
    $consulta= "SELECT * FROM user WHERE nombre='$nombre' AND password='$password'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_fetch_array($resultado);


    if($filas['rol'] == 1){ //admin

        header('Location: ../views/productos.php');

    }else if($filas['rol'] == 2){//lector
        header('Location: ../views/productos_usuarios.php');
    }
    
    
    else{

        header('Location: login.php');
        session_destroy();

    }

  
}
function acceso() {
    $categoria=$_POST['categoria'];
    session_start();
    $_SESSION['categoria']=$categoria;

    $con=mysqli_connect("localhost","root","","bd_ganadera");
    $consulta= "SELECT * FROM producto WHERE categoria='$categoria'";
    $resultado=mysqli_query($con, $consulta);
    $filas=mysqli_fetch_array($resultado);


  
}






