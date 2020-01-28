<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include("includes/includeCSS.php"); ?> 
	<title>SJAOnline</title>
</head>
<body>
	<div class="container">
        <form action="<?php echo base_url('clogin/login'); ?>" method="POST" class="col-12">
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
        <a href="<?php echo base_url('clogin/openRegister'); ?>">Register?</a>
	</div>

<?php include("includes/includeJS.php"); ?> 
</body>
</html>