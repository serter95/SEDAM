<?php
include ("seguridad.php");
?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />

<title>Aplicacion</title>
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
						<li><a href="indicet.php">Teoria</a></li>
						<li><a href="indicee.php">Evaluacion</a></li>
					</ul>
				</li>	
				<li><a href="muestra_estadistica_E.php">Actividad</a></li>
			</ul>
			<div class="linea">
						<img src="../img/linea.jpg" />
					</div>
			</article>
		</article>
		<article class="contenido">
			<article>
			
			<a href="teoriasuma.php" class="indice">Suma</a> <br>
			<a href="teoriaresta.php" class="indice">Resta</a> <br>
			<a href="teoriamulti.php" class="indice">Multiplicacion</a> <br>
			<a href="teoriatabla3.php" class="indice">Tabla de Multiplicacion de la Tabla del 3</a> <br>
			<?php/*
				$sql="select * from teoria";
				$cursor= mysql_query($sql);
				$num= mysql_num_rows($cursor);
				while($datos=mysql_fetch_array($cursor)){
					echo $datos['codigo']." ".$datos['unidad']." ".$datos['temat'];
					$codigo=$datos['codigo'];
					}
				*/
				?>	
				
					<!-- <form action="mteoria.php" method="post">
					<input type="hidden" value="ver" name="seleccion" />
					<input type="hidden" value="<?/*php echo $codigo */?>" name="codigo" />
					<input type="submit" name="ver" value="Ver" class="ver" class="ver" /><br /> <br />-->

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