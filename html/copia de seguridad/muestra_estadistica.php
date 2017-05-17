<?php
include ("conexion.php");

$sql="SELECT * FROM estadistica";
$cursor=mysql_query($sql);
$num=mysql_num_rows($cursor);
if(!$num)
{
?>
<script language="javascript">
alert("Usted no a agregado ninguna actividad, por favor inserte una");
location .href='estadistica.php';
</script>
<?php
} else 
	{
include ("seguridad.php");
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
		
		</article class="table">
		<article class="contenido">
		<h1 class="titulo"></br>Muestra de las actividades e indicadores:</h1></br></br></br>
		<article>
		
		
		<table cellspacing="7">
	<tr>
		<th><lettab>Actividades de evaluaciones:</lettab></th>
		<th><lettab>Indicadores Evaluados:</lettab></th>
		<th><lettab>Indicadores Alcanzados:</lettab></th>
		<th><lettab>Indicadores Medianamente alcanzados:</lettab></th>
		<th><lettab>Indicadores no Alcanzados:</lettab></th>
		<th><lettab>Actuacion del desempeño:</lettab></th>
		<th><lettab>Lapso:</lettab></th>
		<th><lettab>Acción:</lettab></th>
	</tr>
	<?php
		while($datos=mysql_fetch_array($cursor))
		{
	?>
	<tr> 
		<td><letcol> <?php echo $datos['activ_evaluacion'] ?> </letcol></td>
		<td><letcol> <?php echo $datos['indic_evaluados'] ?> </letcol></td>
		<td><letcol> <?php echo $datos['indic_alcanzados'] ?> </letcol></td>
		<td><letcol> <?php echo $datos['indic_med_alcanzados'] ?> </letcol></td>
		<td><letcol> <?php echo $datos['indic_no_alcanzados'] ?> </letcol></td>
		<td><letcol> <?php echo $datos['actua_desempeno'] ?> </letcol></td>
		<td><letcol> <?php echo $datos['lapso'] ?> </letcol></td>
		<td><letcol> <a href="eliminar.php?num_actividad=<?php echo $datos['num_actividad'] ?>"> Eliminar </a>&nbsp;
		<a href="consulta_pre.php?num_actividad=<?php echo $datos['num_actividad']?>&activ_evaluacion=<?php echo $datos['activ_evaluacion']?>&indic_evaluados=<?php echo $datos['indic_evaluados']?>&indic_alcanzados=<?php echo $datos['indic_alcanzados']?>&indic_med_alcanzados=<?php echo $datos['indic_med_alcanzados']?>&indic_no_alcanzados=<?php echo $datos['indic_no_alcanzados']?>&actua_desempeno=<?php echo $datos['actua_desempeno']?>&lapso=<?php echo $datos['lapso']?>"> Modificar </a></letcol></td>
	</tr>
<?php
		}
?>
</table>
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
<?php
	}
?>
