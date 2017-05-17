<html>
<head>
<title>Menu</title>
<link rel="stylesheet" type="text/css" href="../css/menu.css" />

<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>

<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(inicio);
		function inicio()
		{
			$("#acordeon").accordion();
		}
	});

</script>


</head>
<body>
<?php
error_reporting(E_ALL^E_NOTICE);
/*function menu(){
?>
	<?php
		/*include ('seguridadm.php');
		
		if($_SESSION["autentificado"] != "SI"){
	?>
	<ul id="nav">
		<li><a href="mision.php">Mision</a></li>
		<li><a href="Vision.php">Vision</a></li>
		<li><a href="Historia.php">Historia</a></li>
	</ul>
	<?php
		//session_destroy();
		}
	else {
	?>
	<ul id="mainmenu">
			<li><a href="principal.php">Inicio</a></li>
				<li class="last"><a href="#">Matematica</a>
					<ul>
						<li><a href="indicet.php">Teoria</a></li>
						<li><a href="indicee.php">Evaluacion</a></li>
					</ul>
				</li>
				<li class="last"><a href="#">Actividades</a>
					<?php
						if($_SESSION["nivel"]=="3")
							{
					?>
					<ul>
						<li><a href="muestra_estadistica_E.php">Avances</a></li>
					</ul>
					<?php
							}
					?>
					<?php
						if(($_SESSION["nivel"]=="2") || ($_SESSION['nivel']=="1"))
							{
					?>
					<?php
						if($_SESSION["nivel"]=="2")
							{
					?>
					<ul>
						<li><a href="estadistica.php">Crear Observacion</a></li>
					</ul>
					<?php
							}
					?>
					<ul>
						<li class="last"><a href="muestra_estadistica.php">Avances</a></li>
					</ul>
					
					<?php
						}
					?>
					
				</li>
					<?php
					if(($_SESSION["nivel"]=="1") || ($_SESSION["nivel"]=="2"))
						{
					?>
				<li><a href="#">Configuraci&oacute;n</a>
					
					<?php
					if($_SESSION["nivel"]=="2")
					{
					?>
						<ul>
							<li><a href="reg_estudiante.php">Nuevo estudiante</a></li>
						</ul>
					<?php
					}
					?>
						<ul>
							<li><a href="muestra_estudiante.php">Consulta de estudiantes</a></li>
						</ul>
				</li>
					<?php
						}
					?>
			</ul>
<?php
}
}*/
?>

<div id="acordeon">
	<ul>
		<li><a href="#tab1">asas</a></li>
		<li><a href="#tab2">asas</a></li>
		<li><a href="#tab3">asas</a></li>
		<li><a href="#tab4">asas</a></li>
	</ul>

		<div id="tab1">dsasas </div>
		<div id="tab2"> sasas</div>
		<div id="tab3">sasas </div>
		<div id="tab4">asasas </div>
	
</div>
<script> $("#acordeon").tabs(); </script>


<div id="acordeon">
	
	<ul> hola
	<div>
	sdsdsdsdsdsdsd
	</div>
	como
	<div>
	sdsdsdsdsdsdsd
	</div>
	estas
	<div>
	sdsdsdsdsdsdsd
	</div>
</div>

<article id="contenedor">

	<ul id="acordeon">
			<li><a href="principal.php">Inicio</a></li>
			<li><a href="#">Matematica</a>
				<ul>
					<li><a href="indicet.php">Teoria</a></li>
					<li><a href="indicee.php">Evaluacion</a></li>
				</ul>
			</li>
				<li><a href="#">Actividades</a>
					
					<ul>
						<li><a href="muestra_estadistica_E.php">Avances</a></li>
					</ul>
					
					<ul>
						<li><a href="estadistica.php">Crear Observacion</a></li>
					</ul>
					
					<ul>
						<li><a href="muestra_estadistica.php">Avances</a></li>
					</ul>
					
					
				</li>
					
				<li><a href="#">Configuraci&oacute;n</a>
						<ul>
							<li><a href="reg_estudiante.php">Nuevo estudiante</a></li>
							<li><a href="muestra_estudiante.php">Consulta de estudiantes</a></li>
						</ul>
				</li>
			</ul>
</article>
			
			
	<!--<ul id="mainmenu">
		<li><a href="#">Inicio</a></li>
		<li class="last"><a href="#">Matematica</a></li>

	</ul>-->
</body>
</html>