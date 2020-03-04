<?php

function Insertar($nombre, $correo, $contrasena){

		$imagen = $_FILES['imagen']['name'];
		copy($_FILES['imagen']['tmp_name'], "imagenes/".$imagen);

		include("conexion.php");

		$sql =	 "INSERT INTO usuarios(nombre,correo,contrasena,imagen) VALUES('$nombre', '$correo', '$contrasena', '$imagen')";

		$res = $conexion->query($sql);

		if ($res) {
			echo "Si se pudo";
		}else{
			echo "valio pistola xd";
		}

}
 function Sesion($user, $pass){
 	include("conexion.php");
 	$sql = "SELECT * FROM usuarios WHERE correo = '$user' AND contrasena = '$pass'";
 	$res = $conexion->query($sql);
 	session_start();

 	if($sesion = mysqli_fetch_array($res)){
 		$_SESSION['user'] = $user;
 		$_SESSION['pass'] = $pass;
 		header("Location: index.php");	
 	}else{
 		header("location: registro.php");
 	}
 }


@$num = $_REQUEST['num'];

switch ($num) {
	case 1:
			Insertar($_POST['nombre'], $_POST['correo'], $_POST['contrasena']);
	break;

	case 2:
			Sesion($_POST['correo'], $_POST['contrasena']);
	break;
	
	default:
		echo "Este es el default";
		break;
}


?>