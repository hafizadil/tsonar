
    $('#example1').calendar({
        type: 'date'
    });

    $('#example2').calendar({
        type: 'date'
    });

    $('#date_mobile').calendar({
        type: 'date'
    });

    $('#limited_visa_expiry').calendar({
        type: 'date'
    });
   

        $(document).ready(function(){
            $(".green_hover_input").focus(function(){
                $(this).css("background-color", "#f5f5f5");
            });
            // dashboard jobs modal click start

            // dashboard jobs modal click end
        });
    
        $('.toggle_tick').click(function() {
            $('#target_flexible_pay').toggle('slow');
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
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
   
        $(document).ready(function(){
          
            $('body').on('click', function(e)
            {
                if($(e.target).parents('.cal_drp_tab').length)
                {
                    console.log("length");
                    e.preventDefault();
                }
            })
        });
    
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

        //Code for doughnet Chart

         window.onload = function () {


                         //   code of first  chart

                var chart1 = new CanvasJS.Chart("chartContainer1", {
                animationEnabled: true,
                title:{
       
                horizontalAlign: "left"
                 },
    
                    data: [{
                    type: "doughnut",
                    startAngle: 60,
                    //innerRadius: 60,
                    indexLabelFontSize: 17,
       
                    toolTipContent: "<b>{label}:</b> {y}",
                     dataPoints: [
                                { y: 67 },
                                { y: 28 },
                                { y: 10 },
            
                                ]
                            }]
                                            });
                        chart1.render();

        
          
                    var dps = chart1.options.data[0].dataPoints;
                    var sum = 0;     
        
                    for(var i = 0; i < dps.length; i++){
        
                sum += dps[i].y;                
        
                        }
                               
                        document.getElementById("total1").innerHTML = sum;
                        




                           //   code of second  chart 
                            var chart2 = new CanvasJS.Chart("chartContainer2", {
                            animationEnabled: true,
                            title:{
                               
                                horizontalAlign: "left"
                            },
                            
                            data: [{
                                type: "doughnut",
                                startAngle: 60,
                                //innerRadius: 60,
                                indexLabelFontSize: 17,
                               
                                toolTipContent: "<b>{label}:</b> {y} ",
                                dataPoints: [
                                    { y: 20  },
                                    { y: 40  },
                                    { y: 40 },
                                    
                                ]
                            }]
                        });
                        chart2.render();

                                
                                  
                        var dps = chart2.options.data[0].dataPoints;
                        var sum = 0;     
                                
                        for(var i = 0; i < dps.length; i++){
                                
                           sum += dps[i].y;                
                                
                        }
                                                       
                        document.getElementById("total2").innerHTML = sum;




                         //   code of Third  chart

                        var chart3 = new CanvasJS.Chart("chartContainer3", {
                            animationEnabled: true,
                            title:{
                               
                                horizontalAlign: "left"
                            },
                            
                            data: [{
                                type: "doughnut",
                                startAngle: 60,
                                //innerRadius: 60,
                                indexLabelFontSize: 17,
                               
                                toolTipContent: "<b>{label}:</b> {y} ",
                                dataPoints: [
                                    { y: 40  },
                                    { y: 20  },
                                    { y: 40 },
                                    
                                ]
                            }]
                        });
                        chart3.render();

                                
                                  
                        var dps = chart3.options.data[0].dataPoints;
                        var sum = 0;     
                                
                        for(var i = 0; i < dps.length; i++){
                                
                           sum += dps[i].y;                
                                
                        }
                                                       
                        document.getElementById("total3").innerHTML = sum;



                        //   code of fourth  chart
                           


                        var chart4 = new CanvasJS.Chart("chartContainer4", {
                            animationEnabled: true,
                            title:{
                               
                                horizontalAlign: "left"
                            },
                            
                            data: [{
                                type: "doughnut",
                                startAngle: 60,
                                //innerRadius: 60,
                                indexLabelFontSize: 17,
                               
                                toolTipContent: "<b>{label}:</b> {y} ",
                                dataPoints: [
                                    { y: 50  },
                                    { y: 30  },
                                    { y: 20 },
                                    
                                ]
                            }]
                        });
                        chart4.render();

                                
                                  
                        var dps = chart4.options.data[0].dataPoints;
                        var sum = 0;     
                                
                        for(var i = 0; i < dps.length; i++){
                                
                           sum += dps[i].y;                
                                
                        }
                                                       
                        document.getElementById("total4").innerHTML = sum;
                                 
                        }


    function dasboard_job_modal_click(id)
    {
        
        var job_id = id;
        var id_array = {
            talent_request_id:job_id
        };

        $.ajax(
        {
            type: "POST",
            url: base_url+'fetchDashboardJobs', 
            data: id_array,
            dataType: "json",  
            beforeSend: function()
            {
                $('#btn_action').addClass('disable-action');
            },
            success: function(data)
            {
                console.log(data.modal_view);
                $('#dashboard_job_modal_div').html(data.modal_view);
                $('#myModal5').modal('show');
                
                if(data.status == 'ok' && data.redirect)
                {
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
                if(data.status == 'false' && data.redirect)
                {
                    $('.invalid-data').text(data.message);
                    $('.invalid-data').show();
                }
            },
            complete: function (data) 
            {
                $('#btn_action').removeClass('disable-action');
            }
        });
    }
// DASHBOARD TALENT MODAL CLICK START
    function dasboard_talent_modal_click(id)
    {
        
        var talent_id = id;
        var id_array = {
                talent_id:talent_id
        };

        $.ajax(
        {
            type: "POST",
            url: base_url+'fetchDashboardTalents', 
            data: id_array,
            dataType: "json",  
            beforeSend: function()
            {
                $('#btn_action').addClass('disable-action');
            },
            success: function(data)
            {
                console.log(data.talent_modal_view);
                $('#dashboard_talent_modal_div').html(data.talent_modal_view);
                $('#myModall3').modal('show');
                
                if(data.status == 'ok' && data.redirect)
                {
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
                if(data.status == 'false' && data.redirect)
                {
                    $('.invalid-data').text(data.message);
                    $('.invalid-data').show();
                }
            },
            complete: function (data) 
            {
                $('#btn_action').removeClass('disable-action');
            }
        });
    }
                 
    // DASHBOARD TALENT MODAL CLICK ENDS
    // DASHBOARD INTROS MODAL CLIENT START
    function dashboard_intros_modal_click(id)
    {
        
        var intro_id = id;
        var id_array = {
                intro_id:intro_id
        };

        $.ajax(
        {
            type: "POST",
            url: base_url+'fetchDashboardIntros', 
            data: id_array,
            dataType: "json",  
            beforeSend: function()
            {
                $('#btn_action').addClass('disable-action');
            },
            success: function(data)
            {
                console.log(data.talent_modal_view);
                
                $('#dashboard_intros_modal_div').html(data.intor_modal_view);
                $('#myModal').modal('show');
                
                if(data.status == 'ok' && data.redirect)
                {
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
                if(data.status == 'false' && data.redirect)
                {
                    $('.invalid-data').text(data.message);
                    $('.invalid-data').show();
                }
            },
            complete: function (data) 
            {
                $('#btn_action').removeClass('disable-action');
            }
        });
    }
    // DASHBOARD INTROS MODAL CLIENT ENDS
