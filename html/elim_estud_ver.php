<?php
include ("seguridad.php");
include ('conexion.php');

$ced=$_REQUEST['cedula_estudiantil'];

$sql="UPDATE estudiante SET estatus='1' WHERE cedula_estudiantil='$ced'";
mysql_query($sql);

$act="SELECT id_act FROM rel_est_act WHERE cedula_estudiantil='$ced'";
$con=mysql_query($act);

while($dato=mysql_fetch_array($con))
	{
		$elim="UPDATE actividad SET estatus='1' WHERE id_act='".$dato['id_act']."'";
		mysql_query($elim);
	}

$rel="UPDATE rel_est_act SET estatus='1' WHERE cedula_estudiantil='$ced'";
mysql_query($rel);

$sel="SELECT nom_usuario FROM estudiante WHERE cedula_estudiantil='$ced'";
$nom=mysql_query($sel);
$nom_u=mysql_fetch_assoc($nom);
$nom_usuario=$nom_u['nom_usuario'];

$usu="UPDATE usuario SET estatus='1' WHERE nom_usuario='$nom_usuario'";
mysql_query($usu);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Eliminacion de estudiante','$fecha','$hora')";

mysql_query($aud);
?>
<script language="javascript">
	alert('El estudiante fue eliminado con \u00e9xito');
	location.href='muestra_estudiante.php';
</script>
