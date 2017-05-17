<?php
include ("seguridad.php");
include("conexion.php");

$r = $_GET['bus_est'];

$bus_est = explode(' ', $r);

$sql="SELECT * FROM estudiante WHERE cedula_estudiantil='$bus_est[0]'";
$cursor=mysql_query($sql);
$ced_prof=mysql_query($sql);

//$ci="SELECT ci_profesor FROM estudiante WHERE cedula_estudiantil='$bus_est[0]'";
//$ced_prof=mysql_query($ci);

			while($dato=mysql_fetch_array($ced_prof))
			{
				$ci_profesor=$dato['ci_profesor'];
				$con="SELECT * FROM profesor WHERE ci_profesor='$ci_profesor'";
				$con_prof=mysql_query($con);
?>

<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/estadistica.css" />
<link rel="stylesheet" href="../css/estilo.css" />
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
		<h2> <!--class="titulo"-->Estudiante:</h2></br>
		<center>

	<table class="tabla_01" cellspacing="2">
	<tr class="tabla_tr_01">
		<th><lettab>C&eacute;dula Estudiantil:</lettab></th>
		<th><lettab>Nombre:</lettab></th>
		<th><lettab>Apellido:</lettab></th>
		<th><lettab>Edad:</lettab></th>
		<th><lettab>Sexo:</lettab></th>
		<th><lettab>Secci&oacute;n:</lettab></th>
	</tr>
	<tr class="tabla_tr_02">
		<?php
			while($num=mysql_fetch_array($cursor))
				{
		?>
		<td class="tabla_td_01"><letcol> <?php echo $num['cedula_estudiantil'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $num['nom_estudiante'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $num['ape_estudiante'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $num['edad'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $num['sexo'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $num['seccion'] ?> </letcol></td>
		<?php
				}
		?>
	</tr>
	
	</table>
	</center>
	<br/>

	
	<h2>Profesor asignado:</h2>
	<center>	
	<br/>
	
	<table class="tabla_01" cellspacing="2">
	<tr class="tabla_tr_01">
		<th><lettab>C.I:</lettab></th>
		<th><lettab>Nombre del Profesor:</lettab></th>
		<th><lettab>Apellido del Profesor:</lettab></th>
		<th><lettab>Secci&oacute;n:</lettab></th>
	</tr>
	<tr class="tabla_tr_02">
		<?php
			
			while($reg=mysql_fetch_array($con_prof))
				{
		?>
		<td class="tabla_td_01"><letcol> <?php echo $reg['ci_profesor'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $reg['nom_profesor'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $reg['ape_profesor'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $reg['seccion_prof'] ?> </letcol></td>
		<?php
				}
				
		}
		?>
	</tr>
	</table>
	<table>
		<tr>
			<td>
				<a href="muestra_estudiante.php" title="Presione para ir a la pagina anterior"><img width="32px" height="32px" src="../img/atras.png" ></a>
			</td>
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

