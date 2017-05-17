<html>
<head>
<title>Aplicacion</title>

<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.css"/>
<link rel="stylesheet" type="text/css" href="css/modificar.css" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />

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
				<h2>Misi&oacute;n</h2>
				<center>
				<br>
				<br>
				<br>
				<br>
				<table width="600px" >
					<tr>
						<td align="justify">
						Brindar una educaci&oacute;n integral a ni&ntilde;as, ni&ntilde;os y adolecentes de practica pedag&oacute;gica abierta, reflexiva
						y constructiva, estableciendo una relaci&oacute; amplia con la comunidad asignada por la paticipaci&oacute;n activa y protag&oacute;nica,
						para un cambio efectivo del sistema educativo acorde con los prop&oacute;sitos de construir una nueva ciudadania.

					</td>
					</tr>
					<tr>
						<td align="right">
							<img src="img/mision.png" width="300px" height="200px">
						</td>
					</tr>
				</table>
				</center>
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
