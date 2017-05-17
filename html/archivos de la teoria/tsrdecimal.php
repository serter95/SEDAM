<?php
include ("seguridad.php");
?>

<html>
<head>
<title>Aplicacion</title>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>

<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="dialogo.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>

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
			<article id="pantalla">
			  <article class="informacion">
				
					<p class="p">SUMA Y RESTA DE DECIMALES<br><br> PARA SUMAR Y RESTAR N&Uacute;MEROS DECIMALES DEBEMOS SEGUIR EL MISMO PROCEDIMIENTO 		 								QUE UTILIZAMOS PARA SUMAR O RESTAR N&Uacute;MEROS NATURALES, S�LO QUE DEBEMOS ALINEAR LAS COMAS DE LOS SUMANDOS.
								<br> <br>
								RECUERDA, QUE PARA N&Uacute;MEROS QUE TIENEN DISTINTA CANTIDAD DE CIFRAS DECIMALES, PODEMOS AGREGAR TANTOS CEROS COMO SEAN     						NECESARIOS DESPU&Eacute;S DE LA &Uacute;LTIMA CIFRA DECIMAL.
					</p>
					
					<article id="ejemplo" class="edialogo">
						<center>
						<img src="../img/sumad1.png" width="160px" height="130px" />
						<img src="../img/sumad2.png"  width="160px" height="130px" /><br>
						<img src="../img/restad1.png"  width="160px" height="130px" />
						<img src="../img/restad2.png"  width="160px" height="130px" />
						</center>
					</article>
					
					<img src="../img/profeec.png" class="profe" />
					
				 	 <form action="videosrdecimal.php" method="post">
						<input type="hidden" value="suma" name="operador" />
						<button type="submit" name="enviar" class="epractica">
						<img src="../img/flecha.png" width="width" height="height" alt="description"  class="flecha"/>
						</button>
					</form>
					</article>
					 </article>
						<input type="submit" name="bdialogo" value="EJEMPLO" id="bdialogo" class="bdialogo" />
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
