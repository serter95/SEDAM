<?php
include ("seguridad.php");
include ("conexion.php");

$nom=$_SESSION['nom_usuario'];
	
		$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
		$niv_usu=mysql_query($sql);
		$niv_usua=mysql_fetch_assoc($niv_usu);
		$nivel=$niv_usua['nivel'];
		
		if($nivel!=2 and $nivel!=3)
		{

$ci_prof= trim($_POST['ci_prof']);
$nom_prof=ucfirst( trim($_POST['nom_prof']));
$ape_prof=ucfirst( trim($_POST['ape_prof']));
$seccion_prof= trim($_POST['seccion_prof']);

$sql = "SELECT ci_profesor FROM profesor WHERE estatus='0' and ci_profesor In ('$ci_prof')";
$res = mysql_query($sql) or die ("Error en $sql:". mysql_error());
$resu=mysql_fetch_assoc($res);
$result=$resu['ci_profesor'];

if($result==$ci_prof)

{

?>
<script language='javascript'>
alert ('Error, la c\u00e9dula de identidad ya existe!')
location.href="reg_prof.php";
</script>
<?php
}

else

{
$insertar="INSERT INTO profesor (ci_profesor, nom_profesor, ape_profesor, seccion_prof, estatus) VALUES ('$ci_prof', '$nom_prof', '$ape_prof','$seccion_prof','0')";
mysql_query($insertar);

$usu="INSERT INTO usuario (nom_usuario, contrasena, nivel, estatus) VALUES ('$ci_prof','".$nom_prof."".$ape_prof."',2,0)";
mysql_query($usu);

$nom_usu="UPDATE profesor SET nom_usuario='$ci_prof' WHERE ci_profesor='$ci_prof'";
mysql_query($nom_usu);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Insercion de profesor','$fecha','$hora')";

mysql_query($aud);
?>
<script language='javascript'>
alert ('El Profesor a sido agregado con \u00c9xito!')
location.href="reg_prof.php";
</script>
<?php
}
}
else
{
?>
<script language="javascript">
alert("Usted no es Administrador");
window.location.href='principal.php';
</script>
<?php
}
?>
?>
<!--
print("
	<html>
		<script language='javascript'>
			alert ('Error, la cedula de identidad ya existe!')
			location.href="reg_prof.php";
		</script>
	</html>
");

print("
	<html>
		<script language='javascript'>
			alert ('El Profesor a sido agregado con Exito!')
			location.href="reg_prof.php";
		</script>
	</html>");
-->
