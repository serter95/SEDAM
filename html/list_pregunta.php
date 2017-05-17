<?php

function lista(){
	$tema = $_SESSION['tema'];
	$usuario = $_SESSION['nom_usuario'];



	if(empty($_GET['pag']))
			{
				$pag=1;
			}
			else
			{
				$pag = $_GET['pag'];
			}
			
			$sql_p = "select ci_profesor from profesor where nom_usuario='$usuario'";
			$cursor_p = mysql_query($sql_p);
			$dato_c = mysql_fetch_array($cursor_p);
			$ci_cp = $dato_c['ci_profesor'];
			
			$sql="select * from preguntas_tmp where ci_profesor='$ci_cp' and codig_tema='$tema'";
			$query=mysql_query($sql);
			$rows=mysql_num_rows($query);
		
			$can_temas= 5;
			$ultimapag = ceil($rows/$can_temas);
			
			$pag = (int)$pag;
			
			if($pag<0)
			{
				$pag = 1;
			}
			elseif($pag>$ultimapag)
			{
				$pag = $ultimapag;
			}
			
			$sql.= " LIMIT ".($pag-1)*$can_temas.",".$can_temas."";
			$query = mysql_query($sql);
			
	if($rows){
			?>

	<table class="tabla_02_2" cellspacing="2" width="630px">
		<tr class="tabla_tr_03_2"  >
				<th><lettab>Pregunta: </lettab></th>
				<th><lettab>Resp. Correcta: </lettab></th>
				<th><lettab>Distractor 1: </lettab></th>
				<th><lettab>Distractor 2: </lettab></th>
				<th><lettab>Distractor 3: </lettab></th>
				<th><lettab>Acci&oacute;n: </lettab></th>
		</tr>
	<?php

		while ( $dato_con = mysql_fetch_array($query))
		{

			$pregunta_bd = $dato_con['pregunta'];
			$respuesta_c_bd = $dato_con['respuesta_c'];
			$respuesta2_bd = $dato_con['respuesta2'];
			$respuesta3_bd = $dato_con['respuesta3'];
			$respuesta4_bd = $dato_con['respuesta4'];
			$dato_con['id_eva'];
		?>

			<tr class="tabla_tr_04_2">
				<td class="tabla_td_02" width="150px"><input type="text" name="pregunta" value="<?php echo $pregunta_bd ?>" title="<?php echo $pregunta_bd ?>" class="lista_pre_2" disabled/></td>
				<td class="tabla_td_02"><letcol><input type="text" name="respuesta_c" value="<?php echo $respuesta_c_bd ?>" title=" <?php echo $respuesta_c_bd ?>" class="lista_pre" disabled/></letcol></td>
				<td class="tabla_td_02"><input type="text" name="respuesta2" value="<?php echo $respuesta2_bd ?>" title=" <?php echo $respuesta2_bd ?>" class="lista_pre" disabled/></td>
				<td class="tabla_td_02"><input type="text" name="respuesta3" value="<?php echo $respuesta3_bd ?>" title=" <?php echo $respuesta3_bd ?>" class="lista_pre" disabled/></td>
				<td class="tabla_td_02"><input type="text" name="respuesta4" value="<?php echo $respuesta4_bd ?>" title=" <?php echo $respuesta4_bd ?>" class="lista_pre" disabled/></td>
				<td class="tabla_td_02">
				
					<a href="elim_evaluacion_tmp.php?id=<?php echo $dato_con['id_eva']?>&pregunta=<?php echo $dato_con['pregunta']?>" title="Presione para borrar al estudiante">
							<img height="32px" width="32px" src="../img/mal.png" class="inputsub" />
					</a>
				</td>
			</tr>

		<?php
		}
		$_SESSION['pregunta_p']=$pregunta_bd;
		
		?>
			<tr>
				<form action="gestor_crear_e.php" method="post">
					<input type="hidden" name="guardar" value="fin">
					<td colspan="6"><input type="submit" value=""></td>
				</form>
			</tr>
	</table>

		<?php
		$siguiente = $pag+1;
		$anterior = $pag-1;
		?>

	<table align="center" class="tabla_paginacion_02_2" cellspacing="2">
		<tr class="tabla_paginacion_tr_02_2">
			<th class="tabla_paginacion_th_02_2" align="right" width="280px">
			<letpag>
			
		<?php 
	if($pag != 1 and $pag>1)
	{
		?>
			<a href="?pag=<?=$anterior?>">
				<article class="pag_a1">
					Anterior
				</article>
			</a>
		<?php
	}
	?>
			</letpag>
			</th>
			<th class="tabla_paginacion_th_02_2" width="280px">
			<letpag>
	<?php
	if($pag == 1)
	{
		?>
			<article class="pag_d2">
				1
			</article>
		<?php
		$i=2;
		while ($i<=$ultimapag)
		{
		?>
			<a href="?pag=<?=$i?>">
				<article class="pag_a2">
					<?=$i?>
				</article>
			</a>
		<?php
		$i++;
		}
	}
	$c=1;
	while($c<=$ultimapag)
	{
		if($c==$pag  and $pag !=1)
		{
			?>
				<article class="pag_d2">
					<?=$c?>
				</article>
			<?php
		}
		elseif($pag != 1)
		{
			?>
				
					<a href="?pag=<?=$c?>">
						<article class="pag_a2">
							<?=$c?>
						</article></a>
				
			<?php
		}
		$c++;
	}
	?>
			</letpag>
			</th>
			<th class="tabla_paginacion_th_02_2" width="280px">
			<letpag>
	<?php
	if($pag <$ultimapag)
	{
		?>
			<a href="?pag=<?=$siguiente?>">
				<article class="pag_a3">
					Siguiente
				</article>
			</a>
		<?php
	}
		?>
			</letpag>
			</th>
		</tr>
	</table>

<?php
}
}
?>
