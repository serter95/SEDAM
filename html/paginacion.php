<?php
session_start();
include ("conexion.php");

include('enlasadorm.php');

$contenido=consultaUsuarios();	

?>

<!DOCTYPE HTML>
<html>
<head>

<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />

<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="funciosajaxm.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>

<title>Aplicacion</title>
</head>
<body>
	<section id="contenedor">
		<header id="header">

		</header>
		
		<section id="cuerpo">
		<article id="menu">
			<?php
				include ("menu.php");
				$menu=menu();
				echo $menu;
			?>
			<div class="linea">
						<img src="../img/linea.jpg" />
					</div>
			</article>
		</article>
		<article id="contenido">
			
			<?php echo $contenido; ?>
			
			<input type="submit" value="Modificar" class="modificar" id="modificar" />
		</article>
		<article class="actualizar" id="form">
			<center>
			<form name="formt" action="" method="post" id="formt">
				<input type="hidden" name="modificar" value="modificar" class="caja" id="codigo"/>
				<input type="hiiden" name="codigo" value="<?php echo $_POST['codigo'];?>" class="caja" id="codigo"/>
					
				<label>Momento</label>
				<select class="selector" name="momento" id="selector" required />
					<option> </option> <option>I</option>
					<option>II</option> <option>III</option>
				</select>
				<label>Proyecto</label>
				<input type="number" name="proyecto" class="selector" required />
				
				<label>Objetivo</label>
				<input type="number" name="objetivo" class="selector" required />
				
				<input type="text" name="titulo" placeholder="Coloque el Titulo" class="cajat" maxlength="256" id="tema" required /><br />
				<textarea placeholder="Introduzca el Contenido" name="contenido" class="textarea"  maxlength="1000" id="textarea"required></textarea><br />
				<input type="text" name="ejemplo1" placeholder="Primer Ejemplo" maxlength="40" class="caja" id="ejemplo1" required />
				<input type="text" name="ejemplo2" placeholder="Segudo Ejemplo" maxlength="40" class="caja" id="ejemplo2" required/>
				<input type="text" name="ejemplo3" placeholder="Segudo Ejemplo" maxlength="40" class="caja" id="ejemplo3" required/>
				<input type="text" name="ejemplo4" placeholder="Segudo Ejemplo" maxlength="40" class="caja" id="ejemplo4" required/> <br />
					
				<input type="reset" name="borrar" value="Limpiar" class="guardar" />
				<input type="submit" name="enviar" value="Guardar" id="enviar" class="guardar" />
				</form>
			</center>
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