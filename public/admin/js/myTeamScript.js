
        jQuery.extend(jQuery.expr[':'], {
            focusable: function(el, index, selector) {
                return $(el).is('a, button, select, :input, [tabindex]');
            }
        });

        $(document).on('keypress', 'input,select', function(e) {
            if (e.which == 13) {
                e.preventDefault();
                // Get all focusable elements on the page
                var $canfocus = $(':focusable');
                var index = $canfocus.index(document.activeElement) + 1;
                if (index >= $canfocus.length) index = 0;
                $canfocus.eq(index).focus();
            }
        });
        
            $('[data-toggle="popover"]').popover();
        

            $('body').on('click', function(e) {
                if ($(e.target).parents('.cal_drp_tab').length) {
                    console.log("length");
                    e.preventDefault();
                }
            })
       