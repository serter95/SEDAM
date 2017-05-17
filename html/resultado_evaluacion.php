<?php
include ("seguridad.php");
include ('conexion.php');

$usuario = $_SESSION['nom_usuario'];
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />
<title>Aplicacion</title>
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
		</article>
		<article class="contenido">
		
		<br>
			<h2>Resultado de la Evaluaci&oacute;n</h2>
		<br>
		<center>
			<?php
		$codig_tema = $_SESSION['tema'];

		$sql_ce="SELECT cedula_estudiantil FROM estudiante where nom_usuario='$usuario'";
		$ejecutar_sql_ce=mysql_query($sql_ce);
		$dato_ce=mysql_fetch_array ($ejecutar_sql_ce);

		$ce = $dato_ce['cedula_estudiantil'];

		$sql_e = "select * from rel_est_eva where codig_tema = '$codig_tema' and cedula_estudiantil = '$ce'";
		$ejecutar_sql_e = mysql_query($sql_e);

		$dato_e = mysql_fetch_array($ejecutar_sql_e);

		$desarrollo = $dato_e['desarrollo'];
		$cant = $dato_e['cant'];

		$cant_t = $cant * 3;
		//Explode
		$explode_desarrollo = explode("|", $desarrollo);
		

		$i = 0;
		//Fin Explode
		?>

	<table align="center" >
		<tr>
			<th rowspan="<?php echo $cant_t ?>"><img src="../img/nino_evaluacion_fin.png" width="140"></th>
			<td>
				<table class="tabla_02">
					<tr class="tabla_tr_03">
						<th width="300px"><lettab>Pregunta Realizada: </lettab></th>
						<th width="90px"><lettab>Tu Respuesta: </lettab></th>
						<th width="150px"><lettab>Aciertos Correctos </lettab></th>
						<th width="150"><lettab>Aciertos Inorrectos </lettab></th>
					</tr>
		<?php
		//$sql.= " LIMIT ".($pag-1)*$can_temas.",".$can_temas."";
		//$query = mysql_query($sql);
		
		while($i <= $cant_t)
		{
			?>
					<tr class="tabla_tr_04">
						<td class="tabla_td_02"><letcol><?php echo $explode_desarrollo[$i++]; ?></letcol></td>
						<td class="tabla_td_02"><letcol><?php echo $explode_desarrollo[$i++]; ?></letcol></td>
						<td class="tabla_td_02">

							<letcol>
							<?php 
								$contador = $explode_desarrollo[$i++];
								if($contador=='correcto')
								{
								?>
									Correcto
								<?php
								}
							?>
							</letcol>

						</td>
						<td align="justify" class="tabla_td_01">
							<letcol>
							<?php
								if($contador=='incorrecto')
								{
								?>
									Incorrecto
								<?php
								}
							?>
							</letcol>
						</td>
					</tr>
	
		<?php
		}
		?>
				</table>
			</td>
		<?php
		$siguiente = $pag+1;
		$anterior = $pag-1;
		?>
			<td rowspan="<?php echo $cant_t ?>">
			<img src="../img/nina_evaluacion_fin.png" width="140">
			</td>
		</tr>
	</table>
			<!-- Fin Paginacion -->
			
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
