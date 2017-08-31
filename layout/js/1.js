$('.minus').mousedown(function(){
	var val = $(this).siblings('input').attr('value');
	if(val>1){
		val--;
		$(this).siblings('input').attr('value', '' + val + '');
	}
});
$('.plus').mousedown(function(){
	var val = $(this).siblings('input').attr('value');
	val++;
	$(this).siblings('input').attr('value', '' + val + '');
});
$('#menu-button').click(function(){
	$('#dropdown').slideToggle();
});
$(window).resize(function(){
	if($(window).width()>991){
		$('#dropdown').css('display','')
	}
});