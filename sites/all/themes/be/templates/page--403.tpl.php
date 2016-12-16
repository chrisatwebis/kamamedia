<?php
  //Drupal
  $base_path = base_path();
  $path_to_theme = drupal_get_path('theme', 'be');

  //Get Cocoon Theme Settings
  if (theme_get_setting('logo_light')):
    $logo_light_fid = theme_get_setting('logo_light');
    $logo_light_img = file_create_url(file_load($logo_light_fid)->uri);
  endif;
  if (theme_get_setting('logo_dark')):
    $logo_dark_fid = theme_get_setting('logo_dark');
    $logo_dark_img = file_create_url(file_load($logo_dark_fid)->uri);
  endif;
  if (theme_get_setting('accessdenied_bg')):
    $accessdenied_bg_fid = theme_get_setting('accessdenied_bg');
    $accessdenied_bg_img = file_create_url(file_load($accessdenied_bg_fid)->uri);
  endif;
?>

<div class="container-fluid<?php if ($page['sidebar']): ?> sidebar-present<?php else: ?> sidebar-absent<?php endif; ?> 403-page">
  <header data-spy="affix" class="affix-top">
    <a class="brand transition" href="<?php print $front_page; ?>">
      <?php if (theme_get_setting('logo_dark')): ?>
        <img <?php if (theme_get_setting('logo_height')): ?>style="max-height:<?php print(theme_get_setting('logo_height')); ?>px;" <?php endif; ?>class="logo-img-dark" alt="<?php print $site_name; ?>" src="<?php print $logo_dark_img; ?>">
      <?php else: ?>
        <img <?php if (theme_get_setting('logo_height')): ?>style="max-height:<?php print(theme_get_setting('logo_height')); ?>px;" <?php endif; ?>class="logo-img-dark" alt="<?php print $site_name; ?>" src="<?php print $base_path . $path_to_theme . '/images/logo-dark.png'; ?>">
      <?php endif; ?>
      <?php if (theme_get_setting('logo_light')): ?>
        <img <?php if (theme_get_setting('logo_height')): ?>style="max-height:<?php print(theme_get_setting('logo_height')); ?>px;" <?php endif; ?>class="logo-img-light" alt="<?php print $site_name; ?>" src="<?php print $logo_light_img; ?>">
      <?php else: ?>
        <img <?php if (theme_get_setting('logo_height')): ?>style="max-height:<?php print(theme_get_setting('logo_height')); ?>px;" <?php endif; ?>class="logo-img-light" alt="<?php print $site_name; ?>" src="<?php print $base_path . $path_to_theme . '/images/logo-light.png'; ?>">
      <?php endif; ?>
    </a>
  </header>

  <section class="jumbotron small">
    <div class="bg faded animated"<?php if (theme_get_setting('accessdenied_bg')): ?> style="background-image:url(<?php print $accessdenied_bg_img; ?>);"<?php endif; ?>></div>
    <div class="row vcenter" style="">
      <div class="col-md-12 text-center">
        <h1>403</h1>
        <h3>You are not authorized to access this page.</h3>
      </div>
    </div>
  </section>

  <?php if($messages || $page['help']): ?>
    <section class="small drupConsole">
      <?php if ($messages): ?>
        <div id="messages">
          <?php print $messages; ?>
        </div><!-- /#messages -->
      <?php endif; ?>
      <?php print render($page['help']); ?>
    </section>
  <?php endif; ?>

  <?php if ($page['col_footer_1'] || $page['col_footer_2'] || $page['col_footer_3']): ?>
    <footer class="top-line">
      <div class="row text-center">
        <?php if ($page['col_footer_1']): ?>
          <div class="col-md-4">
            <?php print render($page['col_footer_1']); ?>
          </div>
        <?php endif; ?>
        <?php if ($page['col_footer_2']): ?>
          <div class="col-md-4">
            <?php print render($page['col_footer_2']); ?>
          </div>
        <?php endif; ?>
        <?php if ($page['col_footer_3']): ?>
          <div class="col-md-4">
            <?php print render($page['col_footer_3']); ?>
          </div>
        <?php endif; ?>
      </div>
    </footer>
  <?php endif; ?>

  <?php if ($page['footer_social_icons'] || theme_get_setting('copyright')): ?>
    <footer class="gray text-center">
      <?php if ($page['footer_social_icons']): ?>
        <div class="row">
          <div class="col-md-12">
            <?php print render($page['footer_social_icons']); ?>
          </div>
        </div>
      <?php endif; ?>
      <?php if (theme_get_setting('copyright')): ?>
        <div class="row">
          <div class="col-md-12">
            <div class="copy"><?php print (theme_get_setting('copyright')); ?></div>
          </div>
        </div>
      <?php endif; ?>
    </footer>
  <?php endif; ?>

</div><!-- /.container -->

<script>
  (function($){
    $('body').addClass('accent');
  }(jQuery));
</script>