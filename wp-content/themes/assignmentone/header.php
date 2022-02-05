<?php
  /**
   * The header for our theme.
   * This is the file that displays the top part of the page.
   */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset = "<?php bloginfo('charset'); ?>">
  <meta name = "viewport" content = "width=device-width, initial-scale=1">
  <?php wp_head();?>

  <!-- add other files -->
  <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentone/assets/ventor/bootstrap/css/bootstrap.min.css')) ?>">

  <!-- link to custom css file once made -->
  <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentone/assets/css/custom-css.css')) ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<?php
	header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	?>
	<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
</head>
<body <?php body_class();?>>
<header class = "row">
  <div class="col-sm-12 col-md-6 col-lg-8">
    <a href = "<?php echo esc_url(home_url('')); ?>">
      <img src = "<?php echo esc_url(home_url('wp-content/uploads/2022/01/logo.png')); ?>" alt = "logo" class = "logo">
  </div>
  </header>
  <nav class="col-sm-12 col-md-6 col-lg-4">
    <?php
      wp_nav_menu(array(
        'menu' => 'main',
        'theme_location' => '',
        'depth' => 2,
        'fallback_cb' => false,
        'container' => 'ul',
        'menu_class' => 'class-menu'
      ));
    ?>
  </nav>
  <!-- wp-content/themes/assignmentone/assets/ventor/bootstrap/js/bootstrap.min.js -->


  