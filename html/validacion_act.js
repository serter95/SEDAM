//alert ("llamado al archivo js con exito");

/*function soloLetras(e);
	{
		key = e.keyCode ||
	}
*/

function validacion_mod()

	{
		var campo2 = document.getElementById("indic_evaluados").value;
		var campo3 = document.getElementById("indic_alcanzados").value;
		var campo4 = document.getElementById("indic_med_alcanzados").value;
		var campo5 = document.getElementById("indic_no_alcanzados").value;
		var campo6 = document.getElementById("actua_desempeno").value;


	if(campo2 == null || campo2.length == 0 || /^\s+$/.test(campo2) || !(/^[0-9]+$/.test(campo2)))
		{
			alert("Llene el campo (indicadores evaluados) solo con n\u00fameros positivos");
			return false;
		}

	if(campo3 == null || campo3.length == 0 || /^\s+$/.test(campo3) || !(/^[0-9]+$/.test(campo3)))
		{
			alert("Llene el campo (indicadores alcanzados) solo con n\u00fameros positivos");
			return false;
		}

	if(campo4 == null || campo4.length == 0 || /^\s+$/.test(campo4) || !(/^[0-9]+$/.test(campo4)))
		{
			alert("Llene el campo (indicadores medianamente alcanzados) solo con n\u00fameros positivos");
			return false;
		}

	if(campo5 == null || campo5.length == 0 || /^\s+$/.test(campo5) || !(/^[0-9]+$/.test(campo5)))
		{
			alert("Llene el campo (indicadores no alcanzados) solo con n\u00fameros positivos");
			return false;
		}

	if(campo6 == null || campo6.length == 0 || /^\s+$/.test(campo6) || !(/^[a-zA-Z]/.test(campo6)))
		{
			alert("Llene el campo (actuaci\u00f3n del desempe\u00f1o) comenzando con letras");
			return false;
		}

	return true;

	}
