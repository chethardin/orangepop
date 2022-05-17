<?php
/**
 * Orange Pop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Orange_Pop
 * @since Orange Pop 1.0
 */

define('VERSION', '1.0');


function prefix_block_styles() {
    wp_enqueue_style( 'prefix-editor-font', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,400;1,600&display=swap');
}
    
add_action( 'enqueue_block_editor_assets', 'prefix_block_styles' );

add_action( 'wp_enqueue_scripts', 'orange_pop_enqueue_styles' );
function orange_pop_enqueue_styles() {
    wp_enqueue_style( 'orange-pop-styles', get_stylesheet_directory_uri().'/assets/styles/orange-pop-styles.min.css',
        array( 'orangepop-style' ), 
       '1.0'
    );
}

/**
 * Registers support for editor styles & Enqueue it.
 */
function orange_pop_styles_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'orange_pop_styles_setup' );


/**
 * Disable the custom color picker.
 */
function tabor_gutenberg_disable_custom_colors() {
	add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'tabor_gutenberg_disable_custom_colors' );