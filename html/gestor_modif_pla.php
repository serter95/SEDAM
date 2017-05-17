<?php
	include("seguridad.php");
	include("conexion.php");
	include("obtener_fecha.php");
	
	$usuario=$_SESSION["nom_usuario"];
	
	$proyecto=trim($_POST['proyecto']);
	$num_planificacion=trim($_POST['num_planificacion']);
	$fecha_i=trim($_POST['fecha_i']);
	$fecha_f=trim($_POST['fecha_f']);
	$actividad=trim($_POST['actividad']);
	$descripcion=trim($_POST['descripcion']);
	$id = trim($_POST['id']);
	
	$sql = "SELECT nivel FROM usuario where nom_usuario='$usuario'";
	$ejecutar_sql=mysql_query($sql);
	$dato=mysql_fetch_array ($ejecutar_sql);
	$dato['nivel'];
	
	if ($dato['nivel']=='2')
	{
	
		if(!empty($proyecto) AND !empty($num_planificacion) AND !empty($fecha_i) AND !empty($fecha_f)
		 AND !empty($actividad) AND !empty($descripcion))
		{	

						$modificar_pla="update planificacion set num_pla = '$num_planificacion', fecha_i = '$fecha_i', fecha_f = '$fecha_f', ano = '$ano', id_proyecto = '$proyecto' where id_pla = '$id' ";
						mysql_query($modificar_pla);
						
						$modificar_act="update actividad set nom_act = '$actividad', descripcion = '$descripcion' where id_pla = '$id' ";
						mysql_query($modificar_act);
						
$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Modificacion de planificacion','$fecha','$hora')";

mysql_query($aud);

						?>
							<script language="javascript">
								alert("Planificaci\u00f3n Modificada con \u00e9xito");
								window.location.href='accion_planificacion.php';
							</script> 
						<?php
		}
		else
		{
			?>
				<script language="javascript">
					alert("Hay campos vacios");
					window.location.href="crear_planificacion.php";
				</script>
			<?php
		}
				
	}
	else
	{
?>
		<script language="javascript">
			alert("Usted no puede realizar esta acci\u00f3n");
			location.href='principal.php';
		</script>
<?php
	}
?>
