//alert("validarpla.js exitoso");
function validar_planif()
{
	var proyecto = document.getElementById("proyecto").selectedIndex;
	var num_planificacion = document.getElementById("num_planificacion").value;
	var datepicker_i = document.getElementById("datepicker_i").value;
	var datepicker_f = document.getElementById("datepicker_f").value;
	var actividad = document.getElementById("actividad").value;
	var descripcion = document.getElementById("descripcion").value;

	var hoy = newdate();

	if(proyecto == null || proyecto == 0)
	{
		alert("Elija un opci\u00f3n del campo (proyecto)");
		return false;
	}

	if(num_planificacion == null || num_planificacion == 0 || /^\s+$/.test(num_planificacion) || !(/^[0-9]+$/.test(num_planificacion)))
	{
		alert("Llene el campo (N\u00famero de planificaci\u00f3n) solo con n\u00fameros");
		return false;
	}

	if(num_planificacion > 10 || num_planificacion < 1)
	{
		alert("El campo (N\u00famero de planificaci\u00f3n) de ser menor a 10 y mayor que 1");
		return false;
	}

	if(datepicker_i == null || datepicker_i == 0 || /^\s+$/.test(datepicker_i))
	{
		alert("Escoja una fecha en el campo (Fecha Inicial)");
		return false;
	}

	if(!(/^[0-9]{4}(\/|-)[0-9]{2}(\/|-)[0-9]{2}$/.test(datepicker_i)))
	{
		alert("La fecha del campo (Fecha Inicial) debe ordenarse en A\u00f1o/Mes/D\u00eda o A\u00f1o-Mes-D\u00eda");
		return false;
	}
	
	if(datepicker_f == null || datepicker_f == 0 || /^\s+$/.test(datepicker_f))
	{
		alert("Escoja una fecha en el campo (Fecha Final)");
		return false;
	}

	if(!(/^[0-9]{4}(\/|-)[0-9]{2}(\/|-)[0-9]{2}$/.test(datepicker_f)))
	{
		alert("La fecha del campo (Fecha Final) debe ordenarse en A\u00f1o/Mes/D\u00eda o A\u00f1o-Mes-D\u00eda");
		return false;
	}

	if(datepicker_i >= datepicker_f)
	{
		alert("La fecha no es valida");
		return false;
	}

	if(actividad == null || actividad == 0 || /^\s+$/.test(actividad) || !(/^[a-zA-Z]/.test(actividad)))
	{
		alert("Llene el campo (Actividad) comenzando con letras");
		return false;
	}

	if(actividad.length > 50)
	{
		alert("El campo (Actividad) no debe exceder los 50 caracteres");
		return false;
	}

	if(descripcion == null || descripcion == 0 || /^\s+$/.test(descripcion) || !(/^[a-zA-Z]/.test(descripcion)))
	{
		alert("Llene el campo (Descripci\u00f3n) comenzando con letras");
		return false;
	}

	if(descripcion.length >= 257)
	{
		alert("El campo (Descripci\u00f3n) no debe exceder los 256 caracteres");
		return false;
	}

return true;
}

function validar_planif_m()
{
	var proyecto = document.getElementById("proyecto").selectedIndex;
	var num_planificacion = document.getElementById("num_planificacion").value;
	var datepicker_i = document.getElementById("datepicker_i").value;
	var datepicker_f = document.getElementById("datepicker_f").value;
	var actividad = document.getElementById("actividad").value;
	var descripcion = document.getElementById("descripcion").value;

	if(proyecto == null)
	{
		alert("Elija un opci\u00f3n del campo (proyecto)");
		return false;
	}

	if(num_planificacion == null || num_planificacion == 0 || /^\s+$/.test(num_planificacion) || !(/^[0-9]+$/.test(num_planificacion)))
	{
		alert("Llene el campo (N\u00famero de planificaci\u00f3n) solo con n\u00fameros");
		return false;
	}

	if(num_planificacion > 10 || num_planificacion < 1)
	{
		alert("El campo (N\u00famero de planificaci\u00f3n) de ser menor a 10 y mayor que 1");
		return false;
	}

	if(datepicker_i == null || datepicker_i == 0 || /^\s+$/.test(datepicker_i))
	{
		alert("Escoja una fecha en el campo (Fecha Inicial)");
		return false;
	}

	if(!(/^[0-9]{4}(\/|-)[0-9]{2}(\/|-)[0-9]{2}$/.test(datepicker_i)))
	{
		alert("La fecha del campo (Fecha Inicial) debe ordenarse en A\u00f1o/Mes/D\u00eda o A\u00f1o-Mes-D\u00eda ");
		return false;
	}
	
	if(datepicker_f == null || datepicker_f == 0 || /^\s+$/.test(datepicker_f))
	{
		alert("Escoja una fecha en el campo (Fecha Final)");
		return false;
	}

	if(!(/^[0-9]{4}(\/|-)[0-9]{2}(\/|-)[0-9]{2}$/.test(datepicker_f)))
	{
		alert("La fecha del campo (Fecha Final) debe ordenarse en A\u00f1o/Mes/D\u00eda o A\u00f1o-Mes-D\u00eda");
		return false;
	}

	if(datepicker_i > datepicker_f)
	{
		alert("La fecha no es valida");
		return false;
	}

	if(actividad == null || actividad == 0 || /^\s+$/.test(actividad) || !(/^[a-zA-Z]/.test(actividad)))
	{
		alert("Llene el campo (Actividad) comenzando con letras");
		return false;
	}

	if(actividad.length > 50)
	{
		alert("El campo (Actividad) no debe exceder los 50 caracteres");
		return false;
	}

	if(descripcion == null || descripcion == 0 || /^\s+$/.test(descripcion) || !(/^[a-zA-Z]/.test(descripcion)))
	{
		alert("Llene el campo (Descripci\u00f3n) comenzando con letras");
		return false;
	}

	if(descripcion.length >= 257)
	{
		alert("El campo (Descripci\u00f3n) no debe exceder los 256 caracteres");
		return false;
	}

return true;
}


