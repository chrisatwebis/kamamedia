<div class="col-md-8 col-md-offset-2">
  <div class="blog-date"><?php print render($content['field_portfolio_category']); ?></div>
    <div class="content">
      <p><?php print render($content['body']); ?></p>
              <a class="lightbox" href="<?php if (isset($node->field_image_1[$node->language])) { print image_style_url('portfolio_image', $node->field_image_1[$node->language][0]['uri']); } else { print image_style_url('portfolio_image', $node->field_image_1['LANGUAGE_NONE'][0]['uri']); } ?>" data-index="0">
                <img alt="" src="<?php if (isset($node->field_image_1[$node->language])) { print image_style_url('portfolio_image', $node->field_image_1[$node->language][0]['uri']); } else { print image_style_url('portfolio_image', $node->field_image_1['LANGUAGE_NONE'][0]['uri']); } ?>">
              </a>
            </div>
          </div>




<div class="col-md-6">
            <div class="content">
              <a class="lightbox" href="<?php if (isset($node->field_image_2[$node->language])) { print image_style_url('portfolio_image', $node->field_image_2[$node->language][0]['uri']); } else { print image_style_url('portfolio_image', $node->field_image_2['LANGUAGE_NONE'][0]['uri']); } ?>" data-index="1">
                <img alt="" src="<?php if (isset($node->field_image_2[$node->language])) { print image_style_url('portfolio_image', $node->field_image_2[$node->language][0]['uri']); } else { print image_style_url('portfolio_image', $node->field_image_2['LANGUAGE_NONE'][0]['uri']); } ?>">
              </a>
            </div>
          </div>


<div class="col-md-6">
            <div class="content">
              <a class="lightbox" href="<?php if (isset($node->field_image_3[$node->language])) { print image_style_url('portfolio_image', $node->field_image_3[$node->language][0]['uri']); } else { print image_style_url('portfolio_image', $node->field_image_3['LANGUAGE_NONE'][0]['uri']); } ?>" data-index="2">
                <img alt="" src="<?php if (isset($node->field_image_3[$node->language])) { print image_style_url('portfolio_image', $node->field_image_3[$node->language][0]['uri']); } else { print image_style_url('portfolio_image', $node->field_image_3['LANGUAGE_NONE'][0]['uri']); } ?>">
              </a>
            </div>
          </div>


<div class="col-md-6 col-md-offset-3">
            <div class="content text-center">
              <a class="lightbox" href="<?php if (isset($node->field_image_4[$node->language])) { print image_style_url('portfolio_image', $node->field_image_4[$node->language][0]['uri']); } else { print image_style_url('portfolio_image', $node->field_image_4['LANGUAGE_NONE'][0]['uri']); } ?>" data-index="3">
                <img alt="" src="<?php if (isset($node->field_image_4[$node->language])) { print image_style_url('portfolio_image', $node->field_image_4[$node->language][0]['uri']); } else { print image_style_url('portfolio_image', $node->field_image_4['LANGUAGE_NONE'][0]['uri']); } ?>">
              </a>
              <p><?php print render($content['field_body_2']); ?></p>
            </div>
          </div>