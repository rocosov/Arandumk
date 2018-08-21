
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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrar Pagina</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
