<?php require_once(dirname(__FILE__) . '/../setting/core.php' ); ?>
<?php
include("../php/conexion.php");

	$queryCondition = "";
	if(!empty($_POST["search"])) {
		$advance_search_submit = $_POST["advance_search_submit"];
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

			$queryCases = array("with_any_one_of"/*,"with_the_exact_of","without","starts_with"*/);
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "with_any_one_of":
						$with_any_one_of = $v;
						$wordsAry = explode(" ", $v);
						$wordsCount = count($wordsAry);
						for($i=0;$i<$wordsCount;$i++) {
							if(!empty($_POST["search"]["search_in"])) {
								$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $wordsAry[$i] . "%'";
							} else {
								$queryCondition .= "(titulo LIKE '" . $wordsAry[$i] . "%' AND tipo LIKE '%POST') OR (resumen LIKE '%" . $wordsAry[$i] . "%'AND tipo LIKE '%POST')";
							}
							if($i!=$wordsCount-1) {
								$queryCondition .= " OR ";
							}
						}
						break;
				}
			}
		}
	}
	$orderby = "ORDER BY id DESC";
	$sql = "SELECT * FROM contenidos " . $queryCondition . $orderby ;
	$result = mysqli_query($mysqli,$sql);

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
	  <!-- =======================================================
    script api de gps
	en el conrenido de la pagina se coloca
	     <div id="w3docs-map" style="width:500px;height:380px;"></div>
  ======================================================= -->
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3XfuMJJGzaU8TUItQM7XWD4esZdbpgtA"></script>

  <script>
         function initialize() {
           var prop = {
            center:new google.maps.LatLng(-25.278244, -57.569447),
            zoom:10,
            mapTypeId:google.maps.MapTypeId.ROADMAP
           };
          var map=new google.maps.Map(document.getElementById("w3docs-map"), prop);
         }
         google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	<!--======================================================= -->
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
            <h3><i class="m-icon-big-swapright m-icon-white"></i> <?=page_info('titulo') ?></h3>
            <p></p>
          </div>
			<div class="span4">
			  <div class="input-append">
				 <form name="frmSearch" method="post" action="busqueda.php">
				 <input type="text" name="search[with_any_one_of]"  class="form-control" value="<?php echo $with_any_one_of; ?>"	/>
				 <input type="submit" name="busqueda" class="btn btn-inverse" value="Buscar">
				</form>
			  </div>
			</div>
        </div>
      </div>
    </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">

          <?= page_info('contenido') ?>
    </div>


  </section>






  <!-- Footer
 ================================================== -->
  <?php include ("footer.php");?>

</body>

</html>
