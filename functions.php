<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function register_my_menus() {
  register_nav_menus(
    array(
      'social-menu' => __( 'Social Menu' ),
      'another-menu' => __( 'Another Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
 
if (! is_singular()) { 
     
$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
return $html;
 
} else { 
 
return $html;
 
}
 
}
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );

function arphabet_widgets_init() {
  register_sidebar( array(
    'name' 			=> 'Home Page Widgets',
	'id'				=> 'home_bottom_1',
    'before_widget' 	=> '<div>',
    'after_widget' 	=> '</div>',
    'before_title' 	=> '<h3>',
    'after_title' 	=> '</h3>',
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>