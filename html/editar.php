<?php
include ("seguridad.php");
include('conexion.php');

$sql="UPDATE indicadores SET indic_evaluados='".trim($_REQUEST['indic_evaluados'])."',indic_alcanzados='".trim($_REQUEST['indic_alcanzados'])."'
,indic_med_alcanzados='".trim($_REQUEST['indic_med_alcanzados'])."',indic_no_alcanzados='".trim($_REQUEST['indic_no_alcanzados'])."'
,actua_desempeno='".ucfirst( trim($_REQUEST['actua_desempeno']))."' WHERE id_act='".$_REQUEST['id_act']."' 
AND cedula_estudiantil='".$_REQUEST['cedula_estudiantil']."'";

mysql_query($sql);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Modificacion de Indicadores','$fecha','$hora')";

mysql_query($aud);

?>
<script language="javascript">
alert('Indicadores Editados con Exito!')
location.href='detalle_act1.php?cedula_estudiantil=<?php echo $_REQUEST['cedula_estudiantil']?>&nom_est=<?php echo $_REQUEST['nom_est']
?>&ape_est=<?php echo $_REQUEST['ape_est']?>';
</script>
