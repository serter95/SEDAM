<?php
include ('seguridad.php');
include ('conexion.php');
include('enlasadorm.php');
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />

<script language="javascript" src="validacionesDOM.js"></script>
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
		<h2>Crear Proyecto:</h2></br>
			<center>
			<table>
					<center>
					<table cellspacing="7">
												
						<form method="post" action="gestor_proyecto.php" name="formt" id="formt" enctype="multipart/form-data" onSubmit="return val_proyecto()">
							<?php
								$fecha=date("d/m/Y");
							?>
							<input type="hidden" name="fecha_creacion" value="<?php echo $fecha; ?>" />
							
							<input type="hidden" name="nom_usuario" value="<?php echo $_SESSION["nom_usuario"]; ?>" />
						<tr>
							<th><lettab>Proyecto Número: </lettab></th>
							<th><lettab>Contenido del Proyecto: </lettab></th>
							<th><lettab>Descripción del Proyecto:</lettab></th>
						</tr>
						<tr>
							<td>
								<ast>*</ast><input type="number" name="num_proyecto" id="num_proyecto" placeholder="1" class="selector" min="1" max="5" /></td>							
							<td>
								<ast>*</ast><input type="text" name="proyecto" id="proyecto" maxlength="55"  placeholder="Nombre de la Proyecto" class="actividad" /></td>
							<td>
								<ast>*</ast><textarea name="descripcion" id="descripcion" maxlength="260" class="textarea_e" placeholder="Descripcion de la Proyecto"></textarea></td>
						</tr>
					</table>
					</center>
					<center>
					<article class="botones">
					<table>
						<tr>
							<td>
							<input type="submit" value="" title="Presione para registrar el proyecto"/>
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
				</td>
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
