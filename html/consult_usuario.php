<?php
include ("seguridad.php");
include("conexion.php");

$nom=$_SESSION['nom_usuario'];
	
		$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
		$niv_usu=mysql_query($sql);
		$niv_usua=mysql_fetch_assoc($niv_usu);
		$nivel=$niv_usua['nivel'];
		
		if($nivel!=1)
		{
?>
<script language="javascript">
alert("Usted no es Administrador");
window.location.href='principal.php';
</script>
<?php
		}
		else
		{



$sql="SELECT * FROM usuario WHERE estatus='0' ORDER BY nivel";
$cursor=mysql_query($sql);
$num=mysql_num_rows($cursor);
if(!$num)
{
?>
<script language="javascript">
alert("Usted no a agregado a ningun usuario, por favor registre uno")
location.href='reg_usuario.php';
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
		<h2> <!--class="titulo"-->Consulta de los usuarios:</h2></br></br>
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
						
						$sql="SELECT * FROM usuario WHERE estatus='0' ORDER BY nivel";
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
		<th><lettab>Nombre de usuario:</lettab></th>
		<th><lettab>Contrase&ntilde;a:</lettab></th>
		<th><lettab>Nivel:</lettab></th>
		<th><lettab>Due&ntilde;o:</lettab></th>
		<th><lettab>Acci&oacute;n:</lettab></th>
	</tr>
	<?php
		while($datos=mysql_fetch_array($query))
		{
			$nivel=$datos['nivel'];
			
			if($nivel==1)
			{
				$dueno='Administrador';
			}
			if($nivel==2)
			{
				$d="SELECT * FROM profesor WHERE nom_usuario='".$datos['nom_usuario']."' AND estatus='0'";
				$du=mysql_query($d);
				while($due=mysql_fetch_array($du))
				{
						$dueno="".$due['nom_profesor']." ".$due['ape_profesor']."";
						
						$ced=$due['ci_profesor'];
				}
			}
			if($datos['nivel']==3)
			{
				$d="SELECT * FROM estudiante WHERE nom_usuario='".$datos['nom_usuario']."' AND estatus='0'";
				$du=mysql_query($d);
				while($due=mysql_fetch_array($du))
				{
						$dueno="".$due['nom_estudiante']." ".$due['ape_estudiante']."";
						
						$ced=$due['cedula_estudiantil'];
				}
			}
	?>
	<tr class="tabla_tr_02"> 
		<td class="tabla_td_01"><letcol> <?php echo $datos['nom_usuario'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $datos['contrasena'] ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $nivel ?> </letcol></td>
		<td class="tabla_td_01"><letcol> <?php echo $dueno ?> </letcol></td>
		<td class="tabla_td_01"> <a href="elim_usuario.php?id=<?php echo $datos['id']?>&nom_usuario=<?php echo $datos['nom_usuario']?>
		&nivel=<?php echo $datos['nivel']?>&ced=<?php echo $ced ?>" title="Presione para borrar al usuario">
		<img height="32px" width="32px" src="../img/mal.png" class="inputsub" ></a>&nbsp;
		 
		 <a href="mod_usuario.php?id=<?php echo $datos['id']?>&nom_usuario=<?php echo $datos['nom_usuario']?>
		 &contrasena=<?php echo $datos['contrasena']?>&nivel=<?php echo $datos['nivel']?>&dueno=<?php echo $dueno
		 ?>&ced=<?php echo $ced ?>" title="Presione para modificar al usuario">
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
									if ($anterior>0) {echo '<a href="consult_usuario.php?pag='.$anterior.'">
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
								  echo '<a href="consult_usuario.php?&amp;pag='.$pag.'"><article class="pag_a2">'.$pag.'</article></a>';
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
								if ($siguiente<=$ultimapag) {echo '<a href="consult_usuario.php?pag='.$siguiente.'"><article class="pag_a3">Siguiente</article></a>';}
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
