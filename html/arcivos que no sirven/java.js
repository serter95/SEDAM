$(function (){
	$('#form').dialog({
		autoOpen:false,
		modal:true,
		title:'Modifique Teoria',
		width:605px,
		height:'auto'
		show:{
			effect:"clip",
			duration:800
			},
		hide:{
			effect:"clip",
			duration:800
			}
		});
	$('#agregar').on('click', function(){
		$('form').dialog('open');
	
		});
});