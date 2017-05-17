<?php

include ("seguridad.php");
include ('conexion.php');

$id=$_REQUEST['id'];

$sql="UPDATE proyecto SET estatus='1' WHERE id_proyecto ='$id'";
mysql_query($sql);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Eliminacion de proyecto','$fecha','$hora')";

mysql_query($aud);

?>
<script language="javascript">
	alert('El Proyecto fue eliminado con \u00e9xito');
	location.href='accion_proyecto.php';
</script>

