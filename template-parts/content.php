<?php
/**
 * The template part for displaying in Archive
 *
 * @package Sinbadtrips Theme
 * @subpackage sin
 * @since 1.0
 */
?>
  <div id="post-<?php the_ID(); ?>">
    
      <div class="sin-box"><a href="<?php the_permalink(); ?>">
          <div class="sin-image">
            <?php 
              if(has_post_thumbnail()) { 
                the_post_thumbnail('sinbadtr-small'); 
              }
            ?>
            

          </div> 
          <div class="sin-text">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
          </a>
    <!-- <div class="clearfix"></div> -->
  </div>
      