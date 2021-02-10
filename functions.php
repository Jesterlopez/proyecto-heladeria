<?php
// function insertarphp ($atts) { include ( TEMPLATEPATH .'/productos.php'); }
// add_shortcode ('productos', 'insertarphp');
/* Desactivar wptexturize */
add_filter( 'run_wptexturize', '__return_false' );

add_theme_support( 'post-thumbnails' );
add_image_size('homepage-thumb', 570, 375, true);

register_nav_menus( array(
    'menu-top' => 'Menu Top',
    'menu-footer' => 'Menu Footer'
));
function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'links';
    return $classes;
  }
  // add_filter('nav_menu_css_class','add_classes_on_li',1,3);

// register_sidebar (array(
//     'name'              => 'Sidebar',
//     'before_widget'     => '<div id="sidebar"><div class="widget">',
//     'after_widget'      => '</div></div>',
//     'before_title'      => '<h3>',
//     'after_widget'      => '</h3>'

// ));
?>