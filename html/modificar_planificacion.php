<?php
include ('seguridad.php');
include ('conexion.php');
include('enlasadorm.php');
include ('obtener_fecha.php');

$nivel = $_SESSION['nivel'];

if($nivel == 2){

	$id = $_REQUEST['id'];
	$c="SELECT ci_profesor FROM profesor WHERE nom_usuario='".$_SESSION['nom_usuario']."'";
	$ci=mysql_query($c);
	$ci_p=mysql_fetch_assoc($ci);
	$ci_prof=$ci_p['ci_profesor'];
	
	$sql="select num_proyecto from proyecto where estatus='0' and ano='$ano' and ci_profesor='$ci_prof'";
	$cursor=mysql_query($sql);
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />

<script type="text/javascript" src="validarpla.js"> </script>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="funciosajaxm.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="fecha.js"></script>
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
				$sql_pla="select * from planificacion where id_pla = '$id' ";
				$cursor_pla=mysql_query($sql_pla);

				$dato_p = mysql_fetch_array($cursor_pla);

				$sql_act="select * from actividad where id_pla = '$id' ";
				$cursor_act=mysql_query($sql_act);

				$dato_act = mysql_fetch_array($cursor_act);
			?>
			<h2>Modificar Planificación:</h2></br></br>
			<center>
			
				<form name="formt" action="gestor_modif_pla.php" method="post" id="formt" enctype="multipart/form-data" onSubmit="return validar_planif_m()">
				
					<table>
						<tr>
							<th>
								<lettab>Proyecto:</lettab>
							</th>
							<th>
								<lettab>Número de planificación:</lettab>
							</th>
							<th>
								<lettab>Fecha Inicial: </lettab>
							</th>
							<th>
								<lettab>Fecha Final: </lettab>
							</th>
						<tr>
						</tr>
							<td>
							<ast>*</ast><select id="proyecto" name="proyecto" class="selector">
									<option>
										<?php
											echo $id_p = $dato_p['id_proyecto'];
										?>
									</option>
									<?php
										
										while($dato=mysql_fetch_array ($cursor))
										{
											$num=$dato['num_proyecto'];
											if($id_p != $num)
											{
											?>
												<option> <?php echo $num ?></option>
											<?php
											}
										}
										
									?>
							</select>
							</td>
							
							<td>
								<input type="hidden" name="id" value="<?php echo $id ?>" class="selector"  placeholder="1" />
								<ast>*</ast><input type="number" id="num_planificacion" name="num_planificacion" value="<?php echo $dato_p['num_pla']; ?>" class="selector" min="1"  placeholder="1" />
							</td>
							
							<td>
								<ast>*</ast><input type="text" name="fecha_i" class="fecha" value="<?php echo $dato_p['fecha_i']; ?>" id="datepicker_i" placeholder="dd/mm/aaaa"  />
							</td>
							
							<td>
								<ast>*</ast><input type="text" name="fecha_f" class="fecha" value="<?php echo $dato_p['fecha_f']; ?>" id="datepicker_f" placeholder="dd/mm/aaaa" onChange="validarobjetivo()"  />
							</td>
						</tr>
						<tr>
							<th colspan="2"><lettab>Actividad: </lettab></th>
							<th colspan="2"><lettab>Descripción: </lettab></th>
						</tr>
						<tr>
							<td colspan="2"><ast>*</ast><input type="text" id="actividad" name="actividad" value="<?php echo $dato_act['nom_act']; ?>" placeholder="Act. de la Planificaci&oacute;n"/></td>				
							<td colspan="2"><ast>*</ast><textarea name="descripcion" id="descripcion" class="textarea_e" placeholder="Descripcion de la Actividad" ><?php echo $dato_act['descripcion']; ?></textarea></td>
						</tr>
					</table>
					</br>
					<article class="botones">
					<table> 	
					<tr>
						<td>
						<input type="submit" value="" title="hacer click para modificar el proyecto"/>
						<input type="reset" value="" title="Hacer click para refrescar los campos"/>
						</td>
					</tr>
					</table>
					</article>
					</br>
						<table>
							<tr>
								<td colspan="4"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
							</tr>
						</table>
					</form>
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
	<script type="text/javascript">
		alert('Solo el profesor puede realizar esta accion');
		window.location.href="accion_planificacion.php";
	</script>
<?php
}
?>
