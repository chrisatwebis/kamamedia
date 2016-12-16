<section class="<?php print render ($content['field_block_style']); ?>">

  <?php if (isset($content['field_background_image'])){ ?>
    <?php if (isset($node->field_background_image[$node->language])) { ?>
      <div class="bg<?php if ($content['field_block_style']['#items'][0]['value'] == 'default'){ ?> faded<?php } ?>" style="background-image: url(<?php print image_style_url('tera_slider', $node->field_background_image[$node->language][0]['uri']); ?>);"></div>
    <?php } else { ?>
      <div class="bg<?php if ($content['field_block_style']['#items'][0]['value'] == 'default'){ ?> faded<?php } ?>" style="background-image: url(<?php print image_style_url('tera_slider', $node->field_background_image['LANGUAGE_NONE'][0]['uri']); ?>);"></div>
    <?php } ?>
  <?php } ?>

  <?php if ($content['field_block_layout']['#items'][0]['value'] == 'default'){ ?>
  <!-- default -->
    <?php if ($content['field_block_title_']['#items'][0]['value'] == 1){ ?>
      <div class="row">
        <div class="col-md-12 title-block text-center">
          <h2><?php print $title; ?></h2>
        </div>
      </div>
    <?php } ?>
    <?php print render ($content['body']); ?>
  <?php } ?>

  <?php if ($content['field_block_layout']['#items'][0]['value'] == '2-columns'){ ?>
  <!-- 2 col -->
    <div class="content">
      <div class="row">
        <?php if ($content['field_block_title_']['#items'][0]['value'] == 1){ ?>
          <div class="col-md-12 title-block text-center">
            <h2 class="text-center"><?php print $title; ?></h2>
          </div>
        <?php } ?>
        <?php if ((isset($content['field_column_1_title'])) || (isset($content['field_column_1_body']))){ ?>
          <div class="col-md-6">
            <?php if ((isset($content['field_column_1_title']))){ ?>
              <h1><?php print render ($content['field_column_1_title']); ?></h1>
            <?php } ?>
            <?php if ((isset($content['field_column_1_body']))){ ?>
              <?php print render ($content['field_column_1_body']); ?>
            <?php } ?>
          </div>
        <?php } ?>
        <?php if ((isset($content['field_column_2_title'])) || (isset($content['field_column_2_body']))){ ?>
          <div class="col-md-6">
            <?php if ((isset($content['field_column_2_title']))){ ?>
              <h1><?php print render ($content['field_column_2_title']); ?></h1>
            <?php } ?>
            <?php if ((isset($content['field_column_2_body']))){ ?>
              <?php print render ($content['field_column_2_body']); ?>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php } ?>

  <?php if ($content['field_block_layout']['#items'][0]['value'] == 'center-col-text'){ ?>
  <!-- center column -->
    <div class="content row">
      <div class="col-md-6 col-md-offset-3">
        <?php if ($content['field_block_title_']['#items'][0]['value'] == 1){ ?>
          <h2><?php print $title; ?></h2>
        <?php } ?>
        <?php print render ($content['body']); ?>
      </div>
    </div>
  <?php } ?>

  <?php if ($content['field_block_layout']['#items'][0]['value'] == 'text-center'){ ?>
  <!-- text center -->
    <?php if ($content['field_block_title_']['#items'][0]['value'] == 1){ ?>
      <div class="row">
        <div class="col-md-12 title-block text-center">
          <h2><?php print $title; ?></h2>
        </div>
      </div>
    <?php } ?>
    <div class="row">
      <div class="text-center">
        <?php print render ($content['body']); ?>
      </div>
    </div>
  <?php } ?>

  <?php if ($content['field_block_layout']['#items'][0]['value'] == 'blockquote-image'){ ?>
    <!-- blockquote + image -->
    <div class="row">
      <div class="col-md-10">
        <blockquote class="text-center"><?php print render ($content['field_blockquote']); ?></blockquote>
      </div>
      <div class="col-md-2 mobile-center">
        <?php if (isset($node->field_blockquote_image[$node->language])) { ?>
          <img alt="<?php print $title; ?>" style="width:100px" src="<?php print image_style_url('blockquote', $node->field_blockquote_image[$node->language][0]['uri']); ?>">
        <?php } else { ?>
          <img alt="<?php print $title; ?>" style="width:100px" src="<?php print image_style_url('blockquote', $node->field_blockquote_image['LANGUAGE_NONE'][0]['uri']); ?>">
        <?php } ?>
      </div>
    </div>
  <?php } ?>

  <?php if ($content['field_block_layout']['#items'][0]['value'] == '2-blockquote-image'){ ?>
  <!-- blockquote + image + blockquote -->
    <div class="content row">
      <div class="col-md-5">
        <blockquote class="text-center"><?php print render ($content['field_blockquote_1']); ?></blockquote>
      </div>
      <div class="col-md-2 text-center">
        <?php if (isset($node->field_blockquote_image[$node->language])) { ?>
          <img alt="<?php print $title; ?>" style="width:120px" src="<?php print image_style_url('blockquote', $node->field_blockquote_image[$node->language][0]['uri']); ?>">
        <?php } else { ?>
          <img alt="<?php print $title; ?>" style="width:120px" src="<?php print image_style_url('blockquote', $node->field_blockquote_image['LANGUAGE_NONE'][0]['uri']); ?>">
        <?php } ?>
      </div>
      <div class="col-md-5">
        <blockquote class="text-center"><?php print render ($content['field_blockquote_2']); ?></blockquote>
      </div>
    </div>
  <?php } ?>

</section>
