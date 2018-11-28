<?php

/*add_action( 'wp_enqueue_scripts', 'allegri_scripts' );
function allegri_scripts() {

}*/

add_action('wp_head', 'boilerplate_ajax_url');
function boilerplate_ajax_url() {
    echo '<script type="text/javascript">var ajaxurl = "' . admin_url('admin-ajax.php') . '"</script>';
}

add_theme_support( 'post-thumbnails' );

function boilerplate_register_menus() {
    $menus = array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
    );
    register_nav_menus($menus);
}

add_action( 'init', 'boilerplate_register_menus' ) ;

add_filter('show_admin_bar', '__return_false');


/* Add SVG Support */
function boilerplate_cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'boilerplate_cc_mime_types');

function boilerplate_fix_svg_thumb_display() {
    echo '
    <style>
    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
      width: 100% !important; 
      height: auto !important; 
    }
    </style>
  ';
}
add_action('admin_head', 'boilerplate_fix_svg_thumb_display');

