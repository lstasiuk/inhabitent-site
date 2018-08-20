<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
      <div class="products-container">

      <?php while ( have_posts() ) : the_post(); ?>

				<div class="products">
			<a href="<?php the_permalink();?>">	<?php	the_post_thumbnail();?></a> <div class="product-title">
				<h5><?php the_title(); ?></h5><p><?php echo CFS()->get("price");?></p></div>
				
		</div>

			<?php endwhile; ?>
</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>



