//*****************************Job desktop popup***************************


//************Quicky job start*************

$('.hm_new_clnt_dv_jb_pop_desk').hide();
//client businesss area
$(".cl_bs_area_jb_pop_desk").change(function (){
	$('.hm_new_input_jb_pop_desk').hide();
	
	if($(this).val() == 'new'){
		$('.cl_bs_area_input_jb_pop_desk').val('');
		$('.cl_bs_area_input_jb_pop_desk').next('span.tick_specialism_mobile').remove();
		
		$(".cl_bs_area_input_jb_pop_desk").show();
		$('.hm_new_clnt_dv_jb_pop_desk').show();
		$(".hm_new_client_jb_pop_desk").show();
		$(".hm_bs_area_jb_pop_desk").hide();

	} 
	
	else if($(this).val())
	{
		$('.hm_new_clnt_dv_jb_pop_desk').show();
		$(".cl_bs_area_input_jb_pop_desk").hide();
		$(".hm_new_client_jb_pop_desk").hide();
		$(".hm_bs_area_jb_pop_desk").show();
	}
	else {
		
		$('.hm_new_clnt_dv_jb_pop_desk').hide();
		$(".cl_bs_area_input_jb_pop_desk").hide();
		$(".hm_new_client_jb_pop_desk").hide();
		$(".hm_bs_area_jb_pop_desk").hide();
	}
});

$('.hm_new_input_jb_pop_desk').hide();
$(".hm_bs_area_jb_pop_desk").change(function ()
{
	if($(this).val() == 'new')
	{
		$('.hm_new_input_jb_pop_desk').show();	
	}
	else if($(this).val())
	{
		$('.hm_new_input_jb_pop_desk').hide();
	}
	else
	{
		$('.hm_new_input_jb_pop_desk').hide();
	}
});	


//************Quicky job end *************

//************Full Request start *************
$('.hm_new_clnt_dv_fr_jb_pop_desk').hide();
$(".cl_bs_area_fr_jb_pop_desk").change(function (){
	$('.hm_new_input_fr_jb_pop_desk').hide();
	$('#role_popup').removeClass("in");
	
	if($(this).val() == 'new'){
		//$('.cl_bs_area_input_jb_pop_desk').val('');
		$('.cl_bs_area_input_jb_pop_desk').next('span.tick_specialism_mobile').remove();
		
		$(".cl_bs_area_input_fr_jb_pop_desk").show();
		$('.hm_new_clnt_dv_fr_jb_pop_desk').show();
		$(".hm_new_client_fr_jb_pop_desk").show();
		$(".hm_bs_area_fr_jb_pop_desk").hide();
	} 
	
	else if($(this).val())
	{
		$('.hm_new_clnt_dv_fr_jb_pop_desk').show();
		$(".cl_bs_area_input_fr_jb_pop_desk").hide();
		$(".hm_new_client_fr_jb_pop_desk").hide();
		$(".hm_bs_area_fr_jb_pop_desk").show();
	}
	else {
		
		$('.hm_new_clnt_dv_fr_jb_pop_desk').hide();
		$(".cl_bs_area_input_fr_jb_pop_desk").hide();
		$(".hm_new_client_fr_jb_pop_desk").hide();
		$(".hm_bs_area_fr_jb_pop_desk").hide();
	}
});

$('.hm_new_input_fr_jb_pop_desk').hide();
$(".hm_bs_area_fr_jb_pop_desk").change(function ()
{
	if($(this).val() == 'new')
	{
		$('.hm_new_input_fr_jb_pop_desk').show();	
	}
	else if($(this).val())
	{
		$('.hm_new_input_fr_jb_pop_desk').hide();
	}
	else
	{
		$('.hm_new_input_fr_jb_pop_desk').hide();
	}
});	

//************Full Request end *************


$('.hm_new_clnt_dv_page_desk').hide();
$(".cl_bs_area_page_desk").change(function (){
	$('.hm_new_input_page_desk').hide();
	$('#role_popup').removeClass("in");
	
	if($(this).val() == 'new')
	{
		$(".cl_bs_area_input_page_desk").show();
		$('.hm_new_clnt_dv_page_desk').show();
		$(".hm_new_client_page_desk").show();
		$(".hm_bs_area_page_desk").hide();
	
	} 
	
	else if($(this).val())
	{
		$(".cl_bs_area_input_page_desk").hide();
		$('.hm_new_clnt_dv_page_desk').show();
		$(".hm_new_client_page_desk").hide();
		$(".hm_bs_area_page_desk").show();
		
	}
	else {
		$(".cl_bs_area_input_page_desk").hide();
		$('.hm_new_clnt_dv_page_desk').hide();
		$(".hm_new_client_page_desk").hide();
		$(".hm_bs_area_page_desk").hide();
	}
});

$('.hm_new_input_page_desk').hide();
$(".hm_bs_area_page_desk").change(function ()
{
	if($(this).val() == 'new')
	{
		$('.hm_new_input_page_desk').show();	
	}
	else if($(this).val())
	{
		$('.hm_new_input_page_desk').hide();
	}
	else
	{
		$('.hm_new_input_page_desk').hide();
	}
});
