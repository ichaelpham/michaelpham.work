var error = function() {
    if ($('body').hasClass('default')) {
      $('.fade-in').addClass('active');
    }
}

exports.error = error;
