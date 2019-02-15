//*****************************page mobile js start***************************

//client businesss area 
$(".cl_bs_area").change(function(){
	$('.hm_new_input').hide();
	if($(this).val() == 'new'){
		$('.cl_bs_area_input').val('');
		$('.cl_bs_area_input').next('span.tick_specialism_mobile').remove();
		$(".hm_new_client").show();
		$(".cl_bs_area_input").show();
		$(".hm_bs_area").hide();
		$('#two').removeClass("in");
	} else if($(this).val()){
		$(".cl_bs_area_input").hide();
		$(".hm_new_client").hide();
		$(".hm_bs_area").show();
		$('#two').addClass("in");
		$('#two').removeAttr('style');
	}
	else
	{
		$(".cl_bs_area_input").hide();
		$(".hm_new_client").hide();
		$(".hm_bs_area").hide();
		$('#two').removeClass("in");
	}
});


$(".cl_bs_area_input").blur(function()
{
	if($(this).val())
	{
		$('#two').removeAttr('style');
		$('#two').addClass("in");
	}
	else
	{
		$('#two').removeClass("in");
	}
});


//Hiring manager job title 
$(".hir_mangr_job_title_mb").blur(function()
{
	if($(this).val())
	{
		$('#three').removeAttr('style');
		$('#three').addClass("in");
	}
	else
	{
		$('#three').removeClass("in");
	}
});
$('.hm_new_input').hide();
$(".hm_bs_area").change(function()
{
	if($(this).val() == 'new')
	{
		$('.hm_new_input').show();
	}
	else if($(this).val())
	{
		$('.hm_new_input').hide();
		$('#three').removeAttr('style');
		$('#three').addClass("in");
	}
	else
	{
		$('.hm_new_input').hide();
		$('#three').removeClass("in");
	}
});
$(".hm_new_input").blur(function()
{
	if($(this).val())
	{
		$('#three').removeAttr('style');
		$('#three').addClass("in");
	}
	else
	{
		$('#three').removeClass("in");
	}
});

//Role details select bonus 
$(".slct_bonus_mb").change(function()
{
	if($(this).val())
	{
		$('#talent_mob').removeAttr('style');
		$('#talent_mob').addClass("in");
	}
	else
	{
		$('#talent_mob').removeClass("in");
	}
});

//Qualification talent requirements
$(".selct_qualfctn_mb").change(function()
{
	if($(this).val())
	{
		$('#search_assist').removeAttr('style');
		$('#search_assist').addClass("in");
	}
	else
	{
		$('#search_assist').removeClass("in");
	}
});



//Hiring manager video Link 
$(".hir_mgr_vide_lnk_mb").blur(function()
{
	if($(this).val())
	{
		$('#hr_mange_time').removeAttr('style');
		$('#hr_mange_time').addClass("in");
	}
	else
	{
		$('#hr_mange_time').removeClass("in");
	}
});



//level leader
$('.direct_report_pg_mb').hide();
$('.size_total_func_pg_mb').hide();
$(".level_pg_mb").change(function(){
	if($(this).val() == 'leader_of_leaders')
	{
		$('.direct_report_pg_mb').show();
		$('.size_total_func_pg_mb').show();
	}
	else if($(this).val() == 'leader_of_professional')
	{
		$('.direct_report_pg_mb').show();
		$('.size_total_func_pg_mb').hide();
	}
	else
	{
		$('.direct_report_pg_mb').hide();
		$('.size_total_func_pg_mb').hide();
	}	
});


//select contract type
$('.py_dly_mb').hide();
$('.py_mb').hide();
$('.slct-nmr-mont-mb').hide();
$('body').on('change','.cntrct_mb',function(){
	if($(this).val() == ''){
		$('.py_dly_mb').hide();
		$('.py_mb').hide();
		$('.slct-nmr-mont-mb').hide();
	}
	if($(this).val() == '1'){
		$('.slct-nmr-mont-mb').hide();
		$('.py_dly_mb').hide();
		$('.py_mb').show();
	}
	if($(this).val() == '2'){
		$('.py_dly_mb').hide();
		$('.py_mb').show();
		$('.slct-nmr-mont-mb').show();
	}	
	if($(this).val() == '3'){
		$('.py_mb').hide();
		$('.py_dly_mb').show();
		$('.slct-nmr-mont-mb').show();
	}
	if($(this).val() == '0'){
		$('.py_dly_mb').hide();
		$('.py_mb').hide();
		$('.slct-nmr-mont-mb').hide();
	}
	if($(this).parent().parent().parent().hasClass("contract_mb")){
		if($(this).val()){
			$(this).parent().parent().prev().addClass("fa fa-check");
		} else {
			$(this).parent().parent().prev().removeClass("fa fa-check");
		}	
	}
});
//select hours
setTimeout(function(){
	$(".hrs_days_mb" ).parent().hide();				
}, 2000);
$('body').on('change','.hrs_mb',function(){
	hrs_mb = $(this).val();
	if(hrs_mb == 1){
		$(".hrs_pr_week").removeAttr('style');
		$(".hrs_pr_week").show();
	} else {
		$(".hrs_pr_week").hide();
		$(".hrs_pr_week").next('.tick_specialism_mobile').remove();
		$("select.hrs_pr_week").next('.tick_specialism_mobile').remove();
		$(".hrs_days_mb").parent().hide();
	}
	if($(this).parent().parent().parent().hasClass("hours_mb")) {
		if(hrs_mb) {
			//$(this).parent().parent().prev().addClass("fa fa-check");
		} else {
			//$(this).parent().parent().prev().removeClass("fa fa-check");
		}
	}
});
hrs_days_mb_flg = 0;
$('body').on('change','.hrs_pr_week',function(){
	hrs_mb = $(this).val();
	if(hrs_mb && hrs_days_mb_flg == 1){
		//$("hrs_days_mb").prev().prev().show();
		$(".hrs_days_mb").parent().show();
	}
	else if(hrs_mb)
	{
		hrs_days_mb_flg = 1;
		$("div.hrs_days_mb").show();
		$(".hrs_days_mb").parent().show();
	}
	else
	{
		$(".hrs_days_mb").parent().hide();
	}
});






//*****************************page mobile js end***************************

//level leader
$('.lvel_direct_report_jb_pop_mb').hide();
$('.lvel_size_total_func_jb_pop_mb').hide();
$(".lvel_led_jb_pop_mb").change(function(){
	if($(this).val() == 'leader_of_leaders')
	{
		$('.lvel_direct_report_jb_pop_mb').show();
		$('.lvel_size_total_func_jb_pop_mb').show();
	}
	else if($(this).val() == 'leader_of_professional')
	{
		$('.lvel_direct_report_jb_pop_mb').show();
		$('.lvel_size_total_func_jb_pop_mb').hide();
	}
	else
	{
		$('.lvel_direct_report_jb_pop_mb').hide();
		$('.lvel_size_total_func_jb_pop_mb').hide();
	}	
});


//client businesss area
$(".cl_bs_area_jb_pop_mb").change(function (){
	$('.hm_new_input_jb_pop_mb').hide();
	$('#role_popup').removeClass("in");
	
	if($(this).val() == 'new'){
		$('.cl_bs_area_input_jb_pop_mb').val('');
		$('.cl_bs_area_input_jb_pop_mb').next('span.tick_specialism_mobile').remove();
		$(".hm_new_client_jb_pop_mb").show();
		$(".cl_bs_area_input_jb_pop_mb").show();
		$(".hm_bs_area_jb_pop_mb").hide();
		$('#request_pop_full01').removeClass("in");
		$('#request_pop_full01').attr("aria-expanded","false");
	} 
	
	else if($(this).val()){
		$(".cl_bs_area_input_jb_pop_mb").hide();
		$(".hm_new_client_jb_pop_mb").hide();
		$(".hm_bs_area_jb_pop_mb").show();
		$('#request_pop_full01').addClass("in");
		$('#request_pop_full01').removeAttr('style');
	}
	else {
		$(".cl_bs_area_input_jb_pop_mb").hide();
		$(".hm_new_client_jb_pop_mb").hide();
		$(".hm_bs_area_jb_pop_mb").hide();
		$('#request_pop_full01').removeClass("in");
	}
});
	
$(".cl_bs_area_input_jb_pop_mb").blur(function () 
{
	if($(this).val())
	{
		$('#request_pop_full01').removeAttr('style');
		$('#request_pop_full01').addClass("in");
	}
	else
	{
		$('#request_pop_full01').removeClass("in");
	}
});

$(".fr_cl_bs_area_jb_pop_mb").change(function (){
	$('.fr_hm_new_input_jb_pop_mb').hide();
	if($(this).val() == 'new'){
		$('.fr_cl_bs_area_input_jb_pop_mb').val('');
		$('.fr_cl_bs_area_input_jb_pop_mb').next('span.tick_specialism_mobile').remove();
		$(".fr_hm_new_client_jb_pop_mb").show();
		$(".fr_cl_bs_area_input_jb_pop_mb").show();
		$(".fr_hm_bs_area_jb_pop_mb").hide();
		$('#request_pop_full').removeClass("in");
	} 
	
	else if($(this).val()){
		$(".fr_cl_bs_area_input_jb_pop_mb").hide();
		$(".fr_hm_new_client_jb_pop_mb").hide();
		$(".fr_hm_bs_area_jb_pop_mb").show();
		$('#request_pop_full').addClass("in");
		$('#request_pop_full').removeAttr('style');
	}
	else {
		$(".fr_cl_bs_area_input_jb_pop_mb").hide();
		$(".fr_hm_new_client_jb_pop_mb").hide();
		$(".fr_hm_bs_area_jb_pop_mb").show();
		$('#request_pop_full').removeClass("in");
	}
});

$(".fr_cl_bs_area_input_jb_pop_mb").blur(function () 
{
	if($(this).val())
	{
		$('#request_pop_full').removeAttr('style');
		$('#request_pop_full').addClass("in");
	}
	else
	{
		$('#request_pop_full').removeClass("in");
	}
});
$('.hm_new_input_jb_pop_mb').hide();
$(".hm_bs_area_jb_pop_mb").change(function ()
{
	if($(this).val() == 'new')
	{
		$('.hm_new_input_jb_pop_mb').show();	
	}
	else if($(this).val())
	{
		$('.hm_new_input_jb_pop_mb').hide();
		$('#role_popup').removeAttr('style');
		$('#role_popup').addClass("in");
	}
	else
	{
		$('.hm_new_input_jb_pop_mb').hide();
		$('#role_popup').removeClass("in");
	}
});	

$(".hm_new_input_jb_pop_mb").blur(function () 
{
	if($(this).val())
	{
		$('#role_popup').removeAttr('style');
		$('#role_popup').addClass("in");
	}
	else
	{
		$('#role_popup').removeClass("in");
	}
});

$(".qj_jb_title_jb_pop_mb").blur(function () 
{
	if($(this).val())
	{
		$('#role_popup').removeAttr('style');
		$('#role_popup').addClass("in");
	}
	else
	{
		$('#role_popup').removeClass("in");
	}
});

$('.fr_hm_new_input_jb_pop_mb').hide();
$(".fr_hm_bs_area_jb_pop_mb").change(function ()
{
	if($(this).val() == 'new')
	{
		$('#request_pop_full_tbl').removeClass("in");
		$('.fr_hm_new_input_jb_pop_mb').show();
	}
	else if($(this).val())
	{
		$('.fr_hm_new_input_jb_pop_mb').hide();
		$('#request_pop_full_tbl').removeAttr('style');
		$('#request_pop_full_tbl').addClass("in");
	}
	else
	{
		$('.fr_hm_new_input_jb_pop_mb').hide();
		$('#request_pop_full_tbl').removeClass("in");
	}
});	

$(".fr_hm_new_input_jb_pop_mb").blur(function () 
{
	if($(this).val())
	{
		$('#request_pop_full_tbl').removeAttr('style');
		$('#request_pop_full_tbl').addClass("in");
	}
	else
	{
		$('#request_pop_full_tbl').removeClass("in");
	}
});




$(".fr_job_title_jb_pop_mb").blur(function () 
{
	if($(this).val())
	{
		$('#request_pop_full_tbl').removeAttr('style');
		$('#request_pop_full_tbl').addClass("in");
	}
	else
	{
		$('#request_pop_full_tbl').removeClass("in");
	}
});


$(".fr_slct_bons_jb_pop_mb").change(function ()
{
	if($(this).val())
	{
		$('#talent_req_new').removeAttr('style');
		$('#talent_req_new').addClass("in");
	}
	else
	{
		$('#talent_req_new').removeClass("in");
	}
});


$(".fr_qualifcton_tlnt_r_jb_pop_mb").change(function ()
{
	if($(this).val())
	{
		$('#talent_req_new1').removeAttr('style');
		$('#talent_req_new1').addClass("in");
	}
	else
	{
		$('#talent_req_new1').removeClass("in");
	}
});

$(".fr_hir_mngr_vd_lnk_jb_pop_mb").blur(function ()
{
	if($(this).val())
	{
		$('#request_pop_6').removeAttr('style');
		$('#request_pop_6').addClass("in");
	}
	else
	{
		$('#request_pop_6').removeClass("in");
	}
});



//asdasd




$('.quick_cities_multiple').change(function(){
	if($(this).val())
	{
		$('#hr_mange_time_popup').removeAttr('style');
		$('#hr_mange_time_popup').addClass("in");
	}
	else
	{
		$('#hr_mange_time_popup').removeClass("in");
	}
});


//tick mark for select
$(".mb-ntj_div select, .ntj_div_jb_pop_mb select , .ntj_qj_div_jb_pop_mb select" ).change(function () {
	
	var currentElement_1 = $(this);

			currentElement_1.find("option").each(function()
			{
				if($(this).text().includes(currentElement_1.attr('txt-attr')))
				{
					$(this).text($(this).text().replace(currentElement_1.attr('txt-attr'),""));
				}
			});
	if(currentElement_1.val())
	{
		currentElement_1.find("option:selected").text(currentElement_1.attr('txt-attr')+currentElement_1.find("option:selected").text());
		currentElement_1.next('span.tick_specialism_mobile').remove();				
		$( "<span class='fa fa-check tick_specialism_mobile'></span>" ).insertAfter(this);
	} else{
		$(this).next('span.tick_specialism_mobile').remove();
	}
});
//tick mark for input
$("body").on('blur , focusout','.mb-ntj_div input, .ntj_div_jb_pop_mb input',function (){
	if($(this).parent().hasClass('fieldwrapper')){
		return false;
	}

	if($(this).val()){
		$(this).next('span.tick_specialism_mobile').remove();				
		$( "<span class='fa fa-check tick_specialism_mobile'></span>" ).insertAfter(this);
	} else {
		$(this).next('span.fa-check').remove();
	}
});
//select contract type popup
$('.py_dly_mb_jb_pop_mb').hide();
$('.py_mb_jb_pop_mb').hide();
$('.slct-nmr-mont-mb_jb_pop_mb').hide();
$('body').on('change','.cntrct_mb_jb_pop_mb',function(){
	if($(this).val() == ''){
		$('.py_dly_mb_jb_pop_mb').hide();
		$('.py_mb_jb_pop_mb').hide();
		$('.slct-nmr-mont-mb_jb_pop_mb').hide();
	}
	if($(this).val() == '1'){
		$('.slct-nmr-mont-mb_jb_pop_mb').hide();
		$('.py_dly_mb_jb_pop_mb').hide();
		$('.py_mb_jb_pop_mb').show();
	}
	if($(this).val() == '2'){
		$('.py_dly_mb_jb_pop_mb').hide();
		$('.py_mb_jb_pop_mb').show();
		$('.slct-nmr-mont-mb_jb_pop_mb').show();
	}			
	if($(this).val() == '3'){
		$('.py_mb_jb_pop_mb').hide();
		$('.py_dly_mb_jb_pop_mb').show();
		$('.slct-nmr-mont-mb_jb_pop_mb').show();
	}
});
//select hours
setTimeout(function(){
$(".hrs_days_mb_jb_pop_mb" ).parent().hide();
}, 2000);
$('body').on('change','.hrs_mb_jb_pop_mb',function(){
	hrs_mb_jb_pop_mb = $(this).val();
	if(hrs_mb_jb_pop_mb == 1){
		$(".hrs_pr_week_jb_pop_mb").removeAttr('style');
		$(".hrs_pr_week_jb_pop_mb").show();
	} else {
		$(".hrs_pr_week_jb_pop_mb").hide();
		$(".hrs_pr_week_jb_pop_mb").next('.tick_specialism_mobile').remove();
		$("select.hrs_pr_week_jb_pop_mb").next('.tick_specialism_mobile').remove();
		$(".hrs_days_mb_jb_pop_mb").parent().hide();
	}
});
hrs_days_mb_jb_pop_mb_flg = 0;
$('body').on('change','.hrs_pr_week_jb_pop_mb',function(){
	hrs_mb_jb_pop_mb = $(this).val();
	if(hrs_mb_jb_pop_mb && hrs_days_mb_jb_pop_mb_flg == 1) {
		$(".hrs_days_mb_jb_pop_mb").parent().show();
	} else if(hrs_mb_jb_pop_mb) {
		hrs_days_mb_jb_pop_mb_flg = 1;
		$(".hrs_days_mb_jb_pop_mb").parent().show();
	} else {
		$(".hrs_days_mb_jb_pop_mb").parent().hide();
	}
});





//*****************************Talent POP mobile***************************
//

//contract considered
$('.exp_end_dt_ind_tl_pop_dt_mb').hide();
$('.anul_pay_ind_tl_pop_dt_mb').hide();
$('.daily_pay_ind_tl_pop_dt_mb').hide();
$('.slct_bons_ind_tl_pop_dt_mb').hide();
setTimeout(function(){
	$('.recutr_bnf_multind_tl_pop_dt_mb').parent().hide();	
},1500);


$(".cont_cons_ind_tl_pop_dt_mb").change(function(){
	if($(this).val() == 'ftc')
	{
		$('.exp_end_dt_ind_tl_pop_dt_mb').show();
		$('.anul_pay_ind_tl_pop_dt_mb').show();
		$('.slct_bons_ind_tl_pop_dt_mb').hide();
		$('.recutr_bnf_multind_tl_pop_dt_mb').parent().show();
		$('.daily_pay_ind_tl_pop_dt_mb').hide();
	}
	else if($(this).val() == 'permanent' )
	{
		$('.exp_end_dt_ind_tl_pop_dt_mb').hide();
		$('.anul_pay_ind_tl_pop_dt_mb').show();
		$('.slct_bons_ind_tl_pop_dt_mb').show();
		$('.recutr_bnf_multind_tl_pop_dt_mb').parent().show();
		$('.daily_pay_ind_tl_pop_dt_mb').hide();
	}
	else if($(this).val() == 'contractor')
	{
		$('.exp_end_dt_ind_tl_pop_dt_mb').show();
		$('.anul_pay_ind_tl_pop_dt_mb').hide();
		$('.slct_bons_ind_tl_pop_dt_mb').hide();
		$('.recutr_bnf_multind_tl_pop_dt_mb').parent().hide();
		$('.daily_pay_ind_tl_pop_dt_mb').show();
	}
	else
	{
		$('.exp_end_dt_ind_tl_pop_dt_mb').hide();
		$('.anul_pay_ind_tl_pop_dt_mb').hide();
		$('.daily_pay_ind_tl_pop_dt_mb').hide();
		$('.slct_bons_ind_tl_pop_dt_mb').hide();
		$('.recutr_bnf_multind_tl_pop_dt_mb').parent().hide();
	}	
});

//annual pay
$('.lst_pad_anual_bon_ind_tl_pop_dt_mb').hide();
$('body').on('click', '.anul_pay_ind_tl_pop_dt_mb', function()
{
	if($(this).val())
	{
		$('.lst_pad_anual_bon_ind_tl_pop_dt_mb').show();
	}
	else
	{
		$('.lst_pad_anual_bon_ind_tl_pop_dt_mb').hide();
	}
});
//immediate available
$('body').on('change', '.search_status_ind_tl_pop_dt_mb', function()
{		
	if($(this).val() == 'immediate_available')
	{
		$('.notc_per_ind_tl_pop_dt_mb').val("imediate_available");
	}
	else
	{
		$('.notc_per_ind_tl_pop_dt_mb').val("");
	}	
});

//level leader
$('.direct_report_ind_tl_pop_dt_mb').hide();
$('.size_total_func_ind_tl_pop_dt_mb').hide();
$(".lvel_led_ind_tl_pop_dt_mb").change(function(){
	if($(this).val() == 'leader_of_leaders')
	{
		$('.direct_report_ind_tl_pop_dt_mb').show();
		$('.size_total_func_ind_tl_pop_dt_mb').show();
	}
	else if($(this).val() == 'leader_of_professional')
	{
		$('.direct_report_ind_tl_pop_dt_mb').show();
		$('.size_total_func_ind_tl_pop_dt_mb').hide();
	}
	else
	{
		$('.direct_report_ind_tl_pop_dt_mb').hide();
		$('.size_total_func_ind_tl_pop_dt_mb').hide();
	}	
});



setTimeout(function(){
	$(".hrs_days_mb_ind_tl_pop_dt_mb" ).parent().hide();				
}, 2500);
$(".hrs_pr_week_ind_tl_pop_dt_mb").hide();
$('body').on('change','.hrs_mb_ind_tl_pop_dt_mb',function(){
	hrs_mb_ind_tl_pop_dt_mb = $(this).val();
	if(hrs_mb_ind_tl_pop_dt_mb == 1){
		$(".hrs_pr_week_ind_tl_pop_dt_mb").show();
	} else {
		$(".hrs_pr_week_ind_tl_pop_dt_mb").hide();
		$(".hrs_pr_week").next('.tick_specialism_mobile').remove();
		$("select.hrs_pr_week").next('.tick_specialism_mobile').remove();
		$(".hrs_days_mb_ind_tl_pop_dt_mb").parent().hide();
	}
});

$('body').on('change','.hrs_pr_week_ind_tl_pop_dt_mb',function(){
	
	if($(this).val()){
		$(".hrs_days_mb_ind_tl_pop_dt_mb").parent().show();
	}
	else
	{
		$(".hrs_days_mb_ind_tl_pop_dt_mb").parent().hide();
	}
});

//limited visa enter date 
$('.limited_vsaEnddt_ind_tl_pop_dt_mb').hide();
$('.est_arr_date_ind_tl_pop_dt_mb').hide();
$('body').on('change','.rht_to_wrk_nz_ind_tl_pop_dt_mb',function(){
	
	if($(this).val() == 'limited_visa'){
		$(".limited_vsaEnddt_ind_tl_pop_dt_mb").show();
		$('.est_arr_date_ind_tl_pop_dt_mb').hide();
	}
	else if($(this).val() == 'visarequired')
	{
		$(".limited_vsaEnddt_ind_tl_pop_dt_mb").hide();
		$('.est_arr_date_ind_tl_pop_dt_mb').show();
	}
	else
	{
		$(".limited_vsaEnddt_ind_tl_pop_dt_mb").hide();
		$('.est_arr_date_ind_tl_pop_dt_mb').hide();
	}
});

//life style -  enter detail 
$('.lfe_styl_dtl_ind_tl_pop_dt_mb').hide();
$('body').on('change','.lfe_styl_ind_tl_pop_dt_mb',function(){
	
	if($(this).val() == 'preferred'){
		$(".lfe_styl_dtl_ind_tl_pop_dt_mb").show();
	}
	else
	{
		$(".lfe_styl_dtl_ind_tl_pop_dt_mb").hide();
	}
});


$('.pay_annual_ind_tl_pop_dt_mb').hide();
$('.pay_daily_ind_tl_pop_dt_mb').hide();
$('.exp_end_dt_ind_tl_pop_dt_mb').hide();
$('.contract_consider').change(function(){
	$('.pay_annual_ind_tl_pop_dt_mb').hide();
	$('.pay_daily_ind_tl_pop_dt_mb').hide();
	//console.log($(this).val());
	var array_contract_cons_dt_mb = $(this).val(); 
	if(array_contract_cons_dt_mb)
	{
		for(var i_cont_cons = 0; i_cont_cons <= array_contract_cons_dt_mb.length; i_cont_cons++)
		{
			if(array_contract_cons_dt_mb.includes("ftc") === true)
			{
				$('.exp_end_dt_ind_tl_pop_dt_mb').show();
			}
			else
			{
				$('.exp_end_dt_ind_tl_pop_dt_mb').hide();
			}
			if(array_contract_cons_dt_mb.includes("permanent") === true || array_contract_cons_dt_mb.includes("ftc") === true)
			{
			   $('.pay_annual_ind_tl_pop_dt_mb').show();
			}
			else
			{
				$('.pay_annual_ind_tl_pop_dt_mb').hide();
			}
			if(array_contract_cons_dt_mb.includes("contractor") === true)
			{
			   $('.pay_daily_ind_tl_pop_dt_mb').show();
			}
			else
			{
				$('.pay_daily_ind_tl_pop_dt_mb').hide();
			}
		}
	}

	
});