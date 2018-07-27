<?php
function sin_post_type() {

	//add Booking post_type
	// register_post_type('booking' ,
	// 	array(
	// 		'labels' => array(
	// 			'name' => __('Bookings'),
	// 			'add_new' =>  _x('Add New' , 'booking'),
	// 			'add_new_item' => __('Add New Booking'),
	// 			'all_items' => __('All Bookings')
	// 		),
	// 		'public' => true,
	// 		'has_archive' => true,
	// 		'menu_position' => 5,
	// 		'menu_icon' => 'dashicons-calendar-alt',
	// 		add_post_type_support('booking' ,
	// 			array(
	// 				'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions', 'thumbnail')
	// 		),
	// 		'taxonomies' => array(booking_category , post_tag),
	// 		'has_archive' => true,
	// 		'rewrite' => array(
	// 			'slug' => 'bookings',
	// 			'with_front' => true,
	// 			'feeds' => true,
	// 			'pages' => true,
	// 		),
	// 	)
	// );

	//add Itinerary post_type
	register_post_type('itineraries' ,
		array(
			'labels' => array(
				'name' => __('Itineraries'),
				'add_new' =>  _x('Add New' , 'itineraryies'),
				'add_new_item' => __('Add New Itinerary'),
				'all_items' => __('All Itineraries')
			),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-location',
			add_post_type_support('itineraries' ,
				array(
					'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions', 'thumbnail')
			),
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'itineraries',
				'with_front' => true,
				'feeds' => true,
				'pages' => true,
			),
		)
	);

	//add SlideShow post_type
		register_post_type('slideshows' ,
		array(
			'labels' => array(
				'name' => __('Slideshows'),
				'add_new' =>  _x('Add New' , 'slideshows'),
				'add_new_item' => __('Add New Slideshow'),
				'all_items' => __('All Slideshows')
			),
			'public' => true,
			'has_archive' => false,
			'show_ui' => true,
         	'capability_type' => 'post',
         	'hierarchical' => false,
			'menu_position' => 4,
			'menu_icon' => 'dashicons-format-gallery',
			add_post_type_support('slideshows' ,
				array('title', 'editor','thumbnail')
			),
			
			'rewrite' => array(
				'slug' => 'slideshows',
				'with_front' => true,
				'feeds' => true,
				'pages' => false,
			),
		)
	);

	//add Attraction post_type
		$attArg = array(
			'labels' => array(
				'name' => __('attractions'),
				'add_new' =>   _x('Add New' , 'attractions'),
				'add_new_item' => __('Add New Attraction'),
				'all_items' => __('All Attractions')
			),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-location',
			add_post_type_support('attractions' ,
				array(
					'title','editor','author','trackbacks','comments','revisions', 'thumbnail')
			),
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'attractions',
				'with_front' => true,
				'feeds' => true,
				'pages' => true,
			),
		);
		register_post_type('attractions' , $attArg);

}
add_action('init', 'sin_post_type');


//Remove Post type Support

add_action( 'init', 'my_custom_init' );
function my_custom_init() {
	remove_post_type_support( 'attractions', 'editor' );
}
 ?>