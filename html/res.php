<?php
//include ("seguridad.php");
//include ("conexion.php");
			
?>

<html>
<head>
<title>Aplicacion</title>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />
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
		</br><h2>Respaldo de la Base de Datos</h2></br></br>
		<form action="respaldo.php" method="get">
			<table>
				<tr>
					<th><lettab>Crear Respaldo</lettab></th>
				</tr>
				<tr>
					<th><input type="submit" value=""></th>
				</tr>
			</table>
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
