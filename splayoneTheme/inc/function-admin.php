<!-- Customized Admin Page: Specifically for the admin page -->
<?php

/*
@package splayoneTheme
====================
ADMIN PAGE
====================
*/

function splayone_add_admin_page()
{
    $page_title = 'Splayone Theme Options';
    $menu_title = 'Splayone';
    $capability = 'manage_options';
    $menu_slug = 'splay_menu';
    $callback = 'splay_theme_create_page';
    $icon = 'dashicons-admin-customizer';
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $callback, $icon);
    add_submenu_page($menu_slug, 'Splay One Settings', 'General', $capability, $menu_slug, $callback);
    add_submenu_page($menu_slug, 'Splay One CSS', 'Custom CSS', $capability, 'splay_menu_css', 'splay_theme_settings_page');
    add_action('admin_init', 'splay_custom_settings');
}
add_action('admin_menu', 'splayone_add_admin_page');


function splay_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/splay-admin.php');
}

function splay_theme_settings_page() {
    //generate code
    echo '<h1>Splay Custom CSS</h1>';
}

?>