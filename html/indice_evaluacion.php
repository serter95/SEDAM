<?php
include ("seguridad.php");
include ('conexion.php');
include ('obtener_fecha.php');

$nivel = $_SESSION['nivel'];
$usuario = $_SESSION['nom_usuario'];

if($nivel == 1){
	$sql="select * from evaluacion where estatus='0' and ano = '$ano' ";
	$query=mysql_query($sql);
	$rows=mysql_num_rows($query);
}
if($nivel == 2){
$sql_cp="SELECT ci_profesor FROM profesor where nom_usuario='$usuario'";// and ano = '$ano'";
		$ejecutar_sql_cp=mysql_query($sql_cp);
		$dato_cp=mysql_fetch_array ($ejecutar_sql_cp);
				
		$ci_profesor=$dato_cp['ci_profesor'];

		$sql="select * from evaluacion where estatus='0' and ci_profesor = '$ci_profesor'  and ano = '$ano' ";
		$query=mysql_query($sql);
		$rows=mysql_num_rows($query);
}	
if($nivel == 3){
$sql_cp="SELECT ci_profesor FROM estudiante where nom_usuario='$usuario'";// and ano = '$ano'";
		$ejecutar_sql_cp=mysql_query($sql_cp);
		$dato_cp=mysql_fetch_array ($ejecutar_sql_cp);
				
		$ci_profesor=$dato_cp['ci_profesor'];

		$sql="select * from evaluacion where estatus='0' and ci_profesor = '$ci_profesor'  and ano = '$ano' ";
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
			<h2>&Iacute;ndice de Evaluaci&oacute;n:</h2>
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
		if($nivel == 1)
		{

			$sql="select * from evaluacion where activador='0' and estatus='0' group by id_pla";
			$query=mysql_query($sql);
			$rows=mysql_num_rows($query);
		}
		if($nivel == 2){
		$sql_cp="SELECT ci_profesor FROM profesor where nom_usuario='$usuario'";
		$ejecutar_sql_cp=mysql_query($sql_cp);
		$dato_cp=mysql_fetch_array ($ejecutar_sql_cp);
				
		$ci_profesor=$dato_cp['ci_profesor'];

		$sql="select * from evaluacion where activador='0' and ci_profesor='$ci_profesor' and estatus='0' group by id_pla";
		$query=mysql_query($sql);
		$rows=mysql_num_rows($query);

		}
		if($nivel == 3)
		{
			$sql_cp="SELECT ci_profesor FROM estudiante where nom_usuario='$usuario'";
			$ejecutar_sql_cp=mysql_query($sql_cp);
			$dato_cp=mysql_fetch_array ($ejecutar_sql_cp);
					
			$ci_profesor=$dato_cp['ci_profesor'];

			$sql="select * from evaluacion where activador='0' and estatus='0' and ci_profesor='$ci_profesor' group by id_pla";
			$query=mysql_query($sql);
			$rows=mysql_num_rows($query);
		}
		
	
		$can_temas= 5;
		$ultimapag = ceil($rows/$can_temas);
		
		?>
	<table align="center" class="tabla_01" cellspacing="2" width="800px">
		<tr class="tabla_tr_01">
			<th width="70px"><lettab>A&ntilde;o</lettab></th>
			<th width="90px"><lettab>Actividad</lettab></th>
			<th width="180px"><lettab>Tema</lettab></th>
			<?php
			if($_SESSION['nivel']==3)
			{
			?>
			<th><lettab>Realizar Evaluaci&oacute;n</lettab></th>
			<?php
			}
			?>
		</tr>
		<?php

		$sql.= " LIMIT ".($pagActual-1)*$can_temas.",".$can_temas." ";
		$query = mysql_query($sql);
		
		while($datos=mysql_fetch_array($query))
		{


			$codig_tema = $datos['codig_tema'];
			$id_pla = $datos['id_pla'];

			//Seleccion del titulo del Tema
			$sql_cp="SELECT * FROM tema where codig_tema='$codig_tema' and estatus='0' and ano='$ano'";
			$ejecutar_sql_cp=mysql_query($sql_cp);

			$dato_cp=mysql_fetch_array ($ejecutar_sql_cp);
					
			$titulo=$dato_cp['titulo'];

			//Seleccion del nombre de la Actividad
			$sql_pla="SELECT * FROM actividad where id_pla='$id_pla'";
			$ejecutar_sql_pla=mysql_query($sql_pla);
			$dato_pla=mysql_fetch_array ($ejecutar_sql_pla);
		

			$titulo=$dato_cp['titulo'];

			$actividad = $dato_pla['nom_act'];

			?>
		<tr class="tabla_tr_02">
			<td width="70px" align="center" class="tabla_td_01"><letcol><?php echo $datos['ano']; ?></letcol></td>
			<td width="90px" align="center" class="tabla_td_01"><letcol><?php echo $actividad; ?></letcol></td>
			<td width="400px" align="center" class="tabla_td_01"><letcol><?php echo $titulo;?></letcol><a href="fraccion.php"></a></td>
			<?php
			if($_SESSION['nivel']==3)
			{
			?>
			<td width="180px" class="tabla_td_01">
				<form action="evaluacion.php" method="post">
						<input type="hidden" name="tema" value="<?php echo $datos['codig_tema'];?>">
						<input type="submit" value="" title="Click para realizar la evaluaci&oacute;n " style="height:32px; width:32px; background: url(../img/lupa2.png) center no-repeat; cursor: pointer; " /><br />
				</form>	
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
									if ($anterior>0) {echo '<a href="indice_evaluacion.php?pag='.$anterior.'">
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
								  echo '<a href="indice_evaluacion.php?&amp;pag='.$pag.'"><article class="pag_a2">'.$pag.'</article></a>';
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
								if ($siguiente<=$ultimapag) {echo '<a href="indice_evaluacion.php?pag='.$siguiente.'"><article class="pag_a3">Siguiente</article></a>';}
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
	alert('No hay Evaluaciones a Realizar');
	window.location.href="principal.php";
</script>
<?php
}
?>
