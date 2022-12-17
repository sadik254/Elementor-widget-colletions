<?php
/**
 * Plugin Name: Elementor Widget Collections
 * Description: Multiple Widget Collection for Elementor by Zufaa.
 * Plugin URI: https://zufaa.com
 * Version:     0.0.3
 * Author:      Saleh Sadik
 * Author URI:  https://facebook.com/sadik254
 * Text Domain: elementor-button-zufaa
 */

 function register_elementor_button_zufaa( $widgets_manager){

    require_once(__DIR__ . '/widgets/button.php'); //Including the Widget File
    // require_once(__DIR__ . '/widgets/');

    $widgets_manager->register(new \Elementor_Button_zufaa()); //Register The Widget
 }

add_action('elementor/widgets/register', 'register_elementor_button_zufaa');


function register_elementor_header_zufaa( $widgets_manager){

   require_once(__DIR__ . '/widgets/heading.php'); //Including the Widget File

   $widgets_manager->register(new \Elementor_Header_Zufaa()); //Register The Widget
}

add_action('elementor/widgets/register', 'register_elementor_header_zufaa');
