<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include("includes/includeCSS.php"); ?> 
	<title>SJAOnline</title>
</head>
<body>
	<form action="<?php echo base_url(); ?>clogin/register" method="POST">
		<div class="form-group px-5">
			<label for="ci">CI</label>
			<input type="number" maxlength="10" class="form-control" id="ci" name="txtCI">
		</div>
		<div class="form-group px-5">
			<label for="nombres">Nombres</label>
			<input type="text" id="nombres" class="form-control" name="txtNombres">
		</div>
		<div class="form-group px-5">
			<label for="apellidos">Apellidos</label>
			<input type="text" class="form-control" id="apellidos" name="txtApellidos">
		</div>
		<br>
		<div class="form-group px-5">
			<label for="user">Usuario</label>
			<input type="text" class="form-control" id="user" name="txtUser">
		</div>
		<div class="form-group px-5">
			<label for="pass">Contraseña</label>
			<input type="password" class="form-control" id="pass" name="txtPass">
		</div>
		<button type="submit" class="btn btn-primary mx-auto">Submit</button>
	</form>

	<?php include("includes/includeJS.php"); ?> 
</body>
</html>