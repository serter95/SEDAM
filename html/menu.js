$(document).on('ready', function()
		{
		$('#conocenos2').hide();
		$('#conocenos3').hide();
		$('#conocenos4').hide();
		/********************************/
		
		$('#sesion_2').click(function(){
									  
			$('#conocenos2').fadeOut(function(){
				$('#conocenos1').fadeIn();
				$('#conocenos3').hide();
				$('#conocenos4').hide();
				});
			
			$('#conocenos3').fadeOut(function(){
				$('#conocenos1').fadeIn();
				$('#conocenos2').hide();
				$('#conocenos4').hide();
				});
				
			$('#conocenos4').fadeOut(function(){
				$('#conocenos1').fadeIn();
				$('#conocenos2').hide();
				$('#conocenos3').hide();
				});
			});
		
		$('#mision').click(function(){
									
			$('#conocenos1').fadeOut(function(){
				$('#conocenos2').fadeIn();
				$('#conocenos3').hide();
				$('#conocenos4').hide();
				});	
				
			$('#conocenos3').fadeOut(function(){
				$('#conocenos2').fadeIn();
				$('#conocenos1').hide();
				$('#conocenos4').hide();
				});	
			
			$('#conocenos4').fadeOut(function(){
				$('#conocenos2').fadeIn();
				$('#conocenos1').hide();
				$('#conocenos3').hide();
				});	
			
			});
		
		$('#sesion_1').click(function(){
									  
			$('#conocenos1').fadeOut(function(){
				$('#conocenos3').fadeIn();
				$('#conocenos2').hide();
				$('#conocenos4').hide();
			
				});		
			
			$('#conocenos2').fadeOut(function(){
				$('#conocenos3').fadeIn();
				$('#conocenos1').hide();
				$('#conocenos4').hide();
			
				});
				
			$('#conocenos4').fadeOut(function(){
				$('#conocenos3').fadeIn();
				$('#conocenos1').hide();
				$('#conocenos4').hide();
				});
			});
		
		$('#sesion_4').click(function(){
									  
			$('#conocenos1').fadeOut(function(){
				$('#conocenos4').fadeIn();
				$('#conocenos2').hide();
				$('#conocenos3').hide();
				});	
			
			$('#conoceno2').fadeOut(function(){
				$('#conocenos4').fadeIn();
				$('#conocenos1').hide();
				$('#conocenos3').hide();
				});
				
			$('#conoceno3').fadeOut(function(){
				$('#conocenos4').fadeIn();
				$('#conocenos1').hide();
				$('#conocenos2').hide();
				});
			});
		
		});	
