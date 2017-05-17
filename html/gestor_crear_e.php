<?php
	include ('conexion.php');
	include ('seguridad.php');
	include ('obtener_fecha.php');
	error_reporting(E_ALL^E_NOTICE);
	$tema = $_SESSION['tema'];

	$planificacion = $_SESSION['planificacion'];

		$usuario=$_SESSION['nom_usuario'];
		$sql_cp = "select ci_profesor from profesor where nom_usuario='$usuario'";
		$cursor_cp = mysql_query($sql_cp);

		$dato_cp = mysql_fetch_array($cursor_cp);
		$ci_cp = $dato_cp['ci_profesor'];

if($_REQUEST['guardar'] == 'fin')
				{
					$select_fin = "select * from preguntas_tmp where codig_tema='$tema'";
					$ejecutar_select = mysql_query($select_fin);
					$rows_e=mysql_num_rows($ejecutar_select);
					while($select=mysql_fetch_array($ejecutar_select))
					{
						$campo1= $select['pregunta'];
						$campo2= $select['respuesta_c'];
						$campo3= $select['respuesta2'];
						$campo4= $select['respuesta3'];
						$campo5= $select['respuesta4'];
						$campo6= $select['codig_tema'];
						$campo7= $select['id_pla'];
						$campo8= $select['ci_profesor'];
						
						$rel="INSERT INTO evaluacion (pregunta, respuesta_c, respuesta2, respuesta3, respuesta4, codig_tema, id_pla, ci_profesor, ano, activador) VALUES ('$campo1', '$campo2', '$campo3', '$campo4', '$campo5', '$campo6', '$campo7', '$campo8', '$ano', 1 )";
						mysql_query($rel);

						$fecha=date('Y/m/d'); $hora=date('H:i:s');

						$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Insercion de evaluacion','$fecha','$hora')";

						mysql_query($aud);

					}
				if($rows_e)
				{

					$eliminar="DELETE FROM preguntas_tmp where codig_tema='$tema' and ci_profesor='$ci_cp' ";
					mysql_query($eliminar);
					?>
						<script type="text/javascript">
							alert ("Evaluaciones Cargadas!");
							window.location.href="accion_evaluacion.php";
						</script>
					<?php
				}
}
/*Vdefinicion de variables*/
	$problema = $_POST['problema'];
	$respuesta = $_POST['respuesta'];
	$valor2 = $_POST['valor2'];
	$valor3 = $_POST['valor3'];
	$valor4 = $_POST['valor4'];

if($_REQUEST['activador']=='tmp'){
if (($problema!="") || ($planificacion_r!="") || ($tema_r!="") || ($respuesta!="") || ($valor2!="") || ($valor3!="") || ($valor4!="")) {


			//INICIO DE COMPARACION DE DATOS EN LA BD
			$sql_com = "select * from preguntas_tmp where ci_profesor='$ci_cp'";
			$cursor_com = mysql_query($sql_com);
			$rows_com = mysql_num_rows($cursor_com);

			while ($dato_com = mysql_fetch_array($cursor_com))
			{
				$problema_bd = $dato_com['pregunta'];
			}

			if($problema!=$problema_bd)
			{

				$sql="insert into preguntas_tmp ( pregunta, respuesta_c, respuesta2, respuesta3, respuesta4, codig_tema, id_pla, ci_profesor, estatus) values ('$problema', '$respuesta', '$valor2', '$valor3', '$valor4', '$tema', '$planificacion', '$ci_cp' ,'0' )";

				//$sql = "insert into preguntas_tmp (codig_evaluacion, pregunta, respuesta_c, respuesta2, respuesta3, respuesta4, codig_tema, id_pla, ci_profesor, estatus) valies ('$cod_eva', '$problema', '$respuesta', '$valor2', '$valor3', '$valor4', '$tema', '$planificacion', '$ci_cp', 0 )";
				mysql_query($sql);

				?>
					<script>
						location.href="crear_evaluacion.php";
					</script>
				<?php
			}
			else
			{
				?>
					<script type="text/javascript">
						alert('Ya existe esa pregunta');
						location.href="crear_evaluacion.php";
					</script>
				<?php
			}

}

else {

		
		?>
		<script type="text/javascript">
			alert ("Existe Campos Vacios");
			window.location.href="crear_evaluacion.php";
		</script>
		<?php
	}
}

?>
