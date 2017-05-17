<?php
	include("seguridad.php");
	include("conexion.php");
	include("obtener_fecha.php");
	
	$proyecto=$_POST['proyecto'];
	$descripcion=$_POST['descripcion'];
	$id_proyecto=$_POST['id'];
	$usuario = $_SESSION['nom_usuario'];
	/*Verificador de Nivel*/
	
	$sql = "SELECT nivel FROM usuario where nom_usuario='$usuario'";
	$ejecutar_sql=mysql_query($sql);
	$dato=mysql_fetch_array ($ejecutar_sql);
	$dato['nivel'];
	
	if ($dato['nivel']=='2')
	{
	/*Verificador de Nivel*/
				
				/*$sql="SELECT ci_profesor FROM profesor where nom_usuario='$usuario'";
				$ejecutar_sql=mysql_query($sql);
				$dato=mysql_fetch_array ($ejecutar_sql);
				
				$ci_profesor=$dato['ci_profesor'];*/

							$modificar="update proyecto set contenido='$proyecto', descripcion='$descripcion', ano='$ano' where id_proyecto = '$id_proyecto' ";
							mysql_query($modificar);

							$fecha=date('Y/m/d'); $hora=date('H:i:s');

							$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Modificacion de proyecto','$fecha','$hora')";

							mysql_query($aud);

							
						?>
							<script language="javascript">
								alert("Proyecto se ha Modificado con \u00c9xito");
								window.location.href='accion_proyecto.php';
							</script>
						<?php
					
	}
	else
	{					
?>
		<script language="javascript">
			alert("Usted no puede realizar esta acci\u00f3n");
			location.href='accion_proyecto.php';
		</script>
<?php
	
	}	
?>
