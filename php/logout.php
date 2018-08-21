<?php
	session_start();#
	session_destroy();#destruye la sesion
	header('location: ../public/admin/'); # luego de destruir redirecciona al inicio index.php que es el formularop login

?>
