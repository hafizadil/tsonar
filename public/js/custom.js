;(function () {	
	'use strict';
	
	//sign up
	var signup_ = function(){
		$('.sign-hd_').hide();
		$('body').on('click', '.sign-sh_', function(){
			$('#role_id_reg').val($(this).attr("attr-id"));
			$('.sign-sh_').removeClass('btn_login_agency');
			$('.sign-sh_').removeClass('btn_login_pro');
			$('.sign-sh_').addClass('btn_login_agency');
			$(this).removeClass('btn_login_agency');
			$(this).addClass('btn_login_pro');
			$('.sign-hd_').show();
			$('.user_type_hd_').hide();
			
			$.ajax({
				type: "post",
				url: base_url+"session", 
				data: {"role_id_reg":$(this).attr("attr-id")}, 
				success: function(data){}
			});
		});
	};
	
	//sign up - register user save
	var userreg_ = function(){
		$('.invalid-data').hide();
		$('.response-data').hide();
				
		$('#btn_action').on('click', function (e) {
			$('.error').html("");
			e.preventDefault();
			var controller_action = $('#action').val();
			$.ajax({
				type: "POST",
				url: base_url+controller_action, 
				data: $("#formpost").serialize(),
				dataType: "json",  
				beforeSend: function(){
					$('#btn_action').addClass('disable-action');
				},
				success: function(data)
				{
					// alert(data);
					// console.log(data);return false;
					if(data.status == 'ok' && data.redirect){
						if(data.message)
						{
							$('#formpost').trigger("reset");
							$('.response-data').text(data.message);
							$('.response-data').show();							
						}
						else
						{
							window.location.href = data.redirect;
						}						
					}
					if(data.status == 'false' && data.redirect){
						$('.invalid-data').text(data.message);
						$('.invalid-data').show();
					}
					
					$.each(data, function(key, value) {
						// console.log("here");
						// console.log("Key "+key+" "+"value"+" "+value);
						if (key == 'clientOrBussiness' || key=='nameOfContact' || key== 'emailAddress') 
						{
							$('#error_' + key).html(value);
						}
						if (key && value) {
							$('#input-' + key).addClass('is-invalid');
							$('#input-' + key).parent().addClass('has-error');
						}
						
						if($('#input-' + key).parents('.con_input_login').length > 0 || $('#input-' + key).parents('.form_field').length > 0)
						{
							
							//for contact page
							$('#input-' + key).parents('.con_input_login').find('.error').html(value);
							$('#input-' + key).parents('.form_field').find('.error').html(value);
						}
						else
						{
							//for other pages validatation output
							$('#input-' + key).parents('.input_login').find('.error').html(value);
						}
						
						
					});
				},
				complete: function (data) {
					$('#btn_action').removeClass('disable-action');
				}
			});
		});

		$('#form input').on('keyup', function () { 
			$(this).removeClass('is-invalid').addClass('is-valid');
			$(this).parents('.form-group').find('#error').html(" ");
		});
	};

	
	
	
	// Document on load.
	$(function(){
		signup_();
		userreg_();
	});
}());