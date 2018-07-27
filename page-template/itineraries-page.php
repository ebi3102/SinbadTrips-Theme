<?php
/*
Template Name: Itineraries Page Layout
*/

get_header();
$args = array( 'post_type' => 'itineraries', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
if ( $the_query->have_posts() ) : 
while ( $the_query->have_posts() ) : $the_query->the_post();

	get_template_part('template-parts/content');

	wp_reset_postdata();
endwhile;
?>
		<div class="sin-clear"></div>
		<nav class="sin-pagination">
		<?php
		sin_pagination_nav(); ?>
		</nav>
		<?php
endif; 

get_footer();
 ?>