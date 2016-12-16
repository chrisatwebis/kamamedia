<div class="col-md-2 text-center service">
  <?php foreach ($items as $delta => $item): ?>
    <div class="fa fa-2x <?php print render($item); ?>"></div>
  <?php endforeach; ?>
  <?php if (!$label_hidden): ?>
    <h3 class="subtitle"><?php print $label ?></h3>
  <?php endif; ?>
</div>
