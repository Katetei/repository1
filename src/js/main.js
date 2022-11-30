$(document).ready(function(){
    $('.intro-slider').slick({
        infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  autoplay: true
    });
  });

let menuBtn = document.querySelector('.burger');
let menu = document.querySelector('.burger-menu');
menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
})

let header = $('.header'),

	scrollPrev = 0;

$(window).scroll(function() {
	let scrolled = $(window).scrollTop();
 
	if ( scrolled > 100 && scrolled > scrollPrev ) {
		header.addClass('out');
	} else {
		header.removeClass('out');
	}
	scrollPrev = scrolled;
});


