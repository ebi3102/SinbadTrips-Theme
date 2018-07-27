<?php
get_header();
if (have_posts()) :
		while (have_posts()): the_post();
	
			get_template_part('template-parts/content');
		
		endwhile; ?>
		<div class="sin-clear"></div>
		<nav class="sin-pagination">
		<?php
		sin_pagination_nav(); ?>
		</nav>
		<?php
endif;

get_footer();
 ?>