<?php
session_start();
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/estadistica.css" />
</head>
<body>
	<section id="contenedor">
		<header id="header">
		<center>
		
			<article id="logoi">
				<p><img src="../img/logoi.png" width="110px" height="110px"></p>
			</article>
			<article id="mem"> <!-- <hr border="1px" height="10px"/>-->
				<p>REP&Uacute;BLICA BOLIVARIANA DE VENEZUELA<br> MINISTERIO DEL PODER POPULAR PARA LA EDUCACI&Oacute;N UNIVERSITARIA<br>
				   UNIVERSIDAD POLIT&Eacute;CNICA TERRITORIAL DEL ESTADO ARAGUA<br>"FEDERICO BRITO FIGUEROA"<br>
				   LA VICTORIA- ESTADO ARAGUA<br>
				</p>
			</article>
			<article id="logou">
				<p><img src="../img/logou.jpg" width="95px" height="95px"></p>
			</article>
		</center>
		</header>
		
		<nav id="botonera">
			<?php echo $_SESSION['nom_usuario']; ?>
		</nav>
		
		<section id="cuerpo">
		<article id="menu">
		
			<ul id="nav">
				<li><a href="principal.php">Inicio</a></li>
				<li><a href="#">Matematica</a>
					<ul>
						<li><a href="#">Unidad - 1</a></li>
						<li><a href="#">Unidad - 2</a></li>
						<li><a href="#">Unidad - 3</a></li>
					</ul>
				</li>	
				<li><a href="estadistica.php">Estadistica</a>
					<ul>
						<li><a href="muestra_estadistica.php">Busqueda</a></li>
					</ul>
				</li>
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
		<article id="contenido">
			<h2>Modificaci&oacute;n</h2></br>
	<form action="editar.php" method="get">
	<table cellspacing="7">
	<tr>
		
			<input type="hidden" name="num_actividad" value="<?php echo $_REQUEST['num_actividad']?>">
		
		<td><label><b>Actividad de evaluaci&oacute;n:</b></label></br>
			<input type="text" name="activ_evaluacion" col="7" row="20" value="<?php echo $_REQUEST['activ_evaluacion']?>"/>
		</td>
	
		<td> <label><b>Indicadores evaluados:</b></label></br>
			<input type="number" name="indic_evaluados" value="<?php echo $_REQUEST['indic_evaluados']?>">
		</td>

		<td><label><b>Indicadores alcanzados:</b></label></br>
			<input type="number" name="indic_alcanzados" value="<?php echo $_REQUEST['indic_alcanzados']?>">
		</td>
	</tr>
	<tr>
		<td><label><b>Indicadores medianamente alcanzados:</b></label></br>
			<input type="number" name="indic_med_alcanzados" value="<?php echo $_REQUEST['indic_med_alcanzados']?>">
		</td>	
	
		<td> <label><b>Indicadores no alcanzados:</b></label></br>
			<input type="number" name="indic_no_alcanzados" value="<?php echo $_REQUEST['indic_no_alcanzados']?>">
		</td>

		<td><label><b>Actuaci&oacute;n del desempe&ntilde;o:</b></label></br>
			<input type="text" name="actua_desempeno" maxlength="250" value="<?php echo $_REQUEST['actua_desempeno']?> "/>
		</td>
	</tr>
	<tr>
		<td><label><b>Lapso:</b></label></br>
			<input type="number" name="lapso" value="<?php echo $_REQUEST['lapso']?>"/>
		</td>
	
		<td align="right">
		<input type="submit" value="Modificar" title="hacer click para modificar la actividad">
		</td>
		<td align="center"></br>
		<a href="muestra_estadistica.php"><img src="../img/boton_cancelar_prof.png"></a>
		</td>
	</tr>
</table>
</form>
</article>
		</section>
		
		<footer id="pie">
			Derechos Reservados
		</footer>
</section>
</body>
</html>
