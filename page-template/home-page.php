<?php

/*
Template Name: Home Page Layout
*/

get_header(); ?>

	<?php



    //the last three of itineraries loop begin


$itiArgs = array( 'post_type' => 'itineraries', 'posts_per_page' => 4 );
$the_itiQuery = new WP_Query( $itiArgs ); 
if ( $the_itiQuery->have_posts() ) : 
while ( $the_itiQuery->have_posts() ) : $the_itiQuery->the_post();

	get_template_part('template-parts/content');

	wp_reset_postdata();
endwhile;
endif; ?>
<div class="sin-clear"></div>

<div class="read-more"><a href="http://sinbadtrips.com/itineraries/" > Read More</a></div>

<?php
get_footer();
 ?>