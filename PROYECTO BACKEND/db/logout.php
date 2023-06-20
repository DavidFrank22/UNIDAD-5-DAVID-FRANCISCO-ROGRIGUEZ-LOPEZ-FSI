<!DOCTYPE html>
<?php
	session_start();
	session_destroy();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="../css/style_logout.css" />
	</head>
<body>
	<div class="col-md-6 well">
		<h3 class="text-primary">Por tu seguridad, tu sesión ha sido cerrada debido a inactividad durante un período de 20 minutos.</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<h3>Por favor, inicia sesión nuevamente para continuar."</h3>
		<a href="../php/inicio_sesion.php">Volver a acceder</a>
	</div>
</body>
</html>