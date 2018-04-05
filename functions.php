<?php

//Registrace menu
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Hlavní Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Aktivace thumbnailu
add_theme_support( 'post-thumbnails' );

// Odstraneni pevne velikosti thumbnailu
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

//Nejnovejsi prispevek
function wpa_latest_in_category_redirect( $request ){
    if( isset( $_GET['latest'] )
        && isset( $request->query_vars['category_name'] ) ){

        $latest = new WP_Query( array(
            'category_name' => $request->query_vars['category_name'],
            'posts_per_page' => 1
        ) );
        if( $latest->have_posts() ){
            wp_redirect( get_permalink( $latest->post->ID ) );
            exit;
        }

    }
}
add_action( 'parse_request', 'wpa_latest_in_category_redirect' );