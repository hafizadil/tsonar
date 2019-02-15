var random_color = 1;
var active_tab_timea = '';

function clickMe(this_)
{	
	li_tim = $(this_).parent().attr('all-li-click');
	ul_tim = $(this_).parent().parent().attr('all-click');
	
	if($(this_).parent().parent().parent().attr('id') == 'time_tab_mob1')
	{
		active_tab_timea = 'time_tab_mob';
	}
	if($(this_).parent().parent().parent().attr('id') == 'time_talent_new_pop1')
	{
		active_tab_timea = 'time_talent_new_pop';
	} 
	// hiring manager availability claendar quick job page and modal start
	else if($(this_).parent().parent().parent().attr('id') == 'date_time_tab_page_1')
	{
		active_tab_timea = 'date_time_tab_page_';
	}
	else if($(this_).parent().parent().parent().attr('id') == 'date_time_tab_modal_1')
	{
		active_tab_timea = 'date_time_tab_modal_';
	}
	// hiring manager availability claendar quick job page and modal start		
	else if($(this_).parent().parent().parent().attr('id') == 'quick_tab_mob1')
	{
		active_tab_timea = 'quick_tab_mob';
	}
	else if($(this_).parent().parent().parent().attr('id') == 'date_time_modal_tab1')
	{
		active_tab_timea = 'date_time_modal_tab';
	}
	else if($(this_).parent().parent().parent().attr('id') == 'time_talent_pop1')
	{
		active_tab_timea = 'time_talent_pop';
	}
	else if($(this_).parent().parent().parent().attr('id') == 'date_time_pop_desk_1')
	{
		active_tab_timea = 'date_time_pop_desk_';
	}
	// hiring amanger availability modal calendar start
	else if($(this_).parent().parent().parent().attr('id') == 'date_time_pop_modal_1')
	{
		active_tab_timea = 'date_time_pop_modal_';
	}
	// hiring amanger availability modal calendar start
	else if($(this_).parent().parent().parent().attr('id') == 'date_time_tab_clone1')
	{
		active_tab_timea = 'date_time_tab_clone';
	}
	else if($(this_).parent().parent().parent().attr('id') == 'time_talent_pop_mobile1')
	{
		active_tab_timea = 'time_talent_pop_mobile';
	}
	else if($(this_).parent().parent().parent().attr('id') == 'create_intro_pop1')
	{
		active_tab_timea = 'create_intro_pop';
	}
	else if($(this_).parent().parent().parent().attr('id') == 'date_time_tab_page_1')
	{
		active_tab_timea = 'date_time_tab_page_';
	}

	else if($(this_).parent().parent().parent().attr('id') == 'user_availibilty_intro1')
	{
		active_tab_timea = 'user_availibilty_intro';
	}
	else if($(this_).parent().parent().parent().attr('id') == 'user_availibilty_mob1')
	{
		active_tab_timea = 'user_availibilty_mob';
	}
	
	//
	
	// alert(active_tab_timea);
	// console.log(this_);
	// return false;

	if(random_color == 1)
	{

		if( $(this_).attr("backround-attr") == 'green' )
		{
			// alert('green');
			$(this_).attr("backround-attr","red");
			$(this_).attr("meetup-attr","user");
			$(this_).parent().css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				
			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				// check value of days check box when user value is present
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				// add user or phone attribute to the sleected fields
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","user");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","user");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","user");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","user");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","user");
			}
			return;
		}
		
		if($(this_).attr("backround-attr") === "red" )
		{
			// alert('Red');
			$(this_).attr("backround-attr","white");
			$(this_).attr("meetup-attr","");
			$(this_).parent().css("background-image","");
			$(this_).parent().css("background-color", "#fff");
			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				// check value of days check box when user value is present
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',false);
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',false);
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',false);
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',false);
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',false);
				// add user or phone attribute to the sleected fields
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","");
			}			
			return;
		}
		
		if($(this_).attr("backround-attr") === "white" )
		{
			// alert('This white');
			$(this_).attr("backround-attr","green");
			$(this_).attr("meetup-attr","phone");
			$(this_).parent().css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");					
			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				// check inlut fields in other days
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				// add user or phone attribute to the sleected fields
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
			}				
			return;
		}
		
		if($(this_).attr("backround-attr") === "" )
		{
			// alert('empty');
			$(this_).attr("backround-attr","green");
			$(this_).attr("meetup-attr","phone");
			$(this_).parent().css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
			
			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
					
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				// check inlut fields in other days
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').prop('checked',true);
				// add user or phone attribute to the sleected fields
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').find('input[type=checkbox]').attr("meetup-attr","phone");
			}
			return;
		}
	}
	
	if(random_color == 2){

		if( $(this_).attr("backround-attr") == 'green' )
		{
			$(this_).attr("backround-attr","red");

			$(this_).parent().css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
			
			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
			}
			return;
		}
		
		if($(this_).attr("backround-attr") === "red" )
		{
			$(this_).attr("backround-attr","white");
			$(this_).parent().css("background-image","");
			$(this_).parent().css("background-color", "#fff");
			
			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
			}
			return;
		}
		
		if($(this_).attr("backround-attr") === "white" )
		{
			$(this_).attr("backround-attr","green");
			$(this_).parent().css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");

			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
			}
			return;
		}
		
		if($(this_).attr("backround-attr") === "" )
		{
			$(this_).attr("backround-attr","green");
			$(this_).parent().css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url"+base_url+"public/admin/(dist/img/phone.png)");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
			}		
			return;
		}
	}
	
	if(random_color == 3){

		if( $(this_).attr("backround-attr") == 'green' )
		{
			$(this_).attr("backround-attr","red");
			$(this_).parent().css("background-image","url("+base_url+"public/admin/dist/img/user.png)");

			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url"+base_url+"public/admin/(dist/img/user.png)");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/user.png)");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","url("+base_url+"public/admin/dist/img/users.png)");
			}
			return;
		}
		
		if($(this_).attr("backround-attr") === "red" )
		{
			$(this_).attr("backround-attr","white");
			$(this_).parent().css("background-image","");
			$(this_).parent().css("background-color", "#fff");

			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{

				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image","");
			}
			return;
		}
		
		if($(this_).attr("backround-attr") === "white" )
		{
			$(this_).attr("backround-attr","green");
			$(this_).parent().css("background-image","url("+base_url+"public/admin/dist/img/phone.png");
			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
			}								
			return;
		}
		
		if($(this_).attr("backround-attr") === "" )
		{
			$(this_).attr("backround-attr","green");
			$(this_).parent().css("background-image","url("+base_url+"public/admin/dist/img/phone.png)");
			
			if($(this_).parent().parent().parent().attr('id') == active_tab_timea+'1')
			{
				$('#'+ active_tab_timea + '2').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
				$('#'+ active_tab_timea + '3').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
				$('#'+ active_tab_timea + '4').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
				$('#'+ active_tab_timea + '5').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
				$('#'+ active_tab_timea + '6').find('[all-click='+ul_tim+']').find('[all-li-click='+li_tim+']').css("background-image",""+base_url+"public/admin/dist/img/phone.png");
			}				
			return;
		}
	}
	random_color++;
	if(random_color == 4)
	{
		random_color = 1;
	}
}







var random_color_scheme = 1;
function changeColor(this_)
{	 
//console.log(random_color_scheme);
//console.log($(this_).attr("backround-attr"));
	if(random_color_scheme == 1)
	{
		
		if($(this_).attr("backround-attr") === "red" )
		{
			$(this_).attr("backround-attr","white");
			$(this_).css("background-color","");
			$(this_).css("background-color", "white");
			return;
		}
		
		if($(this_).attr("backround-attr") === "white" )
		{
			$(this_).attr("backround-attr","red");
			$(this_).css("background-color","red");
			return;
		}
		
		if($(this_).attr("backround-attr") === "" )
		{
			$(this_).attr("backround-attr","red");
			$(this_).css("background-color","red");
			return;
		}
	}
	
	if(random_color_scheme == 2)
	{

		if($(this_).attr("backround-attr") === "red" )
		{
			$(this_).attr("backround-attr","white");
			$(this_).css("background-color","");
			$(this_).css("background-color", "white");
			return;
		}
		
		if($(this_).attr("backround-attr") === "white" )
		{
			$(this_).attr("backround-attr","red");
			$(this_).css("background-color","red");
			return;
		}
		
		if($(this_).attr("backround-attr") === "" )
		{
			$(this_).attr("backround-attr","red");
			$(this_).css("background-color","red");
			return;
		}
	}
	
	if(random_color_scheme == 3)
	{

		if($(this_).attr("backround-attr") === "red" )
		{
			$(this_).attr("backround-attr","white");
			$(this_).css("background-color","");
			$(this_).css("background-color", "white");
			return;
		}
		
		if($(this_).attr("backround-attr") === "white" )
		{
			$(this_).attr("backround-attr","red");
			$(this_).css("background-color","red");
			return;
		}
		
		if($(this_).attr("backround-attr") === "" )
		{
			$(this_).attr("backround-attr","red");
			$(this_).css("background-color","red");
			return;
		}

	}
	random_color_scheme++;
	if(random_color_scheme == 4)
	{
		random_color_scheme = 1;
	}
}







	var add_remov_focus = 0;
	$("body").on('click','.key_accountability_1',function() {
		count_field = 0;
		
		
		$('div.'+$(this).attr("cls-attr")).find('.fieldname').each(function(){
			count_field++
		});

		if(count_field == 3)
		{
			return false;
		}
		
		attr_placehlder = $(this).attr("attr-placeholder");
		console.log(attr_placehlder);
		if (typeof attr_placehlder !== typeof undefined && attr_placehlder !== false) {
		}
		else
		{
			attr_placehlder = '';
		}		
		
		
		input_ky_vl = $(this).attr("cls-attr");
		var lastField = $("."+input_ky_vl+ "div:last");
		var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
		var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field_2_" + intId + "\"/>");
		fieldWrapper.data("idx", intId);
		var fName = $("<input type=\"text\" placeholder=\""+attr_placehlder+"\" class=\"fieldname col-xs-8 focu_ad_"+add_remov_focus+"\" />");
		var addButton =	$("<input type=\"button\" attr-placeholder=\""+attr_placehlder+"\"  class=\"add col-xs-2 key_accountability_1\" value=\"+\" cls-attr="+input_ky_vl+" >");
		var removeButton = $("<input type=\"button\" class=\"remove col-xs-2\" value=\"-\" />");
		removeButton.click(function() {
			$(this).parent().remove();
		});
		//addButton.click(function() {
		add_remov_focus++;
			//addInput_1(input_ky_vl);
		//});
		fieldWrapper.append(fName);
		fieldWrapper.append(addButton);
		fieldWrapper.append(removeButton);
		//$(".input_key_1").append(fieldWrapper);
		$("."+input_ky_vl).append(fieldWrapper);
		setTimeout(function() {
		console.log(".focu_ad_"+add_remov_focus);
			$(".focu_ad_"+add_remov_focus).focus();
		}, 200);
	});


function addInput_1(input_ky_vl) {
	console.log(input_ky_vl);
	//var lastField = $(".input_key_1 div:last");
	var lastField = $("."+input_ky_vl+ "div:last");
	var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
	var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field_2_" + intId + "\"/>");
	fieldWrapper.data("idx", intId);
	var fName = $("<input type=\"text\" class=\"fieldname col-xs-8 focu_ad_"+add_remov_focus+" \" />");
	var addButton =	$("<input type=\"button\" class=\"add col-xs-2 key_accountability_1 \" value=\"+\" cls-attr="+input_ky_vl+" >");
	var removeButton = $("<input type=\"button\" class=\"remove col-xs-2\" value=\"-\" cls-attr="+input_ky_vl+" >");
	removeButton.click(function() {
		$(this).parent().remove();
	});
	addButton.click(function() {
		add_remov_focus++;
		addInput_1(input_ky_vl);
	});
	fieldWrapper.append(fName);
	fieldWrapper.append(addButton);
	fieldWrapper.append(removeButton);
	//$(".input_key_1").append(fieldWrapper);
	$("."+input_ky_vl).append(fieldWrapper);
	setTimeout(function() {
		console.log(".focu_ad_"+add_remov_focus);
			$(".focu_ad_"+add_remov_focus).focus();
	}, 200);	
}



function hm_availability_click(this_)
{
	if($(this_).hasClass('tl_ind_tm_all_act_hide'))
	{
		hm_hide_cls_nam = 'tl_ind_tm_all_act_hide';
		hm_shw_cls_nam = 'tl_ind_tm_all_act';
		hm_tab_content_cls = 'tl_ind_hm_tb_content';
		hm_availability_hide(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	} 
	else if($(this_).hasClass('tl_ind_tm_all_act'))
	{	
		hm_hide_cls_nam = 'tl_ind_tm_all_act_hide';
		hm_shw_cls_nam = 'tl_ind_tm_all_act';
		hm_tab_content_cls = 'tl_ind_hm_tb_content';
		hm_availability_show(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	}
	else if($(this_).hasClass('hm_avail_desk_ntj_hide'))
	{
		hm_hide_cls_nam = 'hm_avail_desk_ntj_hide';
		hm_shw_cls_nam = 'hm_avail_desk_ntj';
		hm_tab_content_cls = 'hm_tb_content_desk_ntj';
		hm_availability_hide(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	} 
	else if($(this_).hasClass('hm_avail_desk_ntj'))
	{
		hm_hide_cls_nam = 'hm_avail_desk_ntj_hide';
		hm_shw_cls_nam = 'hm_avail_desk_ntj';
		hm_tab_content_cls = 'hm_tb_content_desk_ntj';
		hm_availability_show(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	}
	else if($(this_).hasClass('hm_avail_qk_jb_pop_desk_hide'))
	{
		hm_hide_cls_nam = 'hm_avail_qk_jb_pop_desk_hide';
		hm_shw_cls_nam = 'hm_avail_qk_jb_pop_desk';
		hm_tab_content_cls = 'hm_tb_content_qk_jb_pop_desk';
		hm_availability_hide(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	} 
	else if($(this_).hasClass('hm_avail_qk_jb_pop_desk'))
	{
		hm_hide_cls_nam = 'hm_avail_qk_jb_pop_desk_hide';
		hm_shw_cls_nam = 'hm_avail_qk_jb_pop_desk';
		hm_tab_content_cls = 'hm_tb_content_qk_jb_pop_desk';
		hm_availability_show(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	}
	else if($(this_).hasClass('hm_avail_fr_jb_pop_desk_hide'))
	{
		hm_hide_cls_nam = 'hm_avail_fr_jb_pop_desk_hide';
		hm_shw_cls_nam = 'hm_avail_fr_jb_pop_desk';
		hm_tab_content_cls = 'hm_tb_content_fr_jb_pop_desk';
		hm_availability_hide(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	}
	else if($(this_).hasClass('hm_avail_fr_jb_pop_desk'))
	{
		hm_hide_cls_nam = 'hm_avail_fr_jb_pop_desk_hide';
		hm_shw_cls_nam = 'hm_avail_fr_jb_pop_desk';
		hm_tab_content_cls = 'hm_tb_content_fr_jb_pop_desk';
		hm_availability_show(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	}
	else if($(this_).hasClass('user_avail_intro_pop_desk_hide'))
	{
		hm_hide_cls_nam = 'user_avail_intro_pop_desk_hide';
		hm_shw_cls_nam = 'user_avail_intro_pop_desk';
		hm_tab_content_cls = 'user_avail_tab_content_desk';
		hm_availability_hide(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	}
	else if($(this_).hasClass('user_avail_intro_pop_desk'))
	{
		hm_hide_cls_nam = 'user_avail_intro_pop_desk_hide';
		hm_shw_cls_nam = 'user_avail_intro_pop_desk';
		hm_tab_content_cls = 'user_avail_tab_content_desk';
		hm_availability_show(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	}
	
	
	
	
	
	else if($(this_).hasClass('hm_avail_intro_pop_desk_hide'))
	{
		hm_hide_cls_nam = 'hm_avail_intro_pop_desk_hide';
		hm_shw_cls_nam = 'hm_avail_intro_pop_desk';
		hm_tab_content_cls = 'hm_avail_intro_tab_cont_desk';
		hm_availability_hide(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	}
	else if($(this_).hasClass('hm_avail_intro_pop_desk'))
	{
		hm_hide_cls_nam = 'hm_avail_intro_pop_desk_hide';
		hm_shw_cls_nam = 'hm_avail_intro_pop_desk';
		hm_tab_content_cls = 'hm_avail_intro_tab_cont_desk';
		hm_availability_show(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	}
	
	
	
	
	
}

function hm_availability_show(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls)
{
	$(this_).css("transition", "500");
	$(this_).parent().removeClass('active');
	$('body').find('.'+hm_hide_cls_nam).each(function(){
		$(this).addClass(hm_shw_cls_nam).removeClass(hm_hide_cls_nam);
	});
	$(this_).parent().siblings().removeClass('active');
	$(this_).parent().addClass('active');
	var tab_cont_id_d_ = $('.'+hm_tab_content_cls).find('.active').attr('id');
	$('#'+tab_cont_id_d_).removeClass('active');
	$('#'+$(this_).attr('attr-id')).addClass('active');			
	$(this_).addClass(hm_hide_cls_nam);
	$(this_).removeClass(hm_shw_cls_nam);
}

function hm_availability_hide(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls)
{
	$(this_).css("transition", "500");
	$(this_).addClass(hm_shw_cls_nam);
	$(this_).parent().removeClass('active');
	var tab_cont_id_d_ = $('.'+hm_tab_content_cls).find('.active').attr('id');
	$('#'+tab_cont_id_d_).removeClass('active');
	$('#'+$(this_).attr('attr-id')).removeClass('active');
	$(this_).removeClass(hm_hide_cls_nam);	
}

/*
function hm_availability_show(this_)
{
	
	if($(this_).hasClass('tl_ind_tm_all_act_hide'))
	{
		hm_hide_cls_nam = 'tl_ind_tm_all_act_hide';
		hm_shw_cls_nam = 'tl_ind_tm_all_act';
		hm_tab_content_cls = 'tl_ind_hm_tb_content';
		hm_availability_hide(this_,hm_hide_cls_nam,hm_shw_cls_nam,hm_tab_content_cls);
	} 
	else
	{
		$(this_).css("transition", "500");
		$(this_).parent().removeClass('active');
		$('body').find('.tl_ind_tm_all_act_hide').each(function(){
			$(this).addClass('tl_ind_tm_all_act').removeClass('tl_ind_tm_all_act_hide');
		});
		$(this_).parent().siblings().removeClass('active');
		$(this_).parent().addClass('active');
		var tab_cont_id_d_ = $('.tl_ind_hm_tb_content').find('.active').attr('id');
		console.log(tab_cont_id_d_);
		$('#'+tab_cont_id_d_).removeClass('active');
		$('#'+$(this_).attr('attr-id')).addClass('active');			
		$(this_).addClass('tl_ind_tm_all_act_hide');
		$(this_).removeClass('tl_ind_tm_all_act');
	}
}

function hm_availability_hide(this_)
{
	$(this_).css("transition", "500");
	$(this_).addClass('tl_ind_tm_all_act');
	$(this_).parent().removeClass('active');
	var tab_cont_id_d_ = $('.tl_ind_hm_tb_content').find('.active').attr('id');
	$('#'+tab_cont_id_d_).removeClass('active');
	$('#'+$(this_).attr('attr-id')).removeClass('active');
	$(this_).removeClass('tl_ind_tm_all_act_hide');	
}


*/