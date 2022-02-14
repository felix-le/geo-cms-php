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
  <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentonecustome/normalize.css')) ?>" >
  <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentonecustome/assets/bootstrap/css/bootstrap.min.css')) ?>" >
  <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentonecustome/style.css')) ?>" >
</head>
<body <?php body_class();?>>
  <header>
    <div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo esc_url(home_url());?>">  <img width="100" height="100"  src="<?php echo esc_url(home_url('wp-content/themes/assignmentonecustome/assets/images/logo.png')) ?>" alt="">
  My blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

<?php
wp_nav_menu(array(
  'theme_location' => '',
  'menu' => 'top-menu',
  'menu_class' => 'navbar-nav font-weight-extra-bold ml-auto',
  'container' => '',
  'li_class' => 'nav-item',
  'a_class' => 'nav-link',
  'active_class'=> 'active'
));
?>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  </header>
  <main>
  <div class="container">
