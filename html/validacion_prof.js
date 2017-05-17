//alert ("llamado al archivo js con exito");

function validacion()
	{
		var ci_prof = document.getElementById("ci_prof").value;
		var nombre = document.getElementById("nom_prof").value;
		var apellido = document.getElementById("ape_prof").value;
		var seccion = document.getElementById("seccion_prof").selectedIndex;
		
		if(ci_prof == null || ci_prof == 0 || /^\s+$/.test(ci_prof))
		{
			alert("Llene el campo (C.I) solo con n\u00fameros");
			return false;
		}

		if(ci_prof.length <= 5 || !(/^[0-9]+$/.test(ci_prof)))
		{
			alert("Revise nuevamente el campo (C.I), sus datos pueden estar incorrectos!");
			return false;
		}
		
		if(nombre == null || /^\s+$/.test(nombre) || nombre == 0)
		{
			alert("Llene el campo (Nombre) solo con letras");
			return false;
		}

		if(nombre.length <= 2 || !(/^[a-zA-Z]+$/.test(nombre)))
		{
			alert("Revise nuevamente el campo (Nombre), sus datos pueden estar incorrectos!");
			return false;
		}

		if(apellido == null || /^\s+$/.test(apellido) || apellido == 0)
		{
			alert("Llene el campo (Apellido) solo con letras");
			return false;
		}

		if(apellido.length <= 2 || !(/^[a-zA-Z]+$/.test(apellido)))
		{
			alert("Revise nuevamente el campo (Apellido), sus datos pueden estar incorrectos!");
			return false;
		}

		if( seccion == null || seccion == 0 )
		{
			alert("Elija una opci\u00f3n del campo (Secci\u00f3n)");
			return false;
		}

		return true;
	}

function validacion_mod()
	{
		var ci_prof = document.getElementById("ci_prof").value;
		var nombre = document.getElementById("nom_prof").value;
		var apellido = document.getElementById("ape_prof").value;
		var seccion = document.getElementById("seccion_prof").selectedIndex;
		
		if(ci_prof == null || ci_prof == 0 || /^\s+$/.test(ci_prof))
		{
			alert("Llene el campo (C.I) solo con n\u00fameros");
			return false;
		}

		if(ci_prof.length <= 5 || !(/^[0-9]+$/.test(ci_prof)))
		{
			alert("Revise nuevamente el campo (C.I), sus datos pueden estar incorrectos!");
			return false;
		}
		
		if(nombre == null || /^\s+$/.test(nombre) || nombre == 0)
		{
			alert("Llene el campo (Nombre) solo con letras");
			return false;
		}

		if(nombre.length <= 2 || !(/^[a-zA-Z]+$/.test(nombre)))
		{
			alert("Revise nuevamente el campo (Nombre), sus datos pueden estar incorrectos!");
			return false;
		}

		if(apellido == null || /^\s+$/.test(apellido) || apellido == 0)
		{
			alert("Llene el campo (Apellido) solo con letras");
			return false;
		}

		if(apellido.length <= 2 || !(/^[a-zA-Z]+$/.test(apellido)))
		{
			alert("Revise nuevamente el campo (Apellido), sus datos pueden estar incorrectos!");
			return false;
		}

		if( seccion == null)
		{
			alert("Elija una opci\u00f3n del campo (Secci\u00f3n)");
			return false;
		}

		return true;
	}

function validacion_bus()
	{
		var bus_prof = document.getElementById("bus_prof").selectedIndex;

		if(bus_prof == null || bus_prof == 0)
		{
			alert("Seleccione la c\u00e9dula del profesor que desea buscar");
			return false;
		}

		return true;
	}
