<?php
include ("seguridad.php");
include("conexion.php");

$r=$_GET["bus_prof"];

$bus_prof= explode(" ", $r);

$sql="SELECT * FROM profesor WHERE ci_profesor='$bus_prof[0]'";
$cursor=mysql_query($sql);

$ci="SELECT * FROM estudiante WHERE ci_profesor='$bus_prof[0]' AND estatus='0'";
$dato=mysql_query($ci);

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
		<h2> <!--class="titulo"-->Profesor:</h2></br></br>
		<center>
		<table class="tabla_01" cellspacing="2">
	<tr class="tabla_tr_01">
		<th><lettab>C.I:</lettab></th>
		<th><lettab>Nombre del Profesor:</lettab></th>
		<th><lettab>Apellido del Profesor:</lettab></th>
		<th><lettab>Secci&oacute;n:</lettab></th>
	</tr>
	<tr class="tabla_tr_02"> 
		<?php
			while($num=mysql_fetch_array($cursor))
				{
		?>
		<td class="tabla_td_01"><letcol> <?php echo $num['ci_profesor'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $num['nom_profesor'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $num['ape_profesor'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $num['seccion_prof'] ?> </letcol></td>
		<?php
				}
		?>
	</tr>
		</table>
		</center>
		</br>
	
		<h2>Estudiantes asignados:</h2>
	
		</br>
		<center>
		<?php
						
						if(empty($_GET['pag']))
						{
							$pag=1;
						}
						else
						{
							$pag = $_GET['pag'];
						}
						
						$sql="SELECT * FROM estudiante WHERE ci_profesor='$bus_prof[0]' AND estatus='0'";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas= 8;
						$ultimapag = ceil($rows/$can_temas);
						
						$pag = (int)$pag;
						
						if($pag<0)
						{
							$pag = 1;
						}
						elseif($pag>$ultimapag)
						{
							$pag = $ultimapag;
						}
						
						
						$sql.= " LIMIT ".(($pag-1)*$can_temas).",".$can_temas."";
						//$lista1 = mysql_query(" SELECT * FROM eventos_usuarios ORDER BY id_evento_usuario DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
						$query = mysql_query($sql);
											
						?>
		<table class="tabla_01" cellspacing="2" >
	<tr class="tabla_tr_01">
		<th><lettab>C&eacute;dula Estudiantil:</lettab></th>
		<th><lettab>Nombre:</lettab></th>
		<th><lettab>Apellido:</lettab></th>
		<th><lettab>Edad:</lettab></th>
		<th><lettab>Sexo:</lettab></th>
		<th><lettab>Secci&oacute;n:</lettab></th>
		<th><lettab>A&ntilde;o:</lettab></th>
	</tr>
		<?php
			while($datos=mysql_fetch_array($query))
				{
		?>
	<tr class="tabla_tr_02">
		<td class="tabla_td_01"><letcol> <?php echo $datos['cedula_estudiantil'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['nom_estudiante'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['ape_estudiante'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['edad'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['sexo'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['seccion'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['ano'] ?> </letcol></td>
	</tr>
		<?php
				}
		?>
	</table>
<?php
				$siguiente = $pag+1;
				$anterior = $pag-1;
		?>
		<table align="center" class="tabla_paginacion_01" cellspacing="2">
			<tr class="tabla_paginacion_tr_01">
				<th class="tabla_paginacion_th_01" colspan="2" align="right" width="280px">
		<letpag>
			<?php		
				if($pag != 1 and $pag>1)
				{
			?>
						<a href="?pag=<?php echo $anterior?>&bus_prof=<?php echo $r?>">
							<article class="pag_a1">
								Anterior
							</article>
						</a>
			<?php
				}
				?>
						</letpag>
					</th>
					<th class="tabla_paginacion_th_01" width="280px">
					<letpag>
			<?php
				if($pag == 1)
				{
			?>
				<article class="pag_d2">
						1
				</article>
			<?php
				$i=2;
				while ($i<=$ultimapag)
				{
			?>
				<a href="?pag=<?php echo $i?>&bus_prof=<?php echo $r?>">
					<article class="pag_a2"> 
						<?php echo $i?>
					</article>
				</a>
			<?php
				$i++;
				}
				}
				$c=1;
				while($c<=$ultimapag)
				{
					if($c==$pag  and $pag !=1)
				{
						?>
							<article class="pag_d2">
								<?php echo $c?>
							</article>
				<?php
				}
				elseif($pag != 1)
				{
				?>
											
						<a href="?pag=<?php echo $c?>&bus_prof=<?php echo $r?>">
								<article class="pag_a2">
										<?php echo $c?>
								</article></a>
								
				<?php
				}
					$c++;
				}
				?>
					</letpag>
					</th>
					<th class="tabla_paginacion_th_01" width="280px">
					<letpag>
				<?php
					if($pag <$ultimapag)
					{
					?>
					<a href="?pag=<?php echo $siguiente?>&bus_prof=<?php echo $r?>">
						<article class="pag_a3">
							Siguiente
						</article>
					</a>
				<?php
					}
				?>
					</letpag>
					</th>
				</tr>
			</table>
	<table>
		<tr>
			<td><a href="consult_prof.php" title="Presione para ir a la pagina anterior"><img width="32px" height="32px" src="../img/atras.png" ></a></td>
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

