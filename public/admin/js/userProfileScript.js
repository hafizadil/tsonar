	
		// $('#updateUserProfile_btn').on('click', function (e) {
			
		// 	$('.error').html("");
		// 	e.preventDefault();
			
		// 	var controller_action = $('#action').val();
		// 	// alert($("#userProfileForm").serialize());	
		// 	// return false;
		// 	$.ajax({
		// 		type: "POST",
		// 		url: base_url+controller_action, 
		// 		data: $("#userProfileForm").serialize(),
		// 		dataType: "json",  
		// 		beforeSend: function(){
		// 			$('#updateUserProfile_btn').addClass('disable-action');
		// 		},
		// 		success: function(data)
		// 		{
		// 			alert(data);
		// 			console.log(data);
		// 			// return false;
		// 			if(data.status == 'ok' && data.redirect){
		// 				if(data.message)
		// 				{
		// 					$('.response-data').text(data.message);
		// 					$('.response-data').show();							
		// 				}
		// 				else
		// 				{
		// 					window.location.href = data.redirect;
		// 				}						
		// 			}
		// 			if(data.status == 'false' && data.redirect){
		// 				$('.invalid-data').text(data.message);
		// 				$('.invalid-data').show();
		// 			}
					
		// 			$.each(data, function(key, value) {
		// 				// console.log("Key "+key+" "+"value"+" "+value);
		// 				$('#input-' + key).addClass('is-invalid');
		// 				if($('#input-' + key).parents('.con_input_login').length > 0)
		// 				{
		// 					//for contact page
		// 					$('#input-' + key).parents('.con_input_login').find('.error').html(value);
		// 				}
		// 				else
		// 				{
		// 					//for other pages validatation output
		// 					$('#input-' + key).parents('.input_login').find('.error').html(value);
		// 				}
						
						
		// 			});
		// 		},
		// 		complete: function (data) {
		// 			$('#updateUserProfile_btn').removeClass('disable-action');
		// 		}
		// 	});
		// });

		$('.all_clicks').on('click', 'input', function(){
			$(this).parent().parent().attr('all-click');
		});



		jQuery.extend(jQuery.expr[':'], {
			focusable: function (el, index, selector) {
				return $(el).is('a, button, select, :input, [tabindex]');
			}
		});

		$(document).on('keypress', 'input,select', function (e) {
			if (e.which == 13) {
				e.preventDefault();
				// Get all focusable elements on the page
				var $canfocus = $(':focusable');
				var index = $canfocus.index(document.activeElement) + 1;
				if (index >= $canfocus.length) index = 0;
				$canfocus.eq(index).focus();
			}
		});

			$('body').on('click', function(e)
			{
				if($(e.target).parents('.cal_drp_tab').length)
				{
					e.preventDefault();
				}
			})


		
			$('[data-toggle="popover"]').popover();
	
		$("#reset").on("click", function() {
			$('.my_select option').prop('selected', function() {
				$("#part_time").removeClass("active_select");
				$("#part_time").css('color', '#000');
				$("#part_time").css('background-color', '#fff');
				$("#days_worked").css('color', '#000');
				$("#days_worked").css('background-color', '#fff');
				return this.defaultSelected;
			});
		});
		$('.show_data').on('change', function() {
			$(".click_display_time").show("slow");
		});	


