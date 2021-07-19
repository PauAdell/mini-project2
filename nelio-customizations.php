<?php
/**
 * Plugin Name: Customizations
 * Description: Customizing WordPress
 * Version: 1.0.1
 * Author: Pau Adell
 */

defined( 'ABSPATH' ) or die( 'Get out!' );

function filtrar_titol( $title ) {

  if ( is_single() ) {
    return $title .' <b><em>[Pau]</em></b>';
  } else {
    return $title;
  }

}
add_filter( 'the_title', 'filtrar_titol' );

function imatge_final_entrada ( $content) {
  if ( is_single() && get_post_type() == 'post' ) {
    $image_url = untrailingslashit( plugin_dir_url(__FILE__) );
    $image_url .= "/images/gorgeous-winter-snow-wallpaper-44338-45459-hd-wallpapers.jpg";
    $content .='<img src="'.$image_url.'">';
  }
  return $content;
}
add_filter('the_content', 'imatge_final_entrada');