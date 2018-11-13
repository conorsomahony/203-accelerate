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

<div id="primary" class="home-page hero-content">
	<div class="main-content" role="main">
		<?php while (have_posts()): the_post();?>
		<div class="about-hero-content site-content">
			<?php the_content();?>
		</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->



<section class="about-services">
	<div class="site-content">
		<div class="about-services-container">
			<div style="text-align: center; margin-bottom:50px;">
				<h3 style="text-transform:uppercase;">Our Services</h3>
				We take pride in our clients and the content we create for them.<br>
				Here are some of our services.
			</div>
			<?php query_posts('post_type=services&order=ASC');?>
			<?php while (have_posts()): the_post();
				$image = get_field("image_1");
				$size = "full";
				?>
				<div class="about-services-item">
					<div>
						<h1><?php the_title();?></h1>
						<p><?php the_content();?></p>
					</div>
					<figure>
						<?php echo wp_get_attachment_image($image, $size); ?>
					</figure>
				</div>
			<?php endwhile;?>
			<?php wp_reset_query();?>
		</div>
	</div>
</section>


<section class="about-work-for-us">
	<div class="site-content">
		<div class="work-for-us-wrapper">
			<div>
				<span style="font-weight:bold;">Interested in working with us?</span>
			</div>
			<div>
				<a id="contact-us-button" class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>