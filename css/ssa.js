$(document).on('ready', function()
		{
		$('#show2').hide();
		$('pestaña1').css({'background-color': 'rgba(102, 64, 131, 0.86)'});
		
		$('#show1').css({
						'height': ($(document).outerHeight(true)-160)
						});
		$('#show2').css({
						'height': ($(document).outerHeight(true)-160)
						});
		/*********************************/
		
		$('#pestaña1').click(function(){
			$('#show2').fadeOut(function() {
			$('#pestaña2').css({'background-color': '#c11fff'});
			$('#pestaña1').css({'background-color': '#ffffff'});
			$('show1').fadeIn();							 				 
				});					  		
			});
		$('#pestaña2').click(function(){
			$('#show1').fadeOut(function(){
			$('#pestaña1').css({'background-color': '#c11fff'})
			$('show2').fadeIn();
			$('#pestaña2').css({'background-color': '#ffffff'});				 
				});					  
			});			 

		

		});