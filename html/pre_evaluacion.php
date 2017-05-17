<?php
include ('conexion.php');
include('seguridad.php');
include ('obtener_fecha.php');
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
		<h2>Crear Evaluaciones:</h2><br><br>
<center>

<form name="formt" action="crear_evaluacion.php" method="post" id="formt" onSubmit="return valid_eval()">
				<!--Inicio capa form-->
				
				<table>
					<tr>
						<th width="50px"></th>
						<th><lettab>Planificaci&oacute;n</lettab></th>
						<th align="left"><lettab>C&oacute;digo del Tema</lettab></th>
					</tr>
					<tr>
						<td>
						</td>
						
						<td>
							<input type="hidden" name="cookie" value="cookie" />
							<ast>*</ast><select name="planificacion" id="planificacion" class="select" onChange="validarMate1()">
									<option></option>
									<?php
										$usuario=$_SESSION['nom_usuario'];
										$sql_cp = "select ci_profesor from profesor where nom_usuario='$usuario'";
										$cursor_cp = mysql_query($sql_cp);

										$dato_cp = mysql_fetch_array($cursor_cp);
										$ci_cp = $dato_cp['ci_profesor'];

										$sql_p="select planificacion.num_pla, actividad.nom_act from planificacion INNER JOIN actividad on planificacion.id_pla=actividad.id_pla and ci_profesor = '$ci_cp' ";
										$cursor_p=mysql_query($sql_p);
										while($dato_p=mysql_fetch_array ($cursor_p)){
										
											$codigo_p=$dato_p['num_pla'];
											$nom_p=$dato_p['nom_act'];
									?>
											<option > <?php echo $nom_p." - ".$codigo_p; ?></option>
									<?php
										}
									?>

							</select>
						</td>
						
						<td align="left">
							<ast>*</ast><select name="tema" id="tema" class="select" onChange="validarMate1()">
									<option></option>
									<?php
										$sql="select * from tema where ci_profesor = '$ci_cp' and estatus='0' and ano='$ano'";
										$cursor=mysql_query($sql);
										while($dato=mysql_fetch_array ($cursor)){
										
											$codigo=$dato['codig_tema'];
											$nom=$dato['titulo'];?>
											<option > <?php echo $nom." - ".$codigo; ?></option><?php
										}
										
									?>
							</select>
						</td>
						
					</tr>
					</table>
					<table>
					<tr>
						<td colspan="2">
							<input type="submit" value="" title="Presione para registrar al nuevo estudiante"/>
							<input type="reset" value="" title="Click para refrescar los campos"/>
							
						</td>
					</tr>
				</table>
					</br>
						<table>
							<tr>
								<td colspan="4"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
							</tr>
						</table>
			</center>
			</form>
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
