<?php
include("seguridad.php");
include ("conexion.php")
?>

<html>
<head>
<title>Aplicacion</title>


<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/calculadora.css" />
<script type="text/javascript" src="calculadora.js"></script>

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
		<article class="contenido">

		<article id="pantalla">
				<fuente>
				<article id="v1">
					
					<div>
						<?php
					//SELECT * FROM operacion ORDER BY RAND() LIMIT 0,4)
			$query = "SELECT * FROM operacion ORDER BY RAND() LIMIT 0,4";
			$ejecutar_query=mysql_query($query);
			
			$valor=mysql_fetch_array($ejecutar_query);
						
						$v1=$valor["valor1"];
						$v2=$valor["valor2"];
						$signo=$valor["signo"]
							
							?>
					<input type="text" value="<?php echo $v1; ?>" id="v1"/><input type="text" value="<?php echo $signo; ?>" />
						
					</div>
				</article>
				
				<article id="v2">
					<div>
						<input type="text" value="<?php echo $v2; ?>" id="v2" />
							
					</div>
				</article>
				
				<article id="v3">
					<div>
						
					</div>
				</article>
				<article id="v3">
					<div>
						<input type="button" value="_____" id="raya" />
					</div>
				</article>
			<form name="calc" action="suma.php" method="post" id="form" >
			<article id="general" >
			
			<center><input type="text" name="visor" maxlength="3" placeholder="?????" id="visor" class="visor"/></center>
					<div id="numpad1">
					
								<article id="radio">
                                    <a href="javascript:;" rel="1" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											1
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="2" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											2
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="3" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											3
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="4" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											4
										</div>
                                    </article>
									</a>
								</article>
								<article id="radio">
                                    <a href="javascript:;" rel="5" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											5
										</div>
                                    </article>
									</a>
								</article >
								<article id="radio">
								
                                    <a href="javascript:;">
										<button type="submit" onClick="proceso(value)" class="bn" >
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
                                    <a href="javascript:;" rel="6" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											6
										</div>
                                    </article>
									</a>
								</article>
								<article id="radio">
                                    <a href="javascript:;" rel="7" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											7
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="8" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											8
										</div>
                                    </article>
									</a>
								</article>
								<article id="radio">
                                    <a href="javascript:;" rel="9" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											9
										</div>
									</article>
									</a>
								</article>
									
								<article id="radio">
                                    <a href="javascript:;" rel="0" onClick="boton (rel)">
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
											<article id="boton" >
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
					
							$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 0,4");
							while ($s1 = mysql_fetch_array($query)){
								echo $s1["signo1"];
								}
						?>
			</article>

				<?php
				/*$res=$v1+$v2+$v3;
				echo $res;*/
				
				?>
			</article>
			
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
			</article>
		</footer>
	</section>
</body>
</html>
