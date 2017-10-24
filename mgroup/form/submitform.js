
jQuery(document).ready(function(){

	jQuery(".orderSubmit").click(function(){
		

		var defaultName, defaultEmail, defaultPhone, defaultMsg;
		
		defaultName = 'Введите ссылку на Ваш сайт';
		defaultEmail = 'Введите ваш номер телефона или email';
		defaultPhone = 'Введите Ваш номер телефона';
		defaultMsg = 'Дополнительная информация...';
		
		// metrika
		
		// yaCounter20837122.reachGoal('order');
		
		// setup form
		
		var form = jQuery(this).closest(".orderForm");
		
		var position = form.attr('id');
		
		form.find('.orderError').remove();
		
		var hasError = false;
		
		// name
		
	


	


	
		// email
		
		var email = form.find(".clientEmail").val();
		
		// console.log( email );
		
		if( typeof email != 'undefined' )
		{
			if( email == '' || email == defaultEmail )
			{
							
form.find(".clientEmail").before('<div class="help">Введите Ваш Email</div>');
$('.help').each( function() {$(this).delay(2000).animate({opacity:0},500);});
			hasError = true;	
			}
		}
		else
		{
			email = '';
		}
		
// phone
		
		var phone = form.find(".clientPhone").val();
		
		// console.log( phone );
		
			if( typeof phone != 'undefined' )
		{
			if( phone == '' || phone == defaultPhone || phone == '+7')
			{	
			
				
	/*		
form.find(".clientPhone").before('<div class="help">Введите номер телефона</div>');
$('.help').each( function() {$(this).delay(2000).animate({opacity:0},500);});
	*/
    form.find(".clientPhone").removeClass('error').addClass('error');
		setTimeout(function () {
form.find(".clientPhone").removeClass('error');
},1400);			
			
						
				hasError = true;
			}
		}

		else
		{
			phone = '';
		}
		
		// msg
		
		var message = form.find(".clientMessage").val();
		
		// console.log( message );
		
		if( typeof message == 'undefined' || message == defaultMsg )
		{
			message = '';
		}
		
		// error handle
		
		if( hasError == false )
		{
			jQuery(this).hide();
			
			jQuery(this).after('<div class="orderLoading" style="text-align: center;"><img src="http://mgroup5.ru/form/loading.gif" alt="Отправка" /></div>');

			// console.log( email, name, phone );
	
	var geot = ymaps.geolocation.city;

			var orderRequest = jQuery.post(
				'http://mgroup5.ru/form/sendemail.php',
				{
					'emailFrom': email,
					'subject': phone,
					'message': attrib,
					'utm': utm_array,
					'geot': geot
				},
   				function( data )
				{				
					//yaCounter24674801.reachGoal('ZAKAZ');				
					
					location.href = 'http://mgroup5.ru/final.html';

					console.log( data );

					form.fadeOut( 600, function(){
						form.empty();

						// CUSTOM
						form.parent().find(".modal-title").hide();

						form.fadeIn( 600, function(){
							form.html('<div class="orderSuccess" style="color:#333;"><h1>Спасибо!</h1><div>Мы свяжемся с вами<br />в течении дня <br /><br /> </div></div>');											
						});
					});
   				}
			)
			.fail(function(){
				form.fadeOut( 600, function(){
					form.empty();

					// CUSTOM
					form.parent().find(".modal-title").hide();

					form.fadeIn( 600, function(){
						form.html('<div class="orderSuccess" style="color:#333;"><h1>Упс!</h1><div>Не удалось отправить ваш заказ. Пожалуйста, свяжитесь с нами по телефону в начале этой страницы.</div></div>');											
					});
				});
			});
		}
		
		return false;
	});						   
});