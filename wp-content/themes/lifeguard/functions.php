<?php
register_nav_menus(
    array('primary-menu'=>'Top Menu')
);
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
function custom_active_menu_class($classes, $item) {
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'current'; // Add your custom class here
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'custom_active_menu_class', 10, 2);    
?>