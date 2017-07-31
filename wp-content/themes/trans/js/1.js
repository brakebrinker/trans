//tabs
$('#descr-tab').click(function(){
	$(this).addClass('active');
	$('#tth-tab').removeClass('active');
	$('.description').css('display', 'block');
	$('.tth').css('display', 'none');
	
});
$('#tth-tab').click(function(){
	$(this).addClass('active');
	$('#descr-tab').removeClass('active');
	$('.tth').css('display', 'block');
	$('.description').css('display', 'none');
});