<?php
include ("seguridad.php");
include ('conexion.php');

$sql="UPDATE profesor SET estatus='1' WHERE id ='".$_REQUEST['id']."'";
mysql_query($sql);

$b="SELECT * FROM profesor WHERE id='".$_REQUEST['id']."'";
$bus=mysql_query($b);

while($busqueda=mysql_fetch_assoc($bus))
	{
		$nom_usuario=$busqueda['nom_usuario'];
		$ci_prof=$busqueda['ci_profesor'];
	}

$elim_u="UPDATE usuario SET estatus='1' WHERE nom_usuario='$nom_usuario'";
mysql_query($elim_u);

$pro="UPDATE proyecto SET estatus='1' WHERE ci_profesor='$ci_prof'";
mysql_query($pro);

$pla="UPDATE planificacion SET estatus='1' WHERE ci_profesor='$ci_prof'";
mysql_query($pla);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Eliminacion de profesor','$fecha','$hora')";

mysql_query($aud);
?>
<script language="javascript">
	alert('El Profesor fue eliminado con \u00e9xito');
	location.href='consult_prof.php';
</script>
