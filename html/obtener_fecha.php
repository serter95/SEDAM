<?php
		$hoy = getdate();

		if ($hoy["mon"] >= 9)
		{
			$ano_sig=$hoy["year"] + 1 ;
			
			$ano = "".$hoy["year"]."-".$ano_sig."";
		}

		if ($hoy["mon"] < 9)
		{
			$ano_ant=$hoy["year"] - 1;
			
			$ano = "".$ano_ant."-".$hoy["year"]."";
		}
?>
