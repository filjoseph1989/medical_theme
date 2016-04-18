/**
 * Jquery for Mindanao Medical Foundation College responsiveness
 * @author Fil Joseph Elman
 * @date 01-22-2016 - Created
 * @date 01-25-2016 - Updated
 * @email filjoseph22@gmail.com,
 * @email fil.elman@greyandgreentech.com
 * @version 1.0.0
 */
$(document).ready(function() {
  if ($(window).width() >= 768 && $(window).width() < 992) {
    $('.fcards').removeClass('s12');
    $('.fcards').addClass('s6');
  }
});
$(window).resize(function() {
  if ($(window).width() >= 320 && $(window).width() < 480) {
    if ($('.fcards').hasClass('s6')) {
      $('.fcards').removeClass('s6');
      $('.fcards').addClass('s12');
    }
  }
  if ($(window).width() >= 480 && $(window).width() < 768) {
    if ($('.fcards').hasClass('s6')) {
      $('.fcards').removeClass('s6');
      $('.fcards').addClass('s12');
    }
  }
});
