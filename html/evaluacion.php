<?php
include ("conexion.php");
include ("seguridad.php");
include ("obtener_fecha.php");

if(!empty($_POST['tema']))
{
	$_SESSION['tema'] = $_POST['tema'];
	$codig_tema = $_SESSION['tema'];
}

$codig_tema = $_SESSION['tema'];

$usuario = $_SESSION['nom_usuario'];

$nivel=$_SESSION['nivel'];

if($nivel==3)
{

		$sql_cp="SELECT ci_profesor FROM estudiante where nom_usuario='$usuario' and estatus='0' and ano='$ano'";
		$ejecutar_sql_cp=mysql_query($sql_cp);
		$dato_cp=mysql_fetch_array($ejecutar_sql_cp);		
		$ci_profesor=$dato_cp['ci_profesor'];

		$sql_ev="select * from evaluacion where activador='0' and estatus='0' and ci_profesor ='$ci_profesor' and codig_tema ='$codig_tema'";
		$query_ev=mysql_query($sql_ev);
		$rows_ev=mysql_num_rows($query_ev);

if($rows_ev){
//include('evaluacion_est.php');
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />

<script type="text/javascript" src="evaluacion.js"></script>
<script type="text/javascript" src="validacionesDOM.js"></script>

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
		<article class="contenido">
		
		<?php
			if(isset($_REQUEST['registrar_e']))
			{
				$usuario=$_SESSION["nom_usuario"];
				$sql_e="select * from estudiante where nom_usuario='$usuario'";
				$query_e = mysql_query($sql_e);

				$dato_e = mysql_fetch_array($query_e);
				
				$ci_e = $dato_e['cedula_estudiantil'];

				$enunciado = $_REQUEST['enunciado'];
				$respuesta = trim($_REQUEST['respuesta']);
				$res_c = trim($_REQUEST['respuesta_c']);
				$id_e = $_REQUEST['id_eva'];
				$cod_p = $_REQUEST['id_pla'];
			
				if ($respuesta != $res_c)
				{
					$res_c;
					$acierto ="incorrecto";
				}
				else
				{
					$res_c;
					$acierto ="correcto";
				}

				$sql = "select * from evaluacion_tmp where id_eva='$id_e'";
				$query = mysql_query($sql);
				$rows=mysql_num_rows($query);
			
				if($rows)
				{
					$modificar="UPDATE evaluacion_tmp SET respuesta='$respuesta', acierto='$acierto' WHERE  id_eva='$id_e' and cedula_estudiantil='$ci_e' ";
					mysql_query($modificar);
				}
				else
				{
					$rel="INSERT INTO evaluacion_tmp (pregunta, respuesta, acierto, codig_tema, id_pla, cedula_estudiantil, id_eva) VALUES ('$enunciado', '$respuesta', '$acierto', '$codig_tema', '$cod_p', '$ci_e', '$id_e')";
					mysql_query($rel);
				}
			
				if($_REQUEST['guardar'] == 'fin')
				{

					$select_fin = "select * from evaluacion_tmp where codig_tema='$codig_tema' and cedula_estudiantil='$ci_e'";
					$ejecutar_select = mysql_query($select_fin);
					$rows_e=mysql_num_rows($ejecutar_select);
					while($select=mysql_fetch_array($ejecutar_select))
					{
						$campo1= $select['pregunta'];
						$campo2= $select['respuesta'];
						$campo3= $select['acierto'];
						$t_campo.=$campo1."|".$campo2."|".$campo3."|";
					}
				if($rows_e)
				{
					$eva="INSERT INTO rel_est_eva (desarrollo, cant, cedula_estudiantil, codig_tema, id_pla) VALUES ('$t_campo', '$rows_e','$ci_e', '$codig_tema', '$cod_p')";
					mysql_query($eva);

					$eliminar="delete from evaluacion_tmp where codig_tema='$codig_tema' and cedula_estudiantil='$ci_e' ";
					mysql_query($eliminar);
					?>
						<script type="text/javascript">
							alert ("Fin de la Evaluacion!");
							window.location.href="resultado_evaluacion.php";
						</script>
					<?php
				}
				}
			}
				//Paginador parte 1

					if(empty($_GET['pag']))
						{
							$pag=1;
						}
						else
						{
							$pag = $_GET['pag'];
						}
						
						$tema_var = $_POST['tema'];
						//and codig_tema = '$tema_var'
						$sql="select * from evaluacion where activador = '0' and estatus='0' and ci_profesor = '$ci_profesor' and codig_tema = '$codig_tema' ";
						$query=mysql_query($sql);
						$rows=mysql_num_rows($query);
					
						$can_preguntas= 1;
						$ultimapag = ceil($rows/$can_preguntas);
						
						$pag = (int)$pag;
						
						if($pag<0)
						{
							$pag = 1;
						}
						elseif($pag>$ultimapag)
						{
							$pag = $ultimapag;
						}
				//Fin Paginador parte 1
				//Paginador parte 2
					
					$sql.= " LIMIT ".(($pag-1)*$can_preguntas).",".$can_preguntas."";
					$query = mysql_query($sql);
					//ORDER BY RAND() LIMIT 3
					while($datos=mysql_fetch_array($query))
					{
						$cod_tema = $datos['codig_tema'];
						$codig_evaluacion=$datos['codig_evaluacion'];
						$pregunta=$datos['pregunta'];
						$r1[0] = $datos['respuesta2'];
						$r1[1] = $datos['respuesta3'];
						$r1[2] = $datos['respuesta4'];
						$r1[3] = $datos['respuesta_c'];
						
						$respuesta_c = $datos['respuesta_c'];
						$id_pla = $datos['id_pla'];
						$id_eva = $datos['id_eva'];
						
						$or[0] = rand(0,3);
						
						$or[1] = rand(0,3);
						do{
						if ($or[1]==$or[0])
							$or[1] = rand(0,3);
						}while($or[1]==$or[0]);
						
						$or[2] = rand(0,3);
						do{
						if ($or[2]==$or[0] || $or[2]==$or[1])
							$or[2] = rand(0,3);
						}while($or[2]==$or[0] || $or[2]==$or[1]);
						
						$or[3] = rand(0,3);
						do{
						if ($or[3]==$or[0] || $or[3]==$or[1] || $or[3]==$or[2])
							$or[3] = rand(0,3);
						}while($or[3]==$or[0] || $or[3]==$or[1] || $or[3]==$or[2]);		
						
						//echo $or[0].$or[1].$or[2].$or[3];
						
						for($i=0; $i<4; $i++){
								$r2[$i]=$r1[$or[$i]];
							
							}
							$siguiente = $pag+1;
							$anterior = $pag-1;
					?>
						<img src="../img/libreta.png" class="libreta" />
						<img src="../img/nino_evaluacion.png" class="nino">
						<form method="get" id="evaluacion">
								<table class="evaluacion_tb" border="1">
									<tr>
									<td colspan="2" align="right" height="52">
						<?php
									if($pag != $ultimapag and $pag<$ultimapag)
								{
									?>
										<input type="hidden" name="pag" value="<?php echo $siguiente?>">
										<input type="submit" name="registrar_e" class="action_3" value="" />
										
								
									<!--<input type="submit" class="action" value="" />-->
									<?php
								}
									?>
										
									</td>
									</tr>
									<tr>
										<td colspan="2">
										<textarea class="enunciado" disabled > <?php echo $pregunta; ?>  </textarea>
										<input type="hidden" name="enunciado" value="<?php echo $pregunta; ?> " />
										<input type="hidden" name="respuesta_c" value="<?php echo $respuesta_c; ?>" />
										<input type="hidden" name="id_eva" value="<?php echo $id_eva; ?>" />
										<input type="hidden" name="id_pla" value="<?php echo $id_pla; ?>" />
										<input type="hidden" name="cod_tema" value="<?php echo $cod_tema; ?>" />
										</td>
									</tr>		
									<tr>
									<td height="60px" width="100px">
										
										<input type="radio" name="respuesta" value="<?php echo $r2[0];   ?>"/><?php echo $r2[0];  ?> 
									</td>
									<td>
										<input type="radio" name="respuesta" value="<?php echo $r2[1];  ?> " /><?php echo $r2[1];  ?>
									</td>
									</tr>
									<tr>
									<td height="60px" width="100px">
										<input type="radio" name="respuesta" value="<?php echo $r2[2];  ?>" /><?php echo $r2[2];  ?>
									</td>
									<td>
										<input type="radio" name="respuesta" value="<?php echo $r2[3];  ?>" /><?php echo $r2[3];  ?>
									</td>
									</tr>	
								
							<?php
								}
								
							
							
									if($pag == 1)
								{

								}
									?>
									<tr>
										<td align="left" height="50px">
									<?php
								if($pag != 1 and $pag>1)
								{
									?>
										
										<a href="?pag=<?php echo $anterior?>">
											<img src="../img/flecha_a.png" width="52px" height="52px">
										</a>
										
								
									<!--<input type="submit" class="action" value="" />-->
									<?php
								}
									?>
										</td>
										<td align="right">
									<?php
								if($pag <$ultimapag)
								{
									?>
										
										
											<!--<input type="hidden" name="pag" value="<?php echo $siguiente; ?>">-->
											
										<a href="?pag=<?php echo $siguiente?>">
											<img src="../img/flecha_d.png" width="52px" height="52px">
										</a>
										
									<?php
								}
								else
								{
									?>
										<input type="hidden" name="guardar" value="fin">
										<input type="submit" name="registrar_e" class="action_4" value="" />
										</form>
										</td>
									</tr>
									<?php
								}
							//Fin Paginador parte 2
							?>
					</table>
					<img src="../img/nina_evaluacion.png" class="nina">
		</article>
			
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

	else
	{
	?>
	<script type="text/javascript">
		alert ('No hay evaluaciones disponebles!');
		location.href="principal.php";
	</script>
<?php
	}
}


	else
	{
?>
	<script type="text/javascript">
		alert ('Disculpe, usted no es un estudiante!');
		location.href="principal.php";
	</script>	
<?php
	}
?>
