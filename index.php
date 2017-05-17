<html lang="es">
<head>
<meta charset="utf-8">
<title>Aplicacion</title>
<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.css"/>
<link rel="stylesheet" type="text/css" href="css/modificar.css" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />

<script type="text/javascript" src="html/jquery-2.1.1.min.js"> </script>
<script type="text/javascript" src="html/jquery-1.10.2.js"></script>
<script type="text/javascript" src="html/menu.js"></script>
<script type="text/javascript" src="html/jquery-ui-1.10.3.custom.min.js"></script>

</head>
<body>
	<section id="contenedor">
		<header id="header">
			<img src="img/banner.png" class="banner" />
		</header>
		<nav id="botonera">
				<form name="Tick">
					<input type="text" size="11" name="Clock2" class="reloj" style="margin-right:-30px;" />
				</form>
			<script language="javascript">
				<!--
				/*By George Chiang (WA's JavaScript tutorial)
				Credit must stay intact for use*/
				function show(){
					var Digital=new Date()
					var hours=Digital.getHours()
					var minutes=Digital.getMinutes()
					var seconds=Digital.getSeconds()
					var dn="AM" 
					if (hours>12){
					dn="PM"
					hours=hours-12
					}
					if (hours==0)
						hours=12
					if (minutes<=9)
						minutes="0"+minutes
					if (seconds<=9)
						seconds="0"+seconds
					document.Tick.Clock2.value=hours+":"+minutes+":"
					+seconds+" "+dn
					setTimeout("show()",1000)
					}
					show()
					//-->
				</script>
		</nav>
		<section id="cuerpo">
		<article class="menu">
		<?php
			include ("html/menu.php");
				$menu=menu();
				echo $menu;
		?>
		
		</article>
		<article class="contenido">
			<section id="conocenos1" >
				
				<div class="pingreso">
					<form action="html/acceder.php" method="post">
						<table align="center">
							<tr>
				 				<td><label class="formu">Usuario: </label></td>
				 				<td><input  required type="text" name="usuario" size="10"  placeholder="Introduzca su ID" class="caja"/></td>
							</tr>
							<tr>
				  				<td><label class="formu">Contraseña: </label></td>
								<td><input required type="password" name="contrasena" size="10"  placeholder="Introduzca su Clave" class="caja"  /></td>
							</tr>
							<tr height="18px">
								<td colspan="2">	
								</td>					
							</tr>
							<tr>
								<td>
								<center>
									<input type="submit" value="Iniciar" class="submit" />
								</center>
								</td>
								<td align="left">	
									<input type="reset" value="Limpiar" class="submit" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			</section>
			<section id="conocenos2">
				mision
			</section>
			<section id="conocenos3">
				vision
			</section>
			<section id="conocenos4">
				historia
			</section>
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
