<?php
	$mysqli=new mysqli("localhost","root","","page"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

#de busqueda_avanzada
$with_any_one_of = "";
$with_the_exact_of = "";
$without = "";
$starts_with = "";
$search_in = "";
$advance_search_submit = "";
#

?>
