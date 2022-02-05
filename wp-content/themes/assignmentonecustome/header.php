<?php 
  /**
   * the header
   * this is the file that displays on every page
   */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentonecustome/assets/bootstrap/css/bootstrap.min.css')) ?>" >
</head>
<body <?php body_class();?>>
  <header class="row">
    <div class="col-sm-12 col-md-6 col-lg-8">
      <a href="<?php echo esc_url(home_url());?>">
      <img src="<?php echo esc_url(home_url('wp-content/themes/assignmentonecustome/assets/images/logo.png')) ?>" alt="">
    </a>
    </div>
  <nav class="col-sm-12 col-md-6 col-lg-4">
    <?php
      wp_nav_menu(array(
        'theme_location' => '',
        'container' => 'ul',
        'depth' => 2,
        'fallback_cb' => false,
      ));
    ?>
  </nav>
  </header>
 