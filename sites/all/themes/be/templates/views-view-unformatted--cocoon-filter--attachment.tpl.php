<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<li><button data-filter="*">All</button></li>
<?php foreach ($rows as $id => $row): ?>
  <li>
    <button<?php if ($classes_array[$id]) { print ' data-filter=".' . $classes_array[$id] .'"';  } ?>>
      <?php print $row; ?>
    </button>
  </li>
<?php endforeach; ?>