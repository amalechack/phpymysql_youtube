<meta charset="UTF-8">
<?php
$archivodb = 'conexion.php';

if(file_exists($archivodb)){
	echo 'Estamos conectados al archivo de conexión a base de datos! :D <br>';
	require_once($archivodb);
}
else{
	echo 'El archivo no se encuentra disponible. Verifiquelo...! <br>';
}
?>
