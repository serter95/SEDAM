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
	
	$sql = "SELECT nivel FROM usuario where nom_usuario='$usuario'";
	$ejecutar_sql=mysql_query($sql);
	$dato=mysql_fetch_array ($ejecutar_sql);
	$dato['nivel'];
	
	if ($dato['nivel']=='2')
	{
	
		if(!empty($proyecto) AND !empty($num_planificacion) AND !empty($fecha_i) AND !empty($fecha_f)
		 AND !empty($actividad) AND !empty($descripcion))
		{	
			//echo " todos los campos estan llenos";
			
			$c="select ci_profesor from profesor where nom_usuario='$usuario'";
			$cursor=mysql_query($c);

			$ci=mysql_fetch_array($cursor);

			$ci_profesor=$ci['ci_profesor'];
			
			//echo $ci_profesor;
			
			
				/*$p = "SELECT * FROM planificacion INNER JOIN actividad ON planificacion.ci_profesor='$ci_profesor' 
				AND actividad.ci_profesor='$ci_profesor' AND estatus='0' AND ano='$ano'";
				$pl=mysql_query($p);*/

				$pla = "select * from planificacion where ci_profesor = '$ci_profesor'";
				$ejecutar_pla= mysql_query($pla);
					
						while($dato_pla=mysql_fetch_array($ejecutar_pla))
						{
							$num_pla=$dato_pla['num_pla'];
							$f_i=$dato_pla['fecha_i'];
							$f_f=$dato_pla['fecha_f'];
						}

				$act = "select * from actividad where ci_profesor = '$ci_profesor'";
				$ejecutar_act = mysql_query($act);
				
				while($dato_act=mysql_fetch_array($ejecutar_act))
						{
							$nom_act=$dato_act['nom_act'];
							$descrip=$dato_act['descripcion'];
						}

				//echo $nom_act."".$descrip;
				
					if( ($num_planificacion==$num_pla) || ($fecha_i == $f_i) || ($fecha_f==$f_f) || ($actividad==$nom_act) || ($descripcion==$descrip) )
					{
						?>
							<script language="javascript">
								alert ("La planificaci\u00f3n ya existe");
								window.location.href='crear_planificacion.php';
							</script>
						<?php
					}
					
				//echo $codigo_planificacion." ".$num_planificacion." ".$fecha_i." ".$fecha_f." ".$ci_profesor." ".$proyecto." ".$actividad." ".$descripcion;
					
				/*	if (($codigo_planificacion!=$cod_pla) AND ($num_planificacion!=$num_pla) AND ($fecha_i!=$f_i) AND 
					($fecha_f!=$f_f) AND ($actividad!=$nom_act) AND ($descripcion!=$descrip))
				*/	
					else
					{

						$fecha_c = "select * from planificacion where ci_profesor = '$ci_profesor' and fecha_i ='f_i' and fecha_f = 'f_f' ";
						$ejecutar_c = mysql_query($fecha_c);
						$rows_c = mysql_num_rows($ejecutar_c);

						if($rows_c)
						{
							?>
								<script language="javascript">
									alert ("La planificaci\u00f3n ya existe");
									window.location.href='crear_planificacion.php';
								</script>
							<?php
						}
						else
						{
						$sql="INSERT INTO planificacion(num_pla, fecha_i, fecha_f, ano, estatus, ci_profesor, 
						id_proyecto) VALUES ($num_planificacion,'$fecha_i','$fecha_f', '$ano', 0, $ci_profesor, $proyecto)";
						
						mysql_query($sql);
						
						$sel="SELECT id_pla FROM planificacion ORDER BY id_pla ASC ";
						$sele=mysql_query($sel);
						while($d=mysql_fetch_assoc($sele))
						{
						$id_planif=$d['id_pla'];
						}
						
						$sql="INSERT INTO actividad(nom_act, descripcion, id_pla) VALUES
						 ('$actividad','$descripcion',$id_planif)";
						
						mysql_query($sql);
						
						$i="SELECT id_act FROM actividad ORDER BY id_act ASC";
						$id=mysql_query($i);
						while($id_a=mysql_fetch_assoc($id))
						{
							$id_act=$id_a['id_act'];
						}
						
						//echo $id_act;
										
						$ci="SELECT cedula_estudiantil FROM estudiante WHERE ci_profesor='$ci_profesor' AND estatus='0' AND ano='$ano'";
						$ci_es=mysql_query($ci);
						while($ci_est=mysql_fetch_assoc($ci_es))
						{
							$cedula_estudiantil=$ci_est['cedula_estudiantil'];
							
							$rel="INSERT INTO rel_est_act (cedula_estudiantil,id_act,ano,estatus) VALUES ('$cedula_estudiantil',$id_act,'$ano',0)";
							mysql_query($rel);
							
							$indic="INSERT INTO indicadores (indic_evaluados,indic_alcanzados,indic_med_alcanzados,indic_no_alcanzados,
							actua_desempeno,cedula_estudiantil,id_act) VALUES (' ',' ',' ',' ',' ',$cedula_estudiantil,$id_act)";
							
							mysql_query($indic);
							
							$fecha=date('Y/m/d'); $hora=date('H:i:s');

							$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Insercion de planificacion','$fecha','$hora')";

							mysql_query($aud);
						}
						
						?>
							<script language="javascript">
								alert("Planificaci\u00f3n guardada con \u00e9xito");
								window.location.href='crear_planificacion.php';
							</script> 
						<?php

					}
				}
		
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
			alert("Usted no es un profesor");
			location.href='principal.php';
		</script>
<?php
	}
?>
