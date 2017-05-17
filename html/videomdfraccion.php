<?php
include ("seguridad.php");
?>

<html>
<head>
<meta charset=utf-8>
<title>Aplicacion</title>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />

</head>
<body>
	<section id="contenedor">
		<header id="header">
	
		</header>
		<nav id="botonera">
			Usuario:"<?php echo $_SESSION["nom_d"]?>"&nbsp;(<?php echo $_SESSION["dueno"]?>) <a href="salir.php" title="Cerrar sesion">Salir</a>
		</nav>
		<section id="cuerpo">
		<article class="menu">
		
			<?php
					include ("menu.php");
						$menu=menu();
						echo $menu;
			?>
			
		</article>
		<div class="linea">
			<img src="../img/linea.jpg" />
		</div>
		<article class="contenido">
				
				<video controls class="videod">
					<source src="../img/fmultiplicacion.ogv" type="video/ogg">
				</video>
				
				<video controls class="videod">
					<source src="../img/fdivision.ogv" type="video/ogg">
				</video>
				
					<form action="operaciones.php" method="post">
						<input type="hidden" value="suma" name="operador" />
						<button type="submit" name="enviar" class="epractica">
						<img src="../img/flecha.png" width="width" height="height" alt="description"  class="flecha"/>
						</button>
					</form>
					<form action="tmdfraccion.php" method="post">
						<input type="hidden" value="mdfraccion" name="operador" />
						<button type="submit" name="enviar" class="eteoria">
						<img src="../img/flechac.png" width="width" height="height" alt="description"  class="flecha"/>
						</button>
					</form>
		</article>
		</section>
		
		<footer id="pie">

			<center>
		
			<article id="logoi">
				<p><img src="../img/logoi.png" width="110px" height="110px" class="img" ></p>
			</article>
			<article id="mem"> <!-- <hr border="1px" height="10px"/>-->
				<p>REP&Uacute;BLICA BOLIVARIANA DE VENEZUELA<br> MINISTERIO DEL PODER POPULAR PARA LA EDUCACI&Oacute;N UNIVERSITARIA<br>
				   UNIVERSIDAD POLIT&Eacute;CNICA TERRITORIAL DEL ESTADO ARAGUA<br>"FEDERICO BRITO FIGUEROA"<br>
				   LA VICTORIA- ESTADO ARAGUA<br>
				</p>
			</article>
			<article id="logou">
				<p><img src="../img/logou.jpg" width="95px" height="95px" class="img"></p>
			</article>
		</center>
		</footer>
</section>
</body>

</html>
