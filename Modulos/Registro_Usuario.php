<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<title>Registro usuario</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Stylesesion.css">
</head>
<body>
	<section id="container">
		<div class="form_register">
			<h1>Registro usuario</h1>
			<hr>
			<div class = "Register_alert"></div>
			<form action="" method="post">
				<label for = "nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
				<label for = "telefono">Telefono</label>
				<input type="text" name="telefono" id="telefono" placeholder="Telefono">
				<label for = "correo">Correo electronico</label>
				<input type="email" name="correo" id="correo" placeholder="Correo electronico">
				<label for = "usuario">Usuario</label>
				<input type="text" name="usuario" id="usuario" placeholder="Usuario">
				<label for = "contraseña">Contraseña</label>
				<input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
				<label for="rol">Tipo de usuario</label>
				<select name="rol" id="rol">
					<option value="1">Administrador</option>
					<option value="2">Usuario</option>
				</select>
				<input type="submit" value="Crear usuario" class="Btn_save">
			</form>
		</div>
	</section>
</body>
</html>