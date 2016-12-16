<?php if ((isset($content['field_title'])) || (isset($content['field_subtitle']))){  ?>
<div class="col-md-4 mobile-center">
  <h4 class="subtitle"><?php print render ($content['field_subtitle']); ?></h4>
  <h2><?php print render ($content['field_title']); ?></h2>
</div>
<?php } ?>
<div class="<?php if ((isset($content['field_title'])) || (isset($content['field_subtitle']))){ ?>col-md-8<?php } else { ?>col-md-6 col-md-offset-3<?php } ?>">
  <p><?php print render ($content['body']); ?></p>
</div>