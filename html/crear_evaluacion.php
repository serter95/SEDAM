<?php
include ('conexion.php');
include('seguridad.php');
include('obtener_fecha.php');
//error_reporting(E_ALL^E_NOTICE);
if($_POST['cookie']=='cookie')
{
	$usuario=$_SESSION['nom_usuario'];
	$sql_cp = "select ci_profesor from profesor where nom_usuario='$usuario'";
	$cursor_cp = mysql_query($sql_cp);
	$dato_cp = mysql_fetch_array($cursor_cp);
	$ci_cp = $dato_cp['ci_profesor'];
											
	$planificacion_c = $_POST['planificacion'];
	$tema_c = $_POST['tema'];

	$planificacion_e=explode(" - ", $planificacion_c);
	$tema_e=explode(" - ", $tema_c);
	
	$_SESSION['tema'] = $tema_e[1];
	
	$i="SELECT id_pla FROM planificacion WHERE num_pla='$planificacion_e[1]' and ano='$ano' and ci_profesor='$ci_cp' and estatus='0'";
	$id=mysql_query($i);
	$id_p=mysql_fetch_assoc($id);
	$id_planif=$id_p['id_pla'];
	
	$_SESSION['planificacion'] = $id_planif;
}
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />

<script type="text/javascript" src="ajax_evaluacion_c.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>
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

				<h2>Crear Evaluaciones de <?php echo $tema_e[0]; ?></h2>
				<form name="formt" action="gestor_crear_e.php" method="post" id="formt" onSubmit="return validc_eval()">
				<!--Inicio capa form-->
				<div class="formulario">

				<table class="formulario_t" border="1" >
					<tr>
						<td colspan="4">
						
							<?php
									$fecha=date("d/m/Y");
							?>
							<input type="hidden" name="fecha_creacion" value="<?php echo $fecha; ?>" />
							<ast>*</ast><textarea placeholder="Ingrese el Problema" id="problema" class="textarea_e"
							 name="problema" ></textarea>
						</td>
					</tr>
					<tr>
						<th>
							<lettab> Correcta: </lettab>
						</th>
						<th colspan="3">
							<lettab>Distractores: </lettab><br>
						</th>
					</tr>
					<tr>
						<td>
							<input type="hidden" name="tema" maxlength="100" size="6" placeholder="Resp" value="<?php echo $_SESSION['tema']; ?>" class="caja_e" />
							<input type="hidden" name="planificacion" maxlength="100" value="<?php echo $_SESSION['planificacion']; ?>" size="6" placeholder="Resp" class="caja_e" />

							<input type="hidden" name="activador" maxlength="3" value="tmp" size="6" placeholder="Resp" class="caja_e" />

							<ast>*</ast><input type="text" name="respuesta" id="respuesta" maxlength="100" size="6" placeholder="Resp" class="caja_e" />
						</td>
						<td>
							<ast>*</ast><input type="text" name="valor2" id="valor2" maxlength="100" size="6" placeholder="Dist 2" class="caja_e" />
						</td>
						
						<td>
							<ast>*</ast><input type="text" name="valor3" id="valor3" maxlength="100" size="6" placeholder="Dist 3" class="caja_e" />
						</td>
						
						<td>
							<ast>*</ast><input type="text" name="valor4" id="valor4" maxlength="100" size="6" placeholder="Dist 4" class="caja_e" />
						</td>
					</tr>
					<tr>
						<td colspan="4">
							<input type="submit" value="" title="Presione para registrar al nuevo estudiante"/>
							<input type="reset" value="" title="Click para refrescar los campos"/>
							</form>
						</td>
					</tr>
					<tr>
						<td colspan="4"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
					</tr>
					
				</table>

				<?php
					include ('list_pregunta.php');
					$lista = lista();
					echo $lista;
				?>
				</div>
			
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
