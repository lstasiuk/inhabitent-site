<?php
/**
 * The main template file.
 * Template Name: Home Page
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="front-background-image"> 
  <h1>Shop Stuff</h1>
  <h1>Inhabitent Journal</h1>
</p>
</div>

  <?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'numberposts' => 3 );
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
      <div class='journal-post'>
      <?php the_post_thumbnail();
      inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' );?>
      <a href='<?php the_permalink(); ?>'>
      <h2><?php the_title(); ?></h2>
      </a>
      <a class='read-entry' href='<?php the_permalink(); ?>'>READ ENTRY</a>

      </div>
 
       <?php endforeach; wp_reset_postdata(); ?>
     </div>





<?php get_sidebar(); ?>
<?php get_footer(); ?>

