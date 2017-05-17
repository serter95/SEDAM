<html>
<head>
<title>Aplicacion</title>

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
				
				<h2>Historia</h2>
				<center>
					</br>
				<table width="600px" >
					<tr>
						<td align="justify">
						La U.E.N “Pdte. Medina Angarita” fue fundada en el año 1959. Decretada su construcci&oacute;n durante la dictadura 
						del General Marcos P&eacute;rez Jim&eacute;nez y fundada durante la gesti&oacute;n del Contralmirante Wolfang Larrazábal en Enero de 1959.
						<br>
						<br>
						Inici&oacute; sus actividades con el siguiente Personal Docente y Administrativo: Un Director, H&eacute;ctor Jes&uacute;s P&eacute;rez, una Secretaria, Blanca S&aacute;nchez, doce Docentes de Aula 
						funcionando en un turno: Ruth Vegas, Emma de Mendoza, Aura de Aponte, Teodolinda Landaeta, Carmen Sánchez, Matilde Cirimeli, Felicia Briceño, Nelly de Becerra, Oscar Ochoa, Miriam de Durán, Julia Hernández, 
						Reina de Vásquez y con dos obreros. 
					</td>
					</tr>
					<tr>
						<td align="right">
							<img src="img/historia.png" width="250px" height="150px">
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
