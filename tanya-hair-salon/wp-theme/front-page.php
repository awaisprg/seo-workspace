<?php
/**
 * Front page (homepage) — assembled from template parts.
 *
 * @package Tanya_Hair_Salon
 */
get_header();
?>

<main>
	<?php
	get_template_part( 'template-parts/hero' );
	get_template_part( 'template-parts/intro-strip' );
	get_template_part( 'template-parts/services-preview' );
	get_template_part( 'template-parts/ritual' );
	get_template_part( 'template-parts/pull-quote' );
	get_template_part( 'template-parts/about-snippet' );
	get_template_part( 'template-parts/brands' );
	get_template_part( 'template-parts/gallery-feature' );
	get_template_part( 'template-parts/testimonials' );
	get_template_part( 'template-parts/visit-band' );
	get_template_part( 'template-parts/cta-banner' );
	?>
</main>

<?php
get_footer();
