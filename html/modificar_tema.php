<?php
include ('seguridad.php');
include ("conexion.php");
include ("obtener_fecha.php");

$nivel = $_SESSION['nivel'];

if($nivel == 2){

$c = $_REQUEST['cod_tema'];

$c_p="SELECT ci_profesor FROM profesor WHERE nom_usuario='".$_SESSION['nom_usuario']."'";
	$ci=mysql_query($c_p);
	$ci_p=mysql_fetch_assoc($ci);
	$ci_prof=$ci_p['ci_profesor'];
	
	$sql_pla="select num_pla from planificacion where estatus='0' and ano='$ano' and ci_profesor='$ci_prof'";
	$cursor_pla=mysql_query($sql_pla);
?>
<html>
<head>

<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />

<script type="text/javascript" src="validacionesDOM.js"> </script>
<script type="text/javascript" src="jquery-2.1.1.min.js"> </script>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="ajax_modificar.js"></script>

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
			include('gestor_modif_t.php');
			$contenido=consultaUsuarios();
			echo $contenido; 
		
			$sql = "SELECT * FROM tema WHERE codig_tema='$c' ";
			$ejecutar_sql=mysql_query($sql);
			$num = mysql_num_rows($ejecutar_sql);

			if ($num)
			{

			$dato=mysql_fetch_array($ejecutar_sql);
			
			?>
			<input type="submit" id="modificar" value="">
			<center>
			
			<article class="actualizar" id="form">
			<table>
				<tr>
					<th>
						<form name="formt" action="" method="post" id="formt" enctype="multipart/form-data" onSubmit="return validarcrear_tema_m()">
						
							<input type="hidden" name="opcion" value="modificar" class="caja" id="modificar1" />
							<input type="hidden" name="ver1" value="ver1" class="caja" />
							<input type="hidden" name="cod_tema" value="<?php echo $c;?>" class="caja" id="codigo" />
							
							<label>Momento: </label>
					</th>
					<td>
							<ast>*</ast><select class="selector" name="momento" id="momento" />
								<option><?php
									if($dato['momento']!="")
									{
										echo $dato['momento']; 
									}
									else{}
								?></option> <option>I</option>
								<option>II</option> <option>III</option>
							</select>
					</td>
					<th>
							<lettab>Planificaci&oacute;n: </lettab>
					</th>
					<td>
							<ast>*</ast><select name="planificacion" id="proyecto" class="selector">
									<option> 
										<?php
										echo $n_pla = $dato['planificacion'];
										?>
									</option>
									<?php
										
										while($dato_pla=mysql_fetch_array ($cursor_pla))
										{
											$num=$dato_pla['num_pla'];?>

											if($num != $n_pla)
											{
										
											<option> <?php echo $num ?></option><?php
											}	
									?>
							</select>
					</td>
					<th>
							<lettab>Objetivo: </lettab>
					</th>
					<td>
							<ast>*</ast><input type="text" name="objetivo" value=" <?php echo $dato['objetivo']; ?>" class="selector" id="objetivo" />
					</td>
							<?php
								$fecha=date("d/m/Y");
							?>
							<input type="hidden" name="fecha_modificacion" value="<?php echo $fecha; ?>" required />
						<center>
				</tr>
			</table>
			<table>
				<tr>
					<td>
						<ast>*</ast><input type="text" name="titulo" value=" <?php echo $dato['titulo']; ?>" placeholder="Coloque el Titulo" class="c_titulo" maxlength="256" id="titulo" /><br />
					</td>
				</tr>
			</table>
			<table cellpadding="3">
				<tr>
					<td colspan="2">	
							<ast>*</ast><textarea placeholder="Introduzca el Contenido" name="contenido" id="contenido" class="textarea"  maxlength="1000" value=" <?php echo $dato['contenido']; ?>" ><?php
									if($dato['contenido']!="")
									{
										echo $dato['contenido']; 
									}
									else{}
								?></textarea>
					</td>
					<td colspan="2">	
							<ast>*</ast><textarea placeholder="Introduzca la Descripci&oacute;n del Contenido" name="descripcion" class="textarea"  maxlength="1000" id="descripcion"   ><?php 
									if($dato['descripcion']!="")
									{
										echo $dato['descripcion']; 
									}
									else{}
								?></textarea>
					</td>
				</tr>
						</center>	
				<tr>
					<th>
						<lettab>Ejemplo 1:</lettab>
					</th>
					<td>
							<input type="file" name="ejemplo1" maxlength="40" id="ejemplo1"  />
					</td>
					<th>
						<lettab>Ejemplo 2:</lettab>
					</th>
					<td>
							<input type="file" name="ejemplo2" maxlength="40" id="ejemplo2"  />
					</td>
				</tr>
				<tr>
					<th>
						<lettab>Ejemplo 3:</lettab>
					</th>
					<td>
							<input type="file" name="ejemplo3" maxlength="40" id="ejemplo3"  />
					</td>
					<th>
						<lettab>Ejemplo 4:</lettab>
					</th>
					<td>
							<input type="file" name="ejemplo4" maxlength="40" id="ejemplo4"  />
					</td>
				</tr>
				<tr>
					<th>
							<lettab>Video 1:</lettab>
					</th>
					<td>
							<input  type="file" name="video1" maxlength="40" id="video1" />
					</td>
					<th>
							<lettab>Video 2:</lettab>
					</th>
					<td>
							<input  type="file" name="video2" maxlength="40" id="video2" /> <br />
					</td>
				</tr>
				<tr>
					<th colspan="4">
						<center>
						<input type="submit" value="" title="Presione para modificar el tema" />
						<input type="reset" value="" title="Presione para refrescar los datos" />
						</center>
					</th>
				</tr>
					</form>
				</tr>
			</table>
		<table>
			<tr>
				<td colspan="4"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
			</tr>
		</table>
			</center>
			<?php
				}
				else{
			?>	
				<script type="text/javascript">
					alert("No hay contenido para editar");
					
				</script>
			<?php	
				}
			
			?>
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
else{
?>
	<script type="text/javascript">
		alert('Solo el profesor puede realizar esta acci\u00f3n');
		window.location.href="accion_teoria.php";
	</script>
<?php
}
?>
