<?php
include('seguridad.php');
include ("conexion.php");
include("obtener_fecha.php");
		$nom=$_SESSION['nom_usuario'];
	
		$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
		$niv_usu=mysql_query($sql);
		$niv_usua=mysql_fetch_assoc($niv_usu);
		$nivel=$niv_usua['nivel'];
		
		if($nivel==3)
		{
			
		$e="SELECT * FROM estudiante WHERE nom_usuario='$nom'";
		$es=mysql_query($e);
		while($est=mysql_fetch_assoc($es))
		{
		$ci_est=$est['cedula_estudiantil'];
		$nom_est=$est['nom_estudiante'];
		$ape_est=$est['ape_estudiante'];
		}
		
$sql="SELECT * FROM rel_est_act WHERE cedula_estudiantil='$ci_est' AND ano='$ano' AND estatus='0'";
$cursor=mysql_query($sql);
$num=mysql_num_rows($cursor);
if(!$num)
{
?>
<script language="javascript">
alert("Aun no empiezas!");
location.href='principal.php';
</script>
<?php
} else 
	{

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
		</br></br>C&eacute;dula Estudiantil '<?php echo $ci_est ?>'</h2></br></br>
	<!--	<article class="table">-->
		
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
						
						$sql="SELECT * FROM rel_est_act INNER JOIN actividad ON rel_est_act.id_act = actividad.id_act
							AND rel_est_act.cedula_estudiantil='$ci_est' AND rel_est_act.estatus='0'";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas= 4;
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
		<td class="tabla_td_01">
		
		<a href="det_act_E.php?nom_act=<?php echo $datos['nom_act'] ?>&indic_evaluados=<?php echo $indi['indic_evaluados']?>&indic_alcanzados=<?php echo $indi['indic_alcanzados']
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
									<a href="?pag=<?php echo $anterior?>">
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
										<a href="?pag=<?php echo $i?>">
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
											
												<a href="?pag=<?php echo $c?>">
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
										<a href="?pag=<?php echo $siguiente?>">
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
<?php
}
}
else
{
?>
<script language="javascript">
alert("Usted no es un estudiante");
window.location.href='principal.php';
</script>
<?php
}
?>
