<?php
include ("seguridad.php");
include ('conexion.php');

$sql="UPDATE tema SET estatus='1' WHERE codig_tema ='".$_REQUEST['cod_tema']."'";
mysql_query($sql);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Eliminacion de tema','$fecha','$hora')";

mysql_query($aud);

?>
<script language="javascript">
	alert('El Tema fue eliminado con \u00e9xito');
	location.href='accion_teoria.php';
</script>
