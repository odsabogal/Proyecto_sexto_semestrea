<?php 
	$alert='';
	session_start();	
	if(!empty($_SESSION['active'])){
		header('location: Principal.php');
	}else{
		if(!empty($_POST)){
			if(empty($_POST['usuario']) || empty($_POST['clave'])){
				$alert = 'Ingrese su usuario y contraseña';
			}else{
				require_once "Configuraciones/Funciones.php";
				$user = mysqli_real_escape_string($conexion,$_POST['usuario']);
				$pass = md5(mysqli_real_escape_string($conexion,$_POST['clave']));

				$query = mysqli_query($conexion,"SELECT * FROM usuario WHERE Usuario = '$user' AND Contraseña = '$pass'");
				$result = mysqli_num_rows($query);

				if($result > 0 ){
					$data = mysqli_fetch_array($query);
					$_SESSION['active'] = true;
					$_SESSION['idUser'] = $data['idusuario'];
					$_SESSION['Nombre'] = $data['Nombre'];
					$_SESSION['Telefono'] = $data['Telefono'];
					$_SESSION['Correo'] = $data['Correo'];
					$_SESSION['Usuario'] = $data['Usuario'];
					$_SESSION['Contraseña'] = $data['Contraseña'];
					$_SESSION['Codigo_rol'] = $data['Codigo_rol'];
					header('location: Principal.php');
				}else{
					$alert = 'El usuario o la contraseña son incorrectos';
					session_destroy();
				}
			}
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/Stylesesion.css">
</head>
<body>
	<section id="container">	
		<form action="" method="post">
			<h3>Iniciar sesion</h3>
			<img src="img/Inicio_Sesion65.png" alt="Login">
			<input type="text" name="usuario" placeholder="Usuario">
			<input type="password" name="clave" placeholder="Contraseña">
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
			<input type="submit" value="Ingresar">
		</form> 
	</section>
</body>
</html>
