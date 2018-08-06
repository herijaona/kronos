$(document).ready(function(){
	
	$('ul.tabs li a').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li a').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
        $("#"+tab_id).addClass('current');
	});

	$('.anom-const li a').click(function(){
		var tab_id = $(this).attr('data-tab');
		console.log(tab_id);
		$('.tab-c').removeClass('current2');
		$('.anom-const').addClass('current3')

		$(this).addClass('current2');
        $("#"+tab_id).addClass('current2');
	});
	$('.anomali').click(function(){
		$('.anom-const').removeClass('current3');
	});
})