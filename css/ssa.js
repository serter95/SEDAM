$(document).on('ready', function()
		{
		$('#show2').hide();
		$('pesta�a1').css({'background-color': 'rgba(102, 64, 131, 0.86)'});
		
		$('#show1').css({
						'height': ($(document).outerHeight(true)-160)
						});
		$('#show2').css({
						'height': ($(document).outerHeight(true)-160)
						});
		/*********************************/
		
		$('#pesta�a1').click(function(){
			$('#show2').fadeOut(function() {
			$('#pesta�a2').css({'background-color': '#c11fff'});
			$('#pesta�a1').css({'background-color': '#ffffff'});
			$('show1').fadeIn();							 				 
				});					  		
			});
		$('#pesta�a2').click(function(){
			$('#show1').fadeOut(function(){
			$('#pesta�a1').css({'background-color': '#c11fff'})
			$('show2').fadeIn();
			$('#pesta�a2').css({'background-color': '#ffffff'});				 
				});					  
			});			 

		

		});