<?php
$ids = (array) get_theme_mod( 'ths_featured_gallery_ids', array() );
$ids = array_slice( array_filter( array_map( 'intval', $ids ) ), 0, 4 );

$placeholders = array(
	'https://images.unsplash.com/photo-1605497788044-5a32c7078486?auto=format&fit=crop&w=900&q=70',
	'https://images.unsplash.com/photo-1633681926022-84c23e8cb2d6?auto=format&fit=crop&w=1200&q=70',
	'https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=1200&q=70',
	'https://images.unsplash.com/photo-1595475884562-073c30d45670?auto=format&fit=crop&w=900&q=70',
);

$urls = array();
foreach ( $ids as $i => $id ) {
	$src = wp_get_attachment_image_url( $id, 'large' );
	if ( $src ) { $urls[] = $src; }
}
while ( count( $urls ) < 4 ) {
	$urls[] = $placeholders[ count( $urls ) ];
}

$classes = array( 'gallery-feature__item--a', 'gallery-feature__item--b', 'gallery-feature__item--c', 'gallery-feature__item--d' );
$gallery_url = get_permalink( get_page_by_path( 'gallery' ) );
?>
<section class="section gallery-feature">
	<div class="container">
		<div class="gallery-feature__head reveal">
			<div>
				<span class="eyebrow"><?php esc_html_e( 'Recent Work', 'tanya-hair-salon' ); ?></span>
				<h2 class="h2"><?php esc_html_e( 'A few looks from the chair.', 'tanya-hair-salon' ); ?></h2>
			</div>
			<a href="<?php echo esc_url( $gallery_url ); ?>" class="link"><?php esc_html_e( 'View Full Gallery', 'tanya-hair-salon' ); ?> <span class="arrow">&rarr;</span></a>
		</div>
		<div class="gallery-feature__grid reveal">
			<?php foreach ( $urls as $i => $u ) : ?>
				<a class="gallery-feature__item <?php echo esc_attr( $classes[ $i ] ); ?>" href="<?php echo esc_url( $gallery_url ); ?>">
					<img src="<?php echo esc_url( $u ); ?>" alt="" loading="lazy" />
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
