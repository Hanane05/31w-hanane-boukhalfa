<?php

/**
 * 31w functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 31w
 */
if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mon_31w_setup()
{
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form'));
    add_theme_support('custom-background');
    
}
add_action('after_setup_theme', 'mon_31w_setup');
?>