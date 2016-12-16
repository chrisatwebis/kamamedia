<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <div class="content-inner"<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
</section>
