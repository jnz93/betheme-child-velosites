<?php
/**
 * Twenty Nineteen functions and definitions
 * Velosites functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package betheme-child
 * @since 1.0.0
 */

/**
 * Enqueue scripts js on admin panel
 * 
 * @since 1.0.0
 */
function vs_enqueue_custom_scripts_admin()
{
    wp_enqueue_script( 'compass-io', 'https://fast.conpass.io/W_X6p87wgSMy.js', array(), '', false );
}
add_action( 'admin_enqueue_scripts', 'vs_enqueue_custom_scripts_admin' );