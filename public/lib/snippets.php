
<?php
/*MUESTRA TOD EL DE LA TABLA CONTENIDO DEL TIPO POSTS */
function mis_peliculas(){
  $posts = posts();
   while(is_array($posts) && list($k, $v) = each($posts) ){
     $titulo = $v['titulo'];
     $id = $v['alias'];
     $contenido = $v['contenido'];
     $li .= <<<HTML
     <ul class="media-list">
       <li class="media">
         <a class="pull-left" href="$id">
           <img class="media-object" src="http://placehold.it/64x64">
         </a>
         <div class="media-body">
           <h4 class="media-heading">$titulo </h4>
           parrafo de subtitulo: Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
           Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
           Donec lacinia congue felis in faucibus.

           <!-- parrafo principal -->
           <div class="media">
             <!-- aqui se pone un segundo parrafo -->

          </div>
         </div>
       </li>
     </ul>

HTML;
    }

   return "<ul>$li</ul>";
}


function mis_peliculasold(){
  $posts = posts();
   while(is_array($posts) && list($k, $v) = each($posts) ){
     $titulo = $v['titulo'];
     $id = $v['alias'];
     $contenido = $v['contenido'];
     $li .= <<<HTML
     <li>
       <a href="$id">$titulo</a>
     </li>
HTML;
    }

   return "<ul>$li</ul>";
}

/*prueba listado*/
function lista_de_contenido(){
  $posts = posts();
   while(is_array($posts) && list($k, $v) = each($posts) ){
     $titulo = $v['titulo'];
     $id = $v['alias'];
     $contenido = $v['contenido'];
     $row.=['"row"'];
     $li .= <<<HTML

     <div class="col-md-4 col-sm-6">
       <div class="portfolio-item">
         <div class="portfolio-image">
           <a a href="$id" ><img src="../img/portfolio1.jpg" alt="Nombre variable"></a>
         </div>
         <div class="portfolio-info">
           <ul>
             <li class="portfolio-project-name">Project Name</li>
             <li>Website design & Development</li>
             <li>Client: Some Client LTD</li>
             <li class="read-more"><a href="$id" class="btn">$titulo</a></li>
           </ul>
         </div>
       </div>
     </div>

HTML;
    }
/*le pone lo que no se repite como los divs
los teminos en comilla los coloque dentro de variables cj*/
   return "<h2>Listado de contenido</h2>
            <div class=$row>$li</div>"   ;
}
/*fin de la funcion lista de contenido*/


function area_cuerpo_inicio(){
     $li .= <<<HTML
     <!-- ********** Area cuerpo Inicio ********** -->
     <div class="regular-page-wrap section-padding-100">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-12 col-md-10 col-lg-8">
                     <div class="page-content">

HTML;

   return "$li"

   ;
}
function area_cuerpo_fin(){
     $li .= <<<HTML
   </div>
</div>
</div>
</div>
</div>
<!-- ********** Area cuerpo fin ********** -->
HTML;
   return "$li"
   ;
}

function slider_regular(){
     $li .= <<<HTML

   <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(../img/blog-img/bg4.jpg);"></div>
HTML;
   return "$li"
   ;
}

?>
