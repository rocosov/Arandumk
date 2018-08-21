
<?php
	session_start();
	require '../../php/conexion.php';
		if(!isset($_SESSION["id_usuario"]))	{
		header("Location: ../");
	}
	$idUsuario = $_SESSION['id_usuario'];
	$sql ="SELECT u.id, p.nombre FROM usuarios AS u INNER JOIN personal AS p ON u.id_personal=p.id WHERE u.id = '$idUsuario'";
		$result=$mysqli->query($sql);

		$row = $result->fetch_assoc();
?>



<?php require_once('lib\data.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/icomoon-social.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="../../css/leaflet.css" />

  <link rel="stylesheet" href="../../css/main.css">

  <script src="../../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>


  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
