<?php
/**
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class='hero-banner'>

  </div>

  <h3>Shop Stuff</h3>

<section class="taxonomy-sections">

<?php
  $terms = array( 'taxonomy' => 'product_type', 'hide_empty' => false);
   $shop_stuff = get_terms( $terms );


   foreach ( $shop_stuff as $term ): ?>
   <div id="shopping">
   
   <img class="icon" src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->name ?>.svg" alt="product type icons">
     <p> <?php echo $term->description; ?> </p>
     <a href='<?php echo get_term_link( $term ); ?>'>
      <p class='button'> <?php echo $term->name; ?> Stuff </p>
       </a>
</div>

 <?php endforeach; ?>

</section>

  <h3>Inhabitent Journal</h3>

<section class="journals">

<?php
   $args = array( 'post_type' => 'post', 'order' => 'DESC', 'numberposts' => 3 );
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
      <div class='journal-post'>
      <?php the_post_thumbnail('large');?>
      <?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' );?>
      <a href='<?php the_permalink(); ?>'>
      <h2><?php the_title(); ?></h2>
      </a>
      <a id='read-entry' href='<?php the_permalink(); ?>'>Read Entry</a>

      </div>

<?php endforeach; wp_reset_postdata(); ?>

</section>

<h3>Latest Adventures</h3>

<section class="adventure-posts">
  
<div class="button-canoe">

<div class="canoe">
  <a>
<h2>Getting Back to Nature in a Canoe</h2>
</a>
<a id='read-entry1' href='<?php the_permalink(); ?>'>Read More</a>
</div>

<a id='button' href='<?php the_permalink(); ?>'>More Adventures</a>
</div>

<div class="beach">

<div class="beach-friends">
  <a>
<h2>A Night with Friends at the Beach</h2>
</a>
<a id='read-entry1' href='<?php the_permalink(); ?>'>Read More</a>
</div>

<div class="mountain">
  <a>
<h2>Taking in the View at Big Mountain</h2>
</a>
<a id='read-entry1' href='<?php the_permalink(); ?>'>Read More</a>
</div>

<div class="night-sky">
  <a>
<h2>Star-Gazing at the Night Sky</h2>
</a>
<a id='entries' href='<?php the_permalink(); ?>'>Read More</a>
</div>

</div>

</section>

<?php get_footer(); ?>






