<?php
  // Get variables
  $site_name = variable_get('site_name');
  $site_slogan = variable_get('site_slogan');

  // Get Cocoon theme settings
  $custom_css = theme_get_setting('custom_css');
  $to_top = theme_get_setting('to_top');

?><!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <?php print $head; ?>
  <meta name="MobileOptimized" content="width" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <?php if (drupal_is_front_page()) : ?>
    <title><?php print $site_name.' | '. $site_slogan; ?></title>
  <?php else : ?>
    <title><?php print $head_title; ?></title>
  <?php endif; ?>
  <?php print $styles; ?>
  <?php if (theme_get_setting('custom_css')): ?>
    <style type="text/css">
      <?php print $custom_css; ?>
    </style>
  <?php endif; ?>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
  <?php print $scripts; ?>
    <!-- HTML5 fallbacks -->
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_theme; ?>/js/html5shiv.js" type="text/javascript"></script>
    <script src="<?php print $base_path . $path_to_theme; ?>/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body class="top-nav <?php print $classes; ?>" <?php print $attributes;?>>
  <script src="<?php print $base_path . $path_to_theme; ?>/js/cocoon.midprocess.js" type="text/javascript"></script>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<script>
(function($) {

    "use strict"; // Strict mode
    
    var $slider = $('.slider'); // Define the slider
    var $mousePos = { x: -1 }; // We need the mouse position for the slider controls
    var $autoSlide;
    var $autoSlideDirection = 'right' // Can be 'right' or 'left' to set the direction

    $(window).resize(function(){
        sliderResize();
    });
    
    $slider.mousemove(function(e){ // Get the cursor position
        var $sldr = $(this);
        if($sldr.hasClass('multi-slides')){
            $mousePos.x = e.pageX;
            if($mousePos.x > $(window).width()/2) {
                $sldr.css('cursor', 'url(<?php print $base_path . $path_to_theme; ?>/images/tera-slider/slide-right-dark.png), e-resize');
                if($('body').hasClass('dark-slide'))
                    $sldr.css('cursor', 'url(<?php print $base_path . $path_to_theme; ?>/images/tera-slider/slide-right.png), e-resize');
            } else {
               $sldr.css('cursor', 'url(<?php print $base_path . $path_to_theme; ?>/images/tera-slider/slide-left-dark.png), w-resize');
                if($('body').hasClass('dark-slide'))
                    $sldr.css('cursor', 'url(<?php print $base_path . $path_to_theme; ?>/images/tera-slider/slide-left.png), w-resize');
            }
        }
    });

    // For each slider
    $slider.each(function(){
        var index = 0;
        var s = $(this);
        $(this).find('li.slide').each(function(){ // For each slide
            $(this).attr('data-index',index); // Add index to element
            if(index > 0)
                s.addClass('multi-slides');
            if(index == 0)
                $(this).addClass('active'); // Add the active state to the first slide
            index++;
        });
        var $curSlide = $(this).find('.active');
        if($curSlide.hasClass('dark')) // Set dark mode if available for the first slide
            $('body').addClass('dark-slide');
        sliderResize();
        if(s.hasClass('auto-slide'))
            $autoSlide = setInterval( function() { toggleSlide(s,$autoSlideDirection); }, 4500 );
    });

    function sliderResize(){
        $slider.each(function(){ // Resize functions for each slider
            var slideCount = $(this).find('li.slide').length;
            var $sliderWidth = $(this).width();
            var $slides = $(this).find('ul.slides');
            var $curSlide = parseInt($slides.find('.active').attr('data-index'));
            $slides.width($sliderWidth*slideCount);
            $slides.css('margin-left', -$sliderWidth*($curSlide)+'px');
            $(this).find('li.slide').width(100/slideCount+'%');
            $(this).find('li.slide').height($(this).height());
        });
    }

    $('body').on('tap', '.slider', function(){
        toggleSlide($(this));
        var s = $(this);
        if(s.hasClass('auto-slide')){
            clearInterval($autoSlide);
            $autoSlide = setInterval( function() { toggleSlide(s,$autoSlideDirection); }, 4500 );
        }
    });

    function toggleSlide(e,d) {
        // Slide controls
        var $sliderWidth = e.width();
        var $slides = e.find('ul.slides');
        var $slideCount = e.find('li').length;
        var $activeSlide = e.find('.active');
        var $activeSlideIndex = parseInt($activeSlide.attr('data-index'));
        var $newSlide;
        // If direction is set
        if(d){
            if(d == 'right'){
                if(($slideCount-1) == $activeSlideIndex)
                    $newSlide = 0; 
                else
                    $newSlide = $activeSlideIndex+1; 
            } else if(d == 'left') {
                if(0 == $activeSlideIndex)
                    $newSlide = ($slideCount-1); 
                else
                    $newSlide = $activeSlideIndex-1; 
            }
        } else {
            // If clicked on next slide
            if($mousePos.x > $sliderWidth/2) {
                if(($slideCount-1) == $activeSlideIndex)
                    $newSlide = 0; 
                else
                    $newSlide = $activeSlideIndex+1; 
            }
            // If clicked on previous slide
            else {
                if(0 == $activeSlideIndex)
                    $newSlide = ($slideCount-1); 
                else
                    $newSlide = $activeSlideIndex-1; 
            }
        }        
        $slides.find('li').removeClass('active'); // First remove all active classes
        $slides.find('[data-index='+$newSlide+']').addClass('active'); // Set the current slide to active
        if($slides.find('.active').hasClass('dark')) // If the current slide is dark
            $('body').addClass('dark-slide'); // Set dark mode
        else
            $('body').removeClass('dark-slide'); // Unset dark mode
        $slides.css('margin-left','-'+$sliderWidth*($newSlide)+'px'); // Slide animation on css propert change
        setTimeout(sliderResize, 0);
    }

  <?php if (theme_get_setting('to_top') == 0): ?>
    $('.back-to-top').css('display', 'none');
  <?php endif; ?>

})(jQuery);
</script>
</body>
</html>
