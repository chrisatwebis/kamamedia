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
<section>
<div class="col-md-4 mobile-center">
            <h4 class="subtitle"><?php print render($content['field_subtitle']); ?></h4>
            <h2><?php print $title; ?></h2>
          </div>

<?php print render($content['field_fa_icon']); ?>

<?php print render($content['field_icon_text']); ?>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>

</section>