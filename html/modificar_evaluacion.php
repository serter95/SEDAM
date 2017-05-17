<?php
include ('conexion.php');
include('seguridad.php');
error_reporting(E_ALL^E_NOTICE);

$id=$_REQUEST['id'];

$nivel = $_SESSION['nivel'];

if($nivel == 2){
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
				Usuario:"<?php echo $_SESSION["nom_d"]?>"&nbsp; <a href="salir.php" title="Cerrar sesion">Salir</a>
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

				$sql_eva="select * from evaluacion where id_eva = '$id' ";
				$cursor_eva=mysql_query($sql_eva);

				$dato_eva= mysql_fetch_array($cursor_eva);
				?>

				<h2>Modificar Evaluaci&oacute;n</h2>
				<form name="formt" action="gestor_modif_e.php" method="post" id="formt" onSubmit="return mod_eval()">
				
				<center>
				
				<table class="formulario_t_m" border="1" align="center">
					<tr>
						<th colspan="4"><lettab> Enunciado </lettab></th>
					</tr>
					<tr>
						<td colspan="4">
							<input type="hidden" name="id" value="<?php echo $id; ?>" required />
							<ast>*</ast><textarea placeholder="Ingrese el Problema" class="textarea_e" name="problema" id="problema"> <?php echo $dato_eva['pregunta']; ?></textarea>
						</td>
					</tr>
					<tr>
						<th colspan="2">
							<lettab> Planificaci&oacute;n: </lettab>
						</th>

						<th colspan="2">
							<lettab>Tema: </lettab><br>
						</th>
					</tr>
					<tr>
						<td  colspan="2">
							<ast>*</ast><select name="planificacion" id="planificacion" class="select" onChange="validarMate1()">
									<option> <?php echo $dato_eva['id_pla']; ?></option>
									<?php
										$sql_p="select planificacion.num_pla, actividad.nom_act from planificacion INNER JOIN actividad on planificacion.id_pla=actividad.id_pla";
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

						<td colspan="2">
							<ast>*</ast><select name="tema" id="tema" class="select" onChange="validarMate1()">
									<option><?php echo $dato_eva['codig_tema']; ?></option>
									<?php
										$sql="select * from tema";
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
					<tr>
						<th>
							<lettab> Correcta: </lettab>
						</th>

						<th colspan="3">
							<lettab>Distractores: </lettab><br>
						</th>
					</tr>
					<tr>
						<td >

							<input type="hidden" name="activador" maxlength="3" value="tmp" size="6" placeholder="Resp" class="caja_e" />

							<ast>*</ast><input type="text" name="respuesta" id="respuesta" maxlength="100" size="6" value="<?php echo $dato_eva['respuesta_c']; ?>" placeholder="Resp" class="caja_e" />
						</td>
						<td>
							<ast>*</ast><input type="text" name="valor2" id="valor2" maxlength="100" size="6"  value="<?php echo $dato_eva['respuesta2']; ?>" placeholder="Dist 2" class="caja_e" />
						</td>
						
						<td>
							<ast>*</ast><input type="text" name="valor3" id="valor3" maxlength="100" size="6"  value="<?php echo $dato_eva['respuesta3']; ?>" placeholder="Dist 3" class="caja_e" />
						</td>
						
						<td>
							<ast>*</ast><input type="text" name="valor4" id="valor4" maxlength="100" size="6"  value="<?php echo $dato_eva['respuesta4']; ?>" placeholder="Dist 4" class="caja_e" />
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
		window.location.href="accion_evaluacion.php";
	</script>
<?php
}
?>
