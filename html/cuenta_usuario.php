<?php
include ("seguridad.php");
include ("conexion.php");

$nom=$_SESSION['nom_usuario'];
	
		$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
		$niv_usu=mysql_query($sql);
		$niv_usua=mysql_fetch_assoc($niv_usu);
		$nivel=$niv_usua['nivel'];
		
		if($nivel!=1)
		{

$sql="SELECT * FROM usuario WHERE nom_usuario='$nom'";
$con=mysql_query($sql);

?>

<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/estadistica.css" />
<link rel="stylesheet" href="../css/estilo.css" />
<script language="javascript" src="validacion_usu.js"></script>
</head>
<body>
	<section id="contenedor">
		<header id="header">
		<img src="../img/banner.png" class="banner" />
		</header>
		<nav id="botonera">
			<section id="salir">
				Usuario:"<?php echo $_SESSION["nom_d"]?>"&nbsp;(<?php echo $_SESSION["dueno"]?>) <a href="salir.php" title="Cerrar sesion">Salir</a>
			</section>
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
		<h2> <!--class="titulo"-->Cuenta de Usuario:</h2></br></br>
			
			<center>
			
			<table class="tabla_01" cellspacing="2">
				<tr class="tabla_tr_01">
					<th><lettab>Nombre de Usuario:</lettab></th>
					<th><lettab>Contrase&ntilde;a:</lettab></th>
					<th><lettab>Due&ntilde;o:</lettab></th>
					<th><lettab>Acci&oacute;n:</lettab></th>
				</tr>
				<tr class="tabla_tr_02">
					<?php
					while($dato=mysql_fetch_assoc($con))
					{
						if($dato['nivel']==2)
								{
									$dueno="Profesor";
								}
						else
								{
									$dueno="Estudiante";
								}
					?>
					<td class="tabla_td_01"><letcol><?php echo $dato['nom_usuario'] ?></letcol></td>
					<td class="tabla_td_01"><letcol><?php echo $dato['contrasena'] ?></letcol></td>
					<td class="tabla_td_01"><letcol><?php echo $dueno ?></letcol></td>
					<td class="tabla_td_01"><a href="mod_usuario_indi.php?id=<?php echo $dato['id']?>&nom_usuario=<?php echo $dato['nom_usuario']?>
						 &contrasena=<?php echo $dato['contrasena']?>&nivel=<?php echo $dato['nivel']?>&dueno=<?php echo $dueno
						 ?>" title="Presione para modificar al usuario">
						 <img height="32px" width="32px" src="../img/write.png" ></a></td>
					<?php
					}
					?>
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
<?php
}
else
{
?>
<script language="javascript">
location.href='consult_usuario.php';
</script>
<?php
}
?>
