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

  //Fetching image style URIs for portfolio background image (field_image)
  $ccn_field_image_language = image_style_url('portfolio_image', $node->field_image[$node->language][0]['uri']);
  $ccn_field_image_language_none = image_style_url('portfolio_image', $node->field_image[$node->language][0]['uri']);
?>

<div class="container-fluid<?php if ($page['sidebar']): ?> sidebar-present<?php else: ?> sidebar-absent<?php endif; ?>">
  <header data-spy="affix" class="affix-top">
    <div class="menu-trigger">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
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
    <?php if ($page['main_menu']): ?>
      <nav id="main" style="">
        <div class="nav">
          <?php print render($page['main_menu']); ?>
        </div>
      </nav>
    <?php endif; ?>
  </header>

  <section class="jumbotron">
    <div class="bg faded animated"<?php if (isset($node_content) && $node_content['field_image']) { ?> style="background-image: url(<?php if (isset($node->field_image[$node->language])) { print render ($ccn_field_image_language); } else { print render ($ccn_field_image_language_none); } ?>);"<?php } ?>></div>
    <div class="row vcenter">
      <div class="col-md-12 text-center">
        <h1><?php print $title; ?></h1>
      </div>
    </div>
  </section>

  <section class="gray">
    <div class="row">
      <?php if($messages || $tabs_rendered = render($tabs) || $page['help']): ?>
        <div class="col-md-8 col-md-offset-2">
          <div class="drupConsole">
            <?php if ($messages): ?>
              <div id="messages">
                <?php print $messages; ?>
              </div><!-- /#messages -->
            <?php endif; ?>
            <?php if ($tabs_rendered = render($tabs)): ?>
              <div class="tabs">
                <?php print render($tabs); ?>
              </div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
          </div>
        </div><!-- /.drupConsole -->
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
  </section>

  <a id="start"></a>
  <?php if ($page['fullwidth_panel']): ?>
    <?php print render($page['fullwidth_panel']); ?>
  <?php endif; ?>

  <?php if ($page['footer_content']): ?>
    <section class="gray">
      <div class="row">
        <?php print render($page['footer_content']); ?>
      </div>
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
