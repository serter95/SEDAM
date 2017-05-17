<?php
//include ("seguridad.php");
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
		
		<section id="cuerpo">
		<article class="menu">
		
			<ul id="nav">
				<li><a href="principal_E.php">Inicio</a></li>
				<li><a href="#">Matematica</a>
					<ul>
						<li><a href="indicet.php">Teoria</a></li>
						<li><a href="indicee.php">Evaluacion</a></li>
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
				
					<p class="p">SUMA O ADICI&Oacute;N<br><br> LA SUMA O ADICIÓ&Oacute;N ES LA OPERACI&Oacute;N MATEM&Aacute;TICA QUE RESULTA AL REUNIR 								 EN UNA SOLA VARIAS CANTIDADES.<br> <br>
								 LOS N&Uacute;MEROS QUE SE SUMAN SE LLAMAN SUMANDOS Y EL RESULTADO SUMA O TOTAL.<br> <br> PARA SU NOTACI&Oacute;N SE                                 EMPLEA ENTRE LOS SUMANDOS EL SIGNO + QUE SE LEE "M&Aacute;S".
					</p>
						<article id="ejemplo" class="edialogo">
							<center>
								<img src="../img/suma.png" width="300px" height="130px" /><br>
								<img src="../img/suma1.png"  width="210px" height="200px" />
								<img src="../img/suma2.png"  width="210px" height="200px" />
							</center>
						</article>
					<img src="../img/profeec.png" class="profe" />
					
					<article id="dpaso">
						
						<br>Paso 1: Se alinean de forma vertical los valores de manera que cada numero quede encima del otro.<br><br>
						Paso 2: Se inicia la suma con la primera columna que la de la unidad (si el n&uacute;mero es mayor o igual que 10 se descompone 						dejando el primer n&uacute;mero del resultado y sumando el 1 a la siguiente columna).<br><br>
						Paso 3: Se procede a sumar individualmente la columna de la decenas y las centenas si el n&uacute;mero es mayor o igual que 10 			 						se descompone).<br><br>
						Paso 5: E igualmente se procede a sumar las columnas de las unidades, decenas y centenas del millar con los mismos  	 						                        procedimientos.<br>
						<center>
						<img src="../img/esuma.png" width="300px" height="150px">
						</center>
					</article>
					<!--
					<article id="dpaso">
						
						Paso 1: Se alinean de forma vertical los valores de manera que cada numero quede encima del otro.<br>
						Paso 2: Se inicia la suma con la primera columna que la de la unidad (si el n&uacute;mero es mayor o igual que 10 se descompone 						dejando el primer n&uacute;mero del resultado y sumando el 1 a la siguiente columna). <br>
						Paso 3: Se suman la columna de las decenas (si el n&uacute;mero es mayor o igual que 10 se descompone).<br>
						Paso 4: Se suma la columna de las centenas (si el n&uacute;mero es mayor o igual que 10 se descompone).<br>
						Paso 5: Se suman la columna de la unidades del millar con los mismos procedimiento.<br>
						Paso 6: Se suman la columna de la decenas del millar con los mismos procedimiento.<br>
						Paso 5: Se suman la columna de la centenas del millar con los mismos procedimiento.<br> 
					</article>
					-->
					 <form action="videosuma.php" method="post">
						<input type="hidden" value="suma" name="operador" />
						<button type="submit" name="enviar" class="epractica">
						<img src="../img/flecha.png" width="width" height="height" alt="description" class="flecha"/>
						</button>
					 </form>							 			  
				</article>
					 <input type="submit" name="bdialogo" value="EJEMPLO" id="bdialogo" class="bdialogo" />
					 <input type="submit" name="bpaso" value="PASO A PASO" id="bpaso" class="bpaso" />
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
