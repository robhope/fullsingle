<?php
/**
 * Template Name: FullSingle - Split
 * 
 * @package fullsingle
 * @version 0.5.2.4
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
	
	<?php fullsingle_indented_wp_head(); ?>

</head>

<body id="fullsingle" <?php body_class(); ?> > 

	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content() ?>

	<?php endwhile; ?>

<?php wp_footer(); ?>

</body>
</html>