<?php include('cabecera.php'); ?>
<?php include('sidebar.php'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Contenidos</li>
			</ol>
		</div><!--/.row-->

    <?php $res = cargar_datos_contenidos(); $array_type = retornar_tipo_contenido(); ?>
     <div class="mid-page" style="text-align:right;" >
      <a href="page-contenido.php" class="pure-button pure-button-primary">Nuevo</a>
     </div>
      <table class="pure-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Titulo</th>
          <th>Fecha</th>
          <th>Tipo</th>
          <th>Categoría</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        <?php while(is_array($res) && list($k, $v) = each($res) ): ?>
        <tr>
          <td><?= $k+1 ?></td>
          <td><?= $v['titulo'] ?></td>
          <td><?= $v['fecha_publicacion'] ?></td>
          <td><?= $array_type [ $v['tipo'] ] ?></td>
          <td><?= $v['categoria'] ?></td>
          <td><a href="page-contenido.php?id=<?=$v['id']?>">Editar</a></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>


	</div>



<?php include('footer.php'); ?>
