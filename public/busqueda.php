<?php require_once(dirname(__FILE__) . '/../setting/core.php' ); ?>

<?php
include("../php/conexion.php");

	$queryCondition = "";
	if(!empty($_POST["search"])) {
		$advance_search_submit = $_POST["advance_search_submit"];
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("with_any_one_of","with_the_exact_of","without","starts_with");
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
								$queryCondition .= "titulo LIKE '" . $wordsAry[$i] . "%' OR resumen LIKE '" . $wordsAry[$i] . "%'";
							}
							if($i!=$wordsCount-1) {
								$queryCondition .= " OR ";
							}
						}
						break;
					case "with_the_exact_of":
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
						break;
				}
			}
		}
	}
	$orderby = " ORDER BY id desc";
	$sql = "SELECT * FROM contenidos " . $queryCondition;
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
  <style>
  		body{
  			font-family: "Segoe UI",Optima,Helvetica,Arial,sans-serif;
  			line-height: 25px;
  		}
  		.caja_busqueda {
  			padding: 30px;
  			background-color: #EAEAEA;
  		}
  		#busqueda_avanzada {
  			color: #001FFF;
  			cursor: pointer;
  		}
  		.resultado_resumen{
  			margin: 5px 0px 15px;
  		}
  		.verde{
  			color:#84D2A7; font-size:14px;
  		}

  		b{
  		font-size:12px;
  		}
  		.InputBox {
  			padding: 5px;
  			border: 0;
  			border-radius: 4px;
  			margin: 0px 5px 15px;
  			width: 100%;
  		}
  		.btn{ width:100%; font-size:14px;}

  	</style>
  	<script>
  		function VerOcultarBusquedaAvanzada() {
  			if(document.getElementById("advanced-search-box").style.display=="none") {
  				document.getElementById("advanced-search-box").style.display = "block";
  				document.getElementById("advance_search_submit").value= "1";
  			} else {
  				document.getElementById("advanced-search-box").style.display = "none";
  				document.getElementById("with_the_exact_of").value= "";
  				document.getElementById("without").value= "";
  				document.getElementById("starts_with").value= "";
  				document.getElementById("search_in").value= "";
  				document.getElementById("advance_search_submit").value= "";
  			}
  		}
  	</script>


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
            <form class="form-search">
              <input type="text" class="input-medium search-query">
              <button type="submit" class="btn btn-inverse">Buscar</button>
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



          <div class="container">
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
  			   </form>
    			<?php
    			if (isset($_POST["busqueda"])){

    			$number=0;
    			while($row = mysqli_fetch_assoc($result)) { $number++;?>
    			<div>
    				<div><strong><?php echo $number;?>. <?php echo $row["titulo"]; ?></strong></div>
    				<div class="verde"><strong><?php echo $row["alias"]; ?></strong></div>
    				<div class="resultado_resumen"><?php echo $row["resumen"]; ?></div>
    			</div>
    			<?php } ?>
          <?php
            $total = mysqli_num_rows($result);
            if($total==0){
                echo 'No hay resultados encontrados';
            }else{
                echo '<hr><b>Hay un total de '.$total.' resultados en su busqueda</b>';
            }
			     ?>
            <?php }else{
      				echo"<div><strong>Ingrese la palabra clave a buscar.</strong></div>";
      				}
           ?>


      </div>
    </div>
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
