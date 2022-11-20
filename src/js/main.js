$(document).ready(function(){
    $('.intro-slider').slick({
        infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  autoplay: true
    });
  });

//   let menuBtn = document.querySelector('.burger');
// let menu = document.querySelector('.burger-menu');
// menuBtn.addEventListener('click', function(){
// 	menu.classList.toggle('active');
// })

let menuBtn = document.querySelector('.burger');
let menu = document.querySelector('.burger-menu');
menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
})