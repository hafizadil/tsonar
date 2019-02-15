 

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


// alert('coming');
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

// hiring manager form is handled here
$('#hiring_manager_btn').on('click', function (e) {
            $('.error').html("");
            e.preventDefault();
            var controller_action = $('#hiring_manager_action').val();
            // alert(controller_action);
            // return false;
            $.ajax({
                type: "POST",
                url: base_url+controller_action, 
                data: $("#hiring_manager_form").serialize(),
                dataType: "json",  
                beforeSend: function(){
                    $('#hiring_manager_btn').addClass('disable-action');
                },
                success: function(data)
                {
                    // alert(data);
                    // console.log(data);return false;
                    if(data.status == 'ok' && data.redirect){
                        if(data.message)
                        {
                            $('#hiring_manager_form').trigger("reset");
                            $('.response-data').text(data.message);
                            $('.response-data').show();                         
                        }
                        else
                        {
                            $('#hiring_manager_form').trigger("reset");
                            $('#hiring_manager').modal('hide');
                        }                       
                    }
                    if(data.status == 'false' && data.redirect){
                        $('.invalid-data').text(data.message);
                        $('.invalid-data').show();
                    }
                    
                    $.each(data, function(key, value) {
                        // console.log("here");
                        // console.log("Key "+key+" "+"value"+" "+value);
                        if (key == 'hiringManagerName' || key=='hiringManagerEmail' || key== 'hiringManagerJobTitle') 
                        {
                            $('#error_' + key).html(value);
                        }
                    });
                },
                complete: function (data) {
                    $('#hiring_manager_btn').removeClass('disable-action');
                }
            });
        });

            // $( "input[name='contractMonth']").click(function(){
                // alert($( "input[name='contractMonth']").val());
            // });
                // business or client area
                // submit business area or client area
$('#save_Clientbussiness_area').on('click', function (e) 
{
            $('.error').html("");
            e.preventDefault();
            var controller_action = $('#action').val();
            // alert(controller_action);
            // return false;
            $.ajax({
                type: "POST",
                url: base_url+controller_action, 
                data: $("#formpost").serialize(),
                dataType: "json",  
                beforeSend: function(){
                    $('#save_Clientbussiness_area').addClass('disable-action');
                },
                success: function(data)
                {
                    if(data.status){
                        $('#formpost').trigger("reset");
                        $('#client_business_area').modal('hide');
                    }else{

                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                            $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                        }
                    }
                },
                complete: function (data) {
                    $('#save_Clientbussiness_area').removeClass('disable-action');
                }
            });
        }); 
    // talent request form submit

    // hiring manager form is handled here
$('#talent_request_form_page').on('submit', function (e) 
{

            $('.error').html("");
            e.preventDefault();
            // alert('Coming HERE');
            // return false;
            
             // client or Business area starts
            if ( $('#clientBusiness').val() == ''  || $('#clientBusiness').val() == 'new') 
            {
                $(".dropdown__select7").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;
            }
            ///////////////////////////
            if ( $('#clientBusiness').val() !== ''  || $('#clientBusiness').val() !== 'new') 
            {
                $(".dropdown__select7").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////
            if ( $('#hiringManager').val() == '' || $('#hiringManager').val() == 'new' ) 
            {
                $(".dropdown__select8").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;
            }
            /////////////////////
            if ( $('#hiringManager').val() !== ''  || $('#hiringManager').val() !== 'new') 
            {
                $(".dropdown__select8").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }

            // client or Business area ends
            // job field check start
            if ($('#jobField').val()=='') 
            {
                $("#jobField").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                $('#jobField').focus();
                return false;
            }
            if ($('#jobField').val() !=='') 
            {
                $("#jobField").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // job field check ends
            // job title field starts
            if ($('#jobTitle').val()=='') 
            {
                $("#jobTitle").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                $('#jobTitle').focus();
                return false;
            }
            if ($('#jobTitle').val() !=='') 
            {
                $("#jobTitle").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // job title fields ends
            if ($('#jobLocation').val()==null) 
            {
                $(".fs-wrap").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;
            }
            if ($('#jobLocation').val() !==null && $('#jobLocation').val() !=='') 
            {
                $(".fs-wrap").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // job location fields ends here

            if ( (!$('#ntj_leader_of_leader_page').prop("checked")) && (!$('#ntj_leader_of_professional_page').prop( "checked")) && (!$('#ntj_individual_prefossional_page_desk_page').prop( "checked")))
            {
                $(".level").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;      
            }
            else{
                $(".level").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
            }

            if ($('#ntj_leader_of_leader_page').prop("checked")) 
            {
                if ($('#teamDirectReport').val()=='')
                {
                    $("#teamDirectReport").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#teamDirectReport").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});       
                }

                if ($('#totalTeamFunctions').val()=='')
                {
                    $("#totalTeamFunctions").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#totalTeamFunctions").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
                }
            }
            // job level page checked 
            if ($('#ntj_leader_of_professional_page').prop("checked")) 
            {
                if ($('#teamDirectReport').val()=='')
                {
                    $("#teamDirectReport").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#teamDirectReport").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});       
                }
            }
            // contract type page checkor not
            if ( (!$('#perm_page').prop("checked")) && (!$('#ftc_page').prop("checked")) && (!$('#contractor_page_desk_page').prop("checked")) )
            {
                
                    $(".contract").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;                
            }
            else
            {
                $(".contract").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }
            if ($('#perm_page').prop("checked"))
            {
                if ($('#pay_frst_drp_page').val()=='')
                {
                    $("#pay_frst_drp_page").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }
            if ($('#ftc_page').prop("checked") || $('#contractor_page_desk_page').prop("checked"))
            {
                if ((!$( "#page_length_months_1").prop("checked")) && (!$( "#page_length_months_2").prop("checked")) && (!$( "#page_length_months_3").prop("checked")) &&  (!$( "#page_length_months_4").prop("checked")) && (!$( "#page_length_months_5").prop("checked")) && (!$( "#page_length_months_6").prop("checked")) && (!$( "#page_length_months_7").prop("checked")) && (!$( "#page_length_months_8").prop("checked")) && (!$( "#page_length_months_9").prop("checked")) && (!$( "#page_length_months_10").prop("checked")) && (!$( "#page_length_months_11").prop("checked")) && (!$( "#page_length_months_12").prop("checked"))) 
                {
                    $(".talent_request_length_months").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
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
            if ($('#contractor_page_desk_page').prop("checked"))
            {
               if ($('#pay_dialy_drp_des_ntj_page').val()=='')
                {
                    $("#pay_dialy_drp_des_ntj_page").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_dialy_drp_des_ntj_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }

            // contractor div fixed-term

            if ($('#ftc_page').prop("checked"))
            {
               if ($('#pay_frst_drp_page').val()=='')
                {
                    $("#pay_frst_drp_page").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});  
                }
            }
            /////////////////
            if ($('#pay_bonus_percentage').val()=='')
            {
                   $("#pay_bonus_percentage").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#pay_bonus_percentage").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }
            // working hours time part-time or full time
            if ((!$('#perm0010_page').prop('checked')) && (!$('#part_time01_page').prop('checked')) ) 
            {
                $(".hours_page").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;      
            }
            else
            {
                $(".hours_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // work hours full time part time ends
            if ($('#part_time01_page').prop('checked'))
            {
                if($('#workingHours').val()=='')
                {
                    $("#workingHours").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                            $('html, body').animate({
                              scrollTop: $(".content-wrapper").offset().top
                            }, 1000)
                            return false; 
                }
                else
                {
                    $("#workingHours").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
                }
                if ($('#workingHours').val()!=='')
                {
                    if( (!$('#select_any_days_desk_ntj_page').prop('checked')) && (!$('#select_any_days_2_desk_ntj_page').prop('checked')) && (!$('#select_any_days_3_desk_ntj_page').prop('checked')) && (!$('#select_any_days_4_desk_ntj_page').prop('checked')) && (!$('#select_any_days_5_desk_ntj_page').prop('checked')) && (!$('#select_any_days_6_desk_ntj_page').prop('checked')))
                    {
                        $("#select_days_label").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                            $('html, body').animate({
                              scrollTop: $(".content-wrapper").offset().top
                            }, 1000)
                            return false;   
                    }
                    else
                    {
                        $("#select_days_label").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
                    }
                }
            }
            // obejctive fo the jjob start
            if ($('#objective_1').val()=='')
            {
                $("#objective_1").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#objective_1").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
                ///////////////////////////////
            if ($('#objective_2').val()=='')
            {
                $("#objective_2").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#objective_2").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ////////////////////////////////
            if ($('#objective_3').val()=='')
            {
                $("#objective_3").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#objective_3").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////////////////////
            // talent requirements strat from here 
            if ( (!$('#Top_talent_page').prop('checked')) && (!$('#solid_performer_page').prop('checked')) && (!$('#High_potential_page').prop('checked')) )
            {
                 $(".capability").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".capability").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            /////////////////////////////////////
            if ( (!$('#like_page').prop('checked')) && (!$('#Transferrable_skills_page').prop('checked')) && (!$('#Open_minded_page').prop('checked')) )
            {
                $(".experience").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".experience").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////
            if ( (!$('#Within_3_years_page').prop('checked')) && (!$('#After_3_years_page').prop('checked')) && (!$('#No_requirement_page').prop('checked')) )
            {
               $(".successor-ready").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".successor-ready").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////////
            if ( (!$('#Required_page').prop('checked')) && (!$('#Preferred_page').prop('checked')) && (!$('#No_requirement2_page').prop('checked')) )
            {
                $(".qualification").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".qualification").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////////////
            if ($('#skill_1').val()=='')
            {
                $("#skill_1").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#skill_1").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ////////////////////
            if ($('#skill_2').val()=='')
            {
                $("#skill_2").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#skill_2").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            /////////////////
            if ($('#skill_3').val()=='')
            {
                $("#skill_3").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#skill_3").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////
            // talent requirements ends here
            // search assistance requirements starts
            if ( (!$('#Car_allowance_page').prop('checked')) && (!$('#Car_allowance01_page').prop('checked')) && (!$('#Car_allowance02_page').prop('checked')) )
            {
                $(".benefits").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".benefits").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////////////////////
            if ( (!$('#relocation_ntj_none_page').prop('checked')) && (!$('#relocation_ntj_cost_page').prop('checked')) && (!$('#relocation_ntj_visa_sponsor_page').prop('checked')) )
            {
                $(".relocation-support").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".relocation-support").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ( (!$('#None_working_page').prop('checked')) && (!$('#Some3_page').prop('checked')) && (!$('#Fully_flexible2_page').prop('checked')) )
            {
               $(".home_flexi_desktop_working").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".home_flexi_desktop_working").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#referral_1').val()=='')
            {
                $("#referral_1").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#referral_1").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#referral_2').val()=='')
            {
                $("#referral_2").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#referral_2").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#referral_3').val()=='')
            {
                $("#referral_3").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".benefits").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#referral_3").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#AdditionalSearchTxt').val()=='')
            {
                $("#AdditionalSearchTxt").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".benefits").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#AdditionalSearchTxt").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#videoLink').val()=='')
            {
                $("#videoLink").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".benefits").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#videoLink").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#fileField').val()=='')
            {
                $("#fileField").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".benefits").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#fileField").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////

            // form serialize to check hiring manager avaialabilty calendar settings

            $.each($('#talent_request_form_page').serializeArray() , function(key, value){
                
                if ($( "input[name='"+value.name+"']").attr('meetup-attr') && $( "input[name='"+value.name+"']").attr('meetup-attr') !=='' )
                {
                    var attrValue = $( "input[name='"+value.name+"']").attr('meetup-attr');
                    var inputValue =$( "input[name='"+value.name+"']").val();
                    $( "input[name='"+value.name+"']").val(inputValue+"-"+attrValue);
                    // console.log($( "input[name='"+value.name+"']").val());
                
                }
                // console.log('Key : '+ value.name +' And Value : ' +value.value);
                
            });
            // return false;
            var data = new FormData(this);

            var controller_action = $('#full_talent_request_action').val();
            var location = $('#jobLocation').val();
            data.append('jobLocation', location);
            console.log(data);
            // return false;

            
            $.ajax({
                type: "POST",
                url: base_url+controller_action, 
                data: data,
                processData: false,
                contentType: false,
                //dataType: "json",  
                beforeSend: function(){
                    $('#hiring_manager_btn').addClass('disable-action');
                },
                success: function(data)
                {
                    // alert(data);
                    // console.log(data);return false;
                    if(data.status == 'ok' && data.redirect){
                        if(data.message)
                        {
                            $('#hiring_manager_form').trigger("reset");
                            $('.response-data').text(data.message);
                            $('.response-data').show();                         
                        }
                        else
                        {
                            //get the closable setting value.
                                //grab the dialog instance using its parameter-less constructor then set multiple settings at once.
                                alertify.alert('Talent Request', 'Data Submitted Successfully!', function()
                                {
                                    window.location.href = data.redirect;
                                    alertify.success('Ok'); 
                                });
                            
                        }                       
                    }
                    if(data.status == 'false' && data.redirect){
                        $('.invalid-data').text(data.message);
                        $('.invalid-data').show();
                    }
                    
                    $.each(data, function(key, value) {
                        // console.log("here");
                        // console.log("Key "+key+" "+"value"+" "+value);
                        if (key  && value == 'hiringManagerAvailabilityError')
                        {
                            $.notify("Select Hiring Manager Avaialabilty ", "error");
                        }
                        
                    });
                },
                complete: function (data) {
                    $('#hiring_manager_btn').removeClass('disable-action');
                }
            });
        });

// quick job request form submission start

    $('#quick_job_request_form_page').on('submit', function (e) 
    {

        $('.error').html("");
        e.preventDefault();
        // alert($('#quick_talent_request_action').val());
        // return false;
         // client or Business area starts
            if ( $('#quickClientBusiness').val() == ''  || $('#quickClientBusiness').val() == 'new') 
            {
                $(".dropdown__select5").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;
            }
            ///////////////////////////
            if ( $('#quickClientBusiness').val() !== ''  || $('#quickClientBusiness').val() !== 'new') 
            {
                $(".dropdown__select5").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////
            if ( $('#quickHiringManager').val() == '' || $('#quickHiringManager').val() == 'new' ) 
            {
                $(".dropdown__select6").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;
            }
            /////////////////////
            if ( $('#quickHiringManager').val() !== ''  || $('#quickHiringManager').val() !== 'new') 
            {
                $(".dropdown__select6").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
        

        // quick job field request starts

        if ($('#quick_job_field').val()=='') 
        {
            $("#quick_job_field").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;
        }
        else
        {
            $("#quick_job_field").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
        }
        // quick job field request ends
        // quick job title request start
        if ($('#quick_job_title').val()=='') 
        {
            $("#quick_job_title").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;
        }
        else{
            $("#quick_job_title").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
        }
        // quick job title request ends
        // quick_jobLocation starts
        if ($('#quick_jobLocation').val()==null) 
        {
            $(".fs-wrap").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;
        }
        else
        {
             $(".fs-wrap").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
        }
        // quick_jobLocation ends .level

        if ( (!$('#leader_of_leader_jb_pop_quick_job_page').prop("checked")) && (!$('#leader_of_professional_jb_pop_quick_job_page').prop( "checked")) && (!$('#individual_prefossional_jb_pop_quick_job_page').prop( "checked")))
            {
                $(".level_jb_pop_quick_job_page").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;     
            }
            else
            {
                 $(".level_jb_pop_quick_job_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // QUICK JOB REQUEST FROM PAGE START
            // contract type page checkor not
            if ( (!$('#perm_quickjob_page').prop("checked")) && (!$('#ftc_quickjob_page').prop("checked")) && (!$('#contractor_quickjob_page').prop("checked")) )
            {
                
                    $(".contract").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;                
            }
            else
            {
                $(".contract").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }
            if ($('#perm_quickjob_page').prop("checked"))
            {
                if ($('#pay_frst_drp_quickjob_page').val()=='')
                {
                    $("#pay_frst_drp_quickjob_page").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp_quickjob_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }
            if ($('#ftc_quickjob_page').prop("checked") || $('#contractor_quickjob_page').prop("checked"))
            {
                if ((!$( "#page_quickjob_length_months_1").prop("checked")) && (!$( "#page_quickjob_length_months_2").prop("checked")) && (!$( "#page_quickjob_length_months_3").prop("checked")) &&  (!$( "#page_quickjob_length_months_4").prop("checked")) && (!$( "#page_quickjob_length_months_5").prop("checked")) && (!$( "#page_quickjob_length_months_6").prop("checked")) && (!$( "#page_quickjob_length_months_7").prop("checked")) && (!$( "#page_quickjob_length_months_8").prop("checked")) && (!$( "#page_quickjob_length_months_9").prop("checked")) && (!$( "#page_quickjob_length_months_10").prop("checked")) && (!$( "#page_quickjob_length_months_11").prop("checked")) && (!$( "#page_quickjob_length_months_12").prop("checked"))) 
                {
                    $(".talent_request_length_months").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
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
            if ($('#contractor_quickjob_page').prop("checked"))
            {
               if ($('#pay_dialy_drp_des_ntj_quickjob_page').val()=='')
                {
                    $("#pay_dialy_drp_des_ntj_quickjob_page").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_dialy_drp_des_ntj_quickjob_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }

            // contractor div fixed-term

            if ($('#ftc_quickjob_page').prop("checked"))
            {
               if ($('#pay_frst_drp_quickjob_page').val()=='')
                {
                    $("#pay_frst_drp_quickjob_page").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp_quickjob_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});  
                }
            }
            /////////////////
            if ($('#pay_bonus_percentage_quickjob_page').val()=='')
            {
                   $("#pay_bonus_percentage_quickjob_page").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#pay_bonus_percentage_quickjob_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }

             // QUICK JOB REQUEST FROM PAGE ENDS


        $.each($('#quick_job_request_form_page').serializeArray() , function(key, value){
                
                if ($( "input[name='"+value.name+"']").attr('meetup-attr') && $( "input[name='"+value.name+"']").attr('meetup-attr') !=='' )
                {
                    var attrValue = $( "input[name='"+value.name+"']").attr('meetup-attr');
                    var inputValue =$( "input[name='"+value.name+"']").val();
                    $( "input[name='"+value.name+"']").val(inputValue+"-"+attrValue);
                    // console.log($( "input[name='"+value.name+"']").val());
                
                }
                // console.log('Key : '+ value.name +' And Value : ' +value.value);
                
            });
        var data = new FormData(this);
        var controller_action = $('#quick_talent_request_action').val();
        var location = $('#quick_jobLocation').val();
        data.append('quick_jobLocation', location);
        // return false;        
        $.ajax({
            type: "POST",
            url: base_url+controller_action, 
            data: data,
            processData: false,
            contentType: false,
            //dataType: "json",  
            beforeSend: function()
            {
                $('#quick_job_request_btn').addClass('disable-action');
            },
            success: function(data)
            {
                // alert(data);
                // console.log(data);return false;
                if(data.status == 'ok' && data.redirect)
                {
                    if(data.message)
                    {
                        $('#hiring_manager_form').trigger("reset");
                        $('.response-data').text(data.message);
                        $('.response-data').show();                         
                    }
                    else
                    {
                        //grab the dialog instance using its parameter-less constructor then set multiple settings at once.
                        alertify.alert('Talent Request', 'Data Submitted Successfully!', function()
                                {
                                    window.location.href = data.redirect;
                                    alertify.success('Ok'); 
                                });
                    }                       
                }
                if(data.status == 'false' && data.redirect)
                {
                    alertify.alert("Something went Wrong", function()
                        {
                            alertify.error('OK');
                        }).setHeader('Error');
                }    
                $.each(data, function(key, value) 
                {
                    // console.log("here");
                    // console.log("Key "+key+" "+"value"+" "+value);

                    if (key == 'quick_job_field' && value !=='')
                    {
                        $.notify('Job Field Error', "error");    
                    }

                    if (key == 'quick_job_title' && value !=='')
                    {
                        $.notify("Job Title Error", "error");    
                    }

                    if (key == 'quick_jobLocation' && value !=='')
                    {
                        $.notify("Job Location", "error");    
                    }

                    if (key == 'quick_job_level' && value !=='')
                    {
                        $.notify("Job Level Error", "error");    
                    }

                    if (key == 'quickClientBusiness' && value !=='')
                    {
                        $.notify("Invalid Value in client/Business Area", "error");    
                    }

                    if (key == 'quickHiringManager' && value !=='')
                    {
                        $.notify("Invalid Value of Hiring Manager", "error");    
                    }
                    if (key == 'hiringManagerAvailabilityError' && value=='hiringManagerAvailabilityError')
                    {
                        $.notify("Select Hiring Manager Avaialabilty", "error");    
                    }

                    
                });
                },
                complete: function (data) {
                    $('#quick_job_request_btn').removeClass('disable-action');
            }
        });
    });
// quick job request form submission ends


// quick job request modal form submission start
////////////////////////                  /////////////////
// quick job form submission modal 

$('#quick_job_request_form_modal').on('submit', function (e) 
    {
        // alert('coming in  quick request modal');
        $('.error').html("");
        e.preventDefault();
        // alert($('#quickClientBusiness_modal').val());
        // return false;

         // client or Business area starts
            if ( $('#quickClientBusiness_modal').val() == ''  || $('#quickClientBusiness_modal').val() == 'new') 
            {
                $(".dropdown__select1").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $("#myModal_job_header").offset().top
                    }, 1000)
                return false;
            }
            ///////////////////////////
            if ( $('#quickClientBusiness_modal').val() !== ''  || $('#quickClientBusiness_modal').val() !== 'new') 
            {
                $(".dropdown__select1").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////
            if ( $('#quickHiringManager_modal').val() == '' || $('#quickHiringManager_modal').val() == 'new' ) 
            {
                $(".dropdown__select2").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $("#myModal_job_header").offset().top
                    }, 1000)
                return false;
            }
            /////////////////////
            if ( $('#quickHiringManager_modal').val() !== ''  || $('#quickHiringManager_modal').val() !== 'new') 
            {
                $(".dropdown__select2").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
        

        // quick job field request starts

        if ($('#quick_job_field_modal').val()=='') 
        {
            $("#quick_job_field_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $("#myModal_job_header").offset().top
                    }, 1000)
                return false;
        }
        else
        {
            $("#quick_job_field_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
        }
        // quick job field request ends
        // quick job title request start
        if ($('#quick_job_title_modal').val()=='') 
        {
            $("#quick_job_title_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $("#myModal_job_header").offset().top
                    }, 1000)
                return false;
        }
        else{
            $("#quick_job_title_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
        }
        // quick job title request ends
        // quick_jobLocation starts
        if ($('#quick_jobLocation_modal').val()==null) 
        {
            $(".fs-wrap").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $("#myModal_job_header").offset().top
                    }, 1000)
                return false;
        }
        else
        {
             $(".fs-wrap").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
        }
        // quick_jobLocation ends .level

        if ( (!$('#leader_of_leader_jb_pop_quick_job_modal').prop("checked")) && (!$('#leader_of_professional_jb_pop_quick_job_modal').prop( "checked")) && (!$('#individual_prefossional_jb_pop_quick_job_modal').prop( "checked")))
            {
                $(".level_jb_pop_quick_job_modal").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $("#myModal_job_header").offset().top
                    }, 1000)
                return false;     
            }
            else
            {
                 $(".level_jb_pop_quick_job_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }

            // QUICK JOB REQUEST FROM MODAL START
            // contract type page checkor not
            if ( (!$('#perm_quickjob_modal').prop("checked")) && (!$('#ftc_quickjob_modal').prop("checked")) && (!$('#contractor_quickjob_modal').prop("checked")) )
            {
                
                    $(".contract").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;                
            }
            else
            {
                $(".contract").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }
            if ($('#perm_quickjob_modal').prop("checked"))
            {
                if ($('#pay_frst_drp_quickjob_modal').val()=='')
                {
                    $("#pay_frst_drp_quickjob_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp_quickjob_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }
            if ($('#ftc_quickjob_modal').prop("checked") || $('#contractor_quickjob_modal').prop("checked"))
            {
                if ((!$( "#modal_quickjob_length_months_1").prop("checked")) && (!$( "#modal_quickjob_length_months_2").prop("checked")) && (!$( "#modal_quickjob_length_months_3").prop("checked")) &&  (!$( "#modal_quickjob_length_months_4").prop("checked")) && (!$( "#modal_quickjob_length_months_5").prop("checked")) && (!$( "#modal_quickjob_length_months_6").prop("checked")) && (!$( "#modal_quickjob_length_months_7").prop("checked")) && (!$( "#modal_quickjob_length_months_8").prop("checked")) && (!$( "#modal_quickjob_length_months_9").prop("checked")) && (!$( "#modal_quickjob_length_months_10").prop("checked")) && (!$( "#modal_quickjob_length_months_11").prop("checked")) && (!$( "#modal_quickjob_length_months_12").prop("checked"))) 
                {
                    $(".talent_request_length_months").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
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
            if ($('#contractor_quickjob_modal').prop("checked"))
            {
               if ($('#pay_dialy_drp_des_ntj_quickjob_modal').val()=='')
                {
                    $("#pay_dialy_drp_des_ntj_quickjob_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_dialy_drp_des_ntj_quickjob_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }

            // contractor div fixed-term

            if ($('#ftc_quickjob_modal').prop("checked"))
            {
               if ($('#pay_frst_drp_quickjob_modal').val()=='')
                {
                    $("#pay_frst_drp_quickjob_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp_quickjob_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});  
                }
            }
            /////////////////
            if ($('#pay_bonus_percentage_quickjob_modal').val()=='')
            {
                   $("#pay_bonus_percentage_quickjob_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#pay_bonus_percentage_quickjob_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }

             // QUICK JOB REQUEST FROM PAGE ENDS

            console.log($('#quick_job_request_form_modal').serializeArray());
            // return false;
        $.each($('#quick_job_request_form_modal').serializeArray() , function(key, value){
                
                if ($( "input[name='"+value.name+"']").attr('meetup-attr') && $( "input[name='"+value.name+"']").attr('meetup-attr') !=='' )
                {
                    var attrValue = $( "input[name='"+value.name+"']").attr('meetup-attr');
                    var inputValue =$( "input[name='"+value.name+"']").val();
                    $( "input[name='"+value.name+"']").val(inputValue+"-"+attrValue);
                    console.log($( "input[name='"+value.name+"']").val());
                
                }
            });
        // console.log('Key : '+ value.name +' And Value : ' +value.value);
                // return false;
        var data = new FormData(this);

        var location = $('#quick_jobLocation_modal').val();
        data.append('quick_jobLocation_modal', location);
        // return false;        
        $.ajax({
            type: "POST",
            url: base_url+'submitQuickTalentRequest_modal', 
            data: data,
            processData: false,
            contentType: false,
            //dataType: "json",  
            beforeSend: function()
            {
                $('#quick_job_request_btn').addClass('disable-action');
            },
            success: function(data)
            {
                // alert(data);
                // console.log(data);return false;
                if(data.status == 'ok' && data.redirect)
                {
                    if(data.message)
                    {
                        $('#hiring_manager_form').trigger("reset");
                        $('.response-data').text(data.message);
                        $('.response-data').show();                         
                    }
                    else
                    {
                        alertify.alert('Talent Request', 'Request Submitted Successfully!', function()
                        { 
                            alertify.success('Ok');
                            window.location.href = data.redirect;
                        });
                    }                       
                }
                if(data.status == 'false' && data.redirect)
                {
                    alertify.alert("Something went Wrong", function()
                        {
                            alertify.error('OK');
                        }).setHeader('Error');
                }    
                $.each(data, function(key, value) 
                {
                    // console.log("here");
                    // console.log("Key "+key+" "+"value"+" "+value);

                    if (key == 'quick_job_field' && value !=='')
                    {
                        $.notify('Job Field Error', "error");    
                    }

                    if (key == 'quick_job_title' && value !=='')
                    {
                        $.notify("Job Title Error", "error");    
                    }

                    if (key == 'quick_jobLocation' && value !=='')
                    {
                        $.notify("Job Location", "error");    
                    }

                    if (key == 'quick_job_level' && value !=='')
                    {
                        $.notify("Job Level Error", "error");    
                    }

                    if (key == 'quickClientBusiness' && value !=='')
                    {
                        $.notify("Invalid Value in client/Business Area", "error");    
                    }

                    if (key == 'quickHiringManager' && value !=='')
                    {
                        $.notify("Invalid Value of Hiring Manager", "error");    
                    }
                    if (key == 'hiringManagerAvailabilityError' && value=='hiringManagerAvailabilityError')
                    {
                        $.notify("Select Hiring Manager Avaialabilty", "error");    
                    }

                    
                });
                },
                complete: function (data) {
                    $('#quick_job_request_btn').removeClass('disable-action');
            }
        });
    });     

// quick job request modal form submission ends

// full job request modal form submission start
$('#talent_request_form_modal').on('submit', function (e)
{
    // alert('coming in full request modal');
            $('.error').html("");
            e.preventDefault();
            // alert('Coming HERE');
            // return false;
            // alert($('#clientBusiness_modal').val());
             // client or Business area starts
            if ( $('#clientBusiness_modal').val() == ''  || $('#clientBusiness_modal').val() == 'new') 
            {
                $(".dropdown__select3").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".modal-title").offset().top
                    }, 1000)
                return false;
            }
            ///////////////////////////
            if ( $('#clientBusiness_modal').val() !== ''  || $('#clientBusiness_modal').val() !== 'new') 
            {
                $(".dropdown__select3").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////
            if ( $('#hiringManager_modal').val() == '' || $('#hiringManager_modal').val() == 'new' ) 
            {
                $(".dropdown__select4").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".modal-title").offset().top
                    }, 1000)
                return false;
            }
            /////////////////////
            if ( $('#hiringManager_modal').val() !== ''  || $('#hiringManager_modal').val() !== 'new') 
            {
                $(".dropdown__select4").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }

            // client or Business area ends
            // job field check start
            if ($('#jobField_modal').val()=='') 
            {
                $("#jobField_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $("#jobField_modal").offset().top
                    }, 1000)
                $('#jobField_modal').focus();
                return false;
            }
            if ($('#jobField_modal').val() !=='') 
            {
                $("#jobField_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // job field check ends
            // job title field starts
            if ($('#jobTitle_modal').val()=='') 
            {
                $("#jobTitle_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                $('#jobTitle_modal').focus();
                return false;
            }
            if ($('#jobTitle_modal').val() !=='') 
            {
                $("#jobTitle_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // job title fields ends
            if ($('#jobLocation_modal').val()==null) 
            {
                $(".fs-wrap").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;
            }
            if ($('#jobLocation_modal').val() !==null && $('#jobLocation_modal').val() !=='') 
            {
                $(".fs-wrap").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // job location fields ends here

            if ( (!$('#ntj_leader_of_leader_modal').prop("checked")) && (!$('#ntj_leader_of_professional_modal').prop( "checked")) && (!$('#ntj_individual_prefossional_page_desk_modal').prop( "checked")))
            {
                $(".level").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                return false;      
            }
            else{
                $(".level").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
            }

            if ($('#ntj_leader_of_leader_modal').prop("checked")) 
            {
                if ($('#teamDirectReport_modal').val()=='')
                {
                    $("#teamDirectReport_modal").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#teamDirectReport_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});       
                }

                if ($('#totalTeamFunctions_modal').val()=='')
                {
                    $("#totalTeamFunctions_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#totalTeamFunctions_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
                }
            }
            // job level page checked 
            if ($('#ntj_leader_of_professional_modal').prop("checked")) 
            {
                if ($('#teamDirectReport_modal').val()=='')
                {
                    $("#teamDirectReport_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#teamDirectReport_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});       
                }
            }
            // contract type page checkor not
            if ( (!$('#perm_modal').prop("checked")) && (!$('#ftc_modal').prop("checked")) && (!$('#contractor_page_desk_modal').prop("checked")) )
            {
                
                    $(".contract").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;                
            }
            else
            {
                $(".contract").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }
            if ($('#perm_modal').prop("checked"))
            {
                if ($('#pay_frst_drp_modal').val()=='')
                {
                    $("#pay_frst_drp_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }
            if ($('#ftc_modal').prop("checked") || $('#contractor_page_desk_modal').prop("checked"))
            {
                if ((!$( "#modal_length_months_1").prop("checked")) && (!$( "#modal_length_months_2").prop("checked")) && (!$( "#modal_length_months_3").prop("checked")) &&  (!$( "#modal_length_months_4").prop("checked")) && (!$( "#modal_length_months_5").prop("checked")) && (!$( "#modal_length_months_6").prop("checked")) && (!$( "#modal_length_months_7").prop("checked")) && (!$( "#modal_length_months_8").prop("checked")) && (!$( "#modal_length_months_9").prop("checked")) && (!$( "#modal_length_months_10").prop("checked")) && (!$( "#modal_length_months_11").prop("checked")) && (!$( "#modal_length_months_12").prop("checked"))) 
                {
                    $(".talent_request_length_months").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
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
            if ($('#contractor_page_desk_modal').prop("checked"))
            {
               if ($('#pay_dialy_drp_des_ntj_modal').val()=='')
                {
                    $("#pay_dialy_drp_des_ntj_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_dialy_drp_des_ntj_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});   
                }
            }

            // contractor div fixed-term

            if ($('#ftc_modal').prop("checked"))
            {
               if ($('#pay_frst_drp_modal').val()=='')
                {
                    $("#pay_frst_drp_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
                }
                else
                {
                    $("#pay_frst_drp_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});  
                }
            }
            /////////////////
            if ($('#pay_bonus_percentage_modal').val()=='')
            {
                   $("#pay_bonus_percentage_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#pay_bonus_percentage_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""}); 
            }
            // working hours time part-time or full time
            if ((!$('#perm0010_modal').prop('checked')) && (!$('#part_time01_modal').prop('checked')) ) 
            {
                $(".hours_page").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000)
                    return false;      
            }
            else
            {
                $(".hours_page").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            // work hours full time part time ends
            if ($('#part_time01_modal').prop('checked'))
            {
                if($('#workingHours_modal').val()=='')
                {
                    $("#workingHours_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                            $('html, body').animate({
                              scrollTop: $(".content-wrapper").offset().top
                            }, 1000)
                            return false; 
                }
                else
                {
                    $("#workingHours_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
                }
                if ($('#workingHours_modal').val()!=='')
                {
                    if( (!$('#select_any_days_desk_ntj_modal').prop('checked')) && (!$('#select_any_days_2_desk_ntj_modal').prop('checked')) && (!$('#select_any_days_3_desk_ntj_modal').prop('checked')) && (!$('#select_any_days_4_desk_ntj_modal').prop('checked')) && (!$('#select_any_days_5_desk_ntj_modal').prop('checked')) && (!$('#select_any_days_6_desk_ntj_modal').prop('checked')))
                    {
                        $("#select_days_label").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                            $('html, body').animate({
                              scrollTop: $(".content-wrapper").offset().top
                            }, 1000)
                            return false;   
                    }
                    else
                    {
                        $("#select_days_label").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
                    }
                }
            }
            // obejctive fo the jjob start
            if ($('#objective_1_modal').val()=='')
            {
                $("#objective_1_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000);
                    $('#objective_1_modal').focus();
                    return false;
            }
            else
            {
                $("#objective_1_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
                ///////////////////////////////
            if ($('#objective_2_modal').val()=='')
            {
                $("#objective_2_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000);
                    $('#objective_2_modal').focus();
                    return false;
            }
            else
            {
                $("#objective_2_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ////////////////////////////////
            if ($('#objective_3_modal').val()=='')
            {
                $("#objective_3_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".content-wrapper").offset().top
                    }, 1000);
                    $('#objective_3_modal').focus();
                    return false;
            }
            else
            {
                $("#objective_3_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////////////////////
            // talent requirements strat from here 
            if ( (!$('#Top_talent_modal').prop('checked')) && (!$('#solid_performer_modal').prop('checked')) && (!$('#High_potential_modal').prop('checked')) )
            {
                 $(".capability").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".capability").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            /////////////////////////////////////
            if ( (!$('#like_modal').prop('checked')) && (!$('#Transferrable_skills_modal').prop('checked')) && (!$('#Open_minded_modal').prop('checked')) )
            {
                $(".experience").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".experience").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////
            if ( (!$('#Within_3_years_modal').prop('checked')) && (!$('#After_3_years_modal').prop('checked')) && (!$('#No_requirement_modal').prop('checked')) )
            {
               $(".successor-ready").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".successor-ready").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////////
            if ( (!$('#Required_modal').prop('checked')) && (!$('#Preferred_modal').prop('checked')) && (!$('#No_requirement2_modal').prop('checked')) )
            {
                $(".qualification").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".qualification").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////////////
            if ($('#skill_1_modal').val()=='')
            {
                $("#skill_1_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000);
                    $("#skill_1_modal").focus();
                    return false;
            }
            else
            {
                $("#skill_1_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ////////////////////
            if ($('#skill_2_modal').val()=='')
            {
                $("#skill_2_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000);
                    $("#skill_2_modal").focus();
                    return false;
            }
            else
            {
                $("#skill_2_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            /////////////////
            if ($('#skill_3_modal').val()=='')
            {
                $("#skill_3_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000);
                    $("#skill_3_modal").focus();
                    return false;
            }
            else
            {
                $("#skill_3_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////
            // talent requirements ends here
            // search assistance requirements starts
            if ( (!$('#Car_allowance_modal').prop('checked')) && (!$('#Car_allowance01_modal').prop('checked')) && (!$('#Car_allowance02_modal').prop('checked')) )
            {
                $(".benefits").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".benefits").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            ///////////////////////////////
            if ( (!$('#relocation_ntj_none_modal').prop('checked')) && (!$('#relocation_ntj_cost_modal').prop('checked')) && (!$('#relocation_ntj_visa_sponsor_modal').prop('checked')) )
            {
                $(".relocation-support").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".relocation-support").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ( (!$('#None_working_modal').prop('checked')) && (!$('#Some3_modal').prop('checked')) && (!$('#Fully_flexible2_modal').prop('checked')) )
            {
               $(".home_flexi_desktop_working").css({"border-color": "red", 
                                          "border-width":"3px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $(".home_flexi_desktop_working").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#referral_1_modal').val()=='')
            {
                $("#referral_1_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000);
                    $("#referral_1_modal").focus();
                    return false;
            }
            else
            {
                $("#referral_1_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#referral_2_modal').val()=='')
            {
                $("#referral_2_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".specific_skills").offset().top
                    }, 1000);
                    $("#referral_2_modal").focus();
                    return false;
            }
            else
            {
                $("#referral_2_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#referral_3_modal').val()=='')
            {
                $("#referral_3_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".benefits").offset().top
                    }, 1000);
                    $("#referral_3_modal").focus();
                    return false;
            }
            else
            {
                $("#referral_3_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#AdditionalSearchTxt_modal').val()=='')
            {
                $("#AdditionalSearchTxt_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".benefits").offset().top
                    }, 1000);
                    $("#AdditionalSearchTxt_modal").focus();
                    return false;
            }
            else
            {
                $("#AdditionalSearchTxt_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#videoLink_modal').val()=='')
            {
                $("#videoLink_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".benefits").offset().top
                    }, 1000);
                    $("#videoLink_modal").focus();
                    return false;
            }
            else
            {
                $("#videoLink_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////
            if ($('#fileField_modal').val()=='')
            {
                $("#fileField_modal").css({"border-color": "red", 
                                          "border-width":"2px", 
                                          "border-style":"solid"});
                
                    $('html, body').animate({
                      scrollTop: $(".benefits").offset().top
                    }, 1000)
                    return false;
            }
            else
            {
                $("#fileField_modal").css({"border-color": "", 
                                          "border-width":"", 
                                          "border-style":""});
            }
            //////////////////////////////

            // form serialize to check hiring manager avaialabilty calendar settings

            $.each($('#talent_request_form_modal').serializeArray() , function(key, value){
                
                if ($( "input[name='"+value.name+"']").attr('meetup-attr') && $( "input[name='"+value.name+"']").attr('meetup-attr') !=='' )
                {
                    var attrValue = $( "input[name='"+value.name+"']").attr('meetup-attr');
                    var inputValue =$( "input[name='"+value.name+"']").val();
                    $( "input[name='"+value.name+"']").val(inputValue+"-"+attrValue);
                    // console.log($( "input[name='"+value.name+"']").val());
                
                }
                // console.log('Key : '+ value.name +' And Value : ' +value.value);
                
            });
            // return false;
            var data = new FormData(this);

            var location = $('#jobLocation').val();
            data.append('jobLocation', location);
            console.log(data);
            // return false;

            
            $.ajax({
                type: "POST",
                url: base_url+'submitTalentRequest_modal', 
                data: data,
                processData: false,
                contentType: false,
                //dataType: "json",  
                beforeSend: function(){
                    $('#hiring_manager_btn').addClass('disable-action');
                },
                success: function(data)
                {
                    // alert(data);
                    // console.log(data);return false;
                    if(data.status == 'ok' && data.redirect){
                        if(data.message)
                        {
                            $('#hiring_manager_form').trigger("reset");
                            $('.response-data').text(data.message);
                            $('.response-data').show();                         
                        }
                        else
                        {
                            alertify.alert('Talent Request', 'Data has been Submitted Successfully!', function()
                            {
                                alertify.success('Ok');
                                window.location.href = data.redirect;
                            });
                        }                       
                    }
                    if(data.status == 'false' && data.redirect){
                        $('.invalid-data').text(data.message);
                        $('.invalid-data').show();
                    }
                    
                    $.each(data, function(key, value) {
                        // console.log("here");
                        // console.log("Key "+key+" "+"value"+" "+value);
                        if (key  && value == 'hiringManagerAvailabilityError')
                        {
                            $.notify("Select Hiring Manager Avaialabilty ", "error");
                        }
                        
                    });
                },
                complete: function (data) {
                    $('#hiring_manager_btn').removeClass('disable-action');
                }
            });
    return false;
});
// full job request modal form submission start

/*------------------Quick Job-------------------------*/

//Get Client Business Area Data //Adil
$('#quick_client_business_area').on('click', function() {

    $('#quick_append_client_business_area').html("");
    $.ajax({
        type: "POST",
        url: base_url+"getClientBusinessAreea",
        success: function(data){

            //console.log(data);

            $('#quick_append_client_business_area').append('<a class="dropdown__link">Client or business area</a><a class="dropdown__link" data-toggle="modal" data-target="#client_business_area">New</a>');
            var response = $.parseJSON(data);
            response = response.reverse();
            for(var i = 0; i < response.length; i++ )
            {
                var obj = response[i];

                $('#quick_append_client_business_area').append('<a class="dropdown__link" id="quickclientBusiness_'+obj.id+'">'+obj.firstname+' '+obj.lastname+'</a>');
            }

        }
    });

});


//Get Hirring Area Data //Adil
$('#quick_Hiring_Managers').on('click', function() {

    $('#quick_append_hiring_mangers').html('');

    $.ajax({
        type: "POST",
        url: base_url+"getHirringManager",
        success: function(data){

            $('#quick_append_hiring_mangers').append('<a class="dropdown__link">Hiring manager</a><a class="dropdown__link" data-toggle="modal" data-target="#hiring_manager">New</a>');
            var response = $.parseJSON(data);
            response = response.reverse();
            for(var i = 0; i < response.length; i++ )
            {
                var obj = response[i];

                $('#quick_append_hiring_mangers').append('<a class="dropdown__link" id="quickHiringManager_'+obj.hiringmanager_id+'">'+obj.hiringmanager_name+'</a>');
            }

        }
    });

});


/*---------------------------Full Request-------------------*/
$('#full_client_business_area').on('click', function() {
    
    $('#append_full_client_business_area').html('');

    $.ajax({
        type: "POST",
        url: base_url+"getClientBusinessAreea",
        success: function(data){

            //console.log(data);

            $('#append_full_client_business_area').append('<a class="dropdown__link">Client or business area</a><a class="dropdown__link" data-toggle="modal" data-target="#client_business_area">New</a>');
            var response = $.parseJSON(data);
            response = response.reverse();
            for(var i = 0; i < response.length; i++ )
            {
                var obj = response[i];

                $('#append_full_client_business_area').append('<a class="dropdown__link" id="clientBusiness_'+obj.id+'">'+obj.firstname+' '+obj.lastname+'</a>');
            }

        }
    });

});


$('#Hiring_Managers').on('click', function(){

    $('#append_full_hiring_mangers').html('');

    $.ajax({
        type: "POST",
        url: base_url+"getHirringManager",
        success: function(data){

            $('#append_full_hiring_mangers').append('<a class="dropdown__link">Hiring manager</a><a class="dropdown__link" data-toggle="modal" data-target="#hiring_manager">New</a>');
            var response = $.parseJSON(data);
            response = response.reverse();
            for(var i = 0; i < response.length; i++ )
            {
                var obj = response[i];


                $('#append_full_hiring_mangers').append('<a class="dropdown__link" id="hiringManager_'+obj.hiringmanager_id+'">'+obj.hiringmanager_name+'</a>');
            }

        }
    });
});


 /*---------------------------Full Request-------------------*/

 /*------------------Quick Job Modal start-------------------------*/

//Get Client Business Area Data //Adil
$('#quick_client_business_area_modal').on('click', function() {

    $('#quick_append_client_business_area_modal').html('');
    $.ajax({
        type: "POST",
        url: base_url+"getClientBusinessAreea",
        success: function(data){

            //console.log(data);

            $('#quick_append_client_business_area_modal').append('<a class="dropdown__link">Client or business area</a><a class="dropdown__link" data-toggle="modal" data-target="#client_business_area">New</a>');
            var response = $.parseJSON(data);
            response = response.reverse();
            for(var i = 0; i < response.length; i++ )
            {
                var obj = response[i];

                $('#quick_append_client_business_area_modal').append('<a class="dropdown__link" id="modalquickclientBusiness_'+obj.id+'">'+obj.firstname+' '+obj.lastname+'</a>');
            }

        }
    });

});


//Get Hirring Area Data //Adil
$('#quick_Hiring_Managers_modal').on('click', function() {

    $('#quick_append_hiring_mangers_modal').html('');

    $.ajax({
        type: "POST",
        url: base_url+"getHirringManager",
        success: function(data){

            $('#quick_append_hiring_mangers_modal').append('<a class="dropdown__link">Hiring manager</a><a class="dropdown__link" data-toggle="modal" data-target="#hiring_manager">New</a>');
            var response = $.parseJSON(data);
            response = response.reverse();
            for(var i = 0; i < response.length; i++ )
            {
                var obj = response[i];
                
                $('#quick_append_hiring_mangers_modal').append('<a class="dropdown__link" id="modalquickHiringManager_'+obj.hiringmanager_id+'">'+obj.hiringmanager_name+'</a>');
            }

        }
    });

});


/*---------------------------Full Request-------------------*/
$('#full_client_business_area_modal').on('click', function() {
    
    $('#append_full_client_business_area_modal').html('');

    $.ajax({
        type: "POST",
        url: base_url+"getClientBusinessAreea",
        success: function(data){

            //console.log(data);

            $('#append_full_client_business_area_modal').append('<a class="dropdown__link">Client or business area</a><a class="dropdown__link" data-toggle="modal" data-target="#client_business_area">New</a>');
            var response = $.parseJSON(data);
            response = response.reverse();
            for(var i = 0; i < response.length; i++ )
            {
                var obj = response[i];

                $('#append_full_client_business_area_modal').append('<a class="dropdown__link" id="modalclientBusiness_'+obj.id+'">'+obj.firstname+' '+obj.lastname+'</a>');
            }

        }
    });

});


$('#Hiring_Managers_modal').on('click', function(){

    $('#append_full_hiring_mangers_modal').html('');

    $.ajax({
        type: "POST",
        url: base_url+"getHirringManager",
        success: function(data){

            $('#append_full_hiring_mangers_modal').append('<a class="dropdown__link">Hiring manager</a><a class="dropdown__link" data-toggle="modal" data-target="#hiring_manager">New</a>');
            var response = $.parseJSON(data);
            response = response.reverse();
            for(var i = 0; i < response.length; i++ )
            {
                var obj = response[i];


                $('#append_full_hiring_mangers_modal').append('<a class="dropdown__link" id="modalhiringManager_'+obj.hiringmanager_id+'">'+obj.hiringmanager_name+'</a>');
            }

        }
    });
});


 /*---------------------------Full Request modal ends-------------------*/

 $('#hiring_manager').on('shown.bs.modal', function (e) {
    //var clientname = $('#clientName').text();
    $('#append_hiringmangers').html('');
    $.ajax({
        url : base_url+"gethiringmangerclients",
        type: "POST",
        success: function(data)
        {

            var output = [];
            var response = $.parseJSON(data);
            $('#append_hiringmangers').html('<option vlaue="">Select</option>');
            $.each(response, function(key, value)
            {
                //if (clientname == value.firstname+' '+value.lastname) {
                  //  output.push('<option value="'+ value.id +'" selected>'+value.firstname+' '+value.lastname+'</option>');
                //}else{
                    output.push('<option value="'+ value.id +'">'+value.firstname+' '+value.lastname+'</option>');
                //}
            });

            $('#append_hiringmangers').html('<option vlaue=""></option>'+output.join(''));

        }
    });
})