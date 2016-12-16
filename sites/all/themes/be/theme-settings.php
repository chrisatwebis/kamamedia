<?php
function be_form_system_theme_settings_alter(&$form, &$form_state) {
  // Cocoon Options
  $form['cocoon_options'] = array(
      '#type' => 'vertical_tabs',
      '#title' => t('Cocoon Theme Options'),
      '#weight' => 0,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );
  // Cocoon Theme Skin Panel
  $form['cocoon_options']['cocoon_skin'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Cocoon Theme Skin'), 
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  // Cocoon Theme Skin Panel: Logo Settings
  $form['cocoon_options']['cocoon_skin']['logo_settings'] = array(
    '#type' => 'fieldset',
    '#title' => 'Logo Settings',
    '#description' => t('Upload light and dark logos for the theme header.'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  // Cocoon Theme Skin Panel: Logo Light
  $form['cocoon_options']['cocoon_skin']['logo_settings']['logo_light'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Logo Light'),
    '#description'   => t('Upload the light logo (white).'),
    '#required' => FALSE,
    '#upload_location' => 'public://be/logo',
    '#default_value' => theme_get_setting('logo_light'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  // Cocoon Theme Skin Panel: Logo Dark
  $form['cocoon_options']['cocoon_skin']['logo_settings']['logo_dark'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Logo Dark'),
    '#description'   => t('Upload the dark logo (black or navy blue).'),
    '#required' => FALSE,
    '#upload_location' => 'public://be/logo',
    '#default_value' => theme_get_setting('logo_dark'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  // Cocoon Theme Skin Panel: Logo Height
  $form['cocoon_options']['cocoon_skin']['logo_settings']['logo_height'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Logo Height'),
    '#default_value' => theme_get_setting('logo_height'),
    '#description'   => t("The height in pixels of the logo. The width will increase proportionately. Do not include 'px', just the numerical value, e.g: 14"),
  );
  // Cocoon Theme Skin Panel: 404 Background Image
  $form['cocoon_options']['cocoon_skin']['notfound_bg'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('404 Background Image'),
    '#description'   => t('Upload a background image for the 404 (not found) page.'),
    '#required' => FALSE,
    '#upload_location' => 'public://be/backgrounds',
    '#default_value' => theme_get_setting('notfound_bg'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  // Cocoon Theme Skin Panel: 403 Background Image
  $form['cocoon_options']['cocoon_skin']['accessdenied_bg'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('403 Page Background Image'),
    '#description'   => t('Upload a background image for the 403 (access denied) page.'),
    '#required' => FALSE,
    '#upload_location' => 'public://be/backgrounds',
    '#default_value' => theme_get_setting('accessdenied_bg'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  // Cocoon Theme Skin Panel: Custom CSS
  $form['cocoon_options']['cocoon_skin']['custom_css'] = array(
    '#type' => 'textarea', 
    '#title' => t('Custom CSS'), 
    '#description' => t('Specify custom CSS tags and styling to apply to the theme. You can also override default styles here.'),
    '#rows' => '5',
    '#default_value' => theme_get_setting('custom_css'),
  );
  // Cocoon Theme Features Panel
  $form['cocoon_options']['cocoon_features'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Cocoon Theme Features'), 
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  // Cocoon Theme Features Panel: Scroll To Top
  $form['cocoon_options']['cocoon_features']['to_top'] = array(
    '#type' => 'select',
    '#title' => t('Scroll To Top'),
    '#description' => t('Show scroll to top button?'),
    '#options' => array(
      0 => t('No'),
      1 => t('Yes'),
    ),
    '#default_value' => theme_get_setting('to_top'),
  );
  // Cocoon Theme Features: Copyright
  $form['cocoon_options']['cocoon_features']['copyright'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Copyright Message'),
    '#default_value' => theme_get_setting('copyright'),
    '#description'   => t("Copyright message to display in website footer."),
  );
  // Cocoon Maintenance Panel
  $form['cocoon_options']['cocoon_maintenance'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Cocoon Maintenance'), 
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  // Cocoon Maintenance: Background Image
  $form['cocoon_options']['cocoon_maintenance']['maintenance_bg'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Maintenance Page Background Image'),
    '#description'   => t('Upload a background image for the maintenance page.'),
    '#required' => FALSE,
    '#upload_location' => 'public://be/backgrounds',
    '#default_value' => theme_get_setting('maintenance_bg'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  // Cocoon Maintenance: Heading
  $form['cocoon_options']['cocoon_maintenance']['maintenance_heading'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Heading'),
    '#default_value' => theme_get_setting('maintenance_heading'),
    '#description'   => t("The main heading on the maintenance page."),
  );
  // Cocoon Maintenance: Sub-heading
  $form['cocoon_options']['cocoon_maintenance']['maintenance_subheading'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Sub-heading'),
    '#default_value' => theme_get_setting('maintenance_subheading'),
    '#description'   => t("The sub-heading on the maintenance page."),
  );
  // Cocoon Maintenance: Progress
  $form['cocoon_options']['cocoon_maintenance']['maintenance_progress'] = array(
    '#type' => 'select',
    '#title' => t('Complete'),
    '#description' => t('How far into maintenance are you?'),
    '#options' => array(
      '10' => t('10%'),
      '20' => t('20%'),
      '30' => t('30%'),
      '40' => t('40%'),
      '50' => t('50%'),
      '60' => t('60%'),
      '70' => t('70%'),
      '80' => t('80%'),
      '90' => t('90%'),
      '100' => t('100%'),
    ),
    '#default_value' => theme_get_setting('maintenance_progress'),
  );


  $form['cocoon_branding'] = array(
    '#prefix' => '<div class="cocoon-branding">',
    '#markup' => '<span>Created by Cocoon</span>',
    '#suffix' => '</div>',
    '#weight' => -100,
  );

  $path_to_theme = drupal_get_path('theme','be');
  $form['#attached'] = array(
    'css' => array(
      $path_to_theme . '/css/cocoon-theme-settings.css'
    ),
  );

  $form['cocoon_options']['drupal_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Drupal Core Settings'),
  );

  $form['cocoon_options']['drupal_settings']['theme_settings'] = $form['theme_settings'];
  //$form['cocoon_options']['cocoon_skin']['logo_settings']['logo'] = $form['logo'];
  $form['cocoon_options']['drupal_settings']['favicon'] = $form['favicon'];
  unset($form['theme_settings']);
  unset($form['logo']);
  unset($form['favicon']);

  $form['#submit'][] = 'be_settings_form_submit';

  // Get all themes.
  $themes = list_themes();

  // Get the current theme
  $active_theme = $GLOBALS['theme_key'];
  $form_state['build_info']['files'][] = str_replace("/$active_theme.info", '', $themes[$active_theme]->filename) . '/theme-settings.php';

}
function be_settings_form_submit(&$form, $form_state) {

  $logo_light_image_fid = $form_state['values']['logo_light'];
  $logo_light_image = file_load($logo_light_image_fid);
  if (is_object($logo_light_image)) {
    // Check to make sure that the file is set to be permanent.
    if ($logo_light_image->status == 0) {
      // Update the status.
      $logo_light_image->status = FILE_STATUS_PERMANENT;
      // Save the update.
      file_save($logo_light_image);
      // Add a reference to prevent warnings.
      file_usage_add($logo_light_image, 'be', 'theme', 1);
    }
  }

  $logo_dark_image_fid = $form_state['values']['logo_dark'];
  $logo_dark_image = file_load($logo_dark_image_fid);
  if (is_object($logo_dark_image)) {
    // Check to make sure that the file is set to be permanent.
    if ($logo_dark_image->status == 0) {
      // Update the status.
      $logo_dark_image->status = FILE_STATUS_PERMANENT;
      // Save the update.
      file_save($logo_dark_image);
      // Add a reference to prevent warnings.
      file_usage_add($logo_dark_image, 'be', 'theme', 1);
    }
  }

  $notfound_bg_image_fid = $form_state['values']['notfound_bg'];
  $notfound_bg_image = file_load($notfound_bg_image_fid);
  if (is_object($notfound_bg_image)) {
    // Check to make sure that the file is set to be permanent.
    if ($notfound_bg_image->status == 0) {
      // Update the status.
      $notfound_bg_image->status = FILE_STATUS_PERMANENT;
      // Save the update.
      file_save($notfound_bg_image);
      // Add a reference to prevent warnings.
      file_usage_add($notfound_bg_image, 'be', 'theme', 1);
    }
  }

  $accessdenied_bg_image_fid = $form_state['values']['accessdenied_bg'];
  $accessdenied_bg_image = file_load($accessdenied_bg_image_fid);
  if (is_object($accessdenied_bg_image)) {
    // Check to make sure that the file is set to be permanent.
    if ($accessdenied_bg_image->status == 0) {
      // Update the status.
      $accessdenied_bg_image->status = FILE_STATUS_PERMANENT;
      // Save the update.
      file_save($accessdenied_bg_image);
      // Add a reference to prevent warnings.
      file_usage_add($accessdenied_bg_image, 'be', 'theme', 1);
    }
  }

  $maintenance_bg_image_fid = $form_state['values']['maintenance_bg'];
  $maintenance_bg_image = file_load($maintenance_bg_image_fid);
  if (is_object($maintenance_bg_image)) {
    // Check to make sure that the file is set to be permanent.
    if ($maintenance_bg_image->status == 0) {
      // Update the status.
      $maintenance_bg_image->status = FILE_STATUS_PERMANENT;
      // Save the update.
      file_save($maintenance_bg_image);
      // Add a reference to prevent warnings.
      file_usage_add($maintenance_bg_image, 'be', 'theme', 1);
    }
  }

}

?>