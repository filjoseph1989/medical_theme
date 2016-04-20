/**
 * Jquery for Mindanao Medical Foundation College responsiveness
 * @author Fil Joseph Elman
 * @date 01-22-2016 - Created
 * @date 01-25-2016 - Updated
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
var quote = $('p.quote').html();
quote = '<blockquote>'+quote+'</blockquote>';
$('p.quote').html(quote);

});
