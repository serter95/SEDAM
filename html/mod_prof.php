<?php
include ("seguridad.php");
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/estadistica.css" />
<link rel="stylesheet" href="../css/estilo.css" />
<script language="javascript" src="validacion_prof.js"></script>
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
			<h2>Modificaci&oacute;n del Profesor</h2></br></br>
	<form action="editar_prof.php" method="get" onsubmit="return validacion_mod()">

	<input type="hidden" name="id" value="<?php echo $_REQUEST['id']?>"/>

	<center>

	<table cellspacing="3">
	<tr>
		<td> <label><b><lettab>C.I:</lettab></b></label></br>
			<input type="number" name="ci_profesor" id="ci_prof" value="<?php echo $_REQUEST['ci_profesor']?>" 
			maxlength="8" placeholder="Ej:12345678" title="Ingrese la C.I del profesor" disabled class="numero2"/>
		</td>
	
		<td> <label><b><lettab>Nombre:</lettab></b></label></br>
			<ast>*</ast><input type="text" name="nom_profesor" id="nom_prof" value="<?php echo $_REQUEST['nom_profesor']?>" maxlength="30" placeholder="Ej:Luis" title="Ingrese el nombre del profesor"/>
		</td>

		<td> <label><b><lettab>Apellido:</lettab></b></label></br>
			<ast>*</ast><input type="text" name="ape_profesor" id="ape_prof" value="<?php echo $_REQUEST['ape_profesor']?>" maxlength="30" placeholder="Ej:Marquez" title="Ingrese el apellido del profesor"/>
		</td>

		<td> <label><b><lettab>Secci&oacute;n:<lettab></b></label></br>
			<ast>*</ast><select name="seccion_prof" id="seccion_prof" title="Seleccione la seccion a cargo del Profesor">
				<option><?php echo $_REQUEST['seccion_prof']?>
				<option>A
				<option>B
				<option>C
			</select>
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
		<a href="consult_prof.php" title="hacer click para cancelar la modificacion"><img height="32px" width="32px" src="../img/cancelar.png"></a>
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
