$(document).ready(function(){
    $('.main-slider').slick();
  });


  $('.review').slick({
    infinite: true,
    slidesToShow: 5.5,
    slidesToScroll: 1
  });

//for mob ??
  $('.review-mob').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1
  });