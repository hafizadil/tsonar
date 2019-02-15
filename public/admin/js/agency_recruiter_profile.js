$('.arp_dsk_other_location_supported').on('change','',function(){
	//console.log($(this).val();
	
	//console.log($.inArray('allnewzealand', $(this).val()));
	if($.inArray('allnewzealand', $(this).val()) != -1 && $("option:selected", this).val() == 'allnewzealand')
	{
		$(this).parent().find('.fs-dropdown').find('.fs-options').find('.fs-option').each(function(){
			if($(this).hasClass('selected') && $(this).attr("data-index") !=0 ){
				
				$(this).find('.fs-checkbox').trigger('click');
				//console.log($(this).attr("data-index"));
			}
			//
		});
	}
	else
	{
		if($(this).parent().find('.fs-dropdown').find('.fs-options').find('.fs-option:first-child').hasClass("selected")){
			$(this).parent().find('.fs-dropdown').find('.fs-options').find('.fs-option:first-child').find('.fs-checkbox').trigger('click');
		}
	}
	//console.log($(this).val());
});





$('.relocate_details_multiple').on('change','',function(){
	
	//console.log($.inArray('allnewzealand', $(this).val()));
	if($.inArray('none', $(this).val()) != -1)
	{
		$(this).parent().find('.fs-dropdown').find('.fs-options').find('.fs-option').each(function(){
			if($(this).hasClass('selected') && $(this).attr("data-index") !=0 ){
				
				$(this).find('.fs-checkbox').trigger('click');
				//console.log($(this).attr("data-index"));
			}
			//
		});
	}
	else
	{
		if($(this).parent().find('.fs-dropdown').find('.fs-options').find('.fs-option:first-child').hasClass("selected")){
			//$(this).parent().find('.fs-dropdown').find('.fs-options').find('.fs-option:first-child').find('.fs-checkbox').trigger('click');
		}
	}
	//console.log($(this).val());
});
