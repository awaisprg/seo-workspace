<?php
/**
 * Template Name: Services
 *
 * @package Tanya_Hair_Salon
 */
get_header();

$services = get_posts( array(
	'post_type'      => 'service',
	'posts_per_page' => -1,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
) );

$fallback = array(
	array( 'haircut',    'Haircut',          'Precision cuts shaped to your face, hair texture, and lifestyle. Includes a wash, scalp massage, and finishing style.', 'From $65' ),
	array( 'color',      'Hair Color',       'Lived-in balayage, dimensional highlights, and rich single-process colour — finished with toner and a hydrating treatment.', 'From $140' ),
	array( 'brows',      'Eyebrow Services', 'Shaping, tinting, and tidy-ups that frame your features beautifully. Threading and waxing both available.', 'From $20' ),
	array( 'styling',    'Hair Styling',     'Blowouts, updos, and event styling for weddings, photoshoots, and big nights — built to hold from morning to last dance.', 'From $55' ),
	array( 'makeup',     'Makeup',           'Soft, polished makeup for weddings, photoshoots, and special occasions — natural, long-wearing, and beautifully photographed.', 'From $85' ),
	array( 'treatments', 'Hair Treatments',  'Restorative care for shine, strength, and softness from root to ends — Olaplex, K18, and bespoke deep conditioning.', 'From $40' ),
);
?>

<section class="page-hero container reveal">
	<span class="eyebrow"><?php esc_html_e( 'Services', 'tanya-hair-salon' ); ?></span>
	<h1 class="h-display"><?php esc_html_e( 'Considered care, from cut to finish.', 'tanya-hair-salon' ); ?></h1>
	<p class="lede"><?php esc_html_e( 'Pricing starts from the figures below — final quote depends on hair length, density, and the time required. New colour clients always get a complimentary consultation.', 'tanya-hair-salon' ); ?></p>
</section>

<section class="section" style="padding-top:0;">
	<div class="container reveal">
		<div class="services-list">
			<?php
			$i = 0;
			if ( $services ) :
				foreach ( $services as $svc ) :
					$i++;
					$price = get_post_meta( $svc->ID, '_ths_price', true );
					?>
					<article id="<?php echo esc_attr( $svc->post_name ); ?>" class="services-list__row">
						<div class="services-list__num"><?php echo esc_html( str_pad( $i, 2, '0', STR_PAD_LEFT ) ); ?></div>
						<h3 class="services-list__title"><?php echo esc_html( get_the_title( $svc ) ); ?></h3>
						<p class="services-list__desc"><?php echo esc_html( get_the_excerpt( $svc ) ); ?></p>
						<a href="<?php echo esc_url( ths_option( 'booking_url' ) ); ?>" class="services-list__cta link"><?php echo esc_html( $price ?: __( 'Book', 'tanya-hair-salon' ) ); ?> <span class="arrow">&rarr;</span></a>
					</article>
					<?php
				endforeach;
			else :
				foreach ( $fallback as $row ) :
					$i++;
					?>
					<article id="<?php echo esc_attr( $row[0] ); ?>" class="services-list__row">
						<div class="services-list__num"><?php echo esc_html( str_pad( $i, 2, '0', STR_PAD_LEFT ) ); ?></div>
						<h3 class="services-list__title"><?php echo esc_html( $row[1] ); ?></h3>
						<p class="services-list__desc"><?php echo esc_html( $row[2] ); ?></p>
						<a href="<?php echo esc_url( ths_option( 'booking_url' ) ); ?>" class="services-list__cta link"><?php echo esc_html( $row[3] ); ?> <span class="arrow">&rarr;</span></a>
					</article>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/cta-banner' ); ?>
<?php get_footer();
