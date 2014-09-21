<?php
$basededatos = 'tutoriales';
	if(!$conexion = mysql_connect('localhost', 'usuario', '<password></password>')){
		echo 'No se puede conectar a la base de datos porque los parámetros de conexión parecen incorrectos! <br>';
	}
	else{
		echo 'La conexión se realizón exitosamente!!! :DDDD <br>';
		if(!mysql_select_db($basededatos)){
			echo 'No existe o no es posible de acceder a la base de datos "'.$basededatos.'" <br>';
		}
		else{
			echo 'Estamos ya conectados a la base de datos para trabajar! <br>';
		}
	}
?>
