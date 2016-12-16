<?php

/**
 * @file node-nodeblock-default.tpl.php
 *
 * Theme implementation to display a nodeblock enabled block. This template is
 * provided as a default implementation that will be called if no other node
 * template is provided. Any node-[type] templates defined by the theme will
 * take priority over this template. Also, a theme can override this template
 * file to provide its own default nodeblock theme.
 *
 * Additional variables:
 * - $nodeblock: Flag for the nodeblock context.
 */
?>
<section class="gray">
<div class="row text-center"><div class="col-md-12 title-block"><h2><?php print $title; ?></h2></div></div>

<div class="text-center">
  <?php print render($content['group_icon_columns_col']); ?>
</div>
</section>