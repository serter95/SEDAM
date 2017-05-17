<?php
include ("seguridad.php");

$nom=$_SESSION['nom_usuario'];
	
		$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
		$niv_usu=mysql_query($sql);
		$niv_usua=mysql_fetch_assoc($niv_usu);
		$nivel=$niv_usua['nivel'];
		
		if($nivel!=2 and $nivel!=3)
		{

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
		<h2> <!--class="titulo"-->Registro de nuevo profesor:</h2></br></br>
		<center>
		<table>
		<tr>
			<th><lettab>C.I:</lettab></th>
			<th><lettab>Nombre:</lettab></th>
			<th><lettab>Apellido:</lettab></th>
			<th><lettab>Secci&oacute;n:</lettab></th>
		</tr>
		<tr>
		<form action="reg_prof1.php" method="post" onsubmit="return validacion()">
			<td>
			<ast>*</ast><input type="text" name="ci_prof" id="ci_prof" maxlength="8" placeholder="Ejemplo: 12345678" title="Ingrese la C.I del profesor"/></td>
			<td>
			<ast>*</ast><input type="text" name="nom_prof" id="nom_prof" maxlength="30" placeholder="Ejemplo: Jose" title="Ingrese el nombre del profesor"/></td>
			<td>
			<ast>*</ast><input type="text" name="ape_prof" id="ape_prof" maxlength="30" placeholder="Ejemplo: Hernandez" title="Ingrese el apellido del profesor"/></td>
			
			<td>
			<ast>*</ast><select name="seccion_prof" id="seccion_prof" title="Seleccione la seccion a cargo del profesor" class="select2">
				<option>
				<option>A
				<option>B
				<option>C
			</select>
			</td>
		</tr>
		</table>

		<article class="botones">
		<table>
		<tr>
			<td align="right">
			<input type="submit" value="" title="Presione para registrar al profesor"/>
			<input type="reset" value="" title="Click para refrescar los campos"/>
			</td>
			<td align="left">
			<article class="cancelar">
			<a href="consult_prof.php" title="Hacer click para cancelar"><img height="32px" width="32px" src="../img/cancelar.png"></a>
			</article>
			
		</article>
		</tr>
		</table>
		</article>
		</form>
		
		</br>
		<table>
			<tr>
				<td colspan="3"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
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
<?php
}
else
{
?>
<script language="javascript">
alert("Usted no es Administrador");
window.location.href='principal.php';
</script>
<?php
}
?>
