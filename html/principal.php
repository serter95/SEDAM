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
			<img src="../img/bienvenida.png" style="margin: 30px 0 0 200px" width="600px">
			<table align="right">
				<tr>
					<td>
						<?php
						if($_SESSION['nivel']==1)
						{
						?>
						<a href="../img/manual_administrador.pdf" target="_blank"><img src="../img/pregunta.png" width="50px" height="50px" title="Manual de usuario"></a>
						<?php
						}
						if($_SESSION['nivel']==2)
						{
						?>
						<a href="../img/manual_profesor.pdf" target="_blank"><img src="../img/pregunta.png" width="50px" height="50px" title="Manual de usuario"></a>
						<?php
						}
						?>
					</td>
				</tr>
			</table>
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
