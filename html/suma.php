<?php
include('seguridad.php');
include ("../html/conexion.php")
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
		
		<article id="contenido">

		<article id="pantalla">

				<article id="v1">
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
													<img src="../../img/bn.png" width="20px" height="20px" alt="BN" />
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
													<img src="../../img/error.png" width="20px" height="20px" alt="description" />
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
			<center>
				<b><letcol>Dise&ntilde;ado y Desarrollado por: Br Sergei Teran y Br Juan Rodr&iacute;guez</letcol></b>
			</center>
		</footer>
	</section>
</body>
</html>
