jQuery(document).ready(function($){
	$('.minus').mousedown(function(){
		var val = $(this).siblings('.quantity').find('input').attr('value');
		if(val>1){
			val--;
			$(this).siblings('.quantity').find('input').attr('value', '' + val + '');
			$('.button').removeAttr( "disabled" );
		}
	});
	$('.plus').mousedown(function(){
		var val = $(this).siblings('.quantity').find('input').attr('value');
		val++;
		$(this).siblings('.quantity').find('input').attr('value', '' + val + '');
		$('.button').removeAttr( "disabled" );
	});
	$('#menu-button').click(function(){
		$('#dropdown').slideToggle();
	});
	$(window).resize(function(){
		if($(window).width()>991){
			$('#dropdown').css('display','')
		}
	});


	/* Popup */
	$('.license-gallery').each(function() { // the containers for all your galleries
	    $(this).magnificPopup({
	        delegate: 'a', // the selector for gallery item
	        type: 'image',
	        gallery: {
	          enabled:true
	        }
	    });
	});

	/* Slick */

	$('.license-gallery').slick({
	  infinite: false,
	  speed: 300,
	  slidesToShow: 7,
	  slidesToScroll: 7,
	  responsive: [
	    {
	      breakpoint: 1900,
	      settings: {
	        slidesToShow: 6,
	        slidesToScroll: 6,
	        infinite: true,
	      }
	    },
	    {
	      breakpoint: 1680,
	      settings: {
	        slidesToShow: 5,
	        slidesToScroll: 5,
	        infinite: true,
	      }
	    },
	    {
	      breakpoint: 1400,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        infinite: true,
	      }
	    },
	    {
	      breakpoint: 1100,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	      }
	    },
	    {
	      breakpoint: 690,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2,
	        infinite: true,
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});
});