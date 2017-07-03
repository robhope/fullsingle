<?php
/**
 * Template Name: FullSingle - Vitae
 * 
 * @package fullsingle
 * @since fullsingle 0.0.1
 * @license GPL 2.0
 * 
 */
?>

<?php get_header(); ?>

<h1>Vitae</h1>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1>Vitae</h1>

		<?php the_content();?>

	<?php endwhile; else: ?>

		 <p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

<?php get_footer(); ?>