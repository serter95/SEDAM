<?php
include ('seguridad.php');
include ('conexion.php');
include('enlasadorm.php');
include ('obtener_fecha.php');

	$id = $_REQUEST['id'];
	$c="SELECT ci_profesor FROM profesor WHERE nom_usuario='".$_SESSION['nom_usuario']."'";
	$ci=mysql_query($c);
	$ci_p=mysql_fetch_assoc($ci);
	$ci_prof=$ci_p['ci_profesor'];
	
	$sql="select num_proyecto from proyecto where estatus='0' and ano='$ano' and ci_profesor='$ci_prof'";
	$cursor=mysql_query($sql);
	
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />

<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="funciosajaxm.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="validacionesDOM.js"></script>
<script type="text/javascript" src="fecha.js"></script>
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
			<?php
				$sql_pla="select * from planificacion where id_pla = '$id' ";
				$cursor_pla=mysql_query($sql_pla);

				$dato_p = mysql_fetch_array($cursor_pla);

				$sql_act="select * from actividad where id_pla = '$id' ";
				$cursor_act=mysql_query($sql_act);

				$dato_act = mysql_fetch_array($cursor_act);
			?>
			
			<h2>Detalle de la Planificaci&oacute;n: </h2> <br>
			<center>
			<table align="center" class="tabla_01" cellspacing="2" width="800px">
				<form name="formt" action="gestor_modif_pla.php" method="post" id="formt" enctype="multipart/form-data">
					<tr class="tabla_tr_01">
							<th width="110px">
								<lettab>Proyecto:</lettab>
							</th>
							<th>
								<lettab>Número de planificación:</lettab>
							</th>
							<th>
								<lettab>Fecha Inicial: </lettab>
							</th>
							<th>
								<lettab>Fecha Final: </lettab>
							</th>
							<th>
								<lettab>Actividad: </lettab>
							</th>
							<th>
								<lettab>Descripción: </lettab>
							</th>
					</tr>
					<tr>
							<td>
							<letcol> <?php echo $dato_p['id_proyecto']; ?> </letcol>
							</td>
							<td>
								<letcol> <?php echo $dato_p['num_pla']; ?> </letcol>
							</td>
							<td>
								<letcol><?php echo $dato_p['fecha_i']; ?></letcol>
							</td>	
							<td>
								<letcol><?php echo $dato_p['fecha_f']; ?></letcol>
							</td>
							<td>
								<letcol><?php echo $dato_act['nom_act']; ?></letcol></td>
							
							<td >
								<letcol><?php echo $dato_act['descripcion']; ?></letcol>
							</td>
						</tr>
					</table>
					</center>
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
