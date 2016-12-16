<?php
/**
 * @file
 * TODO documentation
 * 
 * - group
 * - items
 *  - delta + field_name + value render_array or null if empty
 */
?>
<div class="row">
  <?php foreach ($entries as $delta => $entry): ?>
    <div class="col-md-3 service">
    <?php foreach ($entry as $field_name => $field): ?>
      <?php if (!is_null($field)): ?>
        <?php print render($field); ?>
      <?php else: ?>
        <span class="field-is-empty"> </span>
      <?php endif; ?>
    <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>
