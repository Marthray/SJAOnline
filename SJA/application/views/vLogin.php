<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include("includes/includeCSS.php"); ?> 
	<title>SJAOnline</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="<?php echo base_url(); ?>clogin/register" method="POST" class="col-12">
				<div class="col-12 form-group px-5">
					<label for="ci">CI</label>
					<input type="number" maxlength="10" class="form-control" id="ci" name="txtCI">
				</div>
				<div class="col-12 form-group px-5">
					<label for="nombres">Nombre</label>
					<input type="text" id="nombres" class="form-control" name="txtNombres">
				</div>
				<div class="col-12 form-group px-5">
					<label for="apellidos">Apellido</label>
					<input type="text" class="form-control" id="apellidos" name="txtApellidos">
				</div>
				<div class="col-12 form-group px-5">
					<label for="sexos">Sexo</label>
					<select type="text" class="form-control" id="sexos" name="optSexo">
						<option val="F">Femenino</option>
						<option val="M">Masculino</option>
						<option val="O">Otros</option>
					</select>
				</div>
				<div class="col-12 form-group px-5">
					<label for="fechaNac">Fecha de Nacimiento</label>
					<input type="date" class="form-control" name="fechaNac" id="fechaNac">
				</div>
				<div class="col-12 form-group px-5">
					<label for="direccion">Direcci&oacute;n Habitaci&oacute;n</label>
					<input type="text" class="form-control" id="direccion" name="txtDireccion">
				</div>
				<div class="col-12 form-group px-5">
					<label for="habilidades">Habilidades</label>
					<input type="text" class="form-control" id="habilidades" name="txtHabilidad">
				</div>
				<br>
				<div class="col-12 form-group px-5">
					<label for="user">Usuario</label>
					<input type="text" class="form-control" id="user" name="txtUser">
				</div>
				<div class="col-12 form-group px-5">
					<label for="pass">Contraseña</label>
					<input type="password" class="form-control" id="pass" name="txtPass">
				</div>
				<button type="submit" class="btn btn-primary col-3 offset-5">Submit</button>
			</form>
		</div>
	</div>

	<?php include("includes/includeJS.php"); ?> 
</body>
</html>