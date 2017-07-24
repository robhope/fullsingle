<?php
/**
 * Template Name: FullSingle - Vitae
 * 
 * @package fullsingle
 * @since fullsingle 0.1.1
 * @license GPL 2.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- Responsive stylesheet -->
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> > 

	<div id="fullsingle">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content() ?>

		<?php endwhile; ?>

	</div><!-- / #fullsingle -->

<?php wp_footer(); ?>

</body>
</html>