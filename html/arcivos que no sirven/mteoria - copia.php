<?php
session_start();
include ("conexion.php");

include('enlasador.php');

$contenido=consultaUsuarios($conex);	

?>

<!DOCTYPE HTML>
<html>
<head>

<link rel="stylesheet" href="jquery-ui-1.10.3.custom/jquery-ui-1.10.3.custom/css/no-theme/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />

<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="funciosajaxt.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>

<title>Aplicacion</title>
</head>
<body>
	<section id="contenedor">
		<header id="header">

		</header>
		
		<section id="cuerpo">
		<article id="menu">
		
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
		</article>
		<article id="contenido">
			
			<article class="tema" >
				<?php
				$sql= mysql_query("SELECT * FROM teoria")or die ("no se obtivo registro");
				while($tema=mysql_fetch_array($sql))
				{
					echo $tema['temat'];
				}
				
				?>
			</article>
			<article class="contenidot">
				<?php
				$sql= mysql_query("SELECT * FROM teoria")or die ("no se obtivo registro");
				while($contenido=mysql_fetch_array($sql))
				{
					echo $contenido['contenidot'];
				}
				?>
			</article>
			<article class="contenidot">
				<?php
				$sql= mysql_query("SELECT * FROM teoria")or die ("no se obtivo registro");
				while($ejemplo1=mysql_fetch_array($sql))
				{
					echo $ejemplo1['ejemplo1'];
				}
				?>
			</article>
			<article class="contenidot">
				<?php
				$sql= mysql_query("SELECT * FROM teoria")or die ("no se obtivo registro");
				while($ejemplo2=mysql_fetch_array($sql))
				{
					echo $ejemplo2['ejemplo2'];
				}
				?><br />
				
			</article>
			
			<input type="submit" name="modificar" value="Modificar" id="agregar" class="modificar" />
			
			<article class="actualizar" id="form">
				<form name="formt" action="" method="post" id="formt">
				<center>
				
					<input type="text" name="codigo" placeholder="Coloque el Codigo" class="caja" id="codigo"/>
					<label>Seleccione la Unidad</label>
					<select class="selector" id="selector">
						<option> </option> <option>I</option>
						<option>II</option> <option>III</option>
					</select> <br />
					<input type="text" name="tema" placeholder="Coloque el Tema" class="cajat" maxlength="256" id="tema" /><br />
					<textarea placeholder="Introduzca el Contenido" name="textarea" class="textarea"  maxlength="1000" id="textarea"></textarea><br />
					<input type="text" name="ejemplo1" placeholder="Primer Ejemplo" maxlength="40" class="caja" id="ejemplo1" />
					<input type="text" name="ejemplo2" placeholder="Segudo Ejemplo" maxlength="40" class="caja" id="ejemplo2"/>
					<input type="submit" name="enviar" value="Guardar" id="enviar" class="guardar" />
				</center>
				</form>
			</article>
		</article>
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