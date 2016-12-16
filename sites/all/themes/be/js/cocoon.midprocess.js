(function($) {
  /* BOTTOM NAV */
  $('body.front, body.page-contact, body.node-type-portfolio-item').removeClass('top-nav').addClass('bottom-nav');
  /*if($('.tera-heading-slider').length){
    $('body').removeClass('top-nav').addClass('bottom-nav');
  }*/

  /* DARK */
  $('body.front').addClass('dark');
  /* ACCENT */
  $('body.node-type-portfolio-item, body.node-type-article').addClass('accent');
}(jQuery));
