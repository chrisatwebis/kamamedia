<section id="comments-section" class="block gray <?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="row">
    <div id="comments-section-inner" class="col-md-8 col-md-offset-2">
      <?php if ($content['comment_form']): ?>
        <div class="comment-box">
          <div class="title"><h3><?php print t('Leave a comment'); ?></h3></div>
          <?php print render($content['comment_form']); ?>
        </div>
      <?php endif; ?>
      <?php if ($content['comments'] && $node->type != 'forum'): ?>
        <?php print render($title_prefix); ?><h3><?php print t('Comments'); ?></h3><?php print render($title_suffix); ?>
      <?php endif; ?>
      <ul id="comments" class="comment-wrapper comment-wrapper-nid-<?php print $node->nid?> comments">
        <?php print render($content['comments']); ?>
      </ul>
    </div>
  </div>
</section>
