<?php
include ("seguridad.php");
include ("conexion.php");
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/estadistica.css" />
<link rel="stylesheet" href="../css/estilo.css" />
<script language="javascript" src="validacion_act.js"></script>
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
			<h2>Detalle de las actividades:</h2></br></br>
	<center>
	
<table class="tabla_01" cellspacing="2">
	<tr class="tabla_tr_01">					
		<th><lettab>Actividad de evaluaci&oacute;n:</lettab></th>
		<th><lettab>Indicadores evaluados:</lettab></th>
		<th><lettab>Indicadores alcanzados:</lettab></th>
		<th><lettab>Indicadores medianamente alcanzados:</lettab></th>	
		<th><lettab>Indicadores no alcanzados:</lettab></th>
		<th><lettab>Actuaci&oacute;n del desempe&ntilde;o:</lettab></th>
	</tr>
	<tr class="tabla_tr_02">
		<td class="tabla_td_01"><letcol><?php echo $_REQUEST['nom_act'] ?></letcol></td>
		<td class="tabla_td_01"><letcol><?php echo $_REQUEST['indic_evaluados'] ?></letcol></td>
		<td class="tabla_td_01"><letcol><?php echo $_REQUEST['indic_alcanzados'] ?></letcol></td>
		<td class="tabla_td_01"><letcol><?php echo $_REQUEST['indic_med_alcanzados'] ?></letcol></td>
		<td class="tabla_td_01"><letcol><?php echo $_REQUEST['indic_no_alcanzados'] ?></letcol></td>
		<td class="tabla_td_01"><letcol><?php echo $_REQUEST['actua_desempeno'] ?></letcol></td>
	</tr>
	</table>
	
	<table>
	<tr>
		<td align="center">
		<article class="cancelar">
		<a href="detalle_act1.php?cedula_estudiantil=<?php echo $_REQUEST['cedula_estudiantil']?>&nom_est=<?php echo $_REQUEST['nom_est']
		?>&ape_est=<?php echo $_REQUEST['ape_est']?>" title="hacer click para ir a atras"><img height="32px" width="32px" src="../img/atras.png">
		</a>
		</article>
		</td>
	</tr>
	</table>
	
	</center>

	</form>
	
	</br>

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
