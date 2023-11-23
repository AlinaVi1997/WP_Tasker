// Slick-slider  
$(document).ready(function () {
    $('.team-slider').slick({
        arrows: false,
        infinite:true,
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
         responsive: [
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
  ]
});
});

// // Faq's section items
$(document).ready(function() {
    $('.faq_items').click(function() {
        $('.faq_items').not(this).removeClass('faq_items--active');
        $(this).toggleClass('faq_items--active');
        $(this).addClass('faq_items--active');
    });
});

// add calss form
    $(document).ready(function($) {
    var messageBlock = $('.wpcf7-response-output');
    messageBlock.addClass('sub_output main_output');
});

// burger menu
  $(document).ready(function () {
      $('.menu-btn').click(function () {
        $('.menu-btn').toggleClass('close-btn');
        $('.navbar-menu').toggleClass('menu--active');
      });
});

