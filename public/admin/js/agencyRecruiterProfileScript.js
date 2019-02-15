
		
			$(".onclick_email_div").click(function(){
				$(".input_display_div").toggle();
			});
			$(".onclick_email_div_2").click(function(){
				$(".input_display_div_2").toggle();
			});
	



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

        $(function() {
            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                ele.each(function() {
                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    };
                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject);
                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0 //  original position after the drag
                    });
                });
            }
            ini_events($('#external-events div.external-event'));
            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date();
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'today',
                    month: 'month',
                    week: 'week',
                    day: 'day'
                },
                //Random default events
                events: [{
                    title: 'All Day Event',
                    start: new Date(y, m, 1),
                    backgroundColor: "#f56954", //red
                    borderColor: "#f56954" //red
                }, {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    backgroundColor: "#f39c12", //yellow
                    borderColor: "#f39c12" //yellow
                }, {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    backgroundColor: "#0073b7", //Blue
                    borderColor: "#0073b7" //Blue
                }, {

                    title: 'Lunch',

                    start: new Date(y, m, d, 12, 0),

                    end: new Date(y, m, d, 14, 0),

                    allDay: false,

                    backgroundColor: "#00c0ef", //Info (aqua)

                    borderColor: "#00c0ef" //Info (aqua)

                }, {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    backgroundColor: "#00a65a", //Success (green)
                    borderColor: "#00a65a" //Success (green)
                }, {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/',
                    backgroundColor: "#3c8dbc", //Primary (light-blue)
                    borderColor: "#3c8dbc" //Primary (light-blue)
                }],

                editable: true,

                droppable: true, // this allows things to be dropped onto the calendar !!!

                drop: function(date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object

                    var originalEventObject = $(this).data('eventObject');

                    // we need to copy it, so that multiple events don't have a reference to the same object

                    var copiedEventObject = $.extend({}, originalEventObject);

                    // assign it the date that was reported

                    copiedEventObject.start = date;

                    copiedEventObject.allDay = allDay;

                    copiedEventObject.backgroundColor = $(this).css("background-color");

                    copiedEventObject.borderColor = $(this).css("border-color");

                    // render the event on the calendar

                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)

                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                    // is the "remove after drop" checkbox checked?

                    if ($('#drop-remove').is(':checked')) {

                        // if so, remove the element from the "Draggable Events" list

                        $(this).remove();

                    }

                }

            });



            /* ADDING EVENTS */

            var currColor = "#3c8dbc"; //Red by default

            //Color chooser button

            var colorChooser = $("#color-chooser-btn");

            $("#color-chooser > li > a").click(function(e) {

                e.preventDefault();

                //Save color

                currColor = $(this).css("color");

                //Add color effect to button

                $('#add-new-event').css({

                    "background-color": currColor,

                    "border-color": currColor

                });

            });



            $("#add-new-event").click(function(e) {

                e.preventDefault();

                //Get value and make sure it is not null

                var val = $("#new-event").val();

                if (val.length == 0) {

                    return;

                }

                //Create events

                var event = $("<div />");

                event.css({

                    "background-color": currColor,

                    "border-color": currColor,

                    "color": "#fff"

                }).addClass("external-event");

                event.html(val);

                $('#external-events').prepend(event);

                //Add draggable funtionality

                ini_events(event);

                //Remove event from text input

                $("#new-event").val("");



            });



        });

	$(".dropdown dt a").on('click', function() {
		$(".dropdown dd ul").slideToggle('fast');
	});

	$(".dropdown dd ul li a").on('click', function() {
		$(".dropdown dd ul").hide();
	});



function getSelectedValue(id) {

  return $("#" + id).find("dt a span.value").html();

}

$(document).bind('click', function(e) {

  var $clicked = $(e.target);

  if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();

});

var multiBack = 0;

$('.mutliSelect input[type="checkbox"]').on('click', function() {



  var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),

    title = $(this).val() + ",";



  if ($(this).is(':checked')) {

    var html = '<span title="' + title + '">' + title + '</span>';

    $('.multiSel').append(html);

    $(".hida").hide();

	//$(this).parent().parent().find('.active_select').addClass("dropdown-background")

	$('.dropdown dt a').addClass("dropdown-background");

	multiBack++;

  } else {

	multiBack--;

    $('span[title="' + title + '"]').remove();

    var ret = $(".hida");

    $('.dropdown dt a').append(ret);

    if(multiBack){}else{
		$('.dropdown dt a').removeClass("dropdown-background");
	}
  }
  console.log(multiBack);
 
  if ($('.multiSel').is(':empty')){
	$('.hida').show();
  }
});

