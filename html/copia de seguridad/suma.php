<?php
session_start();
include ("conexion.php")
?>

<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/calculadora.css" />



<script type="text/javascript" src="calculadora.js">
</script>

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
						<li><a href="unidad1.php">Unidad - 1</a></li>
						<li><a href="unidad2.php">Unidad - 2</a></li>
						<li><a href="unidad3.php">Unidad - 3</a></li>
					</ul>
				</li>	
				<li><a href="muestra_estadistica_E.php">Estadistica</a></li>
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

				<article id="v1">
					<?php
					
				
					
					?>
					<div>
						<?php
							
							/*$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 1,2");
							while (($v1 = mysql_fetch_array($query)))
							{
								$v1["valor1"];
								echo $v1["valor1"];;
							}*/
								$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 0,4");
							while (($id= mysql_fetch_array($query)) and ($v1 = mysql_fetch_array($query)) and ($v2 = mysql_fetch_array($query)) and ($v3 = mysql_fetch_array($query)))
							{
								$id=$id["id"];
								$v1=$v1["valor1"];
								$v2=$v2["valor2"];
								$v3=$v3["valor3"];

							}
								echo $v1;
						?>
					</div>
				</article>
				
				<article id="v2">
					<div>
						<?php
					
							/*$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 1,1");
							while ($v2 = mysql_fetch_array($query)){
							
								$v2=$v2["valor2"];		
								}*/
								echo $v2;
						?>
							
	
					</div>
				</article>
				
				<article id="v3">
					<div>
						<?php
			
							/*$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 3,3");
							while ($v3 = mysql_fetch_array($query)){

								$v3=$v3["valor3"];
								
								}*/
								echo $v3;
							$res=$v1+$v2+$v3;
							
						?>
						
					</div>
				</article>
				
			<form name="calc" action="suma - copia.php" method="post" id="form" >
			<article id="general" >
			
				<input type="text" name="visor" maxlength="3" placeholder="?" id="visor"/>
					<div id="numpad1">
						<a href="javascript:;" rel="<?php $v1 ?>" onload='proceso(rel)'>
					
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
										<button type="submit" onclick="proceso(value)" >
											<article id="boton">
												<div id="center">
													<img src="../img/bn.png" width="20px" height="20px" alt="BN" />
												</div>
											</article>
										</button>
									</a>
								</article>
						<input type="hidden" value="<?php echo $res;?>" id="comprar"/>			
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
										<button type="reset" class="error" value=>
											<article id="boton">
												<div id="center">
													<img src="../img/error.png" width="20px" height="20px" alt="description" />
												</div>
											</article>
										</button>
									</a>
									</article>
									
                                </div>
			</form>
			<article id="signo1">
				<?php
					
							$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 1,1");
							while ($s1 = mysql_fetch_array($query)){
								echo $s1["signo1"];
								}
						?>
			</article>
			<article id="signo2">
				<?php
					
							$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 1,1");
							while ($s2 = mysql_fetch_array($query)){
								echo $s2["signo2"];
								}
							
						?>
			</article>
			<article id="signo3">
				=
			</article>
				<?php
				
				echo $res;
				
				?>
			</article>
			
	</article>
		</article>
		</section>
		
		<footer id="pie">
			<article id="logoi">
				<p>Logo comunidad</p>
			</article>
			<article id="mem"> <!-- <hr border="1px" height="10px"/>-->
				<p>
				REP&Uacute;BLICA BOLIVARIANA DE VENEZUELA<br>
				MINISTERIO DEL PODER POPULAR PARA LA EDUCACI&Oacute;N UNIVERSITARIA<br>
				UNIVERSIDAD POLIT&Eacute;CNICA TERRITORIAL DEL ESTADO ARAGUA<br>
				"FEDERICO BRITO FIGUEROA"<br>
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