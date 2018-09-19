<?php
$path = dirname(__FILE__);
require_once( $path . '/../../setting/config.php');
require_once( $path . '/../../setting/mysql.php');

$content = $_POST['content'];
$id = $_POST['id'];
$title = $_POST['title'];
$type = $_POST['type'];
$category = ($type == 'PAGE') ? '': $_POST['category'];
$date = date('Y-m-d H:i:s');
$alias = $_POST['alias'];
$resumen = $_POST['resumen'];
$urlimagen = $_POST['urlimagen'];
$direccion = $_POST['direccion'];
if($id > 0){
  $sql = <<<SQL
  UPDATE contenidos SET titulo = '$title', tipo= '$type', contenido = '$content', categoria = '$category', alias = '$alias',resumen = '$resumen',urlimagen = '$urlimagen',direccion = '$direccion'
  WHERE id='$id'
SQL;
}else{
  $sql = <<<SQL
  INSERT INTO contenidos (titulo, tipo, contenido, categoria, alias, resumen, urlimagen, direccion)  VALUES ('$title', '$type', '$content', '$category', '$alias','$resumen','$urlimagen','$direccion')
SQL;
}

$mysql = new Mysql();
$response = ( $mysql->execute($sql) ) ? 'Contenido guardado exitosamente!' : 'Error al guardar contenido.';
header("Location: " . Config::URL .  "admin/page-respuesta.php?response=$response");
?>
