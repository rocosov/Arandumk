<?php require_once(dirname(__FILE__) . '/../setting/core.php' ); ?>
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
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/camera.css" rel="stylesheet">
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

  <header>
    <!-- Navbar
    ================================================== -->
    <?php include ("navbar.php");?>

  </header>

<?php include ("jumbotron.php");?>



  <!-- end tagline -->

  <!-- end tagline -->

  <section id="maincontent">
    <div class="container">

      <div class="row">
        <div class="span3">
          <h3 class="heading-success"><span class="btn btn-large btn-success">
            <i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Comercios y lugares
          </h3>
        </div>
        <div class="span9">
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/260x120">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Nombre de Empresa</h4>
                    ...

                    <!-- Nested media object -->
                    <div class="media">
                      ...
                    </div>
                  </div>
               </div>
               <div class="media">
                 <a class="pull-left" href="#">
                   <img class="media-object" src="http://placehold.it/260x120">
                 </a>
                 <div class="media-body">
                   <h4 class="media-heading">Nombre de Empresa</h4>
                   ...

                   <!-- Nested media object -->
                   <div class="media">
                     ...
                   </div>
                 </div>
              </div>
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://placehold.it/260x120">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Nombre de Empresa</h4>
                  ...

                  <!-- Nested media object -->
                  <div class="media">
                    ...
                  </div>
                </div>
             </div>
             <div class="media">
               <a class="pull-left" href="#">
                 <img class="media-object" src="http://placehold.it/260x120">
               </a>
               <div class="media-body">
                 <h4 class="media-heading">Nombre de Empresa</h4>
                 ...

                 <!-- Nested media object -->
                 <div class="media">
                   ...
                 </div>
               </div>
            </div>
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/260x120">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Nombre de Empresa</h4>
                ...

                <!-- Nested media object -->
                <div class="media">
                  ...
                </div>
              </div>
           </div>

        </div>
      </div>

    </div>
  </section>


  <section id="bottom">
    <div class="container">

      <!-- divider -->
      <div class="row">
        <div class="span12">
          <div class="divider"></div>
        </div>
      </div>
      <!-- end divider -->


      <div class="row">
        <div class="span12">
          <h3><a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i></a> Empresas Fundadoras</h3>

          <div id="latest-work" class="carousel btleft">
            <div class="carousel-wrapper">

              <ul class="portfolio-home da-thumbs">
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="http://placehold.it/300x200" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                      <!--  <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>-->
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>

                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="http://placehold.it/300x200" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="http://placehold.it/300x200" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="http://placehold.it/300x200" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="http://placehold.it/300x200" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="http://placehold.it/300x200" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="http://placehold.it/300x200" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="http://placehold.it/300x200" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
              </ul>
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
