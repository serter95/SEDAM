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
			<article>
				
				<video controls width="600" height="400" class="video">
					<source src="../img/Sistema de Numeraci�n decimal.ogv" type="video/ogg">
						<object width="500" height="400" data="../img/sumamas1.ogv">
							<param name="movie" value="../img/sumamas1.ogv" />
							<embed src="../img/sumamas1.ogv" width="500" height="400">
							</embed>
						</object>
				</video>
			<!--<EMBED SRC="../../img/sumamas1.webm" HEIGHT="300" WIDTH="400" AUTOSTART=TRUE LOOP=FALSE>-->

				
				<!--<OBJECT data="../../img/sumar.wmv" type="video/x-ms-wmv"    
				width="320" height="240">
				   <param name="src" value="../../img/sumar.wmv">
				   <param name="autostart" value="1">
				   <param name="volume" value="0">
				   <param name="showcontrols" value="0">
				   <param name="showdisplay" value="0">
				   <param name="showstatusbar" value="0">
				   <param name="playcount" value="9999">
				
				</OBJECT>-->
				
				
					<!--<OBJECT width="320" height="240">
				   <param name="movie" value="../../img/sumar.flv">
					<embed src="../../img/sumar.flv">
					</embed>
					<param name="autostart" value="1">
				    <param name="volume" value="0">
				    <param name="showcontrols" value="0">
				    <param name="showdisplay" value="0">
				    <param name="showstatusbar" value="0">
				    <param name="playcount" value="9999">
				 
				</OBJECT>
				
				
				<!--<video controls="controls" width="320" height="240">
				<source src="../../img/sumar.flv" type="video/flv">
				</video>-->
				
				<!--<video controls>
				<source src="../../img/sumar.wmv" type="video/ogg; ">
				<code>
				video
				</code>
				</video
				-->

				<!--<p>Suma <br><br> La suma consiste en juntar los numeros. <br> <br>  Ocurriria lo mismo con manzanas. Si tenemos 1 manzana y nos regalan 2 si las juntamos tendriamos 3 manzanas<br> <br> Donde "1 y 2" son los sumando, "+" es el signo mas, "=" es signo igual y "3" el resultado <br> <br> Seria lo mismo que 1+2=3</p>
				<p>�Ahora subamos de nivel! <br> <br></p>
				<p>Si tenemos los siguientes numero 1349 + 2521 <br> <br></p>
				<p>El siguiente paso es posicionarlo de esta manera: </p>
				<p>8394+</p>
				<p>3512</p>
				<p>Ahora comenzemos a juntar los numeros de derecha a izquierda</p>
				<p>Juntemos el 4 + 2 obtemos 6</p>
				<p>Ahora el 9 + 1 obtemos 10  Cuando ocurre esto en el resultado solo colocamos el primer numero que en este caso es 0 <br> y acarreamos el 1 al siguiente columna</p>
				<p>Ahora el 3 + 5 obtemos 8 pero tenemos acarreado un 1, tendriamos 8+1 es igual 9</p>
				<p>Por ultimo sumamos la ultima columna 8+3 es igual a 11 cuando ocurre esto al final de la suma se coloca el resultado completo </p>-->
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
