<?php
/**
 * Template Name: About
 *
 * @package Tanya_Hair_Salon
 */
get_header(); the_post(); ?>

<section class="page-hero container reveal">
	<span class="eyebrow"><?php esc_html_e( 'Our Story', 'tanya-hair-salon' ); ?></span>
	<h1 class="h-display"><?php the_title(); ?></h1>
</section>

<section class="section" style="padding-top:0;">
	<div class="container reveal" style="max-width:780px;">
		<?php the_content(); ?>
	</div>
</section>

<?php get_template_part( 'template-parts/visit-band' ); ?>
<?php get_template_part( 'template-parts/cta-banner' ); ?>
<?php get_footer();
