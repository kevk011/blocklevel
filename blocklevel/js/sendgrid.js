$('.js-send').on('click', function(e){
	
	var error 	= false;
	var name 	= $('.js-name').val();
	var email 	= $('.js-email').val();
	var phone 	= $('.js-phone').val();		
	var auto 	= $('.js-auto option:selected').text();		
	var message = $('.js-message').val();

	if(name.length == 0){
		error = true;
		$('.js-name').addClass('form-error');
	}
	
	if(email.length == 0){
		error = true;
		$('.js-email').addClass('form-error');
	}

	if(phone.length == 0){
		error = true;
		$('.js-phone').addClass('form-error');
	}

	if(message.length == 0){
		error = true;
		$('.js-message').addClass('form-error');
	}

	
	if(error == false){
		
		$.ajax({
            type: 'POST',
            url: 'contactform.php',
            data: {contact_name: name, contact_email: email, contact_phone: phone, typeauto: auto, contact_message: message},
            dataType: "json",
			success: function() {
				
				$('.error-message').hide();
				$('.success-message').show();
				
			}						
		});			

			
	} else {
		
		$('.error-message').show();
		$('.success-message').hide();
		
	}
	

	e.preventDefault();
	
})