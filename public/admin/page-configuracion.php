<?php include 'header.php'; ?>
   <!--<form class="pure-form pure-form-stacked" action="resultado_configuracion.php" method="post">
	  <fieldset>
		  <legend>carga pag Configuración</legend>
		  <label for="title">Titulo web</label>
		  <input name="title" type="text" placeholder="Titulo" value="" class="pure-input-1">
		  <label for="address">Dirección</label>
		  <input name="address" type="text" placeholder="Dirección" value="" class="pure-input-1">

		  <label for="geolocation">Geolocalización</label>
		  <input name="geolocation" type="text" placeholder="latitud,longitud" value="" class="pure-input-1">
		  <button type="submit" class="pure-button pure-button-primary">Guardar</button>
	  </fieldset>
  </form>--->



  <?php $res = cargar_datos_configuracion(); ?>
   <form class="pure-form pure-form-stacked" action="resultado_configuracion.php" method="post">
	  <fieldset>
		  <legend>Configuración</legend>
		  <label for="title">Titulo web</label>
		  <input name="title" type="text" placeholder="Titulo" value="<?= $res['titulo'] ?>" class="pure-input-1">
		  <label for="address">Dirección</label>
		  <input name="address" type="text" placeholder="Dirección" value="<?= $res['direccion'] ?>" class="pure-input-1">

		  <label for="geolocation">Geolocalización</label>
		  <input name="geolocation" type="text" placeholder="latitud,longitud" value="<?= $res['geolocalizacion'] ?>" class="pure-input-1">
		  <button type="submit" class="pure-button pure-button-primary">Guardar</button>
	  </fieldset>
  </form>


<?php include 'footer.php'; ?>
