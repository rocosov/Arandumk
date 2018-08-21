
<?php

function mis_peliculas(){
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
function area_index_inicio(){
     $li .= <<<HTML
     <!-- ********** Area index Inicio ********** -->
     <div class="main-content-wrapper section-padding-100">
          <div class="container">


HTML;

   return "$li"

   ;
}
function area_index_fin(){
     $li .= <<<HTML
   </div>
</div>
</div>
</div>

<!-- ********** Area index fin ********** -->
HTML;
   return "$li"
   ;
}

function slider_inicio(){
     $li .= <<<HTML
     <!-- ********** Hero Area inicia ********** -->
     <div class="hero-area">

         <!-- Hero Slides Area -->
         <div class="hero-slides owl-carousel">
             <!-- Single Slide -->
             <div class="single-hero-slide bg-img background-overlay" style="background-image: url(../img/blog-img/bg2.jpg);"></div>
             <!-- Single Slide -->
             <div class="single-hero-slide bg-img background-overlay" style="background-image: url(../img/blog-img/bg1.jpg);"></div>
         </div>

         <!-- Hero Post Slide -->
         <div class="hero-post-area">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="hero-post-slide">
                             <!-- Single Slide -->
                             <div class="single-slide d-flex align-items-center">
                                 <div class="post-number">
                                     <p>1</p>
                                 </div>
                                 <div class="post-title">
                                     <a href="#">Texto de prueba texto de prueba</a>
                                 </div>
                             </div>
                             <!-- Single Slide -->
                             <div class="single-slide d-flex align-items-center">
                                 <div class="post-number">
                                     <p>2</p>
                                 </div>
                                 <div class="post-title">
                                     <a href="#">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                 </div>
                             </div>
                             <!-- Single Slide -->
                             <div class="single-slide d-flex align-items-center">
                                 <div class="post-number">
                                     <p>3</p>
                                 </div>
                                 <div class="post-title">
                                     <a href="#">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                 </div>
                             </div>
                             <!-- Single Slide -->
                             <div class="single-slide d-flex align-items-center">
                                 <div class="post-number">
                                     <p>4</p>
                                 </div>
                                 <div class="post-title">
                                     <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


HTML;

   return "$li";
}

function slider_regular(){
     $li .= <<<HTML

   <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(../img/blog-img/bg4.jpg);"></div>
HTML;
   return "$li"
   ;
}






?>
