<?php
get_header();

if (have_posts()) :
		while (have_posts()): the_post(); ?>

			<header class="entry-header">

				<div><?php the_category(' > ' , 'multiple') ?></div>
            <h2><?php the_title(); ?></h2>  
          </header>

		
		<?php	if(has_post_thumbnail()) { ?>

			<div class="post-img"><?php the_post_thumbnail('sinbadtr-post'); ?></div><br>


		<?php
              
            } ?>

        <div class="post-body"><?php the_content(); ?></div>
        <?php
		endwhile;
endif;?>



<hr><br>

<?php comments_template(); ?>
<?php
get_footer();
 ?>