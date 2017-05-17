<html>
<head>
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
				
				<h2>Visi&oacute;n</h2>
				<center>
				<br>
				<br>
				<br>
				<br>
				<table width="600px" >
					<tr>
						<td align="justify">
						Garantizar una educaci&oacute;n demotratica, participativa, protagonica, multitecnica y pluricultural que permita formar integramente a ni�as, no�os y adolecentes sin ningun tipo de discriminaci&oacute;
						rescatando el ideario bolivariano en funci�n de reivindicar el papel de la Naci&oacute;n que se reconoce en su historia, para asumir los retos del momento.
					</td>
					</tr>
					<tr>
						<td align="right">
							<img src="img/vision.png" width="300px" height="200px">
						</td>
					</tr>
				</table>
				</center>
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
