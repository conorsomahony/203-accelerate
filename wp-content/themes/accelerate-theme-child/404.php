<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header();?>

<div class="site-content page-404">
	<h1>404!!! Whatever You Are Looking For Is Not Here!!!</h1>
	<h3>While you're here - check out this cool 404 page I found...</h3>
	<p>
		<img src="<?php echo get_stylesheet_directory_uri();?>/img/Skillcrush203_404pg.jpg" />
	</p>
</div>

<?php get_footer();?>