global.$ = require('jquery');

var introImport = require('../modules/intro');
var imgImport = require('../modules/imgHover');
var sliderImport = require('../modules/slider');
var errorImport = require('../modules/error');

/***** Initi *****/
$(document).ready(function() {
  introImport.intro();
  imgImport.imgHover();
  sliderImport.slider();
  errorImport.error();
});
