<?php
include ("seguridad.php");
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/estadistica.css" />
<link rel="stylesheet" href="../css/estilo.css" />
<script language="javascript" src="validacion_usu.js"></script>
</head>
<body>
	<section id="contenedor">
		<header id="header">
	<img src="../img/banner.png" class="banner" />
		</header>
		
		<nav id="botonera">
			<section id="salir">
				Usuario:"<?php echo $_SESSION["nom_d"]?>"&nbsp;(<?php echo $_SESSION["dueno"]?>) <a href="salir.php" title="Cerrar sesion">Salir</a>
			</section>
		</nav>
		
		<section id="cuerpo">
		<article class="menu">
		
			<?php
				include ("menu.php");
				$menu=menu();
				echo $menu;
			?>
		</article>

		<article class="contenido">
			<h2>Modificaci&oacute;n del Usuario</h2></br></br>
	<form action="editar_usuario_indi.php" method="get" onsubmit="return validacion_mod()">
	
	<input type="hidden" name="id" value="<?php echo $_REQUEST['id']?>"/>
	<center>
	<table cellspacing="5">
	<tr>
		<td> <label><b><lettab>Nombre del usuario:</lettab></b></label></br>
			<input type="text" name="nom_usuario" id="nom_usuario" maxlength="30" value="<?php echo $_REQUEST['nom_usuario']?>" disabled placeholder="Ej:maria" title="Ingrese el nombre de usuario"/>
		</td>
	
		<td> <label><b><lettab>Contrase&ntilde;a:</lettab></b></label></br>
			<input type="text" value="<?php echo $_REQUEST['contrasena']?>" title="Contrase&ntilde;a del usuario" disabled >
		</td>

		<td><label><b><lettab>Nivel:</lettab></b></label></br>
			<input type="text" value="<?php echo $_REQUEST['nivel']?>" title="Nivel del usuario" disabled >
		</td>
	</tr>
	
	<tr>
		<td> <label><b><lettab>Due&ntilde;o:</lettab></b></label></br>
			<input type="text" value="<?php echo $_REQUEST['dueno']?>" title="Tipo de due&ntilde;o del usuario" disabled >
		</td>
		
		<td> <label><b><lettab>Nueva Contrase&ntilde;a:</lettab></b></label></br>
			<ast>*</ast><input type="password" name="nueva_contrasena" id="contrasena" maxlength="30" placeholder="Ej:1234" title="Ingrese la nueva contraseña del usuario"/>
		</td>

		<td> <label><b><lettab>Repita nueva Contrase&ntilde;a:</lettab></b></label></br>
			<ast>*</ast><input type="password" name="rep_nueva_contrasena" id="rep_contrasena" maxlength="30" placeholder="Ej:1234" title="Repita la nueva contraseña del usuario"/>
		</td>
	</tr>
	</table>
	</br>

	<table> 	
	<tr>
		<td align="right">
		<input type="submit" value="" title="hacer click para modificar el usuario"/>
		<input type="reset" value="" title="Hacer click para refrescar los campos"/>
		</td>

		<td align="left">
		<article class="cancelar">
		<a href="cuenta_usuario.php" title="hacer click para cancelar la modificaci&oacute;n"><img height="32px" width="32px" src="../img/cancelar.png"></a>
		</article>
		</td>
	</tr>
	</table>

</form>

	</br>
		<table>
			<tr>
				<td colspan="4"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
			</tr>
		</table>
		</center>
</article>
		</section>
		
		<footer id="pie">
		<center>
			<b><letcol>Dise&ntilde;ado y Desarrollado por: Br Sergei Teran y Br Juan Rodr&iacute;guez</letcol></b>
		</center>
		</footer>
</section>
</body>
</html>
