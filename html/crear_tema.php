<?php
include ('seguridad.php');
include ('conexion.php');
include ('obtener_fecha.php');

$nivel = $_SESSION['nivel'];

if($nivel == 2){

$c="SELECT ci_profesor FROM profesor WHERE nom_usuario='".$_SESSION['nom_usuario']."'";
	$ci=mysql_query($c);
	$ci_p=mysql_fetch_assoc($ci);
	$ci_prof=$ci_p['ci_profesor'];
	
	$sql="select num_pla from planificacion where estatus='0' and ano='$ano' and ci_profesor='$ci_prof'";
	$cursor=mysql_query($sql);
	$exis=mysql_num_rows($cursor);
?>

<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />

<script type="text/javascript" src="validacionesDOM.js"></script>
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
			<h2>Crear Tema:</h2>
<center>
			<form name="formt" action="gestor_guardar.php" method="post" id="formt" enctype="multipart/form-data" onSubmit="return validarcrear_tema()">
			<table>
				<tr>
					
					<th colspan="2"><lettab>Momento:</lettab></th>
					<td>
						<ast>*</ast><select class="selector" name="momento" id="momento">
								<option></option> <option>I</option>
								<option>II</option> <option>III</option>
						</select>
					</td>
					<th colspan="2"><lettab>Planificaci&oacute;n:</lettab></th>
					<td>
						<ast>*</ast><select name="planificacion" class="selector" id="proyecto" onChange="validarMate1()">
									<option> </option>
									<?php
										
										while($dato=mysql_fetch_array ($cursor))
										{
											$num=$dato['num_pla'];?>
											<option> <?php echo $num ?></option><?php
										}
										
									?>
						</select>
					</td>
					<th colspan="2"><lettab>Objetivo: </lettab></th>
					<td>
						<ast>*</ast><input type="number" name="objetivo" class="selector" id="objetivo" max="10" min="1" />
					</td>
				</tr>
					<?php
								$fecha=date("d/m/Y");
					?>
						<input type="hidden" name="fecha_creacion" value="<?php echo $fecha; ?>" />
			</table>
			<table>
				<tr>
					<!--TEMA-->
					<td colspan="6">
						<ast>*</ast><input type="text" name="titulo" placeholder="Coloque el Titulo" class="c_titulo" maxlength="110" id="titulo" />
					</td>
				</tr>
			</table>
			<table>
				<tr>
					 
					<!--CONTENIDO-->
					<td colspan="3"><center>
						<ast>*</ast><textarea placeholder="Desarrollo del Tema" name="contenido" class="textarea_c"  maxlength="510" id="contenido"></textarea></center>
					</td>
					<!--DESCRIPCION-->
					<td colspan="3">
						<ast>*</ast><textarea placeholder="Descripcion del Contenido" name="descripcion" class="textarea_c"  maxlength="260" id="descripcion" ></textarea><br />
					</td>
				</tr>
			</table>
			<table>
				<!--<tr>
					<th ><lettab>Ejemplos:</lettab></th>
				</tr>-->
				<tr>
					<th><lettab><ast>*</ast>Ejemplo 1:<lettab></th>
					<td colspan="2">
						<input type="file" name="ejemplo1" maxlength="40" class="file" id="ejemplo1" />
					</td>
					<th><lettab><ast>*</ast>Ejemplo 2:</lettab></th>
					<td colspan="2">
						<input type="file" name="ejemplo2" maxlength="40" class="file" id="ejemplo2" />
					</td>
				</tr>
				<tr>
					<th><lettab><ast>*</ast>Ejemplo 3:</lettab></th>
					<td colspan="2">
						<input type="file" name="ejemplo3" maxlength="40" class="file" id="ejemplo3" />
					</td>
					<th><lettab><ast>*</ast>Ejemplo 4:</lettab></th>
					<td colspan="2">
						<input type="file" name="ejemplo4" maxlength="40" class="file" id="ejemplo4" />
					</td>
				</tr>
				<!--<tr>
					<td><label class="label" >Videos:</label></td>
				</tr>-->
				<tr>
					<th><lettab>Video 1: </lettab></th>
					<td colspan="2"><input  type="file" name="video1" maxlength="40" class="file" id="video1" /></td>
					<th><lettab>Video 2: <lettab></th>
					<td colspan="2"><input  type="file" name="video2" maxlength="40" class="file" id="video2" /></td>
				</tr>
			</table>
			<article class="botones">
		<table>
		<tr>
			<td>
			<input type="submit" value="" title="Presione para registrar al nuevo estudiante"/>
			<input type="reset" value="" title="Click para refrescar los campos"/>
			</td>
		</tr>
		</table>
		</article>

		<table>
			<tr>
				<td colspan="4"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
			</tr>
		</table>
</form>
</center>
			<!--<div id="validacion">
				<label class="label_v" >Momento: </label><label id="momentoPrompt"></label> <br /> <br /> <br />
				
				<label class="label_v" >Proyecto: </label><label id="proyectoPrompt"></label> <br /> <br /> <br />
				
				<label class="label_v" >Objetivo: </label><label id="objetivoPrompt"></label> <br /> <br /> <br />
				
				<label class="label_v" >Titulo: </label><label id="temaPrompt"></label> <br /> <br /> <br />
				
				<label class="label_v" >Contenido: </label><label id="contenidoPrompt"></label> <br /> <br /> <br />
				
				<label class="label_v" >Descripcion: </label><label id="descripcionPrompt"></label> <br /> <br />
				
			</div>-->
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
	alert('Usted no es un Profesor');
	window.location.href="principal.php";
</script>
<?php
}
?>

