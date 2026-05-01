<?php
/**
 * Template Name: Gallery
 *
 * Reads attachment IDs from the page's `_ths_gallery_ids` meta (comma-separated)
 * or from a Gutenberg gallery block in the post content.
 *
 * @package Tanya_Hair_Salon
 */
get_header(); the_post();

$ids_meta = get_post_meta( get_the_ID(), '_ths_gallery_ids', true );
$ids = array();
if ( $ids_meta ) {
	$ids = array_filter( array_map( 'intval', explode( ',', $ids_meta ) ) );
}
?>

<section class="page-hero container reveal">
	<span class="eyebrow"><?php esc_html_e( 'Gallery', 'tanya-hair-salon' ); ?></span>
	<h1 class="h-display"><?php the_title(); ?></h1>
	<?php if ( has_excerpt() ) : ?>
		<p class="lede"><?php the_excerpt(); ?></p>
	<?php endif; ?>
</section>

<section class="section" style="padding-top:0;">
	<div class="container reveal">
		<?php if ( $ids ) : ?>
			<div class="gallery-grid">
				<?php foreach ( $ids as $i => $id ) :
					$wide = ( 0 === $i % 5 ) ? ' gallery-grid__item--wide' : '';
					$src  = wp_get_attachment_image_url( $id, 'large' );
					$alt  = get_post_meta( $id, '_wp_attachment_image_alt', true );
					if ( ! $src ) { continue; }
					?>
					<a class="gallery-grid__item<?php echo esc_attr( $wide ); ?>" href="<?php echo esc_url( wp_get_attachment_image_url( $id, 'full' ) ); ?>">
						<img src="<?php echo esc_url( $src ); ?>" alt="<?php echo esc_attr( $alt ); ?>" loading="lazy" />
					</a>
				<?php endforeach; ?>
			</div>
		<?php else : ?>
			<?php the_content(); ?>
		<?php endif; ?>
	</div>
</section>

<?php get_template_part( 'template-parts/cta-banner' ); ?>
<?php get_footer();
