;(function () {	
	'use strict';
	
	//enable disable field on different events
	var trigger_ = function()
	{	
		//$('#proof').click();
		var fixed_term_mnt = 0;
		$('body').on('click', '.display_none_talent3', function()
		{		
			var row_class_ = $(this).parent().parent().attr('class');
			var click_id  = $(this).attr('id');
			console.log(row_class_);
			if(row_class_ == 'level' || row_class_ == 'bonus-by-out' || row_class_ == 'experience' || row_class_ == 'successor-ready' || row_class_ == 'qualification' || row_class_ == 'flexible-working' || row_class_ == 'relocation-support' || row_class_ == 'capability' || row_class_ == 'benefits' || row_class_ == 'job' || row_class_ == 'current_search_1' || row_class_ == 'notice_period' || row_class_ == 'people_ambitions' || row_class_ == 'home_require' || row_class_ == 'flexible_hours')
			{
				singleSelect_(row_class_,$(this));
			}
			if(row_class_ == 'bonus')
			{
				if(click_id == 'None')
				{
					$('#Yes').prop('checked',false);
					$('#None').prop('checked',true);
					$('#percent').attr('disabled','disabled');

					$('.bonus-by-out').find("input:checkbox").each(function()
					{
						$(this).prop('checked',false);
						$(this).attr('disabled','disabled');
					});					
				}
				else if(click_id == 'Yes')
				{
					$('#Yes').prop('checked',true);
					$('#None').prop('checked',false);
					$('#percent').removeAttr('disabled');
					$('.bonus-by-out').find("input:checkbox").each(function()
					{
						$(this).removeAttr('disabled','disabled');
					});
				}
			}
			
			if(row_class_ == 'contract')
			{
				if(click_id == 'perm' && $('#perm').prop('checked')==true)
				{
					$('#fixed_term_mnt').attr('disabled','disabled');
					fixed_term_mnt = 1;
				}
				else
				{
					$('#perm').prop('checked',false);
					$('#fixed_term_mnt').removeAttr('disabled','disabled');	
					fixed_term_mnt = 0;					
				}
				console.log(fixed_term_mnt);
				enadis_val_(fixed_term_mnt);
			}
		});
		
		$('body').on('change', '#fixed_term_mnt', function()
		{
			if($(this).val())
			{
				fixed_term_mnt = 1;
				$('#perm').attr('disabled','disabled');
			}
			else
			{
				fixed_term_mnt = 0;
				$('#pay_frst_drp').removeAttr('disabled','disabled');
				$('#perm').removeAttr('disabled','disabled');
			}
			console.log(fixed_term_mnt);
			enadis_val_(fixed_term_mnt);
		});

		$('body').on('change', '#contractor_thrd_', function()
		{
			if($(this).val())
			{
				$('#pay_sec_drp').removeAttr('disabled','disabled');
			}
			else
			{
				$('#pay_sec_drp').attr('disabled','disabled');
			}
		});

		
	};
	
	var enadis_val_= function(flag)
	{
		if(flag)
		{
			$('#pay_thrd_drp').removeAttr('disabled','disabled');	
			$('#pay_frst_drp').removeAttr('disabled','disabled');	
		}
		else
		{
			$('#pay_thrd_drp').attr('disabled','disabled');
			$('#pay_frst_drp').attr('disabled','disabled');
		}
	};
	
	
	var singleSelect_ = function(row_class_,this_)
	{	
		$('.'+row_class_).find("input:checkbox").each(function()
		{
			if ($(this).prop('checked')==true)
			{ 
				$(this).prop('checked',false);
				this_.prop('checked',true);
			}
		});
	};
	var payleft_ = function()
	{	
		$('.pay').find("select,input").each(function()
		{
			$(this).attr('disabled','disabled');
		});
	};
	
	
	
	// Document on load.
	$(function()
	{
		trigger_();
		singleSelect_();
		payleft_();
		enadis_val_();
	});
}());