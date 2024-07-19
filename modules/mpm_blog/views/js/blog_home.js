$(document).ready(function() {

  if ($('.home_page_articles').length > 0) {
    resizeArticles($('.home_page_articles'));
  }

});

function resizeArticles(el) {
  var width_window = $(window).outerWidth();
  var width_page = $('#content-wrapper').width();
  var marg = (width_window - (width_page))/2;
  var new_width = 2*marg - 10;
  var w = 'calc( 100% + '+new_width+'px )';
  el.css({
    marginLeft: -marg+'px',
    width: w,
  });
}
