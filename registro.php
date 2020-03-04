<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<section id="form">


		<?php
			@$form =$_REQUEST['form'];

			if($form == 'nuevo'){
				?>
	 			<form action="funciones.php?num=1" method="POST" enctype="multipart/form-data">
					<h3>Registrate</h3>
					<input type="text" placeholder="Nombre..." name="nombre">
			     	<input type="email" placeholder="Correo..." name="correo">
					<input type="password" placeholder="Contrasena..." name="contrasena">
					<label>Ingresa una imagen</label>
					<input type="file" name="imagen">
					<input type="submit" value="Aceptar">
			 	</form>
			 	<a href="registro.php">Ya tienes cuenta?</a>
				<?php
			} else{
				?>
				<form action="funciones.php?num=2" method="POST">
					<h3>Inicia sesion</h3>
					<input type="email" placeholder="Correo..." name="correo">
					<input type="password" placeholder="Contrasena..." name="contrasena">
					<input type="submit" value="Entrar">
				</form>

				<a href="registro.php?form=nuevo">No tienes cuenta?</a>
				<?php 

			}
		?>
		

	</section>

</body>
</html>