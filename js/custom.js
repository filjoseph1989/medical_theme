/**
 * Jquery for Mindanao Medical Foundation College responsiveness
 *
 * @author Fil Joseph Elman
 * @date 01-22-2016
 * @date 05/18/2016
 * @email filjoseph22@gmail.com,
 * @email fil.elman@greyandgreentech.com
 * @source http://jsfiddle.net/cse_tushar/6FzSb/
 * @version 1.0.0
 */
$(document).ready(function(){
  /**
   * Add blockquote to the p.quote
   */
  var quote = $('p.quote').html();
  quote = '<blockquote>'+quote+'</blockquote>';
  $('p.quote').html(quote);

  /**
   * Resize the video thumbnails
   */
  $('.video-img img').height( function() {
    $(this).removeAttr('width');
    $(this).removeAttr('height');
    return $(this).height(90);
  });

  /**
   * Resize the video thumbnails
   * @source https://css-tricks.com/snippets/jquery/simple-auto-playing-slideshow/
   */
  $("#slideshow > div:gt(0)").hide();

  setInterval(function() {
    $('#slideshow > div:first')
      .fadeOut(1000)
      .next()
      .fadeIn(1000)
      .end()
      .appendTo('#slideshow');
    },  5000);

  /*Gallery
  var gallery = $('div.gallery').html();
  gallery     = '<div class="row container">'+gallery+'</div>';
  $('div.gallery').html(gallery);
  $('figure.gallery-item').addClass('col s3');

  $( "div.gallery div figure" ).each(function( index ) {
    src = $( '.gallery-icon a img' ).attr( "src" );
    $('.gallery-icon a').attr('href', src);
  });

  $('.gallery-icon a').addClass('group1');
  $(".group1").colorbox({rel:'group1'});
  */

});
