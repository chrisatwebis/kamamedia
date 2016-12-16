<div class="slider tera-heading-slider">
<ul class="slides">
<li class="slide <?php print render ($content['field_text_color']); ?>">
<div class="jumbotron">
      



<div class="bg faded animated">
<img src="<?php if (isset($node->field_image[$node->language])) { print image_style_url('tera_slider', $node->field_image[$node->language][0]['uri']); } else { print image_style_url('tera_slider', $node->field_image['LANGUAGE_NONE'][0]['uri']); } ?>"></div>

<div class="content">
                <div class="row">
                  <div class="col-md-5">
                    <h1><?php print $title; ?></h1>
                    <p><?php print render ($content['body']); ?></p>
                    <?php if ((isset($content['field_button_link'])) || (isset($content['field_button_text']))){  ?><a class="btn anchor" href="<?php print render ($content['field_button_link']); ?>"><?php print render ($content['field_button_text']); ?></a><?php } ?>
                  </div>
                </div>
</div>

</div>
</li>
</ul>
</div>
<script>
  (function($){
    $('body').removeClass('top-nav').addClass('bottom-nav');
    $('.tera-heading-slider').parent().addClass('tera-heading-slider-surround');
  }(jQuery));
</script>