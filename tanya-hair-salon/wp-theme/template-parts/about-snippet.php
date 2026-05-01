<?php
$about_image = get_theme_mod( 'ths_about_image', THS_URI . '/assets/images/about.jpg' );
$about_url   = get_permalink( get_page_by_path( 'about' ) );
?>
<section class="section about-snippet">
	<div class="container about-snippet__inner">
		<figure class="about-snippet__media reveal">
			<img src="<?php echo esc_url( $about_image ); ?>" alt="<?php esc_attr_e( 'Inside the studio', 'tanya-hair-salon' ); ?>" />
		</figure>
		<div class="about-snippet__body reveal">
			<span class="eyebrow"><?php esc_html_e( 'About the Salon', 'tanya-hair-salon' ); ?></span>
			<h2 class="h2"><?php esc_html_e( 'A small studio with a careful hand.', 'tanya-hair-salon' ); ?></h2>
			<p><?php esc_html_e( 'Tucked into Austin Heights in Coquitlam, TANYA HAIR SALON is a quiet, considered space dedicated to one thing — making you feel like the most polished version of yourself. From a fresh trim to a full colour transformation, every appointment is unhurried, personal, and finished with care.', 'tanya-hair-salon' ); ?></p>
			<a href="<?php echo esc_url( $about_url ); ?>" class="link"><?php esc_html_e( 'Our Story', 'tanya-hair-salon' ); ?> <span class="arrow">&rarr;</span></a>
		</div>
	</div>
</section>
