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