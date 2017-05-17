$(function() {
    $( "#datepicker_i" ).datepicker();
  });

$(function() {
    $( "#datepicker_f" ).datepicker();
  });
 $.datepicker.regional['es'] = {
 	closeText: 'Cerrar',
 	prevText: '<Ant',
 	nextText: 'Sig>',
 	currentText: 'Hoy',
	monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 	monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 	dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi�rcoles', 'Jueves', 'Viernes', 'S�bado'],
 	dayNamesShort: ['Dom','Lun','Mar','Mi�','Juv','Vie','S�b'],
 	dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S�'],
 	weekHeader: 'Sm',
 	dateFormat: 'yy/mm/dd',
 	firstDay: 1,
 	isRTL: false,
	 showMonthAfterYear: false,
	 yearSuffix: ''
 };

	$.datepicker.setDefaults($.datepicker.regional['es']);
	$(function () {
	$("#fecha").datepicker();
});
