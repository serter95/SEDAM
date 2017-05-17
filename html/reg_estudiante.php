<?php
include ("seguridad.php");
include("conexion.php");

$nom=$_SESSION['nom_usuario'];
	
		$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
		$niv_usu=mysql_query($sql);
		$niv_usua=mysql_fetch_assoc($niv_usu);
		$nivel=$niv_usua['nivel'];
		
		if($nivel!=3)
		{

$sql="SELECT * FROM profesor WHERE estatus='0' ORDER BY ci_profesor";
$cursor=mysql_query($sql);
$num=mysql_num_rows($cursor);
if(!$num)
{
?>
<script language="javascript">
alert("Usted no a agregado a ningun profesor, por favor registre uno")
location.href='reg_prof.php';
</script>
<?php
} else 
	{
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
		<h2> <!--class="titulo"-->Registro de nuevo estudiante:</h2></br></br>
		<center>
		<table cellspacing="7">
		<tr>
			<th align="center"><lettab>C&eacute;dula estudiantil:</lettab></th>
			<th align="center"><lettab>Nombre:</lettab></th>
			<th align="center"><lettab>Apellido:</lettab></th>
			<th align="center"><lettab>Edad:</lettab></th>
		</tr>
		<tr>
		<form action="reg_estudiante1.php" method="get" onsubmit="return validacion()">
			<td align="center">
			<ast>*</ast><input type="number" name="cedula_estudiantil" id="cedula_estudiantil" maxlength="13" 
			placeholder="Ejemplo: 1234567820073" title="Ingrese la cedula estudiantil del estudiante a registrar.
			 Primero se coloca la cedula de la madre, luego el ano de nacimiento del nino y de ultimo la posicion de hermano que es,
			  1 para el mayor, 2 para el siguiente, y asi sucesivamente" class="numero2"/>
			</td>
			<td>
			<ast>*</ast><input type="text" name="nom_estudiante" id="nom_estudiante" maxlength="30" placeholder="Ejemplo: Pedro" title="Ingrese el nombre del estudiante a registrar"/>
			</td>
			<td>
			<ast>*</ast><input type="text" name="ape_estudiante" id="ape_estudiante" maxlength="30" placeholder="Ejemplo: Perez" title="Ingrese el apellido del estudiante a registrar"/>
			</td>
			<td>
			<ast>*</ast><input type="number" min="7" max="11" name="edad" id="edad" maxlength="2" placeholder="8"
			 title="Ingrese la edad del estudiante a registrar" class="numero"/> 
			</td>
		</tr>
	
		<tr>
			<th align="center"><lettab>Sexo:</lettab></th>
			<th align="center"><lettab>Secci&oacute;n:</lettab></th>
		</tr>
		<tr>
			<td>
			<ast>*</ast><select name="sexo" id="sexo" title="Seleccione el sexo del estudiante a registrar" class="select2">
				<option>
				<option>M
				<option>F
			</select>
			</td>
			<td>
			<ast>*</ast><select name="seccion" id="seccion" title="Seleccione la seccion donde esta inscrito el estudiante" class="select2">
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
			<input type="submit" value="" title="Presione para registrar al nuevo estudiante"/>
			<input type="reset" value="" title="Click para refrescar los campos"/>
			</td>
			<td align="left">
			<article class="cancelar">
			<a href="muestra_estudiante.php" title="Hacer click para cancelar"><img height="32px" width="32px" src="../img/cancelar.png"></a>
			</article>
		</tr>
		</form>
		</table>
		</article>

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
<?php
	}
	
	}
else
{
?>
<script language="javascript">
alert("Usted no es Administrador o Profesor");
window.location.href='principal.php';
</script>
<?php
}
?>
