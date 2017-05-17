<?php
include ("seguridad.php");
include ("conexion.php");
			
?>
<html>
<head>
<title>Aplicacion</title>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<!--<link rel="stylesheet" type="text/css" href="../css/menu.css" />-->

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
			<h2>Respaldo y restauraci&oacute;n de la base de datos:</h2></br></br>
		<center>
			<table>
				<tr>
					<th><lettab>Respaldo de la base de datos</lettab></th>
					<th width="50px">
					</th>
					<th><lettab>Restauraci&oacute;n de la base de datos</lettab></th>
				</tr>
				<tr>
					<td align="center">
						<a href="backup.php" title="Click para respaldar la base de datos"><img src="../img/ser_bd.png" width="150px" height="250px"></a>
					</td>
					<td width="50px">
					</td>
					<td align="center">
						<a href="restore.php" title="Click para restaurar la base de datos"><img src="../img/upload.png" width="180px" height="180px"></a>
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
