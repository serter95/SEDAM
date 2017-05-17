<?php
include ("seguridad.php");
include ("conexion.php");

	$ci_est=$_GET['cedula_estudiantil'];
	$nom_est=$_GET['nom_est'];
	$ape_est=$_GET['ape_est'];
	
	$sql="SELECT * FROM rel_est_act INNER JOIN actividad ON rel_est_act.id_act = actividad.id_act
	AND rel_est_act.cedula_estudiantil='$ci_est' AND rel_est_act.estatus='0'";
	$con=mysql_query($sql);
	
	$in="SELECT * FROM rel_est_act INNER JOIN indicadores ON rel_est_act.id_act = indicadores.id_act
	AND rel_est_act.cedula_estudiantil='$ci_est' AND indicadores.cedula_estudiantil='$ci_est' AND rel_est_act.estatus='0'";
	$ind=mysql_query($in);
	
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
		<h2> <!--class="titulo"-->Actividades de <?php echo $nom_est." ".$ape_est ?>:
		</br></br>C&eacute;dula Estudiatil '<?php echo $ci_est ?>'</h2></br></br>
	<!--	<article class="table">-->
		
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
						
						$sql="SELECT * FROM rel_est_act INNER JOIN actividad ON rel_est_act.id_act = actividad.id_act
							AND rel_est_act.cedula_estudiantil='$ci_est' AND rel_est_act.estatus='0'";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas= 4;
						$ultimapag = ceil($rows/$can_temas);
							
						$sql.= " LIMIT ".(($pagActual-1)*$can_temas).",".$can_temas."";
						//$lista1 = mysql_query(" SELECT * FROM eventos_usuarios ORDER BY id_evento_usuario DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
						$query = mysql_query($sql);
											
						?>
<table class="tabla_01" cellspacing="2">
	<tr class="tabla_tr_01">
		<th width="260px"><lettab>Actividad:</lettab></th>
		<th width="338px"><lettab>Descripci&oacute;n:</lettab></th>
		<th width="338px"><lettab>Actuaci&oacute;n del Desempe&ntilde;o:</lettab></th>
		<th width="119px"><lettab>Acci&oacute;n:</lettab></th>
	</tr>
	<?php
		while($datos=mysql_fetch_array($query))
		{
	?>
	<tr class="tabla_tr_02"> 
		<td class="tabla_td_01" align="justify"><letcol> <?php echo $datos['nom_act'] ?> </letcol></td>
		<td class="tabla_td_01" align="justify"><letcol> <?php echo $datos['descripcion'] ?> </letcol></td>
	<?php
	
		if($indi=mysql_fetch_assoc($ind))
			{
	?>
		<td class="tabla_td_01" align="justify"><letcol> <?php echo $indi['actua_desempeno'] ?> </letcol></td>
		<td class="tabla_td_01" align="">
			
		<?php
		if($_SESSION['nivel']==2)
		{
		?>
	
		<a href="consulta_pre.php?nom_act=<?php echo $datos['nom_act'] ?>&id_act=<?php echo $indi['id_act']?>&indic_evaluados=<?php echo $indi['indic_evaluados']?>&indic_alcanzados=
		<?php echo $indi['indic_alcanzados']?>&indic_med_alcanzados=<?php echo $indi['indic_med_alcanzados']?>&indic_no_alcanzados=
		<?php echo $indi['indic_no_alcanzados']?>&actua_desempeno=<?php echo $indi['actua_desempeno']?>&cedula_estudiantil=<?php echo $ci_est
		?>&nom_est=<?php echo $nom_est?>&ape_est=<?php echo $ape_est?>" title="Presione para modificar la actividad">
		<img height="32px" width="32px" src="../img/write.png" ></a> 
		
		<?php
		}
		?>
		
		<a href="det_act.php?nom_act=<?php echo $datos['nom_act'] ?>&indic_evaluados=<?php echo $indi['indic_evaluados']?>&indic_alcanzados=<?php echo $indi['indic_alcanzados']
		?>&indic_med_alcanzados=<?php echo $indi['indic_med_alcanzados']?>&indic_no_alcanzados=<?php echo $indi['indic_no_alcanzados']
		?>&actua_desempeno=<?php echo $indi['actua_desempeno']?>&cedula_estudiantil=<?php echo $ci_est?>&nom_est=<?php echo $nom_est
		?>&ape_est=<?php echo $ape_est?>" title="Presione para ver la actividad"><img height="32px" width="32px" src="../img/lupa2.png" ></a></td>
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
									if ($anterior>0) {echo '<a href="detalle_act1.php?pag='.$anterior.'&cedula_estudiantil='.$ci_est.'&nom_est='.$nom_est.'&ape_est='.$ape_est.'">
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
								  echo '<a href="detalle_act1.php?&amp;pag='.$pag.'&cedula_estudiantil='.$ci_est.'&nom_est='.$nom_est.'&ape_est='.$ape_est.'"><article class="pag_a2">'.$pag.'</article></a>';
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
								if ($siguiente<=$ultimapag) {echo '<a href="detalle_act1.php?pag='.$siguiente.'&cedula_estudiantil='.$ci_est.'&nom_est='.$nom_est.'&ape_est='.$ape_est.'"><article class="pag_a3">Siguiente</article></a>';}
									?>
							</th>
						</tr>
					</table>

	<table>
		<tr>
			<td align="center">
			<article class="cancelar">
			<a href="muestra_estadistica.php" title="hacer click para ir a atras"><img height="32px" width="32px" src="../img/atras.png"></a>
			</article>
			</td>
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

