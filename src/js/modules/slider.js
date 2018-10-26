var slick = require('slick-carousel');

var slider = function() {
  $('.browser__mobile').slick({
    arrows: false,
    infinite: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1
  });

    if ($(window).width() < 990) {
      $('.browser__mobile').slick('setPosition');
  } else {
      $('.browser__mobile').slick('setPosition');
  }
}

exports.slider = slider;
