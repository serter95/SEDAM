<?php
include ("seguridad.php");
include ('conexion.php');

$nivel=$_REQUEST['nivel'];

if ($nivel==2)
{
		$usu="UPDATE profesor SET nom_usuario=[NULL] WHERE ci_profesor='".$_REQUEST['ced']."'";
		
		mysql_query($usu);
}

if ($nivel==3)
{
		$usu="UPDATE estudiante SET nom_usuario=[NULL] WHERE cedula_estudiantil='".$_REQUEST['ced']."'";
		
		mysql_query($usu);
}

$sql="UPDATE usuario SET estatus='1' WHERE id='".$_REQUEST['id']."'";

mysql_query($sql);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Eliminacion de usuario','$fecha','$hora')";

mysql_query($aud);
?>
<script language="javascript">
	alert('El usuario fue eliminado con \u00e9xito');
	location.href='consult_usuario.php';
</script>
