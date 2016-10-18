<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


/* LICENCIA CC **********************************************************************/

add_action( 'colormag_footer_copyright', 'colormag_footer_copyright', 10 );
/**
 * function to show the footer info, copyright information
 */
if ( ! function_exists( 'colormag_footer_copyright' ) ) :
function colormag_footer_copyright() {
   $site_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';

   $wp_link = '<a href="http://wordpress.org" target="_blank" title="' . esc_attr__( 'WordPress', 'colormag' ) . '"><span>' . __( 'WordPress', 'colormag' ) . '</span></a>';

   $tg_link =  '<a href="http://themegrill.com/themes/colormag" target="_blank" title="'.esc_attr__( 'ThemeGrill', 'colormag' ).'" rel="designer"><span>'.__( 'ThemeGrill', 'colormag') .'</span></a>';

   $default_footer_value = sprintf( __( 'Copyright Creative Commons 4.0 by-sa; %1$s %2$s. Se permite la libre utilización de todos los contenidos manteniendo los términos de esta licencia.', 'colormag' ), date( 'Y' ), $site_link );

   $colormag_footer_copyright = '<div class="copyright">'.$default_footer_value.'</div>';
   echo $colormag_footer_copyright;
}
endif;

/**************************************************************************************/
