<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <div class="title-block"><h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2></div>
<?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="cocoon-block-inner"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
</div>