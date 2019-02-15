;(function () {
	'use strict';
	// image uploader code 

	function readURL(input)
	{
	    if (input.files && input.files[0]) 
	    {
	    	// console.log(input.value);
	        var reader = new FileReader();

	        reader.onload = function(e) {
	        	// console.log(e.target);
	        	// return false;
	            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
	            $('#imagePreview').hide();
	            $('#imagePreview').fadeIn(650);
	            var image_url = e.target.result;

	            $.ajax({
					type: "POST",
					url: base_url+'update_userImage', 
					data: {image_url:image_url},
					success: function(data)
					{
						// alert(data);
						// console.log(data);
					},
				});
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$("#imageUpload").change(function() {
		readURL(this);
	    
	});
	
	//enable disable field on different events
	var trigger_ = function()
	{
		//$('#proof').click();
		$(window).load(function(){
			//console.log($('#calendar_dropdown').find('.slimScrollDiv:first'));
			$('#calendar_dropdown').find('.slimScrollDiv:first').addClass('cal_drp_tab');
			$('#calendar_dropdown').find('.cal_drp_tab').removeClass('slimScrollDiv');
		});
		
				
		var fixed_term_mnt, fixed_term_mnt_jb_pop = 0;
		var ftc_flsg, ftc_flsg_jb_pop = 0;
		var perm_flsg, perm_flsg_jb_pop = 0;
		//$('#pay_dsr_anul_pop').attr('disabled','disabled');
		$('#pay_dialy_drp_des_ntj_page').hide();
		$('#pay_dialy_drp_des_ntj_modal').hide();
		$('#pay_dialy_drp_des_ntj_jb_pop').hide();
		// HIDE CONTRACT MONTHS DIV  
		$('.div_contract_month_quickjob_page').hide();
		$('#pay_dialy_drp_des_ntj_quickjob_page').hide();

		$('.div_contract_month_quickjob_modal').hide();
		$('#pay_dialy_drp_des_ntj_quickjob_modal').hide(); 
		
		$('.ntj_direct_report').hide();
		$('.ntj_size_total_func').hide();
		$('.direct_report_jb_pop').hide();
		$('.size_total_func_jb_pop').hide();
		$('.adiv_level_fr_jb_pop').hide();
		//$('#pay_frst_drp_jb_pop').hide();
		$('.div_contrctr_mnth_fr_job_pop').hide();
		$('.hrs_pr_week_fr_job_pop').hide();
		$('.div_hours_days_fr_job_pop').hide();
		$('.adiv_level_page_pop_page').hide();
		$('.adiv_level_page_pop_modal').hide();
		
		$('.div_contrctr_mnth_page').hide();
		$('.div_contr_mnth_ntj_page').hide();
		$('.div_contr_mnth_ntj_modal').hide();
		$('.div_contr_mnth_jb_pop').hide();
		//$('#pay_frst_drp').hide();
		$('.div_hours_days_page_desk_ntj_page').hide();
		$('.div_hours_days_page_desk_ntj_modal').hide();
		
		$('.tal_ind_direct_report').hide();
		$('.tal_ind_size_total_func').hide();
		$('.tal_ind_div_level').hide();
		//$('.current_pay_ind_talent').hide();
		$('.current_pay_slct_end_dt').hide();
		$('.curny_pay_lastpid').hide();
		//$('#pay_dsr_anul_pop').hide();
		$('#tl_ind_pay_dsr_daily').hide();
		$('.tl_ind_hrs_wntd_per_week').hide();
		$('.tl_ind_hrs_wntd_slct_dys').hide();
		$('.div_tl_ind_visa_expire').hide();
		$('.tl_ind_life_flexible_detail').hide();
		$('.tal_ind_div_cont_end_date').hide();
		$('#tl_ind_cur_pay_daily_pay').hide();
		

		$('body').on('click', '.display_none_talent3', function()
		{
			var row_class_ = $(this).parent().parent().attr('class');
			var click_id  = $(this).attr('id');

			console.log(row_class_);
			console.log(click_id);
			
			if( row_class_ == 'level' || row_class_ == 'hours_page' ||row_class_ == 'relocation-support' || row_class_ == 'current_contract' ||  row_class_ == 'contract_jb_pop' || row_class_ == 'tl_id_right_to_work_nz' || row_class_ == 'level_ind_talent' || row_class_ == 'level_jb_pop' || row_class_ == 'bonus-by-out' || row_class_ == 'experience' || row_class_ == 'successor-ready' || row_class_ == 'qualification' || row_class_ == 'flexible-working'  || row_class_ == 'capability' || row_class_ == 'benefits' || row_class_ == 'job' || row_class_ == 'current_search_1' || row_class_ == 'notice_period' || row_class_ == 'people_ambitions' || row_class_ == 'home_require' || row_class_ == 'flexible_hours' || row_class_ == 'people_manage' || row_class_ == 'hours_option' || row_class_ == 'contract' || row_class_ == 'hm_availibility_new' || row_class_ == 'capability_jb_pop' || row_class_ == 'experience_jb_pop' || row_class_ == 'successor-ready_jb_pop'  || row_class_ == 'qualification_jb_pop' || row_class_ == 'flexible-working_jb_pop' || row_class_ == 'client_business_area' ||  row_class_ == 'level_talent_popup' || row_class_ == 'ambition_leadership' || row_class_ == 'contract-consider-pop' || row_class_ == 'tl_ind_flexible_hours' || row_class_ == 'level_jb_pop_quick_job_modal' || row_class_ == 'level_jb_pop_quick_job_page' || row_class_ == 'home_flexi_desktop_working' || row_class_ == 'relocation_full_request_version' || row_class_ == 'talent_level_considered' || row_class_ == 'talent_location_main')
			{
				singleSelect_(row_class_,$(this));
			}
			
			if(row_class_ == 'relocation-support_jb_pop')
			{
				if(click_id == 'reloc_none_fr_jb_pop')
				{
					$('#reloc_cost_fr_jb_pop').prop('checked',false);
					$('#reloc_sponsorship_fr_jb_pop').prop('checked',false);
				}
				if(click_id == 'reloc_cost_fr_jb_pop')
				{
					$('#reloc_none_fr_jb_pop').prop('checked',false);
				}
				if(click_id == 'reloc_sponsorship_fr_jb_pop')
				{
					$('#reloc_none_fr_jb_pop').prop('checked',false);
				}
				
			}
			
			if(row_class_ == 'level')
			{
				// level devision for talent request page start 
				if(click_id == 'ntj_leader_of_leader_page')
				{
					if ($('#ntj_leader_of_leader_page').prop('checked')==true)
					{
						$('.adiv_level_page_pop_page').show();
						$('.ntj_direct_report_page').show();
						$('.ntj_size_total_func_page').show();
					}
					else
					{
						$('.adiv_level_page_pop_page').hide();
						$('.ntj_direct_report_page').hide();
						$('.ntj_size_total_func_page').hide();	
					}
					
					
				}
				else if(click_id == 'ntj_leader_of_professional_page')
				{
					if ($('#ntj_leader_of_professional_page').prop('checked')==true) 
					{
						$('.adiv_level_page_pop_page').show();
						$('.ntj_direct_report_page').show();
						$('.ntj_size_total_func_page').hide();
					}
					else
					{
						$('.adiv_level_page_pop_page').hide();
						$('.ntj_direct_report_page').hide();
						$('.ntj_size_total_func_page').hide();	
					}
					
				}
				// level devision for talent reuest page start
				// level division for talent request modal start
				else if(click_id == 'ntj_leader_of_leader_modal')
				{
					if ($('#ntj_leader_of_leader_modal').prop('checked')==true)
					{
						$('.adiv_level_page_pop_modal').show();
						$('.ntj_direct_report_modal').show();
						$('.ntj_size_total_func_modal').show();
					}
					else
					{
						$('.adiv_level_page_pop_modal').hide();
						$('.ntj_direct_report_modal').hide();
						$('.ntj_size_total_func_modal').hide();	
					}
					
					
				}
				else if(click_id == 'ntj_leader_of_professional_modal')
				{
					if ($('#ntj_leader_of_professional_modal').prop('checked')==true) 
					{
						$('.adiv_level_page_pop_modal').show();
						$('.ntj_direct_report_modal').show();
						$('.ntj_size_total_func_modal').hide();
					}
					else
					{
						$('.adiv_level_page_pop_modal').hide();
						$('.ntj_direct_report_modal').hide();
						$('.ntj_size_total_func_modal').hide();	
					}
					
				}
				// level division for talent request modal start
				else
				{
					$('.adiv_level_page_pop_page').hide();
					$('.ntj_direct_report_page').hide();
					$('.ntj_size_total_func_page').hide();
					// modal things hides here
					$('.adiv_level_page_pop_modal').hide();
					$('.ntj_direct_report_modal').hide();
					$('.ntj_size_total_func_page').hide();
				}	
				
			}
			
			if(row_class_ == 'level_jb_pop')
			{
				if(click_id == 'leader_of_leader_jb_pop')
				{
					$('.adiv_level_fr_jb_pop').show();
					$('.direct_report_jb_pop').show();
					$('.size_total_func_jb_pop').show();
				}
				else if(click_id == 'leader_of_professional_jb_pop')
				{
					$('.adiv_level_fr_jb_pop').show();
					$('.direct_report_jb_pop').show();
					$('.size_total_func_jb_pop').hide();
				}
				else
				{
					$('.adiv_level_fr_jb_pop').hide();
					$('.direct_report_jb_pop').hide();
					$('.size_total_func_jb_pop').hide();
				}	
				
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


			if(row_class_ == 'benefits')
			{
				if(click_id == 'Car_allowance' && $('#Car_allowance01').prop('checked')==true)
				{
					$('#Some4').prop('Car_allowance01',false);
				}
				if(click_id == 'Car_allowance01' && $('#Car_allowance').prop('checked')==true)
				{
					$('#Some4').prop('Car_allowance',false);
				}
			}		
			// contacrt  division for both page and modal start
			if(row_class_ == 'contract')
			{
				if(click_id == 'perm_page' && $('#perm_page').prop('checked')==true)
				{
					$('#pay_dialy_drp_des_ntj_page').hide();
					$('#pay_frst_drp_page').show();
					$('#ftc_page').prop('selectedIndex',0);
					$('#ftc_page').removeAttr('style','style');
					$('#contractor_thrd_').prop('selectedIndex',0);
					$('#contractor_thrd_').removeAttr('style','style');
					$('#fixed_term_mnt').attr('disabled','disabled');
					$('.div_contr_mnth_ntj_page').hide();
					
					perm_flsg = 1;
					fixed_term_mnt = 1;
				}
				else if(click_id == 'perm_page' && $('#perm_page').prop('checked')==false)
				{
					$('#pay_frst_drp_page').hide();
					$('#perm_page').prop('checked',false);
					$('#fixed_term_mnt').removeAttr('disabled','disabled');	
					fixed_term_mnt = 0;
					perm_flsg = 0;				
				}
				// contacrt type permanent modal start 
				if(click_id == 'perm_modal' && $('#perm_modal').prop('checked')==true)
				{
					$('#pay_dialy_drp_des_ntj_modal').hide();
					$('#pay_frst_drp_modal').show();
					$('#ftc_modal').prop('selectedIndex',0);
					$('#ftc_modal').removeAttr('style','style');
					$('#contractor_thrd_').prop('selectedIndex',0);
					$('#contractor_thrd_').removeAttr('style','style');
					$('#fixed_term_mnt').attr('disabled','disabled');
					$('.div_contr_mnth_ntj_modal').hide();
					
					perm_flsg = 1;
					fixed_term_mnt = 1;
				}
				else if(click_id == 'perm_modal' && $('#perm_modal').prop('checked')==false)
				{
					$('#pay_frst_drp_modal').hide();
					$('#perm_modal').prop('checked',false);
					$('#fixed_term_mnt').removeAttr('disabled','disabled');	
					fixed_term_mnt = 0;
					perm_flsg = 0;				
				}
				// contacrt type permanent modal ends
				if(click_id == 'contractor_page_desk_page' && $('#contractor_page_desk_page').prop('checked')==true)
				{
					console.log('Contractor contacrt');
					$('#pay_dialy_drp_des_ntj_page').show();
					$('#pay_frst_drp_page').hide();
					$('.div_contrctr_mnth_page').show();
					$('#contractor_thrd_').show();
					$('.div_contr_mnth_ntj_page').show();
				}
				else
				{
					$('#pay_frst_drp_page').show();
					$('#pay_dialy_drp_des_ntj_page').hide();
					$('.div_contrctr_mnth_page').hide();
					$('#contractor_thrd_').hide();
					$('.div_contr_mnth_ntj_page').hide();
				}
				// contacrt type contractor modal division start
				if(click_id == 'contractor_page_desk_modal' && $('#contractor_page_desk_modal').prop('checked')==true)
				{
					console.log('Contractor contacrt modal');
					$('#pay_dialy_drp_des_ntj_modal').show();
					$('#pay_frst_drp_modal').hide();
					$('.div_contrctr_mnth_modal').show();
					$('#contractor_thrd_').show();
					$('.div_contr_mnth_ntj_modal').show();
				}
				else
				{
					$('#pay_frst_drp_modal').show();
					$('#pay_dialy_drp_des_ntj_modal').hide();
					$('.div_contrctr_mnth_modal').hide();
					$('#contractor_thrd_').hide();
					$('.div_contr_mnth_ntj_modal').hide();
				}
				// contacrt type contractor modal division ends
				if(click_id == 'ftc_page'  && $('#ftc_page').prop('checked')==true)
				{
					console.log("ok");
					$('#perm_page').prop('checked',false);
					$('#contractor_page_desk').prop('checked',false);					
					$('#contractor_thrd_').prop('selectedIndex',0);
					$('#contractor_thrd_').removeAttr('style');
					$('#pay_dialy_drp_des_ntj_page').hide();
					$('#pay_frst_drp_page').show();
					$('.div_contrctr_mnth_page').hide();
					$('#contractor_thrd_').hide();
					$('.div_contr_mnth_ntj_page').show();
					
				}

				// contract type fixed term modal start
				if(click_id == 'ftc_modal'  && $('#ftc_modal').prop('checked')==true)
				{
					console.log("ftc modal");
					$('#perm_modal').prop('checked',false);
					$('#contractor_page_desk_modal').prop('checked',false);					
					$('#contractor_thrd_').prop('selectedIndex',0);
					$('#contractor_thrd_').removeAttr('style');
					$('#pay_dialy_drp_des_ntj_modal').hide();
					$('#pay_frst_drp_modal').show();
					$('.div_contrctr_mnth_modal').hide();
					$('#contractor_thrd_').hide();
					$('.div_contr_mnth_ntj_modal').show();
					
				}
				// contract type fixed term modal ends
				// QUICK JOB CONTRACT TYPE START
				/////////////////////////////////
				if(click_id == 'perm_quickjob_page' && $('#perm_quickjob_page').prop('checked')==true)
				{
					$('#pay_dialy_drp_des_ntj_quickjob_page').hide(); //done
					$('#pay_frst_drp_quickjob_page').show(); //done

					$('#ftc_quickjob_page').prop('selectedIndex',0); //done
					$('#ftc_quickjob_page').removeAttr('style','style'); //done

					$('#contractor_quickjob_page').prop('selectedIndex',0); //done
					$('#contractor_quickjob_page').removeAttr('style','style'); //done

					/*$('#fixed_term_mnt').attr('disabled','disabled');*/

					$('.div_contract_month_quickjob_page').hide(); //done
					
					perm_flsg = 1;
					fixed_term_mnt = 1;
				}

				else if(click_id == 'perm_quickjob_page' && $('#perm_quickjob_page').prop('checked')==false)
				{
					$('#pay_frst_drp_quickjob_page').hide();
					$('#perm_quickjob_page').prop('checked',false);
					// $('#fixed_term_mnt').removeAttr('disabled','disabled');	
					fixed_term_mnt = 0;
					perm_flsg = 0;				
				}
				// contacrt type permanent modal start 
				if(click_id == 'perm_quickjob_modal' && $('#perm_quickjob_modal').prop('checked')==true)
				{
					$('#pay_dialy_drp_des_ntj_quickjob_modal').hide(); //done
					$('#pay_frst_drp_quickjob_modal').show(); //done

					$('#ftc_quickjob_modal').prop('selectedIndex',0); //done
					$('#ftc_quickjob_modal').removeAttr('style','style'); //done

					$('#contractor_quickjob_modal').prop('selectedIndex',0); //done
					$('#contractor_quickjob_modal').removeAttr('style','style'); //done

					/*$('#fixed_term_mnt').attr('disabled','disabled');*/

					$('.div_contract_month_quickjob_modal').hide(); //done
					
					perm_flsg = 1;
					fixed_term_mnt = 1;
				}

				else if(click_id == 'perm_quickjob_modal' && $('#perm_quickjob_modal').prop('checked')==false)
				{
					$('#pay_frst_drp_quickjob_modal').hide();
					$('#perm_quickjob_modal').prop('checked',false);
					// $('#fixed_term_mnt').removeAttr('disabled','disabled');	
					fixed_term_mnt = 0;
					perm_flsg = 0;				
				}
				// contacrt type permanent modal ends
				if(click_id == 'contractor_quickjob_page' && $('#contractor_quickjob_page').prop('checked')==true)
				{
					console.log('Contractor quick');
					$('#pay_dialy_drp_des_ntj_quickjob_page').show();
					$('#pay_frst_drp_quickjob_page').hide();

					// $('.div_contrctr_mnth_page').show();
					// $('#contractor_thrd_').show();

					$('.div_contract_month_quickjob_page').show();
				}
				else
				{
					$('#pay_frst_drp_quickjob_page').show();
					$('#pay_dialy_drp_des_ntj_quickjob_page').hide();

					// $('.div_contrctr_mnth_page').hide();
					// $('#contractor_thrd_').hide();
					
					$('.div_contract_month_quickjob_page').hide();
				}
				// contacrt type contractor modal division start
				if(click_id == 'contractor_quickjob_modal' && $('#contractor_quickjob_modal').prop('checked')==true)
				{
					console.log('Contractor quick');
					$('#pay_dialy_drp_des_ntj_quickjob_modal').show();
					$('#pay_frst_drp_quickjob_modal').hide();

					// $('.div_contrctr_mnth_modal').show();
					// $('#contractor_thrd_').show();
					
					$('.div_contract_month_quickjob_modal').show();
				}
				else
				{
					$('#pay_frst_drp_quickjob_modal').show();
					$('#pay_dialy_drp_des_ntj_quickjob_modal').hide();

					// $('.div_contrctr_mnth_modal').hide();
					// $('#contractor_thrd_').hide();
					
					$('.div_contract_month_quickjob_modal').hide();
				}
				// contacrt type contractor modal division ends
				if(click_id == 'ftc_quickjob_page'  && $('#ftc_quickjob_page').prop('checked')==true)
				{
					console.log("ok");
					$('#perm_quickjob_page').prop('checked',false);
					$('#contractor_quickjob_page').prop('checked',false);	

					// $('#contractor_thrd_').prop('selectedIndex',0);
					// $('#contractor_thrd_').removeAttr('style');

					$('#pay_dialy_drp_des_ntj_quickjob_modal').hide();
					$('#pay_frst_drp_quickjob_modal').show();

					// $('.div_contrctr_mnth_page').hide();
					// $('#contractor_thrd_').hide();

					$('.div_contract_month_quickjob_page').show();
					
				}

				// contract type fixed term modal start
				if(click_id == 'ftc_quickjob_modal'  && $('#ftc_quickjob_modal').prop('checked')==true)
				{
					console.log("ok");
					$('#perm_quickjob_modal').prop('checked',false);
					$('#contractor_quickjob_modal').prop('checked',false);	

					// $('#contractor_thrd_').prop('selectedIndex',0);
					// $('#contractor_thrd_').removeAttr('style');

					$('#pay_dialy_drp_des_ntj_quickjob_modal').hide();
					$('#pay_frst_drp_quickjob_modal').show();

					// $('.div_contrctr_mnth_modal').hide();
					// $('#contractor_thrd_').hide();

					$('.div_contract_month_quickjob_modal').show();
					
				}
				// contract type fixed term modal ends
				// QUICK JOB CONTRACT TYPE ENDS
				
				
				//enadis_val_(fixed_term_mnt);
			}
			// contacrt  division for both page and modal  ends
			
			if(row_class_ == 'relocation-support')
			{
				// relocation assistance page start
				if(click_id == 'relocation_ntj_none_page' && $('#relocation_ntj_none_page').prop('checked')==true)
				{
					$('#relocation_ntj_cost_page').prop('checked',false);
					$('#relocation_ntj_visa_sponsor_page').prop('checked',false);
				}
				if(click_id == 'relocation_ntj_cost_page' && $('#relocation_ntj_cost_page').prop('checked')==true )
				{
					$('#relocation_ntj_none_page').prop('checked',false);
					$('#relocation_ntj_visa_sponsor_page').prop('checked',false);
				}
				if(click_id == 'relocation_ntj_visa_sponsor_page' && $('#relocation_ntj_visa_sponsor_page').prop('checked')==true) 
				{
					$('#relocation_ntj_none_page').prop('checked',false);
					$('#relocation_ntj_cost_page').prop('checked',false);
				}
				// relocation assistance page ends
				// relocation assistance modal start
				if(click_id == 'relocation_ntj_none_modal' && $('#relocation_ntj_none_modal').prop('checked')==true)
				{
					$('#relocation_ntj_cost_modal').prop('checked',false);
					$('#relocation_ntj_visa_sponsor_modal').prop('checked',false);
				}
				if(click_id == 'relocation_ntj_cost_modal' && $('#relocation_ntj_cost_modal').prop('checked')==true )
				{
					$('#relocation_ntj_none_modal').prop('checked',false);
					$('#relocation_ntj_visa_sponsor_modal').prop('checked',false);
				}
				if(click_id == 'relocation_ntj_visa_sponsor_modal' && $('#relocation_ntj_visa_sponsor_modal').prop('checked')==true) 
				{
					$('#relocation_ntj_none_modal').prop('checked',false);
					$('#relocation_ntj_cost_modal').prop('checked',false);
				}
				// relocation assistance modal ends
			}


			//**************************************************************
			//*******************job pop code below start*******************
			//**************************************************************

			if(row_class_ == 'contract_jb_pop')
			{
				if(click_id == 'perm_jb_pop' && $('#perm_jb_pop').prop('checked')==true)
				{
					$('#pay_dialy_drp_des_ntj_jb_pop').hide();
					$('#pay_frst_drp_jb_pop').show();
					$('#ftc_jb_pop').prop('selectedIndex',0);
					$('#ftc_jb_pop').removeAttr('style','style');
					$('#contractor_thrd__jb_pop').prop('selectedIndex',0);
					$('#contractor_thrd__jb_pop').removeAttr('style','style');
					$('.div_contr_mnth_jb_pop').hide();
					perm_flsg_jb_pop = 1;
				} 
				else
				{
					//$('#pay_frst_drp_jb_pop').hide();
					$('#perm_jb_pop').prop('checked',false);
					if(ftc_flsg_jb_pop){}else{ }
					perm_flsg_jb_pop = 0;				
				}
				
				
				if(click_id == 'ftc_jb_pop' && $('#ftc_jb_pop').prop('checked')==true)
				{
					$('#perm_jb_pop').prop('checked',false);
					$('#contractor_thrd__jb_pop').prop('selectedIndex',0);
					$('#contractor_thrd__jb_pop').removeAttr('style');
					$('#pay_dialy_drp_des_ntj_jb_pop').hide();
					$('#pay_frst_drp_jb_pop').show();
					$('.div_contr_mnth_jb_pop').show();
				}
				
				if(click_id == 'contractor_fr_jb_pop_desk' && $('#contractor_fr_jb_pop_desk').prop('checked')==true)
				{
					$('#pay_dialy_drp_des_ntj_jb_pop').show();
					$('#pay_frst_drp_jb_pop').hide();
					$('.div_contrctr_mnth_fr_job_pop').show();
					$('#contractor_thrd__jb_pop').show();
					$('.div_contr_mnth_jb_pop').show();
				}
				else if(click_id == 'contractor_fr_jb_pop_desk' && $('#contractor_fr_jb_pop_desk').prop('checked')==false)
				{
					$('.div_contrctr_mnth_fr_job_pop').hide();
					$('#contractor_thrd__jb_pop').hide();
					$('#pay_dialy_drp_des_ntj_jb_pop').hide();
					$('#pay_frst_drp_jb_pop').show();
					$('.div_contr_mnth_jb_pop').hide();
				}
				
			}
		
			if(row_class_ == 'hours_page')
			{
				// hours page for full time and part_time job routine on page start
				if(click_id == 'perm0010_page')
				{
					$('.hrs_pr_week_page_page').hide();
					$('.div_hours_days_page_desk_ntj_page').hide();
					$('#part_time01_page').prop('checked',false);
				}
				
				if(click_id == 'part_time01_page' && $('#part_time01_page').prop('checked')==true )
				{
					$('.hrs_pr_week_page_page').show();
					$('#perm0010_page').prop('checked',false);
				}
				else if(click_id == 'part_time01_page' && $('#part_time01_page').prop('checked')==false )
				{
					$('.hrs_pr_week_page_page').hide();
					$('.div_hours_days_page_desk_ntj_page').hide();
					
				}
				// hours page for full time and part_time job routine on page end
				// hours page for full time and part_time job routine on modal start
				if(click_id == 'perm0010_modal')
				{
					$('.hrs_pr_week_page_modal').hide();
					$('.div_hours_days_page_desk_ntj_modal').hide();
					$('#part_time01_modal').prop('checked',false);
				}
				
				if(click_id == 'part_time01_modal' && $('#part_time01_modal').prop('checked')==true )
				{
					$('.hrs_pr_week_page_modal').show();
					$('#perm0010_modal').prop('checked',false);
				}
				else if(click_id == 'part_time01_modal' && $('#part_time01_modal').prop('checked')==false )
				{
					$('.hrs_pr_week_page_modal').hide();
					$('.div_hours_days_page_desk_ntj_modal').hide();
					
				}
				// hours page for full time and part_time job routine on modal ends
			}
			
			
			if(row_class_ == 'hours')
			{
				if(click_id == 'perm0010_jb_pop')
				{
					$('.hrs_pr_week_fr_job_pop').hide();
					$('.div_hours_days_fr_job_pop').hide();
					$('#part_time_jb_pop').prop('checked',false);
				}
				if(click_id == 'part_time_jb_pop' && $('#part_time_jb_pop').prop('checked')==true )
				{
					$('.hrs_pr_week_fr_job_pop').show();
					$('#perm0010_jb_pop').prop('checked',false);
				}
				else if(click_id == 'part_time_jb_pop' && $('#part_time_jb_pop').prop('checked')==false )
				{
					$('.hrs_pr_week_fr_job_pop').hide();
					$('.div_hours_days_fr_job_pop').hide();
				}
			}
						
			
			//**************************************************************
			//*******************job pop code below end*********************
			//**************************************************************
			
			
			//**************************************************************
			//***************index page talent pop desktop start************
			//**************************************************************
			
			if(row_class_ == 'level_ind_talent')
			{
				if(click_id == 'tal_ind_leader_of_leader')
				{
					$('.tal_ind_div_level').show();
					$('.tal_ind_direct_report').show();
					$('.tal_ind_size_total_func').show();
				}
				 if(click_id == 'tal_ind_leader_of_professional')
				{
					$('.tal_ind_div_level').show();
					$('.tal_ind_direct_report').show();
					$('.tal_ind_size_total_func').hide();
				}
				if(click_id == 'tal_ind_individual_professional' )
				{
					$('.tal_ind_div_level').hide();
					$('.tal_ind_direct_report').hide();
					$('.tal_ind_size_total_func').hide();
				}				
			}
			
			if(row_class_ == 'current_contract')
			{
				if(click_id == 'proof41' && $('#proof41').prop('checked')==true)
				{
					$('#tl_ind_cur_pay_annual_pay').show();
					$('#tl_ind_cur_pay_daily_pay').hide();
					$('.current_pay_ind_talent').show();
					$('.tal_ind_cur_pay_bons').show();
					$('.recutier_benefit_multiple').parent().show();
					$('.current_pay_slct_end_dt').hide();
					$('.current_contr_thrd_pop').prop('selectedIndex',0);
					$('.tal_ind_div_cont_end_date').hide();	
				}
				if(click_id == 'proof41' && $('#proof41').prop('checked')==false)
				{
					//$('.current_pay_ind_talent').hide();
					
				}
				if(click_id == 'tl_ind_cur_contr_ftc' && $('#tl_ind_cur_contr_ftc').prop('checked')==true)
				{
					$('#tl_ind_cur_pay_annual_pay').show();
					$('#tl_ind_cur_pay_daily_pay').hide();
					$('.current_pay_ind_talent').show();
					$('.recutier_benefit_multiple').parent().show();
					$('.tal_ind_cur_pay_bons').hide();
					$('.current_pay_slct_end_dt').show();
					$('.current_contr_thrd_pop').prop('selectedIndex',0);
					$('.tal_ind_div_cont_end_date').show();
				}
				if(click_id == 'tl_ind_cur_contr_ftc' && $('#tl_ind_cur_contr_ftc').prop('checked')==false)
				{
					//$('.current_pay_ind_talent').hide();
					$('.tal_ind_div_cont_end_date').hide();
					
				}
				if(click_id == 'tl_ind_cur_contr_contractor' && $('#tl_ind_cur_contr_contractor').prop('checked')==true)
				{
					$('.curny_pay_lastpid').hide();
					$('#tl_ind_cur_pay_annual_pay').hide();
					$('#tl_ind_cur_pay_daily_pay').show();
					$('.current_pay_ind_talent').show();
					$('.recutier_benefit_multiple').parent().show();
					$('.tal_ind_cur_pay_bons').hide();					
					$('.current_pay_slct_end_dt').show();
					$('.current_contr_thrd_pop').prop('selectedIndex',0);
					$('.tal_ind_div_cont_end_date').show();
				}
				if(click_id == 'tl_ind_cur_contr_contractor' && $('#tl_ind_cur_contr_contractor').prop('checked')==false)
				{
					//$('.current_pay_ind_talent').hide();
					$('.tal_ind_div_cont_end_date').hide();
					
				}	
			}

			if(row_class_ == 'contract-consider-pop')
			{
				if(click_id == 'tl_ind_contr_cons_perma' && $('#tl_ind_contr_cons_perma').prop('checked')==true || click_id == 'tl_ind_contr_cons_ftc' && $('#tl_ind_contr_cons_ftc').prop('checked')==true)
				{
					$('#pay_dsr_anul_pop').show();
					$('#tl_ind_pay_dsr_daily').hide();
					$('.bonus_expectation').prop('selectedIndex',0);
				} 
				if(click_id == 'tl_ind_contr_cons_perma' && $('#tl_ind_contr_cons_perma').prop('checked')==false || click_id == 'tl_ind_contr_cons_ftc' && $('#tl_ind_contr_cons_ftc').prop('checked')==false) 
				{
					$('#pay_dsr_anul_pop').hide();
				}
				
				if(click_id == 'tl_ind_contr_cons_contractor' && $('#tl_ind_contr_cons_contractor').prop('checked')==true )
				{
					$('#pay_dsr_anul_pop').hide();
					$('#tl_ind_pay_dsr_daily').show();
					//$('.bonus_expectation').find('option[value="nobonus"]').attr('selected','selected')
					$('.bonus_expectation').prop('selectedIndex',1);
					
				} 
				if(click_id == 'tl_ind_contr_cons_contractor' && $('#tl_ind_contr_cons_contractor').prop('checked')==false) 
				{
					$('#tl_ind_pay_dsr_daily').hide();
					$('#pay_dsr_anul_pop').show();
					$('.bonus_expectation').prop('selectedIndex',0);
					
				}
			}
			
			
			if(row_class_ == 'tl_ind_hours_wanted')
			{
				if(click_id == 'tl_ind_hrs_wntd_ful_tme')
				{
					$('.tl_ind_hrs_wntd_per_week').hide();
					$('.tl_ind_hrs_wntd_slct_dys').hide();
					$('#tl_ind_hrs_wntd_part_tme').prop('checked',false);
				}
				if(click_id == 'tl_ind_hrs_wntd_part_tme' && $('#tl_ind_hrs_wntd_part_tme').prop('checked')==true )
				{
					$('.tl_ind_hrs_wntd_per_week').show();
					$('#tl_ind_hrs_wntd_ful_tme').prop('checked',false);
				} 
				if(click_id == 'tl_ind_hrs_wntd_part_tme' && $('#tl_ind_hrs_wntd_part_tme').prop('checked')==false )
				{
					$('.tl_ind_hrs_wntd_per_week').hide();
					$('.tl_ind_hrs_wntd_slct_dys').hide();
					
				}

			}			
			if(row_class_ == 'tl_id_right_to_work_nz')
			{
				if(click_id == 'tl_ind_visa_perm')
				{
					$('.div_tl_ind_visa_expire').hide();
				}
				
				if(click_id == 'tl_ind_visa_limited' && $('#tl_ind_visa_limited').prop('checked')==true )
				{
					$('.div_tl_ind_visa_expire').show();
				}
				if(click_id == 'tl_ind_visa_limited' && $('#tl_ind_visa_limited').prop('checked')==false )
				{
					$('.div_tl_ind_visa_expire').hide();
				}

				if(click_id == 'tl_ind_visa_required' && $('#tl_ind_visa_required').prop('checked')==true )
				{
					$('.div_tl_ind_visa_expire').hide();
				}
				
			}
			if(row_class_ == 'tl_ind_flexible_hours')
			{
				if(click_id == 'tl_ind_life_flexible_noreq')
				{
					$('.tl_ind_life_flexible_detail').hide();
				}
				if(click_id == 'tl_ind_life_flexible_prefer' && $('#tl_ind_life_flexible_prefer').prop('checked')==true )
				{
					$('.tl_ind_life_flexible_detail').show();
				}
				if(click_id == 'tl_ind_life_flexible_prefer' && $('#tl_ind_life_flexible_prefer').prop('checked')==false )
				{
					$('.tl_ind_life_flexible_detail').hide();
				}	
			}
			// work type days to work page
			if(click_id == 'select_any_days_desk_ntj_page' && $('#select_any_days_desk_ntj_page').prop('checked')==true )
			{
				$('#select_any_days_2_desk_ntj_page').prop('checked',false);
				$('#select_any_days_3_desk_ntj_page').prop('checked',false);
				$('#select_any_days_4_desk_ntj_page').prop('checked',false);
				$('#select_any_days_5_desk_ntj_page').prop('checked',false);
				$('#select_any_days_6_desk_ntj_page').prop('checked',false);
			}
			if(click_id != 'select_any_days_desk_ntj_page')
			{
				$('#select_any_days_desk_ntj_page').prop('checked',false);
			}
			// work type days to work modal
			if(click_id == 'select_any_days_desk_ntj_modal' && $('#select_any_days_desk_ntj_modal').prop('checked')==true )
			{
				$('#select_any_days_2_desk_ntj_modal').prop('checked',false);
				$('#select_any_days_3_desk_ntj_modal').prop('checked',false);
				$('#select_any_days_4_desk_ntj_modal').prop('checked',false);
				$('#select_any_days_5_desk_ntj_modal').prop('checked',false);
				$('#select_any_days_6_desk_ntj_modal').prop('checked',false);
			}
			if(click_id != 'select_any_days_desk_ntj_modal')
			{
				$('#select_any_days_desk_ntj_modal').prop('checked',false);
			}

			if(click_id == 'select_any_days_1_jb_pop' && $('#select_any_days_1_jb_pop').prop('checked')==true )
			{
				$('#select_any_days_2_jb_pop').prop('checked',false);
				$('#select_any_days_3_jb_pop').prop('checked',false);
				$('#select_any_days_4_jb_pop').prop('checked',false);
				$('#select_any_days_5_jb_pop').prop('checked',false);
				$('#select_any_days_6_jb_pop').prop('checked',false);
			}
			if(click_id != 'select_any_days_1_jb_pop')
			{
				$('#select_any_days_1_jb_pop').prop('checked',false);
			}		
			
			//select deselect day for talent file detail extension
			if(click_id == 'tl_ind_dt_select_any_days_1' && $('#tl_ind_dt_select_any_days_1').prop('checked')==true )
			{
				$('#tl_ind_dt_select_any_days_2').prop('checked',false);
				$('#tl_ind_dt_select_any_days_3').prop('checked',false);
				$('#tl_ind_dt_select_any_days_4').prop('checked',false);
				$('#tl_ind_dt_select_any_days_5').prop('checked',false);
				$('#tl_ind_dt_select_any_days_6').prop('checked',false);
			}
			if(click_id != 'tl_ind_dt_select_any_days_1')
			{
				$('#tl_ind_dt_select_any_days_1').prop('checked',false);
			}		
			
			if($(this).hasClass('contract_mnth_sel_one_ntj_page'))
			{
				$('.contract_mnth_sel_one_ntj_page').prop('checked',false);
				$(this).prop('checked',true);
			}
			if($(this).hasClass('contract_mnth_sel_one_ntj_modal'))
			{
				$('.contract_mnth_sel_one_ntj_modal').prop('checked',false);
				$(this).prop('checked',true);
			}
			if($(this).hasClass('contract_mnth_sel_one_jb_pop'))
			{
				$('.contract_mnth_sel_one_jb_pop').prop('checked',false);
				$(this).prop('checked',true);
			}
			

			// QUICK JOB CONTRACT SELECTOR START
			
			if($(this).hasClass('class_contract_quickjob_page'))
			{
				$('.class_contract_quickjob_page').prop('checked',false);
				$(this).prop('checked',true);
			}

			if($(this).hasClass('class_contract_quickjob_modal'))
			{
				$('.class_contract_quickjob_modal').prop('checked',false);
				$(this).prop('checked',true);
			}
			// QUICK JOB CONTRACT SELECTOR ENDS
			//**************************************************************
			//*******************index page talent pop desktop end**********
			//**************************************************************			
			
		});
		
				
		$('body').on('change', '#tl_ind_cur_pay_annual_pay', function()
		{
			if($(this).val())
			{
				$('.curny_pay_lastpid').show();
			}
			else
			{
				$('.curny_pay_lastpid').hide();
			}	
		});
		
		$('body').on('change', '.tl_ind_hrs_wntd_per_week', function()
		{
			if($(this).val())
			{
				$('.tl_ind_hrs_wntd_slct_dys').show();
			}
			else
			{
				$('.tl_ind_hrs_wntd_slct_dys').hide();
			}
		});
		
		
		
		
		
		
		
		
		// wokr type and and work hours change starts page
		$('body').on('change', '.hrs_pr_week_page_page', function()
		{
			$('.div_hours_days_page_desk_ntj_page').show();
		});
		// wokr type and and work hours change ends page
		// wokr type and and work hours change starts modal
		$('body').on('change', '.hrs_pr_week_page_modal', function()
		{
			$('.div_hours_days_page_desk_ntj_modal').show();
		});
		// wokr type and and work hours change ends modal
		$('body').on('change', '.hrs_pr_week_fr_job_pop', function()
		{
			$('.div_hours_days_fr_job_pop').show();
		});
		
		
		/*$('body').on('change', '.current_contr_thrd_pop', function()
		{
			if($('#proof41').prop('checked')==true)
			{
				$('#proof41').prop('checked',false);
			}
			if($(this).val())
			{
				console.log($(".pay > #pay_frst_drp option:first-child").val());
				$(".curny-pay-dly option:first").text('Daily');
				//$('#curny_pay_lastpid').attr('disabled','disabled');
				$('.curny_pay_beneft').css("pointer-events","none");				
			}
			else
			{
				//$('#curny_pay_lastpid').removeAttr('disabled','disabled');
				$('.curny_pay_beneft').css("pointer-events","");
				$(".curny-pay-dly option:first").text('Annual');
			}
		});*/
		
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
				//$('#pay_frst_drp').removeAttr('disabled','disabled');
				$('#perm').removeAttr('disabled','disabled');
			}
			console.log(fixed_term_mnt);
			enadis_val_(fixed_term_mnt);
		});
				
		
		$('body').on('change', '#contractor_thrd_', function()
		{
			$('#perm').prop('checked',false);
			$('#ftc').prop('selectedIndex',0);
			$('#ftc').removeAttr('style');
			
			if($(this).val())
			{
				if(ftc_flsg)
				{
					//$('#pay_frst_drp').prop('selectedIndex',0);
				}			
				$('#pay_dialy_drp_des_ntj_page').show();
				$('#pay_frst_drp').hide();
			}
			
		});
		
				
		$('#days_worked').attr('disabled','disabled');
		$('#hours_al_day').attr('disabled','disabled');
		$('.cursr-evnt').next().children().siblings('button').html('All Days <i class="fa fa-caret-down" aria-hidden="true"></i>');
		$('.cursr-evnt-job-popup').next().children().siblings('button').html('All Days <i class="fa fa-caret-down" aria-hidden="true"></i>');
		
		$('body').on('change', '#part_time', function()
		{
			if($(this).val())
			{
				$('#hours_al_day').removeAttr('disabled','disabled');
				//$('.cursr-evnt').next().children().siblings('button').css("pointer-events","");
				$('#hours_al_day').prop('checked',true);
				$('#days_worked').removeAttr('disabled','disabled');
			}
			else
			{
				$('#hours_al_day').prop('checked',false);
				//$('.cursr-evnt').next().children().siblings('button').css("pointer-events","none");
				$('#days_worked').attr('disabled','disabled');
				$('#hours_al_day').attr('disabled','disabled');
			}
		});
		$('body').on('change', '#ftc', function()
		{
			
			/*$('#perm').prop('checked',false);
			$('#contractor_page_desk').prop('checked',false);
			
			$('#contractor_thrd_').prop('selectedIndex',0);
			$('#contractor_thrd_').removeAttr('style');
			
			if($(this).val())
			{
				ftc_flsg = 1;
		
				$('#pay_dialy_drp_des_ntj_page').hide();
				$('#pay_frst_drp').show();
			}
			else
			{
				ftc_flsg = 0;
				if(ftc_flsg || perm_flsg){}else{
				}
			}
			$('.div_contrctr_mnth_page').hide();
			$('#contractor_thrd_').hide();*/
		});

		$('body').on('change', '#people_led_exp_pop', function()
		{
			if($(this).val() == 'none')
			{
				$('#people_led_tdts_pop').attr('disabled','disabled');
			}
			else
			{
				$('#people_led_tdts_pop').removeAttr('disabled','disabled');
			}
		});
		
		
		
		
		
		//**************************************************************
		//******************job pop code below start********************
		//**************************************************************
		
		$('body').on('change', '#ftc_jb_pop', function()
		{
			/*$('#perm_jb_pop').prop('checked',false);
			//$('#contractor_thrd_').prop('selected',false);
			$('#contractor_thrd__jb_pop').prop('selectedIndex',0);
			$('#contractor_thrd__jb_pop').removeAttr('style');
			
			if($(this).val())
			{
				ftc_flsg_jb_pop = 1;
		
				$('#pay_dialy_drp_des_ntj_page_jb_pop').hide();
				$('#pay_frst_drp_jb_pop').show();
			}else
			{
				$('#pay_frst_drp_jb_pop').hide();
				ftc_flsg_jb_pop = 0;
				if(ftc_flsg_jb_pop || perm_flsg_jb_pop){}else{
				}
			}*/
		});
		
		//$('#pay_sec_drp_jb_pop').attr('disabled','disabled');		
		$('body').on('change', '#contractor_thrd__jb_pop', function()
		{
			$('#perm_jb_pop').prop('checked',false);
			$('#ftc_jb_pop').prop('selectedIndex',0);
			$('#ftc_jb_pop').removeAttr('style');			
			if($(this).val())
			{
				$('#pay_dialy_drp_des_ntj_jb_pop').show();
				$('#pay_frst_drp_jb_pop').hide();
			}
			else
			{
				//$('#pay_sec_drp_jb_pop').attr('disabled','disabled');
			}
		});
	};
	var enadis_val_= function(flag)
	{
		if(flag)
		{
			$('#pay_thrd_drp').removeAttr('disabled','disabled');	
			//$('#pay_frst_drp').removeAttr('disabled','disabled');	
		}
		else
		{
			$('#pay_thrd_drp').attr('disabled','disabled');
			//$('#pay_frst_drp').attr('disabled','disabled');
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
			//$(this).attr('disabled','disabled');
		});
	};
	
	var monthsList_ = function()
	{
		var theMonths = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		var today = new Date();
		var aMonth = today.getMonth();
		var i;
		var html = '';
		for (i=0; i<12; i++) 
		{
			//document.writeln(theMonths[aMonth] + '<br>');
			html = '<option value="'+theMonths[aMonth]+'">FTC - '+theMonths[aMonth]+'</option>';
			//$('#current_contr_ftc_pop').append(html);
			//$('.current_contr_thrd_pop').append('<option value="'+theMonths[aMonth]+'">Contractor - '+theMonths[aMonth]+'</option>');
			aMonth++;
			if (aMonth > 11) 
			{
				aMonth = 0;
			}
		}
	};
	
	var markTick_ = function()
	{
		$("body").on('change','.dsk_tbl_dsply select, .recutier_desktop_table select , .recutier_desktop_table input:text , .request_desktop_tbl select ,  .quick_desktop_tbl select ,  .quick_desktop_tbl input:text ',function(){
			var currentElement = $(this);

			currentElement.find("option").each(function()
			{
				if($(this).text().includes(currentElement.attr('txt-attr')))
				{
					$(this).text($(this).text().replace(currentElement.attr('txt-attr'),""));
				}
			});
			
			if(currentElement.val())
			{
				
				currentElement.find("option:selected").text(currentElement.attr('txt-attr')+currentElement.find("option:selected").text());
				currentElement.next('span.tick_specialism_desktop').remove();
				$( "<span class='fa fa-check tick_specialism_desktop'></span>" ).insertAfter(this);
			} 
			else
			{
				$(this).next('span.tick_specialism_desktop').remove();
			}
		});
		
		$("body").on('blur','.dsk_tbl_dsply input:text, .request_desktop_tbl input:text ',function() 
		{
			if($(this).val())
			{
				$(this).next('span.tick_specialism_desktop').remove();				
				$( "<span class='fa fa-check tick_specialism_desktop'></span>" ).insertAfter(this);
			} 
			else 
			{
				$(this).next('span.tick_specialism_desktop').remove();
			}
		});	
	};
	
	var  hm_time_manage =  function()
	{
		$("body").on('click','.tl_ind_tm_all_act____',function()
		//$("body").on('click',function()
		{			
			$('.tl_ind_tm_all_act').parent().removeClass('active');
			$('body').find('.tl_ind_tm_all_act_hide').each(function()
			{
				$(this).addClass('tl_ind_tm_all_act').removeClass('tl_ind_tm_all_act_hide');				
			});
			$(this).parent().siblings().removeClass('active');
			$(this).parent().addClass('active');
			var tab_cont_id_d = $('.tl_ind_hm_tb_content').find('.active').attr('id');
			console.log(tab_cont_id_d);
			$('#'+tab_cont_id_d).removeClass('active');
			$('#'+$(this).attr('attr-id')).addClass('active');			
			$(this).addClass('tl_ind_tm_all_act_hide');
			$(this).removeClass('tl_ind_tm_all_act');
		});

		$("body").on('click','.tl_ind_tm_all_act_hide___',function() 
		{
			$(this).addClass('tl_ind_tm_all_act');
			$(this).parent().removeClass('active');
			var tab_cont_id_d_ = $('.tl_ind_hm_tb_content').find('.active').attr('id');
			$('#'+tab_cont_id_d_).removeClass('active');
			$('#'+$(this).attr('attr-id')).removeClass('active');
			$(this).removeClass('tl_ind_tm_all_act_hide');
		});
	};
	//31/12/2018
	var talentReg_ = function(){
		$('#submitTalent').on('click', function (e) {
			e.preventDefault();
			var data = $("#talentform").serializeArray();
			
			var location = $('#input_location').val();
            data.push({name: 'joblocation', value: location});
            
            var input_job_field = $('#input_job_field').val();
            data.push({name: 'jobField', value: input_job_field});
            // alert(input_job_field);
			var controller_action = 'admin/talentRequests/addTalent';
			$.ajax({
				type: "POST",
				url: base_url+controller_action, 
				data: data,
				// dataType: "json",  
				beforeSend: function(){
					$('#btn_action').addClass('disable-action');
					// console.log($("#talentform").serialize());
					// return false;
				},
				success: function(data)
				{
					// console.log(data);
					// return false;
					if(data.status == 'ok' && data.redirect){

							$('#talentform').trigger("reset");
							alertify.alert('Success', 'Talent Added Successfully!', function()
							{
								alertify.success('Ok');
								window.location.href = data.redirect;
							});
								 
								
							 
							  
							
							
					}
					if(data.status == 'false' && data.redirect){
						$('.invalid-data').text(data.message);
						$('.invalid-data').show();
					}
					// console.log(data);
					
					$.each(data, function(key, value) {
						if (key == 'job_field' && value) 
						{
							$('#input_' + key).parent().parent().addClass('has-error');
							$("#header_talent_dropdown_menu .fs-label-wrap").css("border-color", "#DD4B39");
						}

						if (key && value) {
							// console.log($('#input_' + key).parent());
							$('#input_' + key).addClass('is-invalid');
							$('#input_' + key).parent().addClass('has-error');
						}
						else
						{
							$('#input_' + key).parents('.input_login').find('.has-error').html();
						}
					});
				},
				complete: function (data) {
					$('#btn_action').removeClass('disable-action');
				}
			});
		});
	}
	$('#talentform input').on('click', function () { 
			$(this).removeClass('is-invalid').addClass('is-valid');
			$(this).parent().removeClass('has-error');
			$(this).parents('.form-group').find('#error').html(" ");
		});

	$(function()
	{
		trigger_();
		singleSelect_();
		payleft_();
		enadis_val_();
		monthsList_();
		markTick_();
		hm_time_manage();
		talentReg_();
	});
}());

	// $('#input-curr_job_sdate').click(function(){
	// 	alert('cmoing');
	// 	$('#input-curr_job_sdate').calendar({
	//     	type: 'date'
	// 	});
	// });

	$(document).ready(function(){
		$('#div_curr_job_sdate').calendar({
	    	type: 'date'
		});
		$('#div_prev_job_sdate').calendar({
	    	type: 'date'
		});	
	});
	

	
