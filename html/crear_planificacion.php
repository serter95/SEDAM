<?php
include ('seguridad.php');
include ('conexion.php');
include('enlasadorm.php');
include ('obtener_fecha.php');

	$c="SELECT ci_profesor FROM profesor WHERE nom_usuario='".$_SESSION['nom_usuario']."'";
	$ci=mysql_query($c);
	$ci_p=mysql_fetch_assoc($ci);
	$ci_prof=$ci_p['ci_profesor'];
	
	$sql="select num_proyecto from proyecto where estatus='0' and ano='$ano' and ci_profesor='$ci_prof'";
	$cursor=mysql_query($sql);
	$exis=mysql_num_rows($cursor);
	
	if(!$exis)
	{
	?>
		<script language="javascript">
			alert("No Existe ningun proyecto, por favor cree uno");
			window.location.href="crear_proyecto.php";
		</script>
	<?php
	}
	else
	{
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
		<h2>Crear Planificación:</h2></br>		
			<center>	
					<table cellspacing="7">
						<tr>
							<th>
								<lettab>Proyecto:</lettab>
							</th>
							<th>
								<lettab>Número de planificaci&oacute;n:</lettab>
							</th>
							<th>
								<lettab>Fecha Inicial: </lettab>
							</th>
							<th>
								<lettab>Fecha Final: </lettab>
							</th>
						</tr>
						<tr>
						<form action="gestor_planificacion.php" method="post" id="formt" enctype="multipart/form-data" name="formt" onSubmit="return validar_planif()">
							<td>
								<!-- onChange="validarMate1()" -->
							<ast>*</ast><select name="proyecto" id="proyecto" class="selector" >
									<option> </option>
									<?php
										
										while($dato=mysql_fetch_array ($cursor))
										{
											$num=$dato['num_proyecto'];?>
											<option> <?php echo $num ?></option><?php
										}
										
									?>
							</select>
							</td>
							
							<td>
							<ast>*</ast><input type="number" name="num_planificacion" id="num_planificacion" class="selector" min="1" max="10"
								 placeholder="1" title="coloque el n&uacute;mero de la planificaci&oacute;n"/>
							</td>
							
							<td>
							<ast>*</ast><input type="text" name="fecha_i" placeholder="aaaa/mm/dd" class="fecha" id="datepicker_i" />
							</td>
							
							<td>
								<!-- onChange="validarobjetivo()" -->
							<ast>*</ast><input type="text" name="fecha_f" placeholder="aaaa/mm/dd" class="fecha" id="datepicker_f" />
							</td>
						</tr>
						<tr>
							<th colspan="2"><lettab>Actividad: </lettab></th>
						
							<th colspan="2"><lettab>Descripción: </lettab></th>
						</tr>
						<tr>
							<td colspan="2">
								<ast>*</ast><input type="text" name="actividad" id="actividad" maxlength="55" placeholder="Actividades de la Planificacion"/>
							</td>
						
							<td colspan="2">
								<ast>*</ast><textarea name="descripcion" id="descripcion" class="textarea_e" maxlength="260" placeholder="Descripcion de la Actividad" ></textarea>
							</td>
						</tr>
					</table>
					
					<article class="botones">
					<table>
						<tr>
							<td>
							<input type="submit" value="" title="Presione para registrar la planificaci&oacute;n"/>
							<input type="reset" value="" title="Click para refrescar los campos"/>
							</td>
						</tr>
						</form>
					</table>
						</article>
						
						</br>
						<table>
							<tr>
								<td colspan="4"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
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
?>
