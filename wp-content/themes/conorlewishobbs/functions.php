<?php

    /**
     * 
     *  Disable Gutenberg and enable Classic editor by default
     * 
     */
    add_filter('gutenberg_can_edit_post', '__return_false', 5);
    add_filter('use_block_editor_for_post', '__return_false', 5);


function conor_theme_support(){
    // add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme','conor_theme_support');

    function conor_menus(){

        $locations = array(
            'primary' => "Desktop primary top"
        );
    
        register_nav_menus($locations);
    }
    
    add_action('init','conor_menus');

function conor_register_styles(){
    // wp_enqueue_style('asd-support-form', get_template_directory_uri() . "/asd-support-form.css", array(), '1.0', 'all');
    wp_enqueue_style('conor-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    // wp_enqueue_style('conor-fonts1', "https://fonts.googleapis.com", array(), '1.0', 'all');
    // wp_enqueue_style('conor-fonts2', "https://fonts.gstatic.com", array(), '1.0', 'all');
    wp_enqueue_style('conor-googleFonts', "https://fonts.google.com/specimen/Lato", array(), '1.0', 'all');
    wp_enqueue_style('conor-googleFonts', "https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap", array(), 'all');
    wp_enqueue_style('conor-googleFonts', "https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap", array(), 'all');
}

function conor_register_scripts(){
    wp_enqueue_script('conor-main', get_template_directory_uri()."/assets/js/main.js", array(), '1.0, true');
}

add_action('wp_enqueue_scripts', 'conor_register_styles');

remove_filter( 'the_content', 'wpautop' );