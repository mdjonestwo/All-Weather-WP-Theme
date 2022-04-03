<?php

    function weather_files(){ 
        wp_enqueue_style('weather_style', get_theme_file_uri('./css/main.css'));
    }

    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails');
        add_post_type_support('page', 'excerpt');
    }

    add_action( 'after_setup_theme', 
    'mytheme_post_thumbnails');

    // function garden_features(){
    //     register_nav_menu('headerMenuLocation', 'Header Menu Lcoation');
    //     register_nav_menu('footerMenuLocation', 'Footer Menu Lcoation');
    //     add_theme_support('title-tag');
    // }

    add_action( 'wp_enqueue_scripts', 'weather_files');
    // add_action('after_setup_theme', 'garden_features'); 

    require get_stylesheet_directory() . "/inc/allweather-customizer.php";
    new AllWeather_Customizer();

    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_1',
            'title' => 'Extras',
            'fields' => array (
                array (
                    'key' => 'field_1',
                    'label' => 'About Image',
                    'name' => 'about_image',
                    'type' => 'Image',
                )
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'default template',
                    ),
                ),
            ),
        ));
        
        endif;
    