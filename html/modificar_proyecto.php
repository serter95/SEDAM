<?php
include ('seguridad.php');
include ('conexion.php');
$id_proyecto = $_REQUEST['id'];
$usuario = $_SESSION['nom_usuario'];
$nivel = $_SESSION['nivel'];

if($nivel == 2){
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />

<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="funciosajaxm.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="validacionesDOM.js"></script>
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
		<h2>Modificar Proyecto:</h2></br></br>
			<center>
						<?php
							
							$sql_c = "select * from profesor where nom_usuario = '$usuario' ";
							$cursor_c = mysql_query($sql_c);
							$datos_c = mysql_fetch_array($cursor_c);

							$cp = $datos_c['ci_profesor'];

							$sql = "select * from proyecto where id_proyecto = '$id_proyecto' and ci_profesor='$cp' ";
							$cursor = mysql_query($sql);
							$datos = mysql_fetch_array($cursor);

							$num_proyecto = $datos['num_proyecto'];
							$contenido = $datos['contenido'];
							$descripcion = $datos['descripcion'];
						?>
						<form name="formt" action="gestor_modif_pro.php" method="post" id="formt" enctype="multipart/form-data" onSubmit="return val_proyecto()">
							<?php
								$fecha=date("d/m/Y");
							?>
							<input type="hidden" name="fecha_creacion" value="<?php echo $fecha; ?>" />
							<input type="hidden" name="id" value="<?php echo $id_proyecto; ?>" />
					<table>
						<tr>
							<th><lettab>Proyecto Número: </lettab></th>
							<th><lettab>Contenido del Proyecto: </lettab></th>
							<th><lettab>Descripción del Proyecto:</lettab></th>
						</tr>
						<tr>
							<td><input type="text" id="num_proyecto" value="<?php echo $num_proyecto ?>" placeholder="1" class="selector" disabled /></td>
							<td><ast>*</ast><input type="text" name="proyecto" id="proyecto" value=" <?php echo $contenido ?>" placeholder="Nombre de la Proyecto" class="actividad" /></td>
							<td><ast>*</ast><textarea name="descripcion" id="descripcion" class="textarea_e" placeholder="Descripcion de la Proyecto"><?php echo $descripcion ?></textarea></td>
						</tr>
					</table>
					</br>
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
		window.location.href="accion_proyecto.php";
	</script>
<?php
}
?>
