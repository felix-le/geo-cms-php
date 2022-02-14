<?php
add_theme_support('menus');
register_nav_menus(array(
  'top-menu' => 'Top Menu',
  'footer-menu' => 'Footer Menu'
));
function add_class_li($classes, $item, $args) {
  if(isset($args->li_class)) {
    $classes[] = $args->li_class;
  }
  if(isset($args->active_class) && in_array('current-menu-item', $classes)){
    $classes[] = $args->active_class;
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'add_class_li', 10, 3);

function add_anchor_class($atts, $item, $args) {
  if(isset($args->a_class)) {
    $atts['class'] = $args->a_class;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);
