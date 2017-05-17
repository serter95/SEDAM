<?php
session_start();
?>

<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/estadistica.css" />
<link rel="stylesheet" href="../css/estilo.css" />
</head>
<body>
	<section id="contenedor">
		<header id="header">
		
		</header>
		<section id="cuerpo">
		<article class="menu">
		
			<ul id="nav">
				<li><a href="principal.php">Inicio</a></li>
				<li><a href="#">Matematica</a>
					<ul>
						<li><a href="unidad1p.php">Unidad - 1</a></li>
						<li><a href="unidad2p.php">Unidad - 2</a></li>
						<li><a href="unidad3p.php">Unidad - 3</a></li>
					</ul>
				</li>	
				<li><a href="#">Estadistica</a>
					<ul>
						<li><a href="muestra_estadistica_E.php">Busqueda</a></li>
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
		<article class="contenido">
		</br><h1 class="titulo">Ingrese una nueva actividad evaluada:</h1></br></br></br>
		<form action="estadistica1.php" method="get">
		
		<article class="table" >
		<center>
	
		<table>
		<tr>
			<th width="166px" align="center">Actividades de evaluaciones: </th>
			<th width="166px" align="center">Indicadores Evaluados: </th>
			<th width="166px" align="center">Indicadores Alcanzados:</th>
		</tr>
		<tr>
			<td width="230px" align="center">
			<ast>*</ast>
			<textarea required name="activ_evaluacion" maxlength="100" col="7" row="20" placeholder="Escriba aquí" title="Actividad de Evaluación"></textarea>
			</td>
			<td width="180px" align="center">
			<ast>*</ast><input required type="number" name="indic_evaluados" maxlength="2" size="1" title="Indicadores Evaluados"/>
			</td>
			<td width="166px" align="center">
			<ast>*</ast><input required type="number" name="indic_alcanzados" maxlength="2" size="1" title="Indicadores Alcanzados"/>
			</td>
		</tr>
		<tr>
			<th width="265px" align="center">Indicadores Medianamente alcanzados:</th>
			<th width="230px" align="center">Indicadores no Alcanzados: </th>
			<th width="166px" align="center">Actuacion del desempeño: </th>
		</tr>
		<tr>
			<td width="166px" align="center">
			<ast>*</ast><input required type="number" name="indic_med_alcanzados" maxlength="2" size="1" title="Indicadores Medianamente Alcanzados"/>
			</td>
			<td width="166px" align="center">
			<ast>*</ast><input required type="number" name="indic_no_alcanzados" maxlength="2" size="1" title="Indicadores no Alcanzados"/>
			</td>
			<td width="260px" align="center">
			<ast>*</ast>
			<textarea required name="actua_desempeno" maxlength="250" row="20" col="7" placeholder="Escriba aquí" title="Actuación del desempeño"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="3"> </td>
		</tr>
		<tr>
			<td colspan="2"><b>Lapso:</b>
			<ast>*</ast><select name="lapso" required>
				<option>
				<option>1
				<option>2
				<option>3
			</select>
			</td>
		
			<td>
			<input type="submit" value="Agregar" title="Presione agregar para subir la nueva actividad"/>
			</td>
		</tr>
		</table>
		</form>
		</br>
		<table>
			<tr>
				<td colspan="3"> Los campos que esten marcados con un '<ast>*</ast>' son obligatorios </td>
			</tr>
		</table>
			
		</center>
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
