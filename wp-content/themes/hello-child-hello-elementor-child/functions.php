<?php 
/* Child theme generated with WPS Child Theme Generator */
            
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
    }
}


function display_product_gallery() {
    if (function_exists('get_field')) {
        $gallery_images = get_field('product_image');

        if ($gallery_images) {
            echo '<div class="product-gallery">';
            foreach ($gallery_images as $image) {
                // Add 'class' and 'data-rel' attributes for Simple Lightbox
                echo '<a href="' . esc_url($image['url']) . '" class="simple-lightbox" data-rel="product-gallery">';
                echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                echo '</a>';
            }
            echo '</div>';
        } else {
            echo 'No images found.';
        }
    } else {
        echo 'ACF Pro is not active.';
    }
}
add_shortcode('product_gallery', 'display_product_gallery');

