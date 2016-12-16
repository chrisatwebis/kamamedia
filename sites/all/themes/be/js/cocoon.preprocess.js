(function($){
  Drupal.behaviors.cocoonpreprocess = {
    attach: function (context, settings) {
      /* DRUPAL */
        /* CORE */
          $('#main .expanded li a').addClass('transition');
          $('.form-text, .form-textarea').addClass('form-control');
          $('#block-system-main').removeClass('block');
          $('ul.pager.btn-group').wrap('<div class=\"col-md-offset-3 col-md-6 text-center\"></div>');
          $('.pager .pager-current').addClass('btn btn-xs btn-default active');
        /* CONTACT */
          $(".page-contact #form .form-item-name, .page-contact #form .form-item-mail, .page-contact #form .form-item-subject, .page-contact #form .form-item-message").wrapAll('<div class="row"></div>');
          $(".page-contact #form .form-item-name, .page-contact #form .form-item-mail, .page-contact #form .form-item-subject").wrapAll('<div class="col-md-6"></div>');
          $(".page-contact #form .form-item-message").wrap('<div class="col-md-6"></div>');
          $(".page-contact #form .form-actions").wrap('<div class="row"><div class="col-md-12 text-center"></div></div>');
        /* TEAM */
          if($('.view-id-cocoon_collection.view-display-id-page_team').length){
            $('#cocoon-content > section > .row > .col-md-12').removeClass('col-md-12');
            $('#cocoon-content > section').each(function() {
              $(this).replaceWith('<div class=\"jumbotron\" style=\"background: #fff;\">' + this.innerHTML + '</div>');
            });
          }
        /* BLOG */
          if($('.view-id-cocoon_blog.view-display-id-page_blog_sidebar, .view-id-cocoon_blog.view-display-id-page_archive').length){
            $('#cocoon-content > section > .row > .col-md-7').removeClass('col-md-7').addClass('col-md-8');
            $('#cocoon-content > section > .row > .col-md-4').removeClass('col-md-offset-1');
          }
        /* TABS */
          $('.tab-panel .tab-pane:first-child').addClass('active in');
          $('.tab-panel .nav-tabs li:first-child').addClass('active');
          $('.tab-panel .nav-tabs li').children().each(function(t) {
            $(this).attr('href', ('#tab-' + (t+1)));
          });
          $('.tab-content .tab-pane').each(function(t) {
            $(this).attr('id', ('tab-' + (t+1)));
          });


        /* PORTFOLIO */
              if($('.view-id-cocoon_portfolio.view-display-id-page_lightbox_portfolio, .view-id-cocoon_portfolio.view-display-id-b1, .view-id-cocoon_portfolio.view-display-id-b2').length == 0){
          $('.view-id-cocoon_portfolio #grid .item').each(function() {
            var item_src = $(this).find('img').attr('src');
            $(this).css('background-image', 'url(' + item_src + ')');
            $(this).find('img').remove();
          }); 
}

            /* CLASSIC PORTFOLIO */
              if($('.view-id-cocoon_portfolio.view-display-id-page_classic_portfolio').length){
                $('#grid .item:nth-child(3)').addClass('wide');
                $('#grid .item:nth-child(8)').addClass('high');
              }
            /* FULLSCREEN PORTFOLIO */
              if($('.view-id-cocoon_portfolio.view-display-id-page_fullscreen_portfolio').length){
                $('#cocoon-content > section').addClass('top-line no-spacing');
                $('#grid .item:nth-child(8)').addClass('high');
              }
            /* 3 COLUMNS PORTFOLIO */
              if($('.view-id-cocoon_portfolio.view-display-id-page_3_columns_portfolio').length){
                $('#grid .item:nth-child(3)').addClass('wide');
                $('#grid .item:nth-child(8)').addClass('high');
              }
            /* NO SPACING PORTFOLIO */
              if($('.view-id-cocoon_portfolio.view-display-id-page_no_spacing_portfolio').length){
                $('#grid .item:nth-child(3)').addClass('wide');
                $('#grid .item:nth-child(8)').addClass('high');
              }
            /* LIGHTBOX PORTFOLIO */
              if($('.view-id-cocoon_portfolio.view-display-id-page_lightbox_portfolio, .view-id-cocoon_portfolio.view-display-id-b1, .view-id-cocoon_portfolio.view-display-id-b2').length){
                $('#grid .item:nth-child(8)').addClass('high');
          $('.view-id-cocoon_portfolio #grid .item').each(function() {
            var item_src2 = $(this).find('img').attr('src');
            /*$(this).attr('href', item_src2);*/
            $(this).css('background-image', 'url(' + item_src2 + ')');
            $(this).find('img').remove();
          });
              }




      /* TERA SLIDER */
        $('.slide').each(function() {
          var slide_src = $(this).find('img').attr('src');
          $(this).find('.bg').css('background-image', 'url(' + slide_src + ')');
          $(this).find('img').remove();
        });
        $('.slide.dark').each(function() {
          $(this).find('.bg').addClass('faded animated');
        });

      $('#search-block-form .form-text').removeClass('form-control');
      if($('body.node-type-page').length){
        $('body').addClass('accent');
      }
      $('#comments-section').appendTo('#cocoon-content');
      if($('.sidebar-present').length){
        $('#comments-section-inner').removeClass('col-md-8 col-md-offset-2').addClass('col-md-7');
      }
      $('ul.comments li.comment ul.links a').addClass('btn btn-default btn-xs reply pull-right');
    }
  };
}(jQuery));