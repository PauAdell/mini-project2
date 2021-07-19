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
    return $title .'<b><em>[Pau]</em></b>';
  } else {
    return $title;
  }

}
add_filter( 'the_title', 'filtrar_titol' );

function imatge_final_entrada ( $content) {
  if ( is_single() ) {
    $content .='<img src="/wp-content/uploads/2021/07/gorgeous-winter-snow-wallpaper-44338-45459-hd-wallpapers-150x150.jpg">';
  }
  return $content;
}
add_filter('the_content', 'imatge_final_entrada');