<?php
include ("seguridad.php");
include("conexion.php");
include("obtener_fecha.php");

$sql="SELECT * FROM estudiante WHERE estatus='0' ORDER BY seccion, cedula_estudiantil DESC";
$cursor=mysql_query($sql);
$num=mysql_num_rows($cursor);
if(!$num)
{
?>
<script language="javascript">
alert("Usted no a agregado a ningun estudiante, por favor registre uno")
location.href='reg_estudiante.php';
</script>
<?php
} else 
	{
		$nom=$_SESSION['nom_usuario'];
	
		$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
		$niv_usu=mysql_query($sql);
	
		while($arreglo=mysql_fetch_array($niv_usu))
			{
			
				if($arreglo['nivel']==1)
				{
?>
					<html>
					<head>
					<title>Aplicacion</title>
					<link rel="stylesheet" href="../css/estadistica.css" />
					<link rel="stylesheet" href="../css/estilo.css" />
					<script language="javascript" src="validacion_est.js"></script>
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
							<h2> <!--class="titulo"-->Consulta de los estudiantes:</h2>
							
						<!--<article class="table">-->
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
						
						$sql="SELECT * FROM estudiante WHERE estatus='0' ORDER BY seccion, cedula_estudiantil DESC";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas= 5;
						$ultimapag = ceil($rows/$can_temas);
						
						$sql.= " LIMIT ".(($pagActual-1)*$can_temas).",".$can_temas."";
						$query = mysql_query($sql);
											
						?>
							<article id="busqueda">			
							
							<form action="busqueda_est.php" method="get" onSubmit="return validacion_bus()">
								<b><lettab>Busqueda de estudiante:</lettab></b>	
								<select name="bus_est" id="bus_est" title="Seleccione la cedula del estudiante que desea buscar" class="select">
									<option> </option>
									<?php
											
												while($d=mysql_fetch_assoc($query))
													{
												echo"<option>".$d['cedula_estudiantil'].' - '.$d['ape_estudiante'].' '.$d['nom_estudiante']."</option>";
													}
									?>
								</select>		
								<input type="submit" value="" style="height:32px; width:32px; background:url('../img/lupa2.png') center no-repeat;" title="Click para buscar al estudiante" class="inputsub" />
							</form>
							
							</article>
							<br/>

						<table>
							<tr>
								<th align="right"><lettab>Click para agregar un nuevo estudiante</lettab></th>
								<td height="70px" > <a href="reg_estudiante.php"><img src="../img/nuevo.png" width="52px" height="52px" title="Clic para agregar un nuevo estudiante "> </a></td>
							</tr>
						</table>
					<table class="tabla_01" cellspacing="2">
						<tr class="tabla_tr_01">
							<th><lettab>C&eacute;dula estudiantil:</lettab></th>
							<th><lettab>Nombre:</lettab></th>
							<th><lettab>Apellido:</lettab></th>
							<th><lettab>Edad:</lettab></th>
							<th><lettab>Sexo:</lettab></th>
							<th><lettab>Secci&oacute;n:</lettab></th>
							<th><lettab>A&ntilde;o:</lettab></th>
							<th><lettab>Acci&oacute;n:</lettab></th>
						</tr>
						<?php
						$sql="SELECT * FROM estudiante WHERE estatus='0' ORDER BY seccion, cedula_estudiantil DESC";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas= 5;
						$ultimapag = ceil($rows/$can_temas);
						
						$sql.= " LIMIT ".(($pagActual-1)*$can_temas).",".$can_temas."";
						//$lista1 = mysql_query(" SELECT * FROM eventos_usuarios ORDER BY id_evento_usuario DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
						$query = mysql_query($sql);
											


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
							<td class="tabla_td_01"> <a href="elim_estud.php?cedula_estudiantil=<?php echo $datos['cedula_estudiantil']
							?>&nom_estudiante=<?php echo $datos['nom_estudiante']?>&ape_estudiante=<?php echo $datos['ape_estudiante']
							?>" title="Presione para borrar al estudiante"><img height="32px" width="32px" src="../img/mal.png"
							 class="inputsub"></a>&nbsp;
							
							<a href="mod_estud.php?id=<?php echo $datos['id']?>&cedula_estudiantil=<?php echo $datos['cedula_estudiantil']
							?>&nom_estudiante=<?php echo $datos['nom_estudiante']?>&ape_estudiante=<?php echo $datos['ape_estudiante']
							?>&edad=<?php echo $datos['edad']?>&sexo=<?php echo $datos['sexo']?>&grado=<?php echo $datos['grado']
							?>&seccion=<?php echo $datos['seccion']?>" title="Presione para modificar al estudiante">
							<img height="32px" width="32px" src="../img/write.png" ></a></td>
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
									if ($anterior>0) {echo '<a href="muestra_estudiante.php?pag='.$anterior.'">
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
								  echo '<a href="muestra_estudiante.php?&amp;pag='.$pag.'"><article class="pag_a2">'.$pag.'</article></a>';
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
								if ($siguiente<=$ultimapag) {echo '<a href="muestra_estudiante.php?pag='.$siguiente.'"><article class="pag_a3">Siguiente</article></a>';}
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
<?php
				}
				
				//////////////////////////////////user 2//////////////////////////////////////////////
				
			if($arreglo['nivel']==2)
				{
					$sec_prof="SELECT seccion_prof FROM profesor WHERE nom_usuario='$nom'";
					$arr_sec=mysql_query($sec_prof);
					
					while($dat=mysql_fetch_array($arr_sec))
						{
							$seccion=$dat['seccion_prof'];
						}					
							$est="SELECT * FROM estudiante WHERE estatus='0' AND seccion='$seccion' AND ano='$ano' ORDER BY cedula_estudiantil ASC";
	
							$consul=mysql_query($est);
							$num=mysql_num_rows($consul);
							
							if(!$num)
							{
							?>
									<script language="javascript">
									alert("Usted no a agregado a ningun estudiante, por favor registre uno")
									location.href='reg_estudiante.php';
									</script>
							<?php
							}
?>
					<html>
					<head>
					<title>Aplicacion</title>
					<link rel="stylesheet" href="../css/estadistica.css" />
					<link rel="stylesheet" href="../css/estilo.css" />
					<script language="javascript" src="validacion_est.js"></script>
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
							<h2> <!--class="titulo"-->Consulta de los estudiantes:</h2>
							</br>
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

						/*if (!isset($_GET['pag'])) {$pagActual=1;} else {$pagActual=$_GET['pag'];}*/
						
						$sql="SELECT * FROM estudiante WHERE estatus='0' AND seccion='$seccion' AND ano='$ano' ORDER BY cedula_estudiantil ASC";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas=5;
						$ultimapag = ceil($rows/$can_temas);
						
						$sql.= " LIMIT ".(($pagActual-1)*$can_temas).",".$can_temas."";
						//$lista1 = mysql_query(" SELECT * FROM eventos_usuarios ORDER BY id_evento_usuario DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
						$query = mysql_query($sql);
											
						?>
						<table>
							<tr>
								<th align="right"><lettab>Click para agregar un nuevo estudiante</lettab></th>
								<td height="70px" > <a href="reg_estudiante.php"><img src="../img/nuevo.png" width="52px" height="52px" title="Clic para agregar un nuevo estudiante "> </a></td>
							</tr>
						</table>						

					<table class="tabla_01" cellspacing="2">
						<tr class="tabla_tr_01">
							<th><lettab>C&eacute;dula estudiantil:</lettab></th>
							<th><lettab>Nombre:</lettab></th>
							<th><lettab>Apellido:</lettab></th>
							<th><lettab>Edad:</lettab></th>
							<th><lettab>Sexo:</lettab></th>
							<th><lettab>Secci&oacute;n:</lettab></th>
							<th><lettab>Acci&oacute;n:</lettab></th>
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
							<td class="tabla_td_01"> <a href="elim_estud.php?cedula_estudiantil=<?php echo $datos['cedula_estudiantil']
							?>&nom_estudiante=<?php echo $datos['nom_estudiante']?>&ape_estudiante=<?php echo $datos['ape_estudiante']
							?>" title="Presione para borrar al estudiante"><img height="32px" width="32px" src="../img/mal.png" class="inputsub"></a>&nbsp;
							
							<a href="mod_estud.php?id=<?php echo $datos['id']?>&cedula_estudiantil=<?php echo $datos['cedula_estudiantil']
							?>&nom_estudiante=<?php echo $datos['nom_estudiante']?>&ape_estudiante=<?php echo $datos['ape_estudiante']
							?>&edad=<?php echo $datos['edad']?>&sexo=<?php echo $datos['sexo']?>&grado=<?php echo $datos['grado']
							?>&seccion=<?php echo $datos['seccion']?>" title="Presione para modificar al estudiante">
							<img height="32px" width="32px" src="../img/write.png" ></a></td>
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
									if ($anterior>0) {echo '<a href="muestra_estudiante.php?pag='.$anterior.'">
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
								  echo '<a href="muestra_estudiante.php?&amp;pag='.$pag.'"><article class="pag_a2">'.$pag.'</article></a>';
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
								if ($siguiente<=$ultimapag) {echo '<a href="muestra_estudiante.php?pag='.$siguiente.'"><article class="pag_a3">Siguiente</article></a>';}
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
	}
?>
