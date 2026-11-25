<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF=8">
	<title>Guardar informacion en un archivo</title>
</head>
<body>
<h2>Guardar informacion en un archivo</h2>
<?php
	$nombre = " ";
	file_put_contents("alumnos.txt",$nombre  PHP_EDL,
	FILE_APPEND);
	echo "informacion guardada correctamente. ";
	echo "<br><br>";
?>
<?php
    echo "<br><br>";
    $nombre = " ";
	file_put_contents("alumnos.txt",$nombre  PHP_EDL,
	FILE_APPEND);
	echo "Alumna guardada correctamente. ";
?>
<?php
	echo "<br><br>";
	$comtenido =file_put_contents("alumnos.txt");
	
?>  
</body>
</html>
