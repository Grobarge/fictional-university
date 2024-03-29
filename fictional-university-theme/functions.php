<?php

// wp_enqueue_script('custom name for script', function('javascript file'), does this script have any dependancys?, 'version of code' set true if want to load after header for better preformance);
// microtime() - this will disable cashing for the specific file, used in development to speed up processes and have things force reload when we refresh page. 


function university_files()
{
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), null, '1.0', true);

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');
