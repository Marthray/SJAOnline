<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include("includes/includeCSS.php"); ?> 
	<title>SJAOnline</title>
</head>
<body>
	<div class="container" style="display:flex; align-items: center; justify-content: center">
        <h1>Welcome, <?php echo $nombre . " " . $apellido; ?>!</h1>
    </div>

<?php include("includes/includeJS.php"); ?> 
</body>
</html>