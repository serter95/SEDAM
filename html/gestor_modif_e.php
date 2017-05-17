<?php
	include ('conexion.php');
	include ('seguridad.php');
	include ('obtener_fecha.php');
	error_reporting(E_ALL^E_NOTICE);

		$usuario=$_SESSION['nom_usuario'];
		$sql_cp = "select ci_profesor from profesor where nom_usuario='$usuario'";
		$cursor_cp = mysql_query($sql_cp);

		$dato_cp = mysql_fetch_array($cursor_cp);
		$ci_cp = $dato_cp['ci_profesor'];


	$planificacion_c = $_POST['planificacion'];
	$tema_c = $_POST['tema'];

	$planificacion_e=explode("-", $planificacion_c);
	$tema_e=explode(" - ", $tema_c);
	
	echo $tema = $tema_e[1];
	echo $planificacion = $planificacion_e[1];

/*Vdefinicion de variables*/
	$problema = $_POST['problema'];
	$respuesta = $_POST['respuesta'];
	$valor2 = $_POST['valor2'];
	$valor3 = $_POST['valor3'];
	$valor4 = $_POST['valor4'];
	$id = $_POST['id'];

if($_REQUEST['activador']=='tmp'){
if (($problema!="") || ($planificacion!="") || ($tema!="") || ($respuesta!="") || ($valor2!="") || ($valor3!="") || ($valor4!="")) {


			//INICIO DE COMPARACION DE DATOS EN LA BD

				$sql="insert into preguntas_tmp ( pregunta, respuesta_c, respuesta2, respuesta3, respuesta4, codig_tema, id_pla, ci_profesor, estatus) values ('$problema', '$respuesta', '$valor2', '$valor3', '$valor4', '$tema', '$planificacion', '$ci_cp' ,'0' )";
			
				$modificar_pla="update evaluacion set pregunta = '$problema', respuesta_c = '$respuesta', respuesta2 = '$valor2', respuesta3 = '$valor3', respuesta4 = '$valor4', codig_tema = '$tema',   id_pla = '$planificacion',  ano = '$ano' where id_eva = '$id' ";
				mysql_query($modificar_pla);
				//$sql = "insert into preguntas_tmp (codig_evaluacion, pregunta, respuesta_c, respuesta2, respuesta3, respuesta4, codig_tema, id_pla, ci_profesor, estatus) valies ('$cod_eva', '$problema', '$respuesta', '$valor2', '$valor3', '$valor4', '$tema', '$planificacion', '$ci_cp', 0 )";

				$fecha=date('Y/m/d'); $hora=date('H:i:s');

				$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Modificacion de evaluacion','$fecha','$hora')";

				mysql_query($aud);

				?>
					<script>
						alert ('Evaluaci\u00f3n Modificada con \u00c9xito');
						location.href="accion_evaluacion.php";
					</script>
				<?php
}

else {

		
		?>
		<script type="text/javascript">
			alert ("Existen Campos Vacios");
			window.location.href="crear_evaluacion.php";
		</script>
		<?php
	}
}

?>
