<?php
/**
 * Template Name: Contact
 *
 * @package Tanya_Hair_Salon
 */
get_header(); the_post(); ?>

<section class="page-hero container reveal">
	<span class="eyebrow"><?php esc_html_e( 'Get in Touch', 'tanya-hair-salon' ); ?></span>
	<h1 class="h-display"><?php the_title(); ?></h1>
	<?php if ( has_excerpt() ) : ?>
		<p class="lede"><?php the_excerpt(); ?></p>
	<?php else : ?>
		<p class="lede"><?php esc_html_e( 'Questions about a service, product recommendation, or planning a bridal trial? Send us a note — we usually reply within one business day. To book, the fastest way is online.', 'tanya-hair-salon' ); ?></p>
	<?php endif; ?>
</section>

<section class="section" style="padding-top:0;">
	<div class="container contact-grid reveal">

		<div>
			<span class="eyebrow"><?php esc_html_e( 'The Studio', 'tanya-hair-salon' ); ?></span>
			<h2 class="h2"><?php esc_html_e( 'Visit us in Austin Heights.', 'tanya-hair-salon' ); ?></h2>
			<p><?php esc_html_e( 'Free street parking out front, with additional lot parking behind the building. Two minutes from the Coquitlam Crunch trailhead.', 'tanya-hair-salon' ); ?></p>

			<dl class="contact-info">
				<div>
					<dt><?php esc_html_e( 'Address', 'tanya-hair-salon' ); ?></dt>
					<dd><?php echo esc_html( ths_option( 'address_line1' ) ); ?><br/><?php echo esc_html( ths_option( 'address_line2' ) ); ?></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Phone', 'tanya-hair-salon' ); ?></dt>
					<dd><a href="tel:<?php echo esc_attr( ths_option( 'phone_link' ) ); ?>"><?php echo esc_html( ths_option( 'phone' ) ); ?></a></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Email', 'tanya-hair-salon' ); ?></dt>
					<dd><a href="mailto:<?php echo esc_attr( ths_option( 'email' ) ); ?>"><?php echo esc_html( ths_option( 'email' ) ); ?></a></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Hours', 'tanya-hair-salon' ); ?></dt>
					<dd><?php echo esc_html( ths_option( 'hours_weekdays' ) ); ?><br/><?php echo esc_html( ths_option( 'hours_sunday' ) ); ?></dd>
				</div>
			</dl>
		</div>

		<div>
			<?php
			// Drop a Fluent Forms / WPForms shortcode in the page content.
			// e.g. [fluentform id="1"]   or   [wpforms id="123"]
			the_content();
			?>
		</div>

	</div>

	<div class="container">
		<div class="map-embed reveal">
			<iframe loading="lazy" allowfullscreen
				referrerpolicy="no-referrer-when-downgrade"
				src="https://www.google.com/maps?q=<?php echo rawurlencode( ths_option( 'address_line1' ) . ', ' . ths_option( 'address_line2' ) ); ?>&output=embed"
				title="<?php esc_attr_e( 'Map to the salon', 'tanya-hair-salon' ); ?>"></iframe>
		</div>
	</div>
</section>

<?php get_footer();
