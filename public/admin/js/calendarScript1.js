// Calendar javascript start 
		setTimeout(
			initThemeChooser({
			  init: function(themeSystem) {
				$('#calendar').fullCalendar({
				  eventAfterAllRender: function(){
					$(".calendar_events_display").show();
				  },
				  themeSystem: themeSystem,
				  defaultView: 'listMonth',
				  header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay,listMonth'
				  },
				  
				  selectable: true,
				  defaultDate: '2018-03-12',
				  weekNumbers: true,
				  navLinks: true, // can click day/week names to navigate views
				  editable: true,
				  eventLimit: true, // allow "more" link when too many events
				  events: [
					{
					  title: 'Phone Intro',
					  start: '2018-03-01',
					  color: '#0000FF',
					  textColor: '#fff',
					  icon : "phone"
					},
					{
					  title: 'Intro',
					  icon : "link",
					  start: '2018-03-07',
					  end: '2018-03-10',
					  color: 'yellow',
					  textColor: '#000'
					},
					{
					  id: 999,
					  title: 'Interview',
					  icon : "users",
					  start: '2018-03-09T16:00:00',
					  color: 'gold',
					  textColor: '#fff'
					},
					{
					  id: 999,
					  title: 'No Event',
					  icon : "ban",
					  start: '2018-03-16T16:00:00',
					  color: 'red',
					  textColor: '#fff'
					},
					{
					  title: 'Briefing',
					  icon : "file-text-o",
					  start: '2018-03-11',
					  end: '2018-03-13',
					  color: '#9C9C9C',
					  textColor: '#fff'
					},
					{
					  title: 'Intro',
					  icon : "link",
					  start: '2018-03-12T10:30:00',
					  end: '2018-03-12T12:30:00',
					  color: 'yellow',
					  textColor: '#000'
					},
					{
					  icon : "phone", 	
					  title: 'Phone Intro',
					  start: '2018-03-12T12:00:00',
					  color: '#0000FF',
					  textColor: '#fff'
					},
					{
					  title: 'Meeting',
					  icon : "meetup",
					  start: '2018-03-12T14:30:00',
					  color: '#42C500',
					  textColor: '#000'
					},
					{
					  title: 'Interview',
					  icon : "users",
					  start: '2018-03-12T17:30:00',
					  color: 'gold',
					  textColor: '#fff'
					},
					{
					  title: 'No Event',
					  icon : "ban",
					  start: '2018-03-12T20:00:00',
					  color: 'red',
					  textColor: '#fff'
					},
					{
					  title: 'Briefing',
					  icon : "file-text-o",
					  start: '2018-03-13T07:00:00',
					  color: '#9C9C9C',
					  textColor: '#fff'
					},
					{
					  title: 'Meeting',
					  icon : "meetup",
					  start: '2018-03-28',
					  color: '#42C500',
					  textColor: '#000'
					}
				  ]
				  ,
					eventRender: function(event, element) {
						 if(event.icon){          
							element.find(".fc-title").prepend("<i class='fa fa-"+event.icon+"'></i>");
							element.find(".fc-list-item-title").prepend("<i style='color: "+event.color+";' class='fa fa-"+event.icon+"'></i> ");
							
						 }
					  }        
					,
				   dayClick: function(date, jsEvent, view,resourceObj) {
						if(view.name == 'month')
						{
							$('.cal-toogle-box-rem').remove();
							var cal_tooggle_bx = $('.cal-slide-box').html();
							$( "<div class='cal-toogle-box-rem'>"+cal_tooggle_bx+"</div>" ).insertAfter($(this).parents('.fc-rigid'));
						}
					},

				});
			  },

			  change: function(themeSystem) {
			  console.log('change event');
				$('#calendar').fullCalendar('option', 'themeSystem', themeSystem);
			  },
			})
		
			,3000);
			
	
	 // Calendar javascript end 

	
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
			});
		
	

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
	