<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * this page created base on https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comments
 *
 * @package WordPress
 * @subpackage Sinbadtrips
 * @since Sinbadtrips v.1.0
 */


  $fields =  array(
    'author' =>
      '<p class="comment-input"><label for="author">' . __( 'Name', 'domainreference' ) .
      ( $req ? '<span class="required">*</span>' : '' ) . '</label>' . '<br>' .
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' required /></p>',

    'email' =>
      '<p class=""><label for="email">' . __( 'Email', 'domainreference' ) .
      ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .'<br>' .
      '<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' required /></p>',

    'url' =>
      '<p class=""><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .'<br>' .
      '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></p>'
  );
  $arg = array (
    'label_submit' => 'Send',
    'title_reply'=>'Write Your Review',
      'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    'comment_field' =>  '<p class=""><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label>' . '<br>' . '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',
   

  );

  comment_form($arg);

 ?>
 <?php
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( 'There is One Review on "%2$s"', 'There is %1$s Review on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
 
</div><!-- #comments -->
    