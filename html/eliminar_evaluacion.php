<?php
include ("seguridad.php");
include ('conexion.php');

$sql="UPDATE evaluacion SET estatus='1' WHERE id_eva ='".$_REQUEST['id']."'";
mysql_query($sql);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Eliminacion de evaluacion','$fecha','$hora')";

mysql_query($aud);
?>
<script language="javascript">
	alert('La Evaluaci\u00f3n fue eliminado con \u00e9xito');
	location.href='accion_evaluacion.php';
</script>
