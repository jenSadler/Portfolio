<?php
add_image_size( 'jen-thumbnail', 1000 , 550, true );
add_image_size('jen-thumbnail-small', 400,220,true);
add_image_size('oev-nav-image', 200,110,true);

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-nav-menu' => __( 'Main Navigation Menu' ),
      'footer-nav'=>__('Footer - List of Pages'),
      'footer-social'=>__('Footer - Social Icons'),
      'footer-extra'=>__('Footer -Other Links'),
    )
  );
}


function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
}

add_action( 'init', 'wpb_custom_new_menu' );
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );

function get_category_desc_by_id( $category_id ) {
	
    $term = get_term_by( 'id', $category_id, 'product_cat', 'ARRAY_A' );
    echo $term['description'];
}

function get_category_name_by_id( $category_id ) {
	
    $term = get_term_by( 'id', $category_id, 'product_cat', 'ARRAY_A' );
    echo $term['name'];
}



?>