$(window).scroll(function() {    
	var scroll = $(window).scrollTop();

	if (scroll >= 200) {
		$("body").addClass("header-fixed");
	} else {
		$("body").removeClass("header-fixed");
	}
});

$(".add-listing-section").each(function() {
	var switcherSection = $(this);
	var switcherInput = $(this).find('.switch input');

	if(switcherInput.is(':checked')){
		$(switcherSection).addClass('switcher-on');
	}

	switcherInput.change(function(){
		if(this.checked===true){
			$(switcherSection).addClass('switcher-on');
		} else {
			$(switcherSection).removeClass('switcher-on');
		}
	});
});

$(".db-trigger").on('click', function() {
   if ( $('#dashboard').hasClass( "sidebar-in" ) ) {
      $('#dashboard').removeClass("sidebar-in");
   }
   else
   {
      $('#dashboard').addClass("sidebar-in");
   }
})

$('.fullwidth-slick-carousel').slick({
  centerMode: true,
  centerPadding: '15%',
  slidesToShow: 3,
  dots: true,
  arrows: false,
  responsive: [
   {
     breakpoint: 1441,
     settings: {
       centerPadding: '10%',
       slidesToShow: 3
     }
   },
   {
     breakpoint: 1025,
     settings: {
       centerPadding: '10px',
       slidesToShow: 2,
     }
   },
   {
     breakpoint: 767,
     settings: {
       centerPadding: '10px',
       slidesToShow: 1
     }
   }
  ]
});

$('.simple-slick-carousel').slick({
   infinite: true,
   slidesToShow: 3,
   slidesToScroll: 3,
   dots: true,
   arrows: true,
   responsive: [
       {
         breakpoint: 992,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 2
         }
       },
       {
         breakpoint: 769,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       }
  ]
});

$('.testimonial-carousel').slick({
  centerMode: true,
  centerPadding: '34%',
  slidesToShow: 1,
  dots: true,
  arrows: false,
  responsive: [
   {
     breakpoint: 1025,
     settings: {
       centerPadding: '10px',
       slidesToShow: 2,
     }
   },
   {
     breakpoint: 767,
     settings: {
       centerPadding: '10px',
       slidesToShow: 1
     }
   }
  ]
});

$('.listing-slider').slick({
   centerMode: true,
   centerPadding: '20%',
   slidesToShow: 2,
   responsive: [
      {
        breakpoint: 1367,
        settings: {
          centerPadding: '15%'
        }
      },
      {
        breakpoint: 1025,
        settings: {
          centerPadding: '0'
        }
      },
      {
        breakpoint: 767,
        settings: {
          centerPadding: '0',
          slidesToShow: 1
        }
      }
   ]
});