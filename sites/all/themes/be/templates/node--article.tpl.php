<?php
  global $base_path, $base_url;
?>
<?php if ($display_submitted): ?>
  <div class="blog-date">
    <?php print format_date($node->created, 'custom', 'F jS, Y'); ?>
  </div>
<?php endif; ?>
<div class="content">
  <?php print render($content['body']); ?>
  <?php print render($content['field_image']); ?>
  <?php print render($content['field_video']); ?>
</div>
<?php
  // We hide the comments and links now so that we can render them later.
  hide($content['comments']);
  hide($content['links']);
?>
<?php print render($content['comments']); ?>
<?php print render($content['flippy_pager']);?> 