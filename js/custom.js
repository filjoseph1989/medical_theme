/**
 * Jquery for Mindanao Medical Foundation College responsiveness
 * @author Fil Joseph Elman
 * @date 01-22-2016
 * @date 04-21-2016
 * @email filjoseph22@gmail.com,
 * @email fil.elman@greyandgreentech.com
 * @source http://jsfiddle.net/cse_tushar/6FzSb/
 * @version 1.0.0
 */
$(document).ready(function(){
  // load more
  // var size_li = $("#list > div.row").size();
  // var x = 3;
  // $('#list > div.row:lt('+x+')').show();
  // $('#loadMore').click(function () {
  //     x = (x+5 <= size_li) ? x+5 : size_li;
  //     $('#list > div.row:lt('+x+')').show();
  // });
  // $('#showLess').click(function () {
  //     x=(x-5<0) ? 3 : x-5;
  //     $('#list > div.row').not(':lt('+x+')').hide();
  // });

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
    return $(this).height(110);
  });

  var gallery = $('div.gallery').html();
  gallery     = '<div class="row container">'+gallery+'</div>';
  $('div.gallery').html(gallery);
  $('figure.gallery-item').addClass('col s3');

  // var figure_lenght = $('.gallery div figure').length;
  // console.log(figure_lenght);
  // for (var i = 0; i < figure_lenght; i++) {
  //   src = $( '.gallery-icon a img' ).attr( "src" );
  //   $('.gallery-icon a').attr('href', src);
  // }
  $( "div.gallery div figure" ).each(function( index ) {
    src = $( '.gallery-icon a img' ).attr( "src" );
    $('.gallery-icon a').attr('href', src);
  });

  $('.gallery-icon a').addClass('group1');
  $(".group1").colorbox({rel:'group1'});

});
