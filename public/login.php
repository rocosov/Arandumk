
<?php require_once(dirname(__FILE__) . '/../setting/core.php' ); ?>
<?php

	require ('../php/conexion.php');
	session_start();
	if(isset($_SESSION["id_usuario"])){
			header("Location: admin/"); #mientras sesion esta ok se redirecciona a welcome.php
		}


	if (!empty($_POST))
	{
		$usuario= mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$password= mysqli_real_escape_string($mysqli,$_POST['password']);
		$error= '';

		#cifrar password
		$sha1_pass = sha1($password);

		$sql ="SELECT id, id_tipo FROM usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;

		if ($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id_usuario'] = $row['id'];
			$_SESSION['tipo_usuario'] = $row['id_tipo'];

			header("location: admin/");
			}else{
				$error="El Nombre o contraseña son incorrectos"	;
			}
		}
 ?>





		<!DOCTYPE html>

		<html lang="en">
		    <head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				      <title><?= site_info('titulo') .' - '. page_info('titulo') ?></title>
				  <meta name="viewport" content="width=device-width, initial-scale=1.0">
				  <meta name="description" content="">
				  <meta name="author" content="">

				  <!-- styles -->
				  <link href="assets/css/bootstrap.css" rel="stylesheet">
				  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
				  <link href="assets/css/docs.css" rel="stylesheet">
				  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
				  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic" rel="stylesheet">
				  <link href="assets/css/style.css" rel="stylesheet">
				  <link href="assets/color/success.css" rel="stylesheet">

				  <!-- fav and touch icons -->
				  <link rel="shortcut icon" href="assets/ico/favicon.ico">
				  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
				  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
				  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
				  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

				  <!-- =======================================================
				    Theme Name: Scaffold
				    Theme URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
				    Author: BootstrapMade.com
				    Author URL: https://bootstrapmade.com
				  ======================================================= -->
		    </head>
		    <body>


				</head>

				<body data-spy="scroll" data-target=".bs-docs-sidebar">

				  <header>
				    <!-- Navbar
				    ================================================== -->
				  <?php include ("navbar.php");?>
				  </header>

				  <!-- Subhead
				================================================== -->

				  <section id="subintro">
				    <div class="jumbotron subhead" id="overview">
				      <div class="container">
				        <div class="row">
				          <div class="span8">
				            <h3><i class="m-icon-big-swapright m-icon-white"></i> Acceder</h3>
				            
				          </div>
				         
				        </div>
				      </div>
				    </div>
				  </section>

				  <section id="maincontent">
				    <div class="container">
				      <div class="row">
				        <div class="span12">

					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
		        <!-- Navigation & Logo-->
					</section>


						<section id="maincontent">
						    <div class="container">
								<div class="row">
									<div class="span12">
										<form role="form" role="form">
											<div class="form-group">
												<label for="login-username"><i class="icon-user"></i> <b>Usario</b></label>
												<input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" required>
											</div>
											<div class="form-group">
												<label for="login-password"><i class="icon-lock"></i> <b>Contraseña</b></label>
												<input class="form-control" id="password"  name="password" type="password" placeholder="Contraseña" required>

											</div>
											<div class="form-group">

												<input class="btn pull-right"  name="login" type="submit"  value="Acceder"></button>
										</form>
												<div class="clearfix"> <?php echo isset($error) ? utf8_decode($error) : '' ;?>

												</div>
											</div>
									</div>
								</div>
							</div>

						</section>

				<!-- ***** Footer Area Start ***** -->


	</body>
		</html>
