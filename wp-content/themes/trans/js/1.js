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

/*Bootstrap slider change*/
var slItem = $('.carousel-inner');
var countItems = slItem.find('.item').length;

// add .active to first Item
slItem.find('.item').eq(1).addClass('active');

$('#slider').append("<ol class='carousel-indicators'></ol>");

// add points
var points = $('.carousel-indicators');

for (var i = 0; i < countItems; i++) {
	if (i == 0) {
		points.append("<li data-target='#slider' data-slide-to='"+ i +"' class='active'></li>");
	} else {
		points.append("<li data-target='#slider' data-slide-to='"+ i +"'></li>");
	}
}


