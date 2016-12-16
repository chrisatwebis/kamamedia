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
  if (theme_get_setting('maintenance_bg')):
    $maintenance_bg_fid = theme_get_setting('maintenance_bg');
    $maintenance_bg_img = file_create_url(file_load($maintenance_bg_fid)->uri);
  endif;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>
  <body class="bottom-nav accent <?php print $classes ?>"><div class="container-fluid">
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
    <nav id="main" style="">
      <div class="nav">
        <ul>
          <li>
            <a href="<?php print $base_path ?>">Refresh</a>
          </li>
          <li>
            <a class="transition" href="<?php print $base_path ?>?q=user">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="jumbotron">
    <div class="bg faded animated"<?php if (theme_get_setting('maintenance_bg')):?> style="background-image: url(<?php print $maintenance_bg_img; ?>);"<?php endif; ?>></div>
    <div class="row vcenter">
      <div class="col-md-6 col-md-offset-3 text-center">
        <?php if(theme_get_setting('maintenance_heading')): ?><h1><?php print (theme_get_setting('maintenance_heading')); ?></h1><?php endif; ?>
        <?php if(theme_get_setting('maintenance_subheading')): ?><label><?php print (theme_get_setting('maintenance_subheading')); ?></label><?php endif; ?>
        <?php if(theme_get_setting('maintenance_progress')): ?>
          <div class="progress">
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php print (theme_get_setting('maintenance_progress')); ?>" class="progress-bar progress-bar-success" role="progressbar" style="width: <?php print (theme_get_setting('maintenance_progress')); ?>%"></div>
          </div>
        <?php endif; ?>
        <p><?php print $content; ?></p>
      </div>
    </div>
  </section> 

  <?php if(theme_get_setting('copyright')): ?>
    <footer class="gray text-center">
      <div class="row">
        <div class="col-md-12">
          <div class="copy"><?php print (theme_get_setting('copyright')); ?></div>
        </div>
      </div>
    </footer>
  <?php endif; ?>

  <?php if ($messages): ?>
    <div id="messages">
      <?php print $messages; ?>
    </div><!-- /#messages -->
  <?php endif; ?>
  <?php print render($page['help']); ?>

  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/cocoon.preprocess.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/loader.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/jquery.mobile.custom.min.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/waypoints.min.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/jquery.placeholder.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/tera-lightbox.js"></script>
  <script type="text/javascript" src="<?php print $base_path . $path_to_theme; ?>/js/functions.js"></script>
  
  </div><!-- /.container-fluid --></body>
</html>