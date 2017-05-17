<?php
include ("seguridad.php");
include ("conexion.php");

$nom_usuario=$_GET['nom_usu'];
$fecha_i=$_GET['fecha_i'];
$fecha_f=$_GET['fecha_f'];

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

if($nom_usuario=='Todos')
{
	$aud="SELECT * FROM auditoria WHERE fecha BETWEEN '".$fecha_i."' AND '".$fecha_f."' ";
}
else
{
	$aud="SELECT * FROM auditoria WHERE nom_usuario='$nom_usuario' AND fecha BETWEEN '".$fecha_i."' AND '".$fecha_f."' ";
}
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<!--<link rel="stylesheet" type="text/css" href="../css/menu.css" />-->

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
					<?php
						
						if(empty($_GET['pag']))
						{
							$pagActual=1;
						}
						else
						{
							$pagActual = $_GET['pag'];
						}
						
						$sql=$aud;
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas= 10;
						$ultimapag = ceil($rows/$can_temas);
							
						$sql.= " LIMIT ".(($pagActual-1)*$can_temas).",".$can_temas."";
						//$lista1 = mysql_query(" SELECT * FROM eventos_usuarios ORDER BY id_evento_usuario DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
						$query = mysql_query($sql);
												
						if(!$consul=mysql_num_rows($query))
						{
						?>
						<script>
							alert("No hay registros!");
							location.href="auditoria.php";
						</script>
						<?php	
						}
						else
						{
						?>

			<table class="tabla_01" cellspacing="2">
				<tr class="tabla_tr_01">
					<th><lettab>Nombre de usuario:</lettab></th>
					<th><lettab>acci&oacute;n:</lettab></th>
					<th><lettab>Fecha:</lettab></th>
					<th><lettab>Hora:</lettab></th>
				</tr>
				<?php while($datos=mysql_fetch_array($query))
					{
				?>
				<tr class="tabla_tr_02">
					<td class="tabla_td_01"><letcol><?php echo $datos['nom_usuario'] ?></letcol></td>
					<td class="tabla_td_01"><letcol><?php echo $datos['accion'] ?></letcol></td>
					<td class="tabla_td_01"><letcol><?php echo $datos['fecha'] ?></letcol></td>
					<td class="tabla_td_01"><letcol><?php echo $datos['hora'] ?></letcol></td>
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
				
				<th class="tabla_paginacion_th_01" colspan="2" align="right" width="270px">
		<letpag>
			<?php		
				if($anterior>0)
				{
			?>
						<a href="?pag=<?php echo $anterior?>&nom_usu=<?php echo $nom_usuario ?>&fecha_i<?php echo $fecha_i ?>&fecha_f=<?php echo $fecha_f?>">
							<article class="pag_a1">
								Anterior
							</article>
						</a>
			<?php
				}
				?>
						</letpag>
					</th>
					<th class="tabla_paginacion_th_01">
					<letpag>
			<?php
				/*if($pag == 1)
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
				<a href="?pag=<?php echo$i?>&nom_usu=<?php echo $nom_usuario ?>&fecha_i<?php echo $fecha_i ?>&fecha_f=<?php echo $fecha_f?>">
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
											
						<a href="?pag=<?php echo $c?>&nom_usu=<?php echo $nom_usuario ?>&fecha_i<?php echo $fecha_i ?>&fecha_f=<?php echo $fecha_f?>">
								<article class="pag_a2">
										<?php echo $c?>
								</article></a>
								
				<?php
				}
					$c++;
				}*/
				$pgIntervalo = 2; // Páginas que aparecen antes y después de la actual
								$pgMaximo = ($pgIntervalo*2)+1; // Máximo de páginas en el listado
								$pag=$pagActual-$pgIntervalo;
								$i=0;
				while ($i<$pgMaximo)
								{
								if ($pag>0 and $pag<=$ultimapag)
								{
								  echo '<a href="bus_auditoria.php?&amp;pag='.$pag.'&nom_usu='.$nom_usuario.'&fecha_i='.$fecha_i.'&fecha_f='.$fecha_f.'"><article class="pag_a2">'.$pag.'</article></a>';
								  $i++;
 								}

 					?>

					<?php
								if ($pag>$ultimapag) {$i=$pgMaximo;} 
								// Si la página que se va a mostrar se pasa de la cantidad de páginas definidas en $pagTotal se para la generación de elementos de lista
									$pag++;
								}
				?>
					</letpag>
					</th>
					<th class="tabla_paginacion_th_01" width="270px">
					<letpag>
				<?php
					if($pag <$ultimapag)
					{
					?>
					<a href="?pag=<?php echo $siguiente?>&nom_usu=<?php echo $nom_usuario ?>&fecha_i<?php echo $fecha_i ?>&fecha_f=<?php echo $fecha_f?>">
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
?>
