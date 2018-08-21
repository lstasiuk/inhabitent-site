<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>
<section class="product-single">

<div class="product-images">
			<?php the_post_thumbnail( ); ?>
</div>

<div class="product-content">
		<h2><?php the_title( );?></h2>
   <?php echo CFS()->get( 'price' );?>
		<?php the_content(); ?>
		 </div>

</section>

		<?php endwhile; // End of the loop. ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
