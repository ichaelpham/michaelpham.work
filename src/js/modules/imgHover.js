var $ = require('jquery/dist/jquery.min');

var imgHover = function() {
  console.log('imgHover');

  $('.project__url').on('mouseover', function() {
    var linkID = $(this).attr('id');
    console.log(linkID);

    if ($('.browser__desktop div').hasClass(linkID)) {
      $('.' + linkID).addClass('active').siblings().removeClass('active');
    }
  });
}

exports.imgHover = imgHover;
