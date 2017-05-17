<?php
include ("seguridad.php");
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/estadistica.css" />
<link rel="stylesheet" href="../css/estilo.css" />
<script language="javascript" src="validacion_est.js"></script>
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
			<h2>Modificaci&oacute;n del estudiante</h2></br></br>
	<form action="editar_estud.php" method="get" onsubmit="return validacion_mod()">

	<input type="hidden" name="id" value="<?php echo $_REQUEST['id']?>"/>

	<center>

	<table cellspacing="7">
	<tr>
		<td> <label><b><lettab>C&eacute;dula Estudiantil:</lettab></b></label></br>
			<input disabled type="text" name="cedula_estudiantil" id="cedula_estudiantil" value="<?php echo $_REQUEST['cedula_estudiantil']?>" maxlength="13" placeholder="Ej:1234567820073" title="Ingrese la cedula estudiantil del estudiante a registrar. primero se coloca la cedula de la madre, luego el ano de nacimiento del nino y de ultimo la posicion de hermano que es, 1 para el mayor, 2 para el siguiente, y asi sucesivamente"/>
		</td>	
		
		<td> <label><b><lettab>Nombre:</lettab></b></label></br>
			<ast>*</ast><input type="text" name="nom_estudiante" id="nom_estudiante" value="<?php echo $_REQUEST['nom_estudiante']?>" maxlength="30" placeholder="Ej:Pedro" title="Ingrese el nombre del estudiante a registrar"/>
		</td>
	
		<td> <label><b><lettab>Apellido:</lettab></b></label></br>
			<ast>*</ast><input type="text" name="ape_estudiante" id="ape_estudiante" value="<?php echo $_REQUEST['ape_estudiante']?>" maxlength="30" placeholder="Ej:Perez" title="Ingrese el apellido del estudiante a registrar"/>
		</td>

		<td><label><b><lettab>Edad:</lettab></b></label></br>
			<ast>*</ast><input type="number" min="7" max="11" name="edad" id="edad" value="<?php echo $_REQUEST['edad']?>" 
			maxlength="2" placeholder="Ejemplo:8" title="Ingrese la edad del estudiante a registrar" class="numero"/>
		</td>
	</tr>
	<tr>
		<td><label><b><lettab>Sexo:</lettab></b></label></br>
			<ast>*</ast><select name="sexo" id="sexo" title="Seleccione el sexo del estudiante a registrar">
				<option><?php echo $_REQUEST['sexo']?>
				<option>M
				<option>F
			</select>
		</td>

		<td><label><b><lettab>Secci&oacute;n:</lettab></b></label></br>
			<ast>*</ast><select name="seccion" id="seccion" title="Seleccione la seccion donde esta inscrito el estudiante">
				<option><?php echo $_REQUEST['seccion']?>
				<option>A
				<option>B
				<option>C
			</select>
		</td>
	</tr>
</table>

	</br>

	<article class="botones">
	<table>
		<td align="right">
		<input type="submit" value="" title="Hacer click para modificar el estudiante"/>
		<input type="reset" value="" title="Hacer click para refrescar los campos"/>
		</td>

		<td align="left">
		<article class="cancelar">
		<a href="muestra_estudiante.php" title="Hacer click para cancelar la modificacion"><img height="32px" width="32px" src="../img/cancelar.png"></a>
		</article>
		</td>
	</table>
	
	</article>

</form>
	
	</br>
		<table>
			<tr>
				<td colspan="4"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
			</tr>
		</table>

</article>

	</center>
		</section>
		
		<footer id="pie">
		<center>
			<b><letcol>Dise&ntilde;ado y Desarrollado por: Br Sergei Teran y Br Juan Rodr&iacute;guez</letcol></b>
		</center>
		</footer>
</section>
</body>
</html>
