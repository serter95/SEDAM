<?php
	include("seguridad.php");
	include("conexion.php");
	include("obtener_fecha.php");
	
	$usuario=$_SESSION["nom_usuario"];
	$proyecto=$_POST['proyecto'];
	$num_proyecto=$_POST['num_proyecto'];
	$descripcion=$_POST['descripcion'];

	/*Verificador de Nivel*/
	
	$sql = "SELECT nivel FROM usuario where nom_usuario='$usuario'";
	$ejecutar_sql=mysql_query($sql);
	$dato=mysql_fetch_array ($ejecutar_sql);
	$dato['nivel'];
	
	if ($dato['nivel']=='2')
	{
	/*Verificador de Nivel*/
				
				$sql="SELECT ci_profesor FROM profesor where nom_usuario='$usuario'";
				$ejecutar_sql=mysql_query($sql);
				$dato=mysql_fetch_array ($ejecutar_sql);
				
				$ci_profesor=$dato['ci_profesor'];
				
				//$cod_proyecto="".$ci_profesor.$ano.$num_proyecto."";
				
				$sql = "SELECT * FROM proyecto where ci_profesor='$ci_profesor' and estatus='0' and ano='$ano'";
				$ejecutar_sql=mysql_query($sql);
					while($dato=mysql_fetch_array($ejecutar_sql))
					{
						$proyect=$dato['contenido'];
						$num_pro=$dato['num_proyecto'];
						$descrip=$dato['descripcion'];
					}
					if( ($proyecto==$proyect)  || ($num_proyecto==$num_pro) || ($descripcion==$descrip))

					{
						if($proyecto==$proyect)
						{
						?>
							<script type="text/javascript">
								alert ("El contenido del proyecto ya existe");
								window.location.href='crear_proyecto.php';
							</script>
						<?php
						}
							
						if($num_proyecto==$num_pro)
						{
						?>
							<script type="text/javascript">
								alert ("El n\u00famero del proyecto ya existe");
								window.location.href='crear_proyecto.php';
							</script>
						<?php
						}
							
						if($descripcion==$descrip)
						{
						?>
							<script type="text/javascript">
								alert ("La descripci\u00f3n del proyecto ya existe");
								window.location.href='crear_proyecto.php';
							</script>
						<?php
						}
					}
						else
						{
							$sql="INSERT INTO proyecto(num_proyecto, contenido, descripcion, ano, estatus, ci_profesor)
							values ($num_proyecto,'$proyecto','$descripcion','$ano', 0,$ci_profesor)";
							
							mysql_query($sql);
							
							$fecha=date('Y/m/d'); $hora=date('H:i:s');

							$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Insercion de proyecto','$fecha','$hora')";

							mysql_query($aud);


						?>
							<script language="javascript">
								alert("Proyecto Creado con \u00c9xito");
								window.location.href='crear_proyecto.php';
							</script>
						<?php
						}	
					
	}
	else
	{					
?>
		<script language="javascript">
			alert("Usted no es un profesor");
			location.href='principal.php';
		</script>
<?php
	
	}	
?>
