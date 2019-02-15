
        // TALENT REQUEST CLIENT OR BUSINESS AREA STARTS
        $(document).ready(function() {
            $(".change input").change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });
            $(".change textarea").change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });
            $(".change select").change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });
        });
        // TALENT REQUEST CLIENT OR BUSINESS AREA ENDDS  

        
            $(".green_hover_input").focus(function(){
                $(this).css("background-color", "#f5f5f5");
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

        // alert($('#jobLocation').fSelect());
        // console.log($('#jobLocation').fSelect());
   