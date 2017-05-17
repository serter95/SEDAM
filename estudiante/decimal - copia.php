<?php
include ("seguridad.php");
?>

<html>
<head>
<title>Aplicacion</title>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />

</head>
<body>
	<section id="contenedor">
		<header id="header">
	
		</header>
		<nav id="botonera">
			Usuario:"<?php echo $_SESSION["nom_usuario"]?>"&nbsp; <a href="salir.php" title="Cerrar sesion">Salir</a>
		</nav>
		<section id="cuerpo">
		<article class="menu">
		
			<ul id="nav">
				<li><a href="principal_E.php">Inicio</a></li>
				<li><a href="#">Matematica</a>
					<ul>
						<li><a href="unidad1.php">Unidad - 1</a></li>
						<li><a href="unidad2.php">Unidad - 2</a></li>
						<li><a href="unidad3.php">Unidad - 3</a></li>
					</ul>
				</li>	
				<li><a href="muestra_estadistica_E.php">Estadistica</a>
				</li>
			</ul>
		</article>
		<div class="linea">
			<img src="../img/linea.jpg" />
		</div>
		<article class="contenido">
			<article id="pantalla">
				<article class="informacion">
				
					<p class="p">Suma o Adici&oacute;n<br><br> La suma o adición es la operación matemática que resulta al reunir en una sola varias cantidades.<br> <br>
					Los números que se suman se llaman sumandos y el resultado suma o total.<br> <br> Para su notación se emplea entre los sumandos el signo + que se lee "más".
					<br> <br> <img src="../img/suma.png" width="width" height="height" alt="description" /></p>
				
					<a href="videosuma.php"><img src="../img/flecha.png" width="width" height="height" alt="description" class="flecha" /></a>
				</article>
			</article>
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
