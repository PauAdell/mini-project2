<?php
/**
 * Plugin Name: Customizations
 * Plugin URI: https://neliosoftware.com
 * Description: Customizing WordPress
 * Version: 1.0.0
 * Author: David Aguilera
 * Author URI: https://neliosoftware.com
 */

defined( 'ABSPATH' ) or die( 'Get out!' );

/**
 * Changes admin's footer text.
 */
function nelio_custom_text_in_footer_admin() {
  return 'Thanks for contributing to Nelio!';
}//end nelio_custom_text_in_footer_admin()
add_action( 'admin_footer_text', 'nelio_custom_text_in_footer_admin' );

// Add more functions below.