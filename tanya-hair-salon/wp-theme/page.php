<?php
/**
 * Default page template
 *
 * @package Tanya_Hair_Salon
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="page-hero container reveal">
		<span class="eyebrow"><?php bloginfo( 'name' ); ?></span>
		<h1 class="h-display"><?php the_title(); ?></h1>
	</section>

	<section class="section" style="padding-top:0;">
		<div class="container reveal" style="max-width:780px;">
			<?php the_content(); ?>
		</div>
	</section>
<?php endwhile; ?>

<?php get_template_part( 'template-parts/cta-banner' ); ?>
<?php get_footer();
