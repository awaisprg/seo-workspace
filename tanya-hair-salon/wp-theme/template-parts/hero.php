<?php
/**
 * Hero — full-bleed editorial.
 */
$hero_image = get_theme_mod( 'ths_hero_image', 'https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=2200&q=70' );
?>
<section class="hero">
	<div class="hero__bg">
		<img src="<?php echo esc_url( $hero_image ); ?>" alt="" />
	</div>
	<div class="container hero__inner reveal">
		<span class="eyebrow hero__eyebrow"><?php esc_html_e( 'Tanya Hair Salon · Coquitlam', 'tanya-hair-salon' ); ?></span>
		<h1 class="hero__title"><?php
			printf(
				/* translators: %s: italicized phrase */
				esc_html__( 'Quietly confident hair, %s', 'tanya-hair-salon' ),
				'<em>' . esc_html__( 'crafted with care.', 'tanya-hair-salon' ) . '</em>'
			);
		?></h1>
		<p class="hero__sub"><?php esc_html_e( 'A boutique salon in Austin Heights where great hair feels effortless — colour, cuts, and styling tailored to you.', 'tanya-hair-salon' ); ?></p>
		<div class="hero__actions">
			<a href="<?php echo esc_url( ths_option( 'booking_url' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Book an Appointment', 'tanya-hair-salon' ); ?> <span class="arrow">&rarr;</span></a>
			<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>" class="btn btn--ghost"><?php esc_html_e( 'Explore Services', 'tanya-hair-salon' ); ?></a>
		</div>
	</div>
	<div class="hero__meta" aria-hidden="true">
		<strong><?php esc_html_e( 'Austin Heights', 'tanya-hair-salon' ); ?></strong>
		<?php esc_html_e( 'Coquitlam · British Columbia', 'tanya-hair-salon' ); ?>
	</div>
</section>
