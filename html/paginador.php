<?php
	include("conexion.php");
	
	if(empty($_GET['pag']))
	{
		$pag=1;
	}
	else
	{
		$pag = $_GET['pag'];
	}
	
	$sql="select * from tema";
	$query=mysql_query($sql);
	$rows=mysql_num_rows($query);

	$can_temas= 3;
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
	
	
	$sql.= " LIMIT ".(($pag-1)*$can_temas).",".$can_temas."";
	//$lista1 = mysql_query(" SELECT * FROM eventos_usuarios ORDER BY id_evento_usuario DESC LIMIT ".(($pagActual-1)*$regVistos).",".$regVistos."");
	$query = mysql_query($sql);
	
	?>
		///////////////
	<?php
	
	while($datos=mysql_fetch_array($query))
	{
		
			//echo $codigo=$datos['codig_tema'];
	}
	
	
		///////////////
	
	
	$siguiente = $pag+1;
	$anterior = $pag-1;

		if($pag == 1)
	{
		?>
		 1 <?php
		for($i=2;$i<=$ultimapag;$i++)
		{
		?>
			<a href="?pag=<?=$i?>"><?=$i?></a>
		<?php
		}
	}
	if($pag != 1 and $pag>1)
	{
		?>
			<a href="?pag=<?=$anterior?>">Anterior</a>
		<?php
	}
	
	for($c=1;$c<=$ultimapag;$c++)
	{
		if($c==$pag and $pag !=1)
		{
			?>
				<?=$c?>
			<?php
		}
		elseif($pag != 1)
		{
			?>
				<a href="?pag=<?=$c?>"><?=$c?></a>
			<?php
		}
	}
	
	if($pag <$ultimapag)
	{
		?>
			<a href="?pag=<?=$siguiente?>">Siguiente</a>
		<?php
	}
	else
	{
		?>
		
		<?php
	}
?>
