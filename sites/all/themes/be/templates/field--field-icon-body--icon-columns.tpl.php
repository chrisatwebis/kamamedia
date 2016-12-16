<?php if (!$label_hidden): ?>
  <?php print $label ?>
<?php endif; ?>
<?php foreach ($items as $delta => $item): ?>
  <p><?php print render($item); ?></p>
<?php endforeach; ?>