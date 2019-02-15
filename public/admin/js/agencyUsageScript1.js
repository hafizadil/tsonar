

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




        $(document).ready(function(){
            $('li.dropdown a').on('click', function (event)
            {

                if(!$(this).attr('data-toggle')){
                    $(this).parent().toggleClass('open');
                }
                if($(this).attr('class') == 'dropdown-toggle' && $(this).parent().attr('id') != 'calendar_dropdown')
                {
                    console.log('inner');
                    $('#calendar_dropdown').removeClass('open');
                }

            //calendar_dropdown
            });
            $('body').on('click', function(e)
            {
                if($(e.target).parents('.cal_drp_tab').length)
                {
                    e.preventDefault();
                }
            })
        });
    
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
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
    