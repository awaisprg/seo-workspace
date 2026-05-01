<?php
/**
 * Hero section.
 */
$hero_image = get_theme_mod( 'ths_hero_image', THS_URI . '/assets/images/hero.jpg' );
?>
<section class="hero">
	<div class="container hero__inner">
		<div class="hero__copy reveal">
			<span class="eyebrow"><?php esc_html_e( 'Tanya Hair Salon · Coquitlam', 'tanya-hair-salon' ); ?></span>
			<h1 class="h-display hero__title"><?php esc_html_e( 'Quietly confident hair, crafted with care.', 'tanya-hair-salon' ); ?></h1>
			<p class="lede hero__sub"><?php esc_html_e( 'A boutique salon in Austin Heights where great hair feels effortless — colour, cuts, and styling tailored to you.', 'tanya-hair-salon' ); ?></p>
			<div class="hero__actions">
				<a href="<?php echo esc_url( ths_option( 'booking_url' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Book an Appointment', 'tanya-hair-salon' ); ?> <span class="arrow">&rarr;</span></a>
				<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>" class="btn btn--ghost"><?php esc_html_e( 'Explore Services', 'tanya-hair-salon' ); ?></a>
			</div>
		</div>
		<figure class="hero__media reveal">
			<img src="<?php echo esc_url( $hero_image ); ?>" alt="<?php esc_attr_e( 'Soft, lived-in balayage', 'tanya-hair-salon' ); ?>" />
			<figcaption class="hero__caption"><?php esc_html_e( '— Lived-in balayage', 'tanya-hair-salon' ); ?></figcaption>
		</figure>
	</div>
</section>
