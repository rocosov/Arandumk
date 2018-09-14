/*Este archivo contiene el código para la conexión con MySQL.*/

<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=localhost;dbname=page','root','',$pdo_options);
			return self::$conexion;
		}		
	}
?>
