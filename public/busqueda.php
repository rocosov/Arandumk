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
					/*case "with_the_exact_of":
						$with_the_exact_of = $v;
						if(!empty($_POST["search"]["search_in"])) {
							$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $v . "%'";
						} else {
							$queryCondition .= "titulo LIKE '%" . $v . "%' OR resumen LIKE '%" . $v . "%'";
						}
						break;
					case "without":
						$without = $v;
						if(!empty($_POST["search"]["search_in"])) {
							$queryCondition .= $_POST["search"]["search_in"] . " NOT LIKE '%" . $v . "%'";
						} else {
							$queryCondition .= "titulo NOT LIKE '%" . $v . "%' AND resumen NOT LIKE '%" . $v . "%'";
						}
						break;
					case "starts_with":
						$starts_with = $v;
						if(!empty($_POST["search"]["search_in"])) {
							$queryCondition .= $_POST["search"]["search_in"] . " LIKE '" . $v . "%'";
						} else {
							$queryCondition .= "titulo LIKE '" . $v . "%' OR resumen LIKE '" . $v . "%'";
						}
						break;
					case "search_in":
						$search_in = $_POST["search"]["search_in"];
						break;*/
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
            <!--  <input type="text" class="input-medium search-query">-->
            <!-- <button type="submit" class="btn btn-inverse">Buscar</button>-->
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
			<div class="row-fluid">
				<div class="span12">
					<div class="pagination pagination-right">
						<ul>
							<li><a href="#">Prev</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="portfolio-area da-thumbs">
<!--          <div class="container">
            <div class="row">
              <div class="col-md-12">
          		<h2>Busqueda avanzada usando PHP y MySQLi</h2></div>
            </div>
          <div class="row">
            <div class="col-md-6">
  			      <form name="frmSearch" method="post" action="busqueda.php">
  			           <input type="hidden" id="advance_search_submit" name="advance_search_submit" value="<?php echo $advance_search_submit; ?>">
                   <span id="busqueda_avanzada" onClick="VerOcultarBusquedaAvanzada()">Busqueda Avanzada</span>
  			           <div class="caja_busqueda">
  				               <label class="search-label">Con una de las palabras:</label>
  				               <div>
  					                  <input type="text" name="search[with_any_one_of]"  class="form-control" value="<?php echo $with_any_one_of; ?>"	/>
  				               </div>
  				               <div id="advanced-search-box" <?php if(empty($advance_search_submit)) { ?>style="display:none;"<?php } ?>>
  					                    <label class="search-label">Con la cadena exacta:</label>
  					                    <div>
  						                          <input type="text" name="search[with_the_exact_of]" id="with_the_exact_of" class="form-control" value="<?php echo $with_the_exact_of; ?>"/>
  					                    </div>
  					                    <label class="search-label">Sin:</label>
  					                    <div>
  						                          <input type="text" name="search[without]" id="without"  class="form-control" value="<?php echo $without; ?>"	/>
  					                    </div>
  					                         <label class="search-label">Comienza con:</label>
  					                    <div>
  						                       <input type="text" name="search[starts_with]" id="starts_with" class="form-control" value="<?php echo $starts_with; ?>"	/>
  					                   </div>
  					                   <label class="search-label">Buscar palabras clave en:</label>
  					                   <div>
  						                         <select name="search[search_in]" id="search_in" class="InputBox">
  							                       <option value="">Seleccione columna</option>
  							                       <option value="titulo" <?php if($search_in=="titulo") { echo "selected"; } ?>>Titulo</option>
  							                       <option value="resumen" <?php if($search_in=="resumen") { echo "selected"; } ?>>resumen</option>
  						                         </select>
  					                  </div>
  				             </div>

  				             <div style="margin-top:10px;">
  					                  <input type="submit" name="busqueda" class="btn btn-success" value="Buscar">
  				            </div>
                 </div>
  			   </form>-->
    			<?php
    			if (isset($_POST["busqueda"])){
    			$number=0;
    			while($row = mysqli_fetch_assoc($result)) { $number++;?>

								<li class="portfolio-item2" data-id="id-0" data-type="<?php echo $row["categoria"]; ?>">
									<div class="span3">
										<div class="thumbnail">
											<div class="image-wrapp">
												<img src=<?php echo $row["urlimagen"]; ?> alt="Portfolio name" title="">

											</div>
											<div class="caption">
												<h4><a href="<?php echo $row["alias"]; ?>"><?php echo $row["titulo"]; ?></a></h4>
												<p><?php echo $row["resumen"]; ?></p>
										</div>
									</div>
								</div>
							</li>

    			<?php } ?>
					<?php
            $total = mysqli_num_rows($result);
            if($total==0){
                echo 'No hay coincidencias con su busqueda';
            }
						#else{
            #    echo '<hr><b>Hay un total de '.$total.' resultados en su busqueda</b>';
            #}
			     ?>
            <?php }else{
      				echo"<div><strong> </strong></div>";
      				}
           ?>
				 </ul>
		 	</div>
<div class="row">
	<div class="span12">
		<div class="pagination">
			<ul>
				<li><a href="#">Prev</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">Next</a></li>
			</ul>
		</div>
	</div>
</div>
</div>
</section>
  <!-- Footer
 ================================================== -->
  <?php include ("footer.php");?>

</body>

</html>
