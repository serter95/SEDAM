<?php
session_start();
include ("conexion.php")
?>

<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" type="text/css" href="../css/calculadora.css" />
<link rel="stylesheet" type="text/css" href="../css/guardar.css" />


<script type="text/javascript" src="calculadora.js">
</script>

</head>
<body>
	<section id="contenedor">
		<header id="header">
		<center>
		
			<article id="logoi">
				<p>Logo comunidad</p>
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
			a
		</nav>
		
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
		<article id="contenido">
		<article id="pantalla">

			
			<?php
			/*$numero=4;
			$sqlazar="SELEC * FROM operacion ORDER BY RAND()";
			$resultazar= mysql_query ($sqlazar,$con) or die ("ha fallado el query azar");*/
			
			?>
				<article id="v1">

					<div>
						<?php
							$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 1,1");
							while ($v1 = mysql_fetch_array($query)){
								echo $v1["valor1"];
								}
							
						?>
					</div>
				</article>
				
				<article id="v2">
					<div>
						<?php
					
							$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 1,1");
							while ($v2 = mysql_fetch_array($query)){
								echo $v2["valor2"];
								}
						?>
							
	
					</div>
				</article>
				
				<article id="v3">
					<div>
						<?php
					
							$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 1,1");
							while ($v3 = mysql_fetch_array($query)){
							
								if($v3["valor2"]==""){
								$v3=0;
								echo $v3;
								}
								else if ($v3["valor2"]!=""){
								
								echo $v3["valor2"];
								}
								}
							//liberamos memoria de la sentencia
								mysql_free_result($query);
							//Finalizamos conexi�n
								mysql_close();
						?>
							
					
					</div>
				</article>
				
			<form name="calc" action="adicion.php" method="post" >
			<article id="general" >
			
				<input type="text" name="visor" maxlength="3" placeholder="?"/>
					<div id="numpad1">
								<article id="radio">
                                    <a href="javascript:;" rel="1" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											1
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="2" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											2
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="3" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											3
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="4" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											4
										</div>
                                    </article>
									</a>
								</article>
								<article id="radio">
                                    <a href="javascript:;" rel="5" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											5
										</div>
                                    </article>
									</a>
								</article >
								<article id="radio">
								
                                    <a href="javascript:;">
										<button type="submit">
											<article id="boton">
												<div id="center">
													bn
												</div>
											</article>
										</button>
									</a>
								</article>
					</div>
                    <div id="numpad2">
								<article id="radio">
                                    <a href="javascript:;" rel="6" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											6
										</div>
                                    </article>
									</a>
								</article>
								<article id="radio">
                                    <a href="javascript:;" rel="7" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											7
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="8" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											8
										</div>
                                    </article>
									</a>
								</article>
								<article id="radio">
                                    <a href="javascript:;" rel="9" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											9
										</div>
									</article>
									</a>
								</article>
									
								<article id="radio">
                                    <a href="javascript:;" rel="0" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											0
										</div>
									</article>
									</a>
								</article>
									
									<article id="radio">
                                    <a href="javascript:;">
										<button type="reset">
											<article id="boton">
												<div id="center">
													ml
												</div>
											</article>
										</button>
									</a>
									</article>
									
                                </div>
			</form>
			<article id="signo1">
				+
			</article>
			<article id="signo2">
				+
			</article>
			<article id="signo3">
				=
			</article>
			
				<?php/*
				$res=$v1+$v2;
					if($_POST['visor']==$res)
					{
						echo "bn";
					}
				
					else if($_POST['visor']!=$res) {
					 echo "mal";
					
					}*/
					?>
					
			</article>
			
	</article>
		</article>
		</section>
		
		<footer id="pie">
			Derechos Reservados
		</footer>
</section>
</body>

</html>