<?php
include ("seguridad.php");
include ("conexion.php");
$nivel = $_SESSION['nivel'];
$usuario = $_SESSION['nom_usuario'];
?>
<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>
<link rel="stylesheet" href="../css/estadistica.css" />
<link rel="stylesheet" href="../css/estilo.css" />

<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="dialogo.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>
<script language="javascript" src="validacion_act.js"></script>
</head>
<body>
	<section id="contenedor">
		<header id="header">
	<img src="../img/banner.png" class="banner" />
		</header>
		
		<nav id="botonera">
			<section id="salir">
				Usuario:"<?php echo $_SESSION["nom_d"]?>"&nbsp;(<?php echo $_SESSION["dueno"]?>) <a href="salir.php" title="Cerrar sesion">Salir</a>
			</section>
		</nav>
		
		<section id="cuerpo">
		<article class="menu">
		
			<?php
				include ("menu.php");
				$menu=menu();
				echo $menu;
			?>
			
		</article>

		<article class="contenido">
			<h2>Modificaci&oacute;n de la actividad '<?php echo $_REQUEST['nom_act'] ?>':</h2></br></br>
	<form action="editar.php" method="get" onsubmit="return validacion_mod()">
	
	<center>
	
	<table cellspacing="7">
	<tr>
		
			<input type="hidden" name="id_act" value="<?php echo $_REQUEST['id_act']?>"/>
			
			<input type="hidden" name="cedula_estudiantil" value="<?php echo $_REQUEST['cedula_estudiantil']?>"/>
			<input type="hidden" name="nom_est" value="<?php echo $_REQUEST['nom_est']?>"/>
			<input type="hidden" name="ape_est" value="<?php echo $_REQUEST['ape_est']?>"/>
					
		<td> <label><b><lettab>Indicadores evaluados:</lettab></b></label></br>
			<ast>*</ast><input type="number" name="indic_evaluados" id="indic_evaluados" value="<?php echo $_REQUEST['indic_evaluados']?>"
			 maxlength="2" max="10" min="0" placeholder="Ejemplo: 10" title="En este campo colocara el numero de indicadores evaluados" class="numero"/>
		</td>

		<td><label><b><lettab>Indicadores alcanzados:</lettab></b></label></br>
			<ast>*</ast><input type="number" name="indic_alcanzados" id="indic_alcanzados" value="<?php echo $_REQUEST['indic_alcanzados']?>"
			 maxlength="2" max="10" min="0" placeholder="Ejemplo: 5" title="En este campo colocara el numero de indicadores alcanzados" class="numero"/>
		</td>
	</tr>
	<tr>
		<td><label><b><lettab>Indicadores medianamente alcanzados:</lettab></b></label></br>
			<ast>*</ast><input type="number" name="indic_med_alcanzados" id="indic_med_alcanzados" 
			value="<?php echo $_REQUEST['indic_med_alcanzados']?>" maxlength="2" max="10" min="0" placeholder="Ejemplo: 3" 
			title="En este campo colocara el numero de indicadores medianamente alcanzados" class="numero"/>
		</td>	
		<td> <label><b><lettab>Indicadores no alcanzados:</lettab></b></label></br>
			<ast>*</ast><input type="number" name="indic_no_alcanzados" id="indic_no_alcanzados" 
			value="<?php echo $_REQUEST['indic_no_alcanzados']?>" maxlength="2" max="10" min="0" placeholder="Ejemplo: 2" 
			title="En este campo colocara el numero de indicadores no alcanzados" class="numero"/>
		</td>
	</tr>
	<tr>
		<td colspan="2" ><label><b><lettab>Actuaci&oacute;n del desempe&ntilde;o:</lettab></b></label></br>
			<ast>*</ast><textarea name="actua_desempeno" id="actua_desempeno" maxlength="250" placeholder="Ejemplo: El estudiante realizo..." 
			title="En este campo colocara la actuación del desempeno del estudiante"><?php echo $_REQUEST['actua_desempeno']?></textarea>
		</td>
	</tr>
	</table>
	
	<table>
	<tr>
		<td align="right">
		<input type="submit" value="" title="hacer click para modificar la actividad"/>
		<input type="reset" value="" title="Hacer click para refrescar los campos"/>
		</td>
		<td align="left">
		<article class="cancelar">
		<a href="detalle_act1.php?cedula_estudiantil=<?php echo $_REQUEST['cedula_estudiantil']?>&nom_est=<?php echo $_REQUEST['nom_est']
		?>&ape_est=<?php echo $_REQUEST['ape_est']?>" title="hacer click para cancelar la modificaci&oacute;n">
		<img height="32px" width="32px" src="../img/cancelar.png"></a>
		</article>
		</td>
	</tr>
	</table>

	</form>
	
	</br>
		<table>
			<tr>
				<td colspan="3"><lettab>Los campos que esten marcados con un '<ast>*</ast>' son obligatorios</lettab></td>
			</tr>
		</table>
	</center>
<?php

			if($nivel == 2)
			{
?>
</br>
	<b><lettab> Click para ver la evaluacion del estudiante: <input type="submit" id="mostrar_resultado" value="" style="background: url('../img/lupa2.png'); width:32px; height: 31px; center no-repeat;"></lettab></b>
	<div id="resultado">
			<?php
				//
				$sql_cp = "select ci_profesor from profesor where nom_usuario='$usuario'";
				$ejecutar_sql_cp = mysql_query($sql_cp);

				$dato_cp = mysql_fetch_array($ejecutar_sql_cp);
				$ci_cp = $dato_cp['ci_profesor'];

				/*$sql_ce = "select cedula_estudiantil from estudiante where ci_profesor='$ci_cp'";
				$ejecutar_sql_ce = mysql_query($sql_ce);

				$dato_ce = mysql_fetch_array($ejecutar_sql_ce);
				$ci_ce = $dato_ce['cedula_estudiantil'];*/

				$ci_ce = $_REQUEST['cedula_estudiantil'];

				//
				$id_act = $_REQUEST['id_act'];

				$sql_ac = "select id_pla from actividad where id_act = '$id_act'";
				$ejecutar_sql_ac = mysql_query($sql_ac);

				$dato_ac = mysql_fetch_array($ejecutar_sql_ac);
				$id_pla = $dato_ac['id_pla'];

				//
				$sql_pla = "select id_pla from planificacion where id_pla=".$id_pla."";
				$ejecutar_sql_pla = mysql_query($sql_pla);

				$dato_pla = mysql_fetch_array($ejecutar_sql_pla);
				$id_pla = $dato_pla['id_pla'];
				//
				$sql_rel = "select * from rel_est_eva where id_pla=$id_pla and cedula_estudiantil='$ci_ce'";
				$ejecutar_sql_rel = mysql_query($sql_rel);
				$rows = mysql_num_rows($ejecutar_sql_rel);
				
				if($rows){
				$dato_e = mysql_fetch_array($ejecutar_sql_rel);
				//$ci_pla = $dato_['id_pla'];

				$desarrollo = $dato_e['desarrollo'];
				$cant = $dato_e['cant'];

				$cant_t = $cant * 3;
				//Explode
				$explode_desarrollo = explode("|", $desarrollo);
				$i = 0;

				/*$sql_e = "select * from rel_est_eva where codig_tema = '$codig_tema' and cedula_estudiantil = '$ce'";
				$ejecutar_sql_e = mysql_query($sql_e);

				$dato_e = mysql_fetch_array($ejecutar_sql_e);*/

				?>
			<table class="tabla_02">
					<tr class="tabla_tr_03">
						<th width="300px"><lettab>Pregunta Realizada: </lettab></th>
						<th width="90px"><lettab>Tu Respuesta: </lettab></th>
						<th width="150px"><lettab>Aciertos Correctos </lettab></th>
						<th width="150"><lettab>Aciertos Inorrectos </lettab></th>
					</tr>
		<?php
		//$sql.= " LIMIT ".($pag-1)*$can_temas.",".$can_temas."";
		//$query = mysql_query($sql);
		
		while($i <= $cant_t)
		{
			?>
					<tr class="tabla_tr_04">
						<td class="tabla_td_02"><letcol><?php echo $explode_desarrollo[$i++]; ?></letcol></td>
						<td class="tabla_td_02"><letcol><?php echo $explode_desarrollo[$i++]; ?></letcol></td>
						<td class="tabla_td_02">

							<letcol>
							<?php 
								$contador = $explode_desarrollo[$i++];
								if($contador=='correcto')
								{
								?>
									Correcto
								<?php
								}
							?>
							</letcol>

						</td>
						<td align="justify" class="tabla_td_01">
							<letcol>
							<?php
								if($contador=='incorrecto')
								{
								?>
									Incorrecto
								<?php
								}
							?>
							</letcol>
						</td>
					</tr>
	
		<?php
		}
		?>
				</table>
				<?php
			}
			else
			{
				?>
					<script type="text/javascript">
						alert ('El estudiante no ha realizado la Evaluaci\u00f3n');
					</script>
				<?php
			}
		}
		?>
	</div>

</article>
		</section>
		
		<footer id="pie">
		<center>
			<b><letcol>Dise&ntilde;ado y Desarrollado por: Br Sergei Teran y Br Juan Rodr&iacute;guez</letcol></b>
		</center>
		</footer>
</section>
</body>
</html>
