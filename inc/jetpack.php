<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package cabana
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function cabana_jetpack_setup() {
  add_theme_support('infinite-scroll', array(
    'container' => 'main',
    'footer'    => 'page',
  ));
}

add_action('after_setup_theme', 'cabana_jetpack_setup');
