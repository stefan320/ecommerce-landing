$(document).ready(function() {
  $(".banner__slider").slick({
    // prev arrow
    prevArrow:
      '<button type="button" data-role="none" class="slick-prev"></button>',
    // next arrow
    nextArrow:
      '<button type="button" data-role="none" class="slick-next"></button>',
    autoplay: true,
    // Auto play change interval
    autoplaySpeed: 2000,
    // Transition speed
    speed: 300
  });
});
