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
            <h3><i class="m-icon-big-swapright m-icon-white"></i> Titulo</h3>
            <p>Descripcion del elemento</p>
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


          <h4>Contenido aqui</h4>
          <p>
            Lorem ipsum dolor sit amet, per cu graece fierent dignissim, et reque dicat blandit quo, ad mel stet aperiri insolens. Eum esse ancillae conclusionemque at. Ut nec ullum homero. Autem legimus in sed. Ad eam iudico delectus, aperiri maiestatis eos eu.
            Mea viris abhorreant at, eirmod vivendo an ius.
          </p>

          <p>
            Cu nec iudicabit percipitur, eu sit possim viderer malorum. In homero audiam aperiri eos, ea noster virtute usu, vim id inimicus philosophia. Id propriae percipit consulatu nam, in verear sensibus deseruisse has. Magna moderatius ei eum, at eum tractatos
            contentiones. Noster electram at his, partem repudiandae contentiones ea eam. Nemore forensibus delicatissimi eu his. Est salutandi imperdiet te, sale magna commune ex pri. Diam alia sanctus ei nam, ut vel pertinax delicata, facilis invenire
            sea ex. Pro eu sale prompta, congue inermis mea ei.
          </p>

          <blockquote>
            <p>
              Quot aeterno eleifend an his, nam eu minim mediocritatem. Et nam nobis dolores intellegebat, et nec ipsum conceptam
            </p>
          </blockquote>

          <p>
            Ei eam diam quando sapientem, ad pri enim vero eleifend. Eu everti inimicus his, te his nisl vocent. At rebum omnium blandit duo, malis scriptorem vis te. Altera mandamus eam ei, ex usu odio mutat debitis. At quo laudem iuvaret albucius, magna mundi honestatis
            pri ut, eos ei suas feugait. Vim tation dicant ornatus in.
          </p>
        </div>
      </div>
    </div>


  </section>

  <!-- Footer
 ================================================== -->
  <?php include ("footer.php");?>

</body>

</html>
