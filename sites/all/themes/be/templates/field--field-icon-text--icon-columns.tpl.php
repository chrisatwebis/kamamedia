<?php if (!$label_hidden): ?>
  <?php print $label ?>
<?php endif; ?>
<?php foreach ($items as $delta => $item): ?>
  <h3><?php print render($item); ?></h3>
<?php endforeach; ?>