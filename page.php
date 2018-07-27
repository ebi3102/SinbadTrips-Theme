<?php
get_header();
if (have_posts()) :
		while (have_posts()): the_post(); ?>
	
	<article class="post page">	

		<h2><?php the_title(); ?></h2>
		<p class= "text"><?php the_content(); ?> </p>


	<!-- Display Child page into Parent Page Sinppet Code from
		https://y-designs.com/tutorials/wordpress-displaying-subpages-on-pages/-->	

<?php 	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
foreach( $mypages as $page ) {		 	
	$content = $page->post_content; 		
	
	if ( ! $content ) // Check for empty page 			
	continue;  		
	$content = apply_filters( 'the_content', $content ); 	?>

	 <?php echo get_the_post_thumbnail( $page->ID , 'sinbadtr-small' ); ?>
	  		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2> 	
	  			<div class="entry"><?php echo $content; ?></div>
	 <?php 	}	 ?>

	 <!-- end of Display Child page Sinppet Code -->


	</article>
	
<?php endwhile;

endif;

get_footer();
 ?>