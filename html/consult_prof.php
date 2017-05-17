<?php
include ("seguridad.php");
include("conexion.php");

$nom=$_SESSION['nom_usuario'];
	
		$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
		$niv_usu=mysql_query($sql);
		$niv_usua=mysql_fetch_assoc($niv_usu);
		$nivel=$niv_usua['nivel'];
		
		if($nivel==1)
		{

$sql="SELECT * FROM profesor WHERE estatus='0' ORDER BY ci_profesor";
$cursor=mysql_query($sql);
$num=mysql_num_rows($cursor);
if(!$num)
{
?>
<script language="javascript">
alert("Usted no a agregado a ningun profesor, por favor registre uno")
location.href='reg_prof.php';
</script>
<?php
} else 
	{
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/estadistica.css" />
<link rel="stylesheet" href="../css/estilo.css" />
<script language="javascript" src="validacion_prof.js"></script>
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
		<h2> <!--class="titulo"-->Consulta de profesores</h2>

		<article id="busqueda">			
		
		<form action="busqueda_prof.php" method="get" onSubmit="return validacion_bus()">
			<b><lettab>Busqueda de profesor:</lettab></b>	
			<select name="bus_prof" id="bus_prof" title="Seleccione la cedula del profesor que desea buscar" class="select">
				<option> </option>
				<?php
						
						$ci_prof="SELECT * FROM profesor WHERE estatus='0'";
	
						$resultado_ci=mysql_query($ci_prof);	
						
							while($arreglo=mysql_fetch_array($resultado_ci))
								{
							echo"<option>".$arreglo['ci_profesor'].' - '.$arreglo['ape_profesor'].' '.$arreglo['nom_profesor']."</option>";
								}
						?>
			</select>		
			<input type="submit" value="" style="height:50px; width:50px; background:url('../img/lupa2.png') center no-repeat;" title="Click para buscar al profesor" class="inputsub" />
		</form>
		
		</article>

		</br>
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
						
						$sql="SELECT * FROM profesor WHERE estatus='0' ORDER BY ci_profesor";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);

						$can_temas= 5;
						$ultimapag = ceil($rows/$can_temas);
						
						$sql.= " LIMIT ".(($pagActual-1)*$can_temas).",".$can_temas."";
						//$lista1 = mysql_query(" SELECT * FROM eventos_usuarios ORDER BY id_evento_usuario DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
						$query = mysql_query($sql);
											
						?>
		<table>
			<tr>
				<th align="right"><lettab>Click para agregar un nuevo profesor</lettab></th>
				<td height="70px" > <a href="reg_prof.php"><img src="../img/nuevo.png" width="52px" height="52px" title="Click para agregar un nuevo profesor"></a></td>
			</tr>
		</table>

		<table class="tabla_01" cellspacing="2">
	<tr class="tabla_tr_01">
		<th><lettab>C.I:</lettab></th>
		<th><lettab>Nombre:</lettab></th>
		<th><lettab>Apellido:</lettab></th>
		<th><lettab>Secci&oacute;n:</lettab></th>
		<th><lettab>Acci&oacute;n:</lettab></th>
	</tr>
	<?php
		while($datos=mysql_fetch_array($query))
		{
	?>
	<tr class="tabla_tr_02"> 
		<td class="tabla_td_01"><letcol> <?php echo $datos['ci_profesor'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['nom_profesor'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['ape_profesor'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['seccion_prof'] ?> </letcol></td>
		<td class="tabla_td_01"> <a href="elim_prof.php?id=<?php echo $datos['id']?>&ci_profesor=<?php echo $datos['ci_profesor']
		?>&nom_profesor=<?php echo $datos['nom_profesor']?>&ape_profesor=<?php echo $datos['ape_profesor']?>"
		 title="Presione para borrar al profesor"><img height="32px" width="32px" src="../img/mal.png" class="inputsub" >
		 </a>&nbsp;
		 
		 <a href="mod_prof.php?id=<?php echo $datos['id']?>&ci_profesor=<?php echo $datos['ci_profesor']
		 ?>&nom_profesor=<?php echo $datos['nom_profesor']?>&ape_profesor=<?php echo $datos['ape_profesor']
		 ?>&grado_prof=<?php echo $datos['grado_prof']?>&seccion_prof=<?php echo $datos['seccion_prof']
		 ?>"title="Presione para modificar al profesor"><img height="32px" width="32px" src="../img/write.png" ></a></td>
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
									if ($anterior>0) {echo '<a href="consult_prof.php?pag='.$anterior.'">
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
								  echo '<a href="consult_prof.php?&amp;pag='.$pag.'"><article class="pag_a2">'.$pag.'</article></a>';
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
								if ($siguiente<=$ultimapag) {echo '<a href="consult_prof.php?pag='.$siguiente.'"><article class="pag_a3">Siguiente</article></a>';}
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
else
{
?>
<script language="javascript">
alert("Usted no es Administrador");
window.location.href='principal.php';
</script>
<?php
}
?>
