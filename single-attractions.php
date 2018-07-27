<?php
get_header();
if (have_posts()) :
		while (have_posts()): the_post(); ?>

			<?php
			// these variables come from meta box
				$values = get_post_custom($post->ID); 
				$localName = $values['local-name'][0];
				$attType = $values['attType'][0];
				$centuryWhere = $values['centuryWhere'][0];
    			$century = $values['century'][0];
    			$bsAd = $values['bsAd'][0];
    			$openHr = $values['openHr'][0];
			    $stAm = $values['stAm'][0];
			    $endHr = $values['endHr'][0];
			    $endAm = $values['endAm'][0];
			    $localNameGlob = $values['local-name-glob'][0];

			?>	
				

			<header class="entry-header">

				<div><?php the_category(' > ' , 'multiple') ?></div>
            <h2><?php the_title(); ?></h2>  
          </header>

		<?php	if(has_post_thumbnail()) { ?>

			<div class="post-img"><?php the_post_thumbnail('sinbadtr-post'); ?></div><br>

			<article>
				<div>
					<p>This local name of this plase is <?php print($localName);  ?> an in English is <?php print($localNameGlob); ?></p>
					<p><?php the_title(); ?> is a <?php print ($attType) ?> </p>
					<p> This <?php print ($attType) ?> built in <?php print($centuryWhere) ?> of the <?php print($century . " " .$bsAd) ?> century </p>
					<p>the opening time of <?php the_title() ?> is <?php print($openHr. "  ". $stAm) ?> and it close at <?php print($endHr. "  ". $endAm) ?></p>


				</div>
			</article>	

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