<?php
include ("seguridad.php");
include ("conexion.php");

$n="SELECT nivel FROM usuario WHERE nom_usuario='".$_SESSION['nom_usuario']."'";
$ni=mysql_query($n);
$niv=mysql_fetch_array($ni);
$nivel=$niv['nivel'];

if($nivel!=1)
{
?>
<script>
	alert("Usted no es administridaor");
	location.href="principal.php";
</script>
<?php	
}
else
{
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<!--<link rel="stylesheet" type="text/css" href="../css/menu.css" />-->

<script language="javascript" src="validacionesDOM.js"> </script>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="funciosajaxm.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>
<script language="javascript" src="fecha.js"></script>
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
			<h2>Auditor&iacute;a:</h2></br>
			
			<center>

		<form action="bus_auditoria.php" method="get" onsubmit="return auditoria()">
			
			<table>
				<tr>
					<th><lettab>Nombre de usuario:</lettab></th>
					<th><lettab>Fecha inicial:</lettab></th>
					<th><lettab>Fecha final:</lettab></th>
				</tr>
				<tr>
					<td>
						<ast>*</ast><select name="nom_usu" id="nom_usu" class="select">
							<option> </option>
							<option>Todos</option>
						<?php
						
						$nom_usuario="SELECT nom_usuario FROM auditoria GROUP BY nom_usuario";
	
						$nom=mysql_query($nom_usuario);	
						
							while($arreglo=mysql_fetch_array($nom))
								{
							echo"<option>".$arreglo['nom_usuario']."</option>";
								}
						?>

						</select>
					</td>
					<td>
						<ast>*</ast><input type="text" name="fecha_i" id="datepicker_i" placeholder="aaaa/mm/dd"/>
					</td>
					<td>
						<ast>*</ast><input type="text" name="fecha_f" id="datepicker_f" placeholder="aaaa/mm/dd"/>
					</td>
				</tr>
				<tr>
					<td colspan="3">
							<input type="submit" value="" title="Presione para realizar la auditor&iacute;a"/>
							<input type="reset" value="" title="Click para refrescar los campos"/>
							</form>
					</td>
					</tr>
					<tr>
						<td colspan="3"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
					</tr>
			</table>
			
		</form>
		
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
?>
