<!--Para que una petición sea enviada y procesada en el servidor debe estar dentro de un formulario html, además de eso se puede utilizar dos métodos (method) para el envío: POST o GET. Sin entrar mucho a detalle la diferencia entre estos dos métodos es que a través de GET los parámetros (por ejemplo, un id, nombres, apellidos etc..) que se envíen al servidor viajan a través de la URL, mientras que con POST no lo hacen.

Así mismo se debe poner la página en la que será procesada la petición (action) que para este caso es el archivo administrar_libro.php que lo crearemos más adelante.

Algo interesante es el elemento <input type=’hidden’ name=’insertar’ value=’insertar’>, se lo pone como (hidden) oculto puesto que se lo utiliza como una bandera, para determinar si debe ingresar al código de ingresar en el archivo administrar_libro.php .-->


<html>
<head>
	<title> Ingresar Libro</title>
</head>
<header>
Ingresa los datos del Libro
</header>
<form action='administrar_libro.php' method='post'>
	<table>
		<tr>
			<td>Nombre libro:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Autor:</td>
			<td><input type='text' name='autor' ></td>
		</tr>
		<tr>
			<td>Fecha Edición:</td>
			<td><input type='text' name='edicion' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>
