$(document).ready(function() {
  $(".banner__slider").slick({
    appendArrows: $(".banner__slider"),
    // prev arrow
    prevArrow:
      '<button type="button" data-role="none" class="slick__arrow slick__arrow--prev"></button>',
    // next arrow
    nextArrow:
      '<button type="button" data-role="none" class="slick__arrow slick__arrow--next"></button>',
    autoplay: true,
    // Auto play change interval
    autoplaySpeed: 2000,
    // Transition speed
    speed: 300
  });
});
