<?php
session_start();
?>

<html>
<head>
<title>Aplicacion</title>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />

</head>
<body>
	<section id="contenedor">
		<header id="header">
		<center>
			<!-- <img src="../img/logomate3.png" width="1000px" height="180px" alt="description" style="border-radius:15px 15px 0px 0px" />
			<article id="logoi">
				<p>Logo comunidad</p>
			</article>
			<article id="mem"> <!-- <hr border="1px" height="10px"/>
				<p>REP&Uacute;BLICA BOLIVARIANA DE VENEZUELA<br> MINISTERIO DEL PODER POPULAR PARA LA EDUCACI&Oacute;N UNIVERSITARIA<br>
				   UNIVERSIDAD POLIT&Eacute;CNICA TERRITORIAL DEL ESTADO ARAGUA<br>"FEDERICO BRITO FIGUEROA"<br>
				   LA VICTORIA- ESTADO ARAGUA<br>
				</p>
			</article>
			<article id="logou">
				<p><img src="../img/logou.jpg" width="95px" height="95px"></p>
			</article> -->
		</center>
		</header>
		
		<!--<nav id="botonera">
		<div class="sesion">
		a
		<?php/*
		echo $_SESSION["usuario"];*/
		?>
		</div>
		</nav>-->
		
		<section id="cuerpo">
		
		<!-- Inicio del Menu -->
			<article class="menu">
			<ul id="nav">
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Matematica</a>
					<ul>
						<li><a href="#">Unidad - 1</a></li>
						<li><a href="#">Unidad - 2</a></li>
						<li><a href="#">Unidad - 3</a></li>
					</ul>
				</li>	
				<li><a href="#">Estadistica</a></li>
				<li><a href="#">Configuraci&oacute;n</a>
					<ul>
						<li><a href="#">Sub - 1</a></li>
						<li><a href="#">Sub - 2</a></li>
						<li><a href="#">Sub - 3</a></li>
					</ul>
				</li>
			</ul>
			<div class="linea">
						<img src="../img/linea.jpg" />
					</div>
			</article>
		<!-- Cierre del Menu -->
		
		<!-- Inicio del Contenido -->
			<article class="contenido">
				
				<div class="contenedor">
					<!-- Inicio de los from-->
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>

								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>

								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>

								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>

								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<!--<input type="text" name="respuesta" maxlength="5" size="7" placeholder="Respuesta" class="cam"/>-->
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					<!-- Cierre de los from-->
				</div>
			</article>
			
			<?php
		
			
			
			?>
		</section>
		
		<footer id="pie">
			<article id="logoi">
				<p>Logo comunidad</p>
			</article>
			<article id="mem">
				<p><br />REP&Uacute;BLICA BOLIVARIANA DE VENEZUELA<br> MINISTERIO DEL PODER POPULAR PARA LA EDUCACI&Oacute;N UNIVERSITARIA<br>
				   UNIVERSIDAD POLIT&Eacute;CNICA TERRITORIAL DEL ESTADO ARAGUA<br>"FEDERICO BRITO FIGUEROA"<br>
				   LA VICTORIA- ESTADO ARAGUA<br>
				</p>
			</article>
			<article id="logou">
				<p><img src="../img/logou.jpg" width="70px" height="65px"></p>
			</article>
		</footer>
</section>
</body>

</html>