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
      <title><?= site_info('titulo') .' - '. 'Guia' ?></title>
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
            <h3><i class="m-icon-big-swapright m-icon-white"></i> Guia</h3>
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
				      <div class="row-fluid">
				        <div class="span12">
				          <div class="btn-group filter-category">
				            <a class="btn btn-success" href="#"><i class="icon-list icon-white"></i> Select category</a>
				            <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				            <ul class="dropdown-menu filter">
				              <li class="all active"><a href="#"><i class="icon-picture"></i> All category</a></li>
				              <li class="web"><a href="#"><i class="icon-picture"></i> Web design</a></li>
				              <li class="brand"><a href="#"><i class="icon-picture"></i> Brand identity</a></li>
				              <li class="graphic"><a href="#"><i class="icon-picture"></i> Graphic design</a></li>
				              <li class="photo"><a href="#"><i class="icon-picture"></i> Photography</a></li>
				              <li class="ilustrator"><a href="#"><i class="icon-picture"></i> Ilustrator</a></li>
				            </ul>
				          </div>
				          <div class="pagination pagination-right">
				            <ul>
				              <li><a href="#">Prev</a></li>
				              <li><a href="#">1</a></li>
				              <li class="active"><a href="#">2</a></li>
				              <li><a href="#">3</a></li>
				              <li><a href="#">4</a></li>
				              <li><a href="#">Next</a></li>
				            </ul>
				          </div>
				        </div>
				      </div>
				      <div class="row">
				        <ul class="portfolio-area da-thumbs">
				          <li class="portfolio-item2" data-id="id-0" data-type="web">
				            <div class="span3">
				              <div class="thumbnail">
				                <div class="image-wrapp">
				                  <img src="assets/img/dummies/work1.jpg" alt="Portfolio name" title="">
				                  <article class="da-animate da-slideFromTop" style="display: block;">
				                    <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
				                    <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>
				                  </article>
				                </div>

				                <div class="caption">
				                  <h4><a href="#">Portfolio name</a></h4>
				                  <p>Tota laboramus adversarium at sed, clita persius qui et, vis quot cibo deterruisset id. An fuisset eleifend eos, agam dicat an ius.</p>
				                </div>
				              </div>
				            </div>
				          </li>
				          <li class="portfolio-item2" data-id="id-0" data-type="web">
				            <div class="span3">
				              <div class="thumbnail">
				                <div class="image-wrapp">
				                  <img src="assets/img/dummies/work2.jpg" alt="Portfolio name" title="">
				                  <article class="da-animate da-slideFromLeft" style="display: block;">
				                    <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
				                    <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>
				                  </article>
				                </div>

				                <div class="caption">
				                  <h4><a href="#">Portfolio name</a></h4>
				                  <p>Ex decore equidem detracto vis, nihil labores euripidis an sea. Nisl solet nonumes ne has, eos nostrum antiopam aliquando at no.</p>
				                </div>
				              </div>
				            </div>
				          </li>
				          <li class="portfolio-item2" data-id="id-0" data-type="brand">
				            <div class="span3">
				              <div class="thumbnail">
				                <div class="image-wrapp">
				                  <img src="assets/img/dummies/work3.jpg" alt="Portfolio name" title="">
				                  <article class="da-animate da-slideFromRight" style="display: block;">
				                    <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
				                    <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>
				                  </article>
				                </div>

				                <div class="caption">
				                  <h4><a href="#">Portfolio name</a></h4>
				                  <p>Ex decore equidem detracto vis, nihil labores euripidis an sea. Nisl solet nonumes ne has, eos nostrum antiopam aliquando at no.</p>
				                </div>
				              </div>
				            </div>
				          </li>
				          <li class="portfolio-item2" data-id="id-0" data-type="photo">
				            <div class="span3">
				              <div class="thumbnail">
				                <div class="image-wrapp">
				                  <img src="assets/img/dummies/work4.jpg" alt="Portfolio name" title="">
				                  <article class="da-animate da-slideFromRight" style="display: block;">
				                    <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
				                    <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>
				                  </article>
				                </div>

				                <div class="caption">
				                  <h4><a href="#">Portfolio name</a></h4>
				                  <p>Ex volutpat voluptatum vim. Mea no brute modo saepe vis at, sit te oblique recusabo ullamcorper. Mel aperiri constituto ad mel at.</p>
				                </div>
				              </div>
				            </div>
				          </li>
				          <li class="portfolio-item2" data-id="id-0" data-type="graphic">
				            <div class="span3">
				              <div class="thumbnail">
				                <div class="image-wrapp">
				                  <img src="assets/img/dummies/work5.jpg" alt="Portfolio name" title="">
				                  <article class="da-animate da-slideFromRight" style="display: block;">
				                    <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
				                    <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>
				                  </article>
				                </div>

				                <div class="caption">
				                  <h4><a href="#">Portfolio name</a></h4>
				                  <p>Ex decore equidem detracto vis, nihil labores euripidis an sea. Nisl solet nonumes ne has, eos nostrum antiopam aliquando at no.</p>
				                </div>
				              </div>
				            </div>
				          </li>
				          <li class="portfolio-item2" data-id="id-0" data-type="graphic">
				            <div class="span3">
				              <div class="thumbnail">
				                <div class="image-wrapp">
				                  <img src="assets/img/dummies/work6.jpg" alt="Portfolio name" title="">
				                  <article class="da-animate da-slideFromRight" style="display: block;">
				                    <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
				                    <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>
				                  </article>
				                </div>

				                <div class="caption">
				                  <h4><a href="#">Portfolio name</a></h4>
				                  <p>Ex volutpat voluptatum vim. Mea no brute modo saepe vis at, sit te oblique recusabo ullamcorper. Mel aperiri constituto ad mel at.</p>
				                </div>
				              </div>
				            </div>
				          </li>
				          <li class="portfolio-item2" data-id="id-0" data-type="photo">
				            <div class="span3">
				              <div class="thumbnail">
				                <div class="image-wrapp">
				                  <img src="assets/img/dummies/work7.jpg" alt="Portfolio name" title="">
				                  <article class="da-animate da-slideFromRight" style="display: block;">
				                    <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
				                    <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>
				                  </article>
				                </div>

				                <div class="caption">
				                  <h4><a href="#">Portfolio name</a></h4>
				                  <p>Ex decore equidem detracto vis, nihil labores euripidis an sea. Nisl solet nonumes ne has, eos nostrum antiopam aliquando at no.</p>
				                </div>
				              </div>
				            </div>
				          </li>
				          <li class="portfolio-item2" data-id="id-0" data-type="ilustrator">
				            <div class="span3">
				              <div class="thumbnail">
				                <div class="image-wrapp">
				                  <img src="assets/img/dummies/work8.jpg" alt="Portfolio name" title="">
				                  <article class="da-animate da-slideFromRight" style="display: block;">
				                    <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
				                    <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>
				                  </article>
				                </div>

				                <div class="caption">
				                  <h4><a href="#">Portfolio name</a></h4>
				                  <p>Tota laboramus adversarium at sed, clita persius qui et, vis quot cibo deterruisset id. An fuisset eleifend eos, agam dicat an ius.</p>
				                </div>
				              </div>
				            </div>
				          </li>
				        </ul>
				      </div>
				      <div class="row">
				        <div class="span12">
				          <div class="pagination">
				            <ul>
				              <li><a href="#">Prev</a></li>
				              <li><a href="#">1</a></li>
				              <li class="active"><a href="#">2</a></li>
				              <li><a href="#">3</a></li>
				              <li><a href="#">4</a></li>
				              <li><a href="#">Next</a></li>
				            </ul>
				          </div>
				        </div>
				      </div>
				    </div>
				  </section>
		</div>
	</div>
	</div>







  <!-- Footer
 ================================================== -->
  <?php include ("footer.php");?>

</body>

</html>
