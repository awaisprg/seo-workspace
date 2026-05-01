<?php
/**
 * Default fallback template — blog index / archive.
 *
 * @package Tanya_Hair_Salon
 */
get_header(); ?>

<section class="page-hero container">
	<span class="eyebrow"><?php esc_html_e( 'Journal', 'tanya-hair-salon' ); ?></span>
	<h1 class="h-display"><?php esc_html_e( 'Notes from the studio.', 'tanya-hair-salon' ); ?></h1>
</section>

<section class="section" style="padding-top:0;">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="services-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="services-list__row">
						<div class="services-list__num"><?php echo esc_html( get_the_date( 'M j' ) ); ?></div>
						<h3 class="services-list__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="services-list__desc"><?php echo esc_html( get_the_excerpt() ); ?></p>
						<a href="<?php the_permalink(); ?>" class="services-list__cta link"><?php esc_html_e( 'Read', 'tanya-hair-salon' ); ?> <span class="arrow">&rarr;</span></a>
					</article>
				<?php endwhile; ?>
			</div>
			<div style="margin-top:48px;"><?php the_posts_pagination(); ?></div>
		<?php else : ?>
			<p class="lede"><?php esc_html_e( 'Nothing here yet.', 'tanya-hair-salon' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer();
