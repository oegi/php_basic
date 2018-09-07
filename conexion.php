

<?php
	#servidor,
	#usuario,
	#password
	#Base de datos a conectar
	$mysqli = new mysqli('localhost', 'root', '', 'personal');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);	
	}
?>

