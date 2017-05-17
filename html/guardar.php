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
		
		<!-- Inicio del Menu -->
			<article class="menu">
		
			<?php
			include ("menu.php");
				$menu=menu();
				echo $menu;
			?>
			
		</article>
		<!-- Cierre del Menu -->
		
		<!-- Inicio del Contenido -->
			<article class="contenido">
				
				<div class="contenedor">
					<!-- Inicio de los from-->
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>

								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>

								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>

								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>

								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					
					<div class="campo_c">
						<form action="adicion.php" method="post">
							<input type="text" name="valor1" maxlength="4" size="6" placeholder="Valor 1" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
							<input type="text" name="valor2" maxlength="4" size="6" placeholder="Valor 2" class="cam"/>
							<select>
								<option></option><option>+</option><option>-</option><option>*</option>
								<option>/</option><option><</option><option>=</option><option>></option>
							</select>
								<input type="text" name="valor3" maxlength="4" size="6" placeholder="Valor 3" class="cam"/>
								<!--<input type="text" name="respuesta" maxlength="5" size="7" placeholder="Respuesta" class="cam"/>-->
								<input type="submit" name="enviar" value="Guardar"/>
					</div>
					<!-- Cierre de los from-->
				</div>
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
