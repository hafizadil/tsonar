
		$(".dropdown dt a").on('click', function() {
			$(".dropdown dd ul").slideToggle('fast');
		});

		$(".dropdown dd ul li a").on('click', function() {
			$(".dropdown dd ul").hide();
		});

		function getSelectedValue(id) {
			return $("#" + id).find("dt a span.value").html();
		}

		$(document).bind('click', function(e) {
			var $clicked = $(e.target);
				if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
			});

			var multiBack = 0;
				$('.mutliSelect input[type="checkbox"]').on('click', function() {
					var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),

    title = $(this).val() + ",";

  if ($(this).is(':checked')) {

    var html = '<span title="' + title + '">' + title + '</span>';

    $('.multiSel').append(html);

    $(".hida").hide();

	//$(this).parent().parent().find('.active_select').addClass("dropdown-background")

	$('.dropdown dt a').addClass("dropdown-background");

	multiBack++;

  } else {

	multiBack--;

    $('span[title="' + title + '"]').remove();

    var ret = $(".hida");

    $('.dropdown dt a').append(ret);

    if(multiBack){}else{
		$('.dropdown dt a').removeClass("dropdown-background");
	}
  }
  console.log(multiBack);
  if ($('.multiSel').is(':empty')){
	$('.hida').show();
  }
});
