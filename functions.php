<?php

//__________________________ PATHS __________________________

    define('FILEPATH', get_template_directory());
    define('THEMEDIR',  get_bloginfo( 'template_url' ) );
    define('FRAMEWORK', get_template_directory().'/framework');
    define('DIRECTORY', get_template_directory_uri());
    define('IMG_DIRECTORY', get_template_directory_uri().'/images/');

    // Include Files
    require_once (FRAMEWORK . '/custom-post-type.php'); // Custom Post Type
    require_once (FRAMEWORK . '/metabox.php');  // Meta Box Library
    require_once (FRAMEWORK . '/meta-taxonomy.php');  // Meta Taxonomy Library
    require_once (FRAMEWORK . '/pagination.php');  // Pagination Library

function sinbadtrips_resources() {

// Load our main stylesheet.


	wp_enqueue_style('sinbadtrips-style' , get_stylesheet_uri());

}


add_action('wp_enqueue_scripts' , 'sinbadtrips_resources');




//theme setup
function sinbadtr_setup() {

//Navigation Menus
register_nav_menus(array(
	'primary' => __('Primary Menu') ,
	'footer' => __('Footer Menu')
	 ));

//__________________________ Thumbnail Premission __________________________
	add_theme_support( 'post-thumbnails' );
	
	add_image_size('sinbadtr-small', 310, 180, true);
	add_image_size('sinbadtr-post', 500, 500, true);

}

add_action('after_setup_theme', 'sinbadtr_setup' );


?>