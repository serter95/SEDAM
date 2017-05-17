<?php
	include ("seguridad.php");
	include ("conexion.php");
	include ("obtener_fecha.php");
	
//	$ci="SELECT ci_profesor FROM profesor";
	
	$nom=$_SESSION['nom_usuario'];
	
	$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
	$niv_usu=mysql_query($sql);
	
	while($arreglo=mysql_fetch_array($niv_usu))
		{
			
				if($arreglo['nivel']==1)
				{
					$sql="SELECT * FROM planificacion WHERE estatus='0' ";
					$cursor=mysql_query($sql);
					$num=mysql_num_rows($cursor);

					if(!$num)
					{
				?>
						<script language="javascript">
						alert("No se a agregado ninguna actividad, espere que el profesor inserte una");
						location .href='principal.php';
						</script>
				<?php
					} 

					else 
					{
					
					$est="SELECT * FROM estudiante INNER JOIN rel_est_act ON estudiante.cedula_estudiantil =
							rel_est_act.cedula_estudiantil AND rel_est_act.estatus='0' AND estudiante.estatus='0'
							 GROUP BY rel_est_act.cedula_estudiantil ORDER BY rel_est_act.ano DESC";
	
							$consul=mysql_query($est);
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
										<h2> <!--class="titulo"-->Estudiantes con actividades registradas:</h2></br></br>
									<!--<article class="table"> -->
										
								<center>
						<?php
						
						if(empty($_GET['pag']))
						{
							$pagActual=1;
						}
						else
						{
							$pagActual = $_GET['pag'];
						}
						
						$sql="SELECT * FROM estudiante INNER JOIN rel_est_act ON estudiante.cedula_estudiantil =
							rel_est_act.cedula_estudiantil AND rel_est_act.estatus='0' AND estudiante.estatus='0'
							 GROUP BY rel_est_act.cedula_estudiantil ORDER BY estudiante.seccion, rel_est_act.ano, 
							 estudiante.cedula_estudiantil  DESC";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas= 7;
						$ultimapag = ceil($rows/$can_temas);
						
						$sql.= " LIMIT ".(($pagActual-1)*$can_temas).",".$can_temas."";
						//$lista1 = mysql_query(" SELECT * FROM eventos_usuarios ORDER BY id_evento_usuario DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
						$query = mysql_query($sql);
											
						?>										
								<table class="tabla_01" cellspacing="2">
									<tr class="tabla_tr_01">
										<th><lettab>C&eacute;dula estudiantil:</lettab></th>
										<th><lettab>Nombre:</lettab></th>
										<th><lettab>Apellido:</lettab></th>
										<th><lettab>Secci&oacute;n:</lettab></th>
										<th><lettab>A&ntilde;o:</lettab></th>
										<th><lettab>Acción:</lettab></th>
									</tr>
									<?php
									while($datos=mysql_fetch_array($query))
									{
									?>
									<tr class="tabla_tr_02"> 
										<td class="tabla_td_01"><letcol> <?php echo $datos['cedula_estudiantil'] ?> </letcol></td>
										<td class="tabla_td_01"><letcol> <?php echo $datos['nom_estudiante'] ?> </letcol></td>
										<td class="tabla_td_01"><letcol> <?php echo $datos['ape_estudiante'] ?> </letcol></td>
										<td class="tabla_td_01"><letcol> <?php echo $datos['seccion'] ?> </letcol></td>
										<td class="tabla_td_01"><letcol> <?php echo $datos['ano'] ?> </letcol></td>
										<td class="tabla_td_01"> <a href="detalle_act1.php?cedula_estudiantil=
									<?php echo $datos['cedula_estudiantil']?>&nom_est=<?php echo $datos['nom_estudiante']?>&ape_est=
									<?php echo $datos['ape_estudiante']?>" title="Ver detalles de las actividades">
									<img width="32px" height="32px" src="../img/lupa2.png" ></a></td>
									</tr>
									<?php
									}
									?>
								</table>
								<?php
				$siguiente = $pagActual+1;
				$anterior = $pagActual-1;
		?>
		<table align="center" class="tabla_paginacion_01" cellspacing="2">
			<tr class="tabla_paginacion_tr_01">
				<th class="tabla_paginacion_th_01" align="right" width="275px">
								<letpag>
					<?php
									if ($anterior>0) {echo '<a href="muestra_estadistica.php?pag='.$anterior.'">
											<article class="pag_a1">
												Anterior
											</article></a>&nbsp;&nbsp;&nbsp;';}
					?>
								</letpag>
							</th>
							<th class="tabla_paginacion_th_01">
					<?php

								$pgIntervalo = 2; // Páginas que aparecen antes y después de la actual
								$pgMaximo = ($pgIntervalo*2)+1; // Máximo de páginas en el listado
								$pag=$pagActual-$pgIntervalo;
								$i=0;
								while ($i<$pgMaximo)
								{

								if ($pag==$pagActual) {$strong=array('<article class="pag_d2">','</article>');} else {$strong=array('<article class="pag_d2">','</article>');}
						
								if ($pag>0 and $pag<=$ultimapag)
								{
								  echo '<a href="muestra_estadistica.php?&amp;pag='.$pag.'"><article class="pag_a2">'.$pag.'</article></a>';
								  $i++;
 								}

 					?>

					<?php
								if ($pag>$ultimapag) {$i=$pgMaximo;} 
								// Si la página que se va a mostrar se pasa de la cantidad de páginas definidas en $pagTotal se para la generación de elementos de lista
									$pag++;
								}
					?>
							</th>
							<th class="tabla_paginacion_th_01" width="275px">
								<letpag>
								<?php
// Si la página actual no es la última, se muestra el enlace a la página siguiente
								if ($siguiente<=$ultimapag) {echo '<a href="muestra_estadistica.php?pag='.$siguiente.'"><article class="pag_a3">Siguiente</article></a>';}
									?>
							</th>
				</tr>
			</table>
								</center>
									<!--</article>-->
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
						
				<!--///////////////////////////////////////////user 2///////////////////////////////////////////////////////////-->		
<?php
					}
				}

				if($arreglo['nivel']==2)
				{
					$c="SELECT ci_profesor FROM profesor WHERE nom_usuario='$nom'";
					$ci=mysql_query($c);
					$ci_p=mysql_fetch_assoc($ci);
					$ci_prof=$ci_p['ci_profesor'];
					
					$sql="SELECT * FROM planificacion WHERE estatus='0' AND ci_profesor='$ci_prof' AND ano='$ano'";
					$cursor=mysql_query($sql);
					$num=mysql_num_rows($cursor);
					
					if(!$num)
					{
				?>
						<script language="javascript">
						alert("No se a agregado ninguna actividad, por favor inserte una nueva planificacion");
						location .href='crear_planificacion.php';
						</script>
				<?php
					} 
 
					else 
					{
					
					$sec_prof="SELECT seccion_prof FROM profesor WHERE ci_profesor='$ci_prof'";
					$arr_sec=mysql_query($sec_prof);
					
					while($dat=mysql_fetch_array($arr_sec))
						{
							$seccion=$dat['seccion_prof'];
											
							$est="SELECT * FROM rel_est_act INNER JOIN estudiante ON rel_est_act.cedula_estudiantil=
							estudiante.cedula_estudiantil AND seccion='$seccion' AND rel_est_act.estatus='0' AND estudiante.estatus='0'
							AND rel_est_act.ano='$ano' AND estudiante.ano='$ano' GROUP BY rel_est_act.cedula_estudiantil 
							ORDER BY rel_est_act.cedula_estudiantil ASC";
	
							$consul=mysql_query($est);
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
									<h2> <!--class="titulo"-->Estudiantes con actividades registradas:</h2></br></br>
							
							<center>		
						<?php
						
						if(empty($_GET['pag']))
						{
							$pagActual=1;
						}
						else
						{
							$pagActual = $_GET['pag'];
						}
						
						$sql="SELECT * FROM rel_est_act INNER JOIN estudiante ON rel_est_act.cedula_estudiantil=
							estudiante.cedula_estudiantil AND seccion='$seccion' AND rel_est_act.estatus='0' AND estudiante.estatus='0'
							AND rel_est_act.ano='$ano' AND estudiante.ano='$ano' GROUP BY rel_est_act.cedula_estudiantil 
							ORDER BY rel_est_act.cedula_estudiantil ASC";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas= 7;
						$ultimapag = ceil($rows/$can_temas);
						
						$sql.= " LIMIT ".(($pagActual-1)*$can_temas).",".$can_temas."";
						//$lista1 = mysql_query(" SELECT * FROM eventos_usuarios ORDER BY id_evento_usuario DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
						$query = mysql_query($sql);
											
						?>																			
							<table class="tabla_01" cellspacing="2">
								<tr class="tabla_tr_01">
									<th><lettab>C&eacute;dula estudiantil:</lettab></th>
									<th><lettab>Nombre:</lettab></th>
									<th><lettab>Apellido:</lettab></th>
									<th><lettab>Acción:</lettab></th>
								</tr>
								<?php
								while($datos=mysql_fetch_array($query))
								{
								?>
								<tr class="tabla_tr_02"> 
									<td class="tabla_td_02"><letcol> <?php echo $datos['cedula_estudiantil'] ?> </letcol></td>
									<td class="tabla_td_02"><letcol> <?php echo $datos['nom_estudiante'] ?> </letcol></td>
									<td class="tabla_td_02"><letcol> <?php echo $datos['ape_estudiante'] ?> </letcol></td>
									<td class="tabla_td_02"> <a href="detalle_act1.php?cedula_estudiantil=
									<?php echo $datos['cedula_estudiantil']?>&nom_est=<?php echo $datos['nom_estudiante']?>&ape_est=
									<?php echo $datos['ape_estudiante']?>" title="Ver detalles de las actividades">
									<img width="32px" height="32px" src="../img/lupa2.png" ></a></td>
								</tr>
								<?php
								}
								
						}
								?>
							</table>
<?php
				$siguiente = $pagActual+1;
				$anterior = $pagActual-1;
		?>
		<table align="center" class="tabla_paginacion_01" cellspacing="2">
			<tr class="tabla_paginacion_tr_01">
				<th class="tabla_paginacion_th_01" align="right" width="275px">
								<letpag>
					<?php
									if ($anterior>0) {echo '<a href="muestra_estadistica.php?pag='.$anterior.'">
											<article class="pag_a1">
												Anterior
											</article></a>&nbsp;&nbsp;&nbsp;';}
					?>
								</letpag>
							</th>
							<th class="tabla_paginacion_th_01">
					<?php

								$pgIntervalo = 2; // Páginas que aparecen antes y después de la actual
								$pgMaximo = ($pgIntervalo*2)+1; // Máximo de páginas en el listado
								$pag=$pagActual-$pgIntervalo;
								$i=0;
								while ($i<$pgMaximo)
								{

								if ($pag==$pagActual) {$strong=array('<article class="pag_d2">','</article>');} else {$strong=array('<article class="pag_d2">','</article>');}
						
								if ($pag>0 and $pag<=$ultimapag)
								{
								  echo '<a href="muestra_estadistica.php?&amp;pag='.$pag.'"><article class="pag_a2">'.$pag.'</article></a>';
								  $i++;
 								}

 					?>

					<?php
								if ($pag>$ultimapag) {$i=$pgMaximo;} 
								// Si la página que se va a mostrar se pasa de la cantidad de páginas definidas en $pagTotal se para la generación de elementos de lista
									$pag++;
								}
					?>
							</th>
							<th class="tabla_paginacion_th_01" width="275px">
								<letpag>
								<?php
// Si la página actual no es la última, se muestra el enlace a la página siguiente
								if ($siguiente<=$ultimapag) {echo '<a href="muestra_estadistica.php?pag='.$siguiente.'"><article class="pag_a3">Siguiente</article></a>';}
									?>
							</th>
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
				if($arreglo['nivel']==3)
				{
					echo "<meta http-equiv='Refresh' content='0;url=muestra_estadistica_E.php'>";
				}
		}
?>
