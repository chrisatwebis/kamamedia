<li class="comment <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="user">
    <?php print $picture; ?>
    <h5><?php print $author; ?></h5>
    <?php print render($content['links']); ?>
  </div>
  <div class="comment-body"<?php print $content_attributes; ?>>
    <?php if ($new): ?>
      <span class="new"><?php print $new; ?></span>
    <?php endif; ?>

    <p class="time"><?php print $created; ?></p>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['links']);
        print render($content);
      ?>
      <?php if ($signature): ?>
      <footer class="user-signature clearfix">
        <?php print $signature; ?>
      </footer>
      <?php endif; ?>
  </div> <!-- /.comment-body -->
</li>
