<?php

	session_start();
	require 'php/conexion.php';
		if(!isset($_SESSION["id_usuario"]))	{
		header("Location: index.php");
	}
	$sql="SELECT id, tipo FROM tipo_usuario";
	$result=$mysqli->query($sql);
?>


<html>
	<head>
		<title>Registro</title>

		<script>
			function validarNombre()
			{
				valor = document.getElementById("nombre").value;
				if(valor == null || valor.length == 0 || /^\s+$.test(valor) )
				{
					alert('Falta llenar Nombre');
					return false;
				} else {return true;}
			}
			function validarUsuario()
			{
				valor = document.getElementById("usuario").value;
				if(valor == null || valor.length == 0 || /^\s+$.test(valor) )
				{
					alert('Falta llenar usuario');
					return false;
				} else {return true;}
			}
			function validarPassword()
			{
				valor = document.getElementById("password").value;
				if(valor == null || valor.length == 0 || /^\s+$.test(valor) )
				{
					alert('Falta llenar Password');
					return false;
				} else
				{
					valor2 = document.getElementById("con_password").value;
					if(valor == valor2) {return true;}
					else
					{
						alert('Las contraseñas no coinciden');
						return false;
					}

				}
			}

			function validarTipoUsuario()
			{
				indice = document.getElementById("tipo_usuario").selectedIndex;
				if(indice == null || indice ==0 )
				{
					alert('Seleccione tipo de usuario');
					return false;
				} else {return true;}
			}

			function validar()
			{
				if(validarNombre() && validarUsuario() && validarPassword() && validarTipoUsuario())
				{
					document.registro.submit();
				}
			}

		</script>
	</head>

	<body>

	<form id="registro" name="registro" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		<div><label>Nombre: </label><input id="nombre" name="nombre" type="text" ></div>
		<br />

		<div><label>Usuario: </label><input id="usuario" name="usuario" type="text" ></div>
		<br />

		<div><label>Password:  </label><input id="password" name="password" type="password" ></div>
		<br />

		<div><label>Confirmar Password:  </label><input id="con_password" name="con_password" type="password" ></div>
		<br />

		<div><label>Tipo Usuario:</label>
			<select id="tipo_usuario" name="tipo_usuario">
				<option value="0">Seleccione el tipo de usuario...</option>
				<?php while($row = $result->fetch_assoc()){  ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['tipo']; ?></option>
				<?php } ?>
			</select>
		</div>
		<br />
		<div><input name="registro" type="button" value="registro" onclick="validar();"></div>
	</form>

	</body>

</html>
