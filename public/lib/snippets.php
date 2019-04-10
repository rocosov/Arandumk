
<?php
/*MUESTRA TOD EL DE LA TABLA CONTENIDO DEL TIPO POSTS */
function mis_peliculas(){
  $posts = posts();
   while(is_array($posts) && list($k, $v) = each($posts) ){
     $titulo = $v['titulo'];
     $id = $v['alias'];
     $resumen = $v['resumen'];
     $urlimagen = $v['urlimagen'];
     $contenido = $v['contenido'];
     $direccion = $v['direccion'];
     $li .= <<<HTML
     <ul class="media-list">
       <li class="media">
         <a class="pull-left" href="$id">
           <img class="media-object" src="$urlimagen"> <!--http://placehold.it/64x64-->
         </a>
         <div class="media-body">
           <h4  class="media-heading" >$titulo </h4>
           $resumen

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

/*MUESTRA TOD EL DE LA TABLA CONTENIDO DEL TIPO POSTS que sean hotel */
function listado_hoteles1(){
  $posts = hotel();
   while(is_array($posts) && list($k, $v) = each($posts) ){
     $titulo = $v['titulo'];
     $id = $v['alias'];
     $resumen = $v['resumen'];
     $urlimagen = $v['urlimagen'];
     $contenido = $v['contenido'];
     $direccion = $v['direccion'];
     $li .= <<<HTML
     <ul class="media-list">
       <li class="media">
         <a class="pull-left" href="$id">
           <img class="media-object" src="$urlimagen"> <!--http://placehold.it/64x64-->
         </a>
         <div class="media-body">
           <h4  class="media-heading" >$titulo </h4>
           $resumen

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
/*MUESTRA TOD EL DE LA TABLA CONTENIDO DEL TIPO POSTS */
function listado_hoteles(){
  $posts = hotel();
   while(is_array($posts) && list($k, $v) = each($posts) ){
     $titulo = $v['titulo'];
     $id = $v['alias'];
     $resumen = $v['resumen'];
     $urlimagen = $v['urlimagen'];
     $contenido = $v['contenido'];
     $direccion = $v['direccion'];
     $categoria = $v['categoria'];
     $tt ="portfolio-area da-thumbs";
     $tl= "height: 787px;";
     $li .= <<<HTML
     		        <li class="portfolio-item2" data-id="id-0" data-type="$categoria">
                 <div class="span3">
                   <div class="thumbnail">
                     <div class="image-wrapp">
                      <a href="$id"> <img src="$urlimagen"  alt="" title=""></a>
                       <article class="da-animate da-slideFromLeft" style="display: block;">
                         <!--<a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
                         <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>-->
                       </article>
                     </div>

                     <div class="caption">
                       <h4><a href="$id">$titulo</a></h4>
                       <p>$resumen</p>
                     </div>
                   </div>
                 </div>
               </li>
HTML;
    }

   return " <ul class=$tt style=$tl>$li</ul></div>";
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




function guia_de_posts1(){
     $li .= <<<HTML
     <!-- ********** Area cuerpo Inicio ********** -->
     <section id="maincontent">
         <div class="container">
           <div class="row-fluid">
             <div class="span12">
               <div class="btn-group filter-category">
                 <a class="btn btn-success" href="#"><i class="icon-list icon-white"></i> Categoria</a>
                 <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                 <ul class="dropdown-menu filter">
                   <li class="all active"><a href="#"><i class="icon-picture"></i> Todo</a></li>
                   <li class="1"><a href="#"><i class="icon-picture"></i> Autos</a></li>
                   <li class="2"><a href="#"><i class="icon-picture"></i> Educacion</a></li>
                   <li class="3"><a href="#"><i class="icon-picture"></i> Restaurantes</a></li>
                   <li class="4"><a href="#"><i class="icon-picture"></i> Turismo</a></li>
                   <li class="5"><a href="#"><i class="icon-picture"></i> Compras y Shopping</a></li>
                   <li class="6"><a href="#"><i class="icon-picture"></i> Electronica</a></li>
                   <li class="7"><a href="#"><i class="icon-picture"></i> Deportes</a></li>
                   <li class="8"><a href="#"><i class="icon-picture"></i> Entretenimiento y Vida Nocturna</a></li>
                   <li class="9"><a href="#"><i class="icon-picture"></i> Salud y Medicina</a></li>
                   <li class="10"><a href="#"><i class="icon-picture"></i> Servicios</a></li>
                   <li class="11"><a href="#"><i class="icon-picture"></i> Hoteles</a></li>

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
HTML;

   return "$li"

   ;
}
/*MUESTRA TOD EL DE LA TABLA CONTENIDO DEL TIPO POSTS */
function guia_de_posts2(){
  $posts = posts();
   while(is_array($posts) && list($k, $v) = each($posts) ){
     $titulo = $v['titulo'];
     $id = $v['alias'];
     $resumen = $v['resumen'];
     $urlimagen = $v['urlimagen'];
     $contenido = $v['contenido'];
     $direccion = $v['direccion'];
     $categoria = $v['categoria'];
     $tt ="portfolio-area da-thumbs";
     $tl= "height: 787px;";
     $li .= <<<HTML
     		        <li class="portfolio-item2" data-id="id-0" data-type="$categoria">
                 <div class="span3">
                   <div class="thumbnail">
                     <div class="image-wrapp">
                      <a href="$id"> <img src="$urlimagen"  alt="" title=""></a>
                       <article class="da-animate da-slideFromLeft" style="display: block;">
                         <!--<a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt=""></a>
                         <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="" title="Portfolio name"></a></span>-->
                       </article>
                     </div>

                     <div class="caption">
                       <h4><a href="$id">$titulo</a></h4>
                       <p>$resumen</p>
                     </div>
                   </div>
                 </div>
               </li>
HTML;
    }

   return " <ul class=$tt style=$tl>$li</ul></div>";
}
/*paginacion*/
function guia_de_posts3(){
     $li .= <<<HTML
     <!-- ********** Area cuerpo Inicio ********** -->

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


HTML;

   return "$li"

   ;
}


?>
