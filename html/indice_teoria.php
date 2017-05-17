<?php
include ("seguridad.php");
include ('conexion.php');
include ('obtener_fecha.php');

$usuario = $_SESSION['nom_usuario'];
$nivel = $_SESSION['nivel'];


if($nivel == 1){
	$sql="select * from tema where estatus='0' and ano = '$ano' ";
	$query=mysql_query($sql);
	$rows=mysql_num_rows($query);
}
if($nivel == 2){
$sql_cp="SELECT ci_profesor FROM profesor where nom_usuario='$usuario'";// and ano = '$ano'";
		$ejecutar_sql_cp=mysql_query($sql_cp);
		$dato_cp=mysql_fetch_array ($ejecutar_sql_cp);
				
		$ci_profesor=$dato_cp['ci_profesor'];

		$sql="select * from tema where estatus='0' and ci_profesor = '$ci_profesor'  and ano = '$ano' ";
		$query=mysql_query($sql);
		$rows=mysql_num_rows($query);
}	
if($nivel == 3){
$sql_cp="SELECT ci_profesor FROM estudiante where nom_usuario='$usuario'";// and ano = '$ano'";
		$ejecutar_sql_cp=mysql_query($sql_cp);
		$dato_cp=mysql_fetch_array ($ejecutar_sql_cp);
				
		$ci_profesor=$dato_cp['ci_profesor'];

		$sql="select * from tema where estatus='0' and ci_profesor = '$ci_profesor'  and ano = '$ano' ";
		$query=mysql_query($sql);
		$rows=mysql_num_rows($query);
}	
if($rows){
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
		<h2>&Iacute;ndice de Teor&iacute;a:</h2>
		<center>
		<br>
			<?php
		
		if(empty($_GET['pag']))
		{
			$pagActual=1;
		}
		else
		{
			$pagActual = $_GET['pag'];
		}
		
		$sql="select * from tema where estatus='0' and ano = '$ano' ";
		$query=mysql_query($sql);
		$rows=mysql_num_rows($query);
	
		$can_temas= 5;
		$ultimapag = ceil($rows/$can_temas);
		
		?>
	<table align="center" class="tabla_01" cellspacing="2" width="800px">
		<tr class="tabla_tr_01">
			<th width="70px"><lettab>Momento</lettab></th>
			<th width="90px"><lettab>Objetivo</lettab></th>
			<th width="180px"><lettab>Tema</lettab></th>
			<th width="380px"><lettab>Descripci&oacute;n</lettab></th>
			<th width="30px"></th>
		</tr>
		<?php
		$sql.= " LIMIT ".($pagActual-1)*$can_temas.",".$can_temas."";
		$query = mysql_query($sql);
		
		while($datos=mysql_fetch_array($query))
		{
			?>
		<tr class="tabla_tr_02">
			<td width="70px" align="center" class="tabla_td_01"><letcol><?php echo $datos['momento']; ?></letcol></td>
			<td width="90px" align="center" class="tabla_td_01"><letcol><?php echo $datos['objetivo']; ?></letcol></td>
			<td width="180px" align="center" class="tabla_td_01"><letcol><?php echo $datos['titulo'];?></letcol><a href="fraccion.php"></a></td>
			<td width="380px" align="justify" class="tabla_td_01"><letcol><?php echo $datos['descripcion'];?></letcol></td>
			<td width="30px" class="tabla_td_01">
				<?php
					$codigo=$datos['codig_tema'];
				?>
					<form action="teoria.php" method="post">
						<input type="hidden" value="<?php echo $codigo; ?>" name="codigo" />
						<input type="submit" name="ver" value="" title="Click para ver el contenido" style="height:32px; width:32px; background: url(../img/lupa2.png) center no-repeat; cursor: pointer; " /><br />
					</form>	
			</td>
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
									if ($anterior>0) {echo '<a href="indice_teoria.php?pag='.$anterior.'">
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
								  echo '<a href="indice_teoria.php?&amp;pag='.$pag.'"><article class="pag_a2">'.$pag.'</article></a>';
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
								if ($siguiente<=$ultimapag) {echo '<a href="indice_teoria.php?pag='.$siguiente.'"><article class="pag_a3">Siguiente</article></a>';}
									?>
							</th>
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
<?php
}
else{

?>
<script language="javascript">
	alert('No hay Teor\u00eda');
	window.location.href="principal.php";
</script>
<?php
}
?>
