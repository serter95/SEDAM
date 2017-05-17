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
		<table>
				</br><h1>Operaciones Basicas</h1></br></br>
				
			 <tr>
					<td width="70px">Obj 1.1</td>
					<td><a href="tsuma.php">Suma</a></td>
			</tr>
			 <tr>
					<td width="70px">Obj 1.2</td>
					<td><a href="tresta.php">Resta</a></td>
			</tr>
			 <tr>
					<td width="70px">Obj 1.3</td>
					<td><a href="tmulti.php">Multiplicacion</a></td>
			</tr>
			 <tr>
					<td width="70px">Obj 1.4</td>
					<td><a href="tdivision.php">Division</a></td>
			</tr>
		</table>
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
