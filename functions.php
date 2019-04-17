<?php
/**
* @author Nerd Intelligence Agency
* @copyright 2019
**/

if (!defined('ABSPATH')) die();

//enque divi theme
function ideakit_ct_enqueue_parent() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ideakit_ct_enqueue_parent' );
