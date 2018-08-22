<?php require_once(dirname(__FILE__) . '/../setting/core.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?= site_info('titulo') .' - '. page_info('titulo') ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!-- Preloader Start -->
    <?php include ("preloader.php");?>
    <!-- Preloader End -->

    <!-- ***** Area de panel de cabecera ***** -->
      <?php include ("panel_cabecera.php");?>
    <!-- ***** Panel de cabecera End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <?php include ("slider_inicio.php");?>
    <!-- ********** Hero Area End ********** -->
    <!-- ********** Area cuerpo Inicio ********** -->
    <?= page_info('contenido') ?>

    <!-- ********** Area cuerpo Fin ********** -->
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
