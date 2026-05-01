<?php
/**
 * Trusted Brands — strip.
 * Pulls comma-separated names from theme mod `ths_brands`, falls back to defaults.
 */
$brands = get_theme_mod( 'ths_brands', 'Olaplex, K18, Davines, Kérastase, Wella' );
$brands = array_filter( array_map( 'trim', explode( ',', $brands ) ) );
?>
<section class="brands reveal">
	<div class="container brands__inner">
		<div class="brands__label"><?php esc_html_e( 'Trusted Products We Use & Sell', 'tanya-hair-salon' ); ?></div>
		<div class="brands__logos">
			<?php foreach ( $brands as $b ) : ?>
				<span class="brands__logo"><?php echo esc_html( $b ); ?></span>
			<?php endforeach; ?>
		</div>
	</div>
</section>
