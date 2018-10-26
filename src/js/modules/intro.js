var $ = require('jquery/dist/jquery.min');
var anime = require('animejs');

var intro = function() {
    if ($(window).width() > 992) {
      var homeAnim = anime.timeline();
      homeAnim
        .add({
          targets: '.col__left',
          backgroundColor: ['#010137', '#FFF'],
          duration: 1500,
          easing: 'easeInOutCubic',
        })
        .add({
          targets: '.col__left',
          width: '50%',
          duration: 2250,
          easing: 'easeInOutCubic',
          complete: function() {
            $('.fade-in').addClass('active');
          }
        })
  } else {
    var homeAnim = anime.timeline();
      homeAnim
        .add({
          targets: 'body',
          opacity: ['0', '1'],
          duration: 1500,
          easing: 'easeInOutCubic',
          complete: function() {
            $('.fade-in').addClass('active');
          }
        })
  }
}

exports.intro = intro;
