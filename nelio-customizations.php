<?php
/**
 * Plugin Name: Customizations
 * Description: Customizing WordPress
 * Version: 1.0.0
 * Author: Pau Adell
 */

defined( 'ABSPATH' ) or die( 'Get out!' );

/**
 * Changes admin's footer text.
 */

function filtrar_titol( $title ) {

  if ( is_single() ) {
    return '' . $title . ' <b><em>[Pau]</em></b>';
  } else {
    return '' . $title . '';
  }

}
add_filter( 'the_title', 'filtrar_titol' );


// Add more functions below.