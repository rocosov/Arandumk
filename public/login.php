
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
		<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
		<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
		<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
		    <head>
					<meta charset="UTF-8">
			    <meta name="description" content="">
			    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

			    <!-- Title  -->
			    <title>World - Blog &amp; Acceder</title>

			    <!-- Favicon  -->
			    <link rel="icon" href="../img/core-img/favicon.ico">

			    <!-- Style CSS -->
			    <link rel="stylesheet" href="../style.css">
		    </head>
		    <body>


			    <!-- ***** Area de panel de cabecera ***** -->
			      <?php include ("panel_cabecera.php");?>
			    <!-- ***** Panel de cabecera End ***** -->

				 <!-- ********** Hero Area Start ********** -->
					    <?php include ("slider_regular.php");?>
				 <!-- ********** Hero Area End ********** -->

					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
		        <!-- Navigation & Logo-->

	<div class="main-content-wrapper section-padding-100">
		<div class="container">

						                <!-- ============= Categorias Content Area Start ============= -->
		        <!-- Page Title -->
							<div class="section section-breadcrumbs">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<h1>Acceder</h1>
										</div>
									</div>
								</div>
							</div>

		        <div class="section">
			    	<div class="container">
						<div class="row">
							<div class="col-sm-5">

								<div class="basic-login">
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
								</form>

							</div>
						</div>

						</div>
					</div>
				</div>
	
		</div>
	</div>
				<!-- ***** Footer Area Start ***** -->
		    <?php include ("footer.php");?>
		    <!-- ***** Footer Area End ***** -->

		    <!-- jQuery (Necessary for All JavaScript Plugins) -->
		    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
		    <!-- Popper js -->
		    <script src="../js/popper.min.js"></script>
		    <!-- Bootstrap js -->
		    <script src="../js/bootstrap.min.js"></script>
		    <!-- Plugins js -->
		    <script src="../js/plugins.js"></script>
		    <!-- Active js -->
		    <script src="../js/active.js"></script>
	    </body>
	</html>
