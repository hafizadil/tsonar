;(function () {
	
	'use strict';
	// front job request form submission ajax requests send start
	$('#front_job_request_form').submit(function(e)
	{
		e.preventDefault();

		if ($('#front_job_field').val()=='')
            {
                $("#front_job_field").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#front_job_field").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // title fron job
            if ($('#front_job_title').val()=='')
            {
                $("#front_job_title").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#front_job_title").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // front job location validatation
            // job title fields ends
            if ($('#front_job_location').val()==null) 
            {
                $(".fs-wrap").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                return false;
            }
            if ($('#front_job_location').val() !==null && $('#front_job_location').val() !=='') 
            {
                $(".fs-wrap").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // job location fields ends here
            // job location field starts over here 
            if ($('#front_user_email').val()=='') 
            {
                $("#front_user_email").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                return false;
            }
            if ($('#front_user_email').val() !==null && $('#front_user_email').val() !=='') 
            {
                $("#front_user_email").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // job location filed end over here
            // job level page checked over start
            if ( (!$('#leader_of_leader_jb_pop_quick_job').prop("checked")) && (!$('#leader_of_professional_jb_pop_quick_job').prop( "checked")) && (!$('#individual_prefossional_jb_pop_quick_job').prop( "checked")))
            {
                $(".level_jb_pop_quick_job").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                return false;      
            }
            else{
                $(".level_jb_pop_quick_job").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
            }
            // job level page checked

            // contract type start
             // contract type page checkor not
            if ( (!$('#perm').prop("checked")) && (!$('#ftc').prop("checked")) && (!$('#contractor_page_desk').prop("checked")) )
            {
                
                    $(".contract").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                    return false;                
            }
            else
            {
                $(".contract").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }
            if ($('#perm').prop("checked"))
            {
                if ($('#pay_frst_drp').val()=='')
                {
                    $("#pay_frst_drp").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }
            if ($('#ftc').prop("checked") || $('#contractor_page_desk').prop("checked"))
            {
                if ((!$( "#length_months_1").prop("checked")) && (!$( "#length_months_2").prop("checked")) && (!$( "#length_months_3").prop("checked")) &&  (!$( "#length_months_4").prop("checked")) && (!$( "#length_months_5").prop("checked")) && (!$( "#length_months_6").prop("checked")) && (!$( "#length_months_7").prop("checked")) && (!$( "#length_months_8").prop("checked")) && (!$( "#length_months_9").prop("checked")) && (!$( "#length_months_10").prop("checked")) && (!$( "#length_months_11").prop("checked")) && (!$( "#length_months_12").prop("checked"))) 
                {
                    $(".talent_request_length_months").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $(".talent_request_length_months").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }
            
            // contactor page contactor
            if ($('#contractor_page_desk').prop("checked"))
            {
               if ($('#pay_dialy_drp_des_ntj').val()=='')
                {
                    $("#pay_dialy_drp_des_ntj").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_dialy_drp_des_ntj").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }

            // contractor div fixed-term

            if ($('#ftc').prop("checked"))
            {
               if ($('#pay_frst_drp').val()=='')
                {
                    $("#pay_frst_drp").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".login_bg").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});  
                }
            }
            /////////////////
            // contract type ends
            // bonus section alidation start
            if ($('#pay_bonus_percentage').val()=='')
            {
                   $("#pay_bonus_percentage").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".contract").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#pay_bonus_percentage").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }
            // bonus section validation ends 
		$.each($('#front_job_request_form').serializeArray() , function(key, value)
            {
                
                if ($( "input[name='"+value.name+"']").attr('meetup-attr') && $( "input[name='"+value.name+"']").attr('meetup-attr') !=='' )
                {
                    var attrValue = $( "input[name='"+value.name+"']").attr('meetup-attr');
                    var inputValue =$( "input[name='"+value.name+"']").val();
                    $( "input[name='"+value.name+"']").val(inputValue+"-"+attrValue);
                    // console.log($( "input[name='"+value.name+"']").val());
                
                }
                // console.log('Key : '+ value.name +' And Value : ' +value.value);
                
            });

		var controller_action = 'hire_now';
		$.ajax({
			type: "POST",
			url: base_url+controller_action, 
			data: $("#front_job_request_form").serialize(),
			dataType: "json",  
			beforeSend: function(){
				$('#front_job_request_form_btn').addClass('disable-action');
			},
			success: function(data)
			{
				// alert(data);
				// console.log(data);return false;
				if(data.status == 'ok' && data.redirect){
						alertify.alert('Job Request', 'Job has been submitted successfully!', function()
						{ 
							alertify.success('Ok');
							window.location.href = data.redirect;
						});
											
				}
				if(data.status == 'false' && data.redirect){
					$('.invalid-data').text(data.message);
					$('.invalid-data').show();
					alertify.alert('Job Request', 'Some Error Accoured!', function()
						{ 
							alertify.error('Ok');
							window.location.href = data.redirect;
						});

				}
					
				$.each(data, function(key, value) {
					// console.log("here");
					// console.log("Key "+key+" "+"value"+" "+value);
					
					if (key && value =='hiringManagerAvailabilityError') {
						$.notify('Select Value for Hirng Manager Availability', "error");
					}		
						
					});
				},
				complete: function (data) 
				{
					$('#front_job_request_form_btn').removeClass('disable-action');
				}
			});
	});		

	// front job request form submission ajax requests send end

	// iPad and iPod detection	
	var isiPad = function(){
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
			(navigator.platform.indexOf("iPhone") != -1) || 
			(navigator.platform.indexOf("iPod") != -1)
	    );
	};



	// Carousel Feature Slide
	var owlCrouselFeatureSlide = function() {
		
		var owl = $('.owl-carousel');

		owl.on('initialized.owl.carousel change.owl.carousel',function(elem){
			var current = elem.item.index;
			$(elem.target).find(".owl-item").eq(current).find(".to-animate").removeClass('fadeInUp animated');
			$(elem.target).find(".owl-item").eq(current).find(".to-animate-2").removeClass('fadeInUp animated');
		
		});
		owl.on('initialized.owl.carousel changed.owl.carousel',function(elem){
			setTimeout(function(){
				var current = elem.item.index;
				$(elem.target).find(".owl-item").eq(current).find(".to-animate").addClass('fadeInUp animated');
			}, 700);
			setTimeout(function(){
				var current = elem.item.index;
				$(elem.target).find(".owl-item").eq(current).find(".to-animate-2").addClass('fadeInUp animated');
			}, 900);
     	});
		owl.owlCarousel({
			items: 1,
		    loop: true,
		    margin: 0,
		    responsiveClass: true,
		    nav: true,
		    dots: true,
		    autoHeight: true,
		    smartSpeed: 500,
		    autoplay: true,
			autoplayTimeout: 5000,
			autoplayHoverPause: true,
		    navText: [	
		      "<i class='icon-arrow-left2 owl-direction'></i>",
		      "<i class='icon-arrow-right2 owl-direction'></i>"
	     	]
		});

	};



	// animate-box
	var contentWayPoint = function() {

		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this).hasClass('animated') ) {
			
				$(this.element).addClass('fadeInUp animated');
			
			}

		} , { offset: '75%' } );

	};


	// Burger Menu
	var burgerMenu = function() {

		$('body').on('click', '.js-tsonar-nav-toggle', function(event){

			if ( $('#navbar').is(':visible') ) {
				$(this).removeClass('active');	
			} else {
				$(this).addClass('active');	
			}

			event.preventDefault();
			
		});

	};



	// Page Nav
	/*var clickMenu = function() {
		$('a:not([class="external"])').click(function(event){
			var section = $(this).data('nav-section'),
				navbar = $('#navbar');
				if(section.length){
					$('html, body').animate({
						scrollTop: $('[data-section="' + section + '"]').offset().top
					}, 500);
				}
		    if ( navbar.is(':visible')) {
		    	navbar.removeClass('in');
		    	navbar.attr('aria-expanded', 'false');
		    	$('.js-tsonar-nav-toggle').removeClass('active');
		    }

		    event.preventDefault();
		    return false;
		});

	};*/

	// Reflect scrolling in navigation
	var navActive = function(section) {

		var $el = $('#navbar > ul');
		$el.find('li').removeClass('active');
		$el.each(function(){
			$(this).find('a[data-nav-section="'+section+'"]').closest('li').addClass('active');
		});

	};
	var navigationSection = function() {

		var $section = $('div[data-section]');
		
		$section.waypoint(function(direction) {
		  	if (direction === 'down') {
		    	navActive($(this.element).data('section'));
		    
		  	}
		}, {
		  	offset: '150px'
		});

		$section.waypoint(function(direction) {
		  	if (direction === 'up') {
		    	navActive($(this.element).data('section'));
		  	}
		}, {
		  	offset: function() { return -$(this.element).height() + 155; }
		});

	};


	// Window Scroll
	var windowScroll = function() {
		var lastScrollTop = 0;

		$(window).scroll(function(event){

		   	var header = $('#tsonar-header'),
				scrlTop = $(this).scrollTop();

			if ( scrlTop > 500 && scrlTop <= 2000 ) {
				header.addClass('navbar-fixed-top tsonar-animated slideInDown');
			} else if ( scrlTop <= 500) {
				if ( header.hasClass('navbar-fixed-top') ) {
					header.addClass('navbar-fixed-top tsonar-animated slideOutUp');
					setTimeout(function(){
						header.removeClass('navbar-fixed-top tsonar-animated slideInDown slideOutUp');
					}, 100 );
				}
			} 
			
		});
	};



	// Animations

	// About Us
	var aboutAnimate = function() {

		if ( $('#about-us').length > 0 ) {	
			$('#about-us .to-animate').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );
				
			});
		}

	};
	var aboutWayPoint = function() {

		if ( $('#about-us').length > 0 ) {
			$('#about-us').waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this).hasClass('animated') ) {


					setTimeout(aboutAnimate, 200);

					
					$(this.element).addClass('animated');
						
				}
			} , { offset: '95%' } );
		}

	};

	// Team
	var teamAnimate = function() {

		if ( $('#team').length > 0 ) {	
			$('#team .to-animate').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );
				
			});
		}

	};
	var teamWayPoint = function() {

		if ( $('#team').length > 0 ) {
			$('#team').waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this).hasClass('animated') ) {


					setTimeout(teamAnimate, 200);

					
					$(this.element).addClass('animated');
						
				}
			} , { offset: '95%' } );
		}

	};

	// Services
	var servicesAnimate = function() {

		if ( $('#tsonar-our-services').length > 0 ) {	
			$('#tsonar-our-services .to-animate').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );
				
			});
		}

	};
	var servicesWayPoint = function() {

		if ( $('#tsonar-our-services').length > 0 ) {
			$('#tsonar-our-services').waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this).hasClass('animated') ) {


					setTimeout(servicesAnimate, 200);

					
					$(this.element).addClass('animated');
						
				}
			} , { offset: '95%' } );
		}

	};


	// Features
	var featuresAnimate = function() {

		if ( $('#tsonar-features').length > 0 ) {	
			$('#tsonar-features .to-animate').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );
				
			});
		}

	};
	var featuresWayPoint = function() {

		if ( $('#tsonar-features').length > 0 ) {
			$('#tsonar-features').waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this).hasClass('animated') ) {


					setTimeout(function(){
						$('.animate-features-1').addClass('animated fadeIn');
					}, 100);
					setTimeout(function(){
						$('.animate-features-2').addClass('animated fadeIn');
					}, 200);
					setTimeout(featuresAnimate, 500);
					setTimeout(function(){
						$('.animate-features-3').addClass('animated fadeInUp');
					}, 1400);

					
					$(this.element).addClass('animated');
						
				}
			} , { offset: '95%' } );
		}

	};


	// testimonials
	var testimonialsAnimate = function() {

		if ( $('#tsonar-testimonials').length > 0 ) {	
			$('#tsonar-testimonials .to-animate').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );
				
			});
		}

	};
	var testimonialsWayPoint = function() {

		if ( $('#tsonar-testimonials').length > 0 ) {
			$('#tsonar-testimonials').waypoint( function( direction ) {
										
				
					setTimeout(testimonialsAnimate, 200);
					
					
					$(this.element).addClass('animated');
						
			
			} , { offset: '95%' } );
		}

	};

	// Pricing
	var pricingAnimate = function() {

		if ( $('#tsonar-pricing').length > 0 ) {	
			$('#tsonar-pricing .to-animate').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );
				
			});
		}

	};
	var pricingWayPoint = function() {

		if ( $('#tsonar-pricing').length > 0 ) {
			$('#tsonar-pricing').waypoint( function( direction ) {
										
					setTimeout(function(){
						$('.animate-pricing-1').addClass('animated fadeIn');
					}, 200);
					setTimeout(function(){
						$('.animate-pricing-2').addClass('animated fadeIn');
					}, 300);
					setTimeout(pricingAnimate, 700);
					
					
					$(this.element).addClass('animated');
						
			
			} , { offset: '95%' } );
		}

	};

	// Pricing
	var pressAnimate = function() {

		if ( $('#tsonar-press').length > 0 ) {	
			$('#tsonar-press .to-animate').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );
				
			});
		}

	};
	var pressWayPoint = function() {

		if ( $('#tsonar-press').length > 0 ) {
			$('#tsonar-press').waypoint( function( direction ) {
										
					setTimeout(function(){
						$('.animate-press-1').addClass('animated fadeIn');
					}, 200);
					setTimeout(function(){
						$('.animate-press-2').addClass('animated fadeIn');
					}, 300);
					setTimeout(pressAnimate, 700);
					
					
					$(this.element).addClass('animated');
						
			
			} , { offset: '95%' } );
		}

	};

	
	

	// Document on load.
	$(function(){

		burgerMenu();
		owlCrouselFeatureSlide();
		//clickMenu();
		windowScroll();
		navigationSection();

		aboutWayPoint();
		teamWayPoint();
		servicesWayPoint();
		featuresWayPoint();
		testimonialsWayPoint();
		pricingWayPoint();
		pressWayPoint();

	});


}());