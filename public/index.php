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



  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="tagline">
          <div class="row">
            <div class="span12">
              <div id="latest-work" class="carousel btleft">
                <div class="carousel-wrapper">

                  <ul class="client" style="width: 1810px; display: block; margin-left: 0px;">

                    <li style="margin-right: 30px; width: 270px;">
                      <div class="tooltip-demo thumbnail">
                        <a href="#" data-rel="tooltip" data-placement="top" data-original-title="Company name"><img src="assets/img/clients/cl-1.png" alt=""></a>
                      </div>
                    </li>

                    <li style="margin-right: 30px; width: 270px;">
                      <div class="tooltip-demo thumbnail">
                        <a href="#" data-rel="tooltip" data-placement="top" data-original-title="Company name"><img src="assets/img/clients/cl-1.png" alt=""></a>
                      </div>
                    </li>

                    <li style="margin-right: 30px; width: 270px;">
                      <div class="tooltip-demo thumbnail">
                        <a href="#" data-rel="tooltip" data-placement="top" data-original-title="Company name"><img src="assets/img/clients/cl-1.png" alt=""></a>
                      </div>
                    </li>

                    <li style="margin-right: 30px; width: 270px;">
                      <div class="tooltip-demo thumbnail">
                        <a href="#" data-rel="tooltip" data-placement="top" data-original-title="Company name"><img src="assets/img/clients/cl-1.png" alt=""></a>
                      </div>
                    </li>

                  </ul>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- end tagline -->

  <section id="maincontent">
    <div class="container">

      <div class="row">
        <div class="span3">
          <h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Main features</h3>
          <p>Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Praesent eleifend sodales felis, in congue purus scelerisque eget.</p>
        </div>
        <div class="span3">
          <div class="well well-primary box">
            <img src="assets/img/icons/box-1-white.png" alt="" />
            <h3>Responsive bootstrap</h3>
            <p>
              Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri. Mel virtute efficiantur ne zril.
            </p>
            <a href="#">Read more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well well-success box">
            <img src="assets/img/icons/box-2-white.png" alt="" />
            <h3>With metro taste</h3>
            <p>
              Ad sit option intellegat, unum populo comprehensam ut sed. Copiosae corrumpit qui ex, duo nullam feugait qualisque at an dicit saperet.
            </p>
            <a href="#">Read more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well well-warning box">
            <img src="assets/img/icons/box-3-white.png" alt="" />
            <h3>Well documented</h3>
            <p>
              Ne vix clita integre expetenda, eos cetero numquam no, in sea omnes detracto. Ne iriure habemus maiestatis mei. Postea euripidis contentiones.
            </p>
            <a href="#">Read more</a>
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
          <h3><a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i></a> Trabajos Recientes</h3>

          <div id="latest-work" class="carousel btleft">
            <div class="carousel-wrapper">

              <ul class="portfolio-home da-thumbs">
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="assets/img/dummies/work1.jpg" alt="Portfolio name" title="" />
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
                      <img src="assets/img/dummies/work2.jpg" alt="Portfolio name" title="" />
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
                      <img src="assets/img/dummies/work3.jpg" alt="Portfolio name" title="" />
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
                      <img src="assets/img/dummies/work4.jpg" alt="Portfolio name" title="" />
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
                      <img src="assets/img/dummies/work5.jpg" alt="Portfolio name" title="" />
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
                      <img src="assets/img/dummies/work6.jpg" alt="Portfolio name" title="" />
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
                      <img src="assets/img/dummies/work7.jpg" alt="Portfolio name" title="" />
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
                      <img src="assets/img/dummies/work8.jpg" alt="Portfolio name" title="" />
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
