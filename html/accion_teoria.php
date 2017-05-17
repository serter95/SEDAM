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
		
			<h2>&Iacute;ndice de Temas: </h2></br>

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
		
		$sql="select * from tema where estatus='0' ";
		$query=mysql_query($sql);
		$rows=mysql_num_rows($query);
	
		$can_temas= 5;
		$ultimapag = ceil($rows/$can_temas);
		
	if($_SESSION['nivel']==2)
	{
		?>
	<table>
		<tr>
			<th align="right"><lettab>Click para agregar un nuevo tema</lettab></th>
			<td height="70px" > <a href="crear_tema.php"><img src="../img/nuevo.png" width="52px" height="52px" title="Clic para agregar un nuevo tema"> </a></td>
		</tr>
	</table>
	<?php
	}
	?>
	<table align="center" class="tabla_01" cellspacing="2" width="800px">
		<tr class="tabla_tr_01">
			<th width="60px"><lettab>Momento: </lettab></th>
			<th width="60px"><lettab>Objetivo: </lettab></th>
			<th width="240px"><lettab>Tema: </lettab></th>
			<th width="320px"><lettab>Descripci&oacute;n: </lettab></th>
		<?php
		if($_SESSION['nivel']==2)
		{
		?>
			<th width="85px"><lettab>Acciones: </lettab></th>
		<?php
		}
		?>
		</tr>
		<?php
		$sql.= " LIMIT ".($pagActual-1)*$can_temas.",".$can_temas."";
		$query = mysql_query($sql);
		
		while($datos=mysql_fetch_array($query))
		{
			?>
		<tr class="tabla_tr_02">
			<td align="center" class="tabla_td_01"><letcol><?php echo $datos['momento']; ?></letcol></td>
			<td align="center" class="tabla_td_01"><letcol><?php echo $datos['objetivo']; ?></letcol></td>
			<td align="center" class="tabla_td_01"><letcol><?php echo $datos['titulo'];?></letcol><a href="fraccion.php"></a></td>
			<td align="justify" class="tabla_td_01"><letcol><?php echo $datos['descripcion'];?></letcol></td>
		<?php
		if($_SESSION['nivel']==2)
		{
		?>	
			<td class="tabla_td_01">

				<a href="elim_tema.php?cod_tema=<?php echo $datos['codig_tema'] ?>&tema=<?php echo $datos['titulo']?>" title="Presione para borrar el tema"><img height="32px" width="32px" src="../img/mal.png"
							 class="inputsub">
				</a>
				<a href="modificar_tema.php?cod_tema=<?php echo $datos['codig_tema'] ?>" title="Presione para modificar el tema">
							<img height="32px" width="32px" src="../img/write.png" >
				</a>
			</td>
		<?php
		}
		?>
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
									if ($anterior>0) {echo '<a href="accion_teoria.php?pag='.$anterior.'">
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
								  echo '<a href="accion_teoria.php?&amp;pag='.$pag.'"><article class="pag_a2">'.$pag.'</article></a>';
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
								if ($siguiente<=$ultimapag) {echo '<a href="accion_teoria.php?pag='.$siguiente.'"><article class="pag_a3">Siguiente</article></a>';}
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
	alert('No hay Temas');
	window.location.href="crear_tema.php";
</script>
<?php
}
?>
