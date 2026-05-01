<?php
/**
 * Services preview — pulls the first 6 published Service CPT entries,
 * falls back to hard-coded list if none exist yet.
 */

$services = get_posts( array(
	'post_type'      => 'service',
	'posts_per_page' => 6,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
) );

$fallback = array(
	array( 'Haircut',          'Precision cuts shaped to your face, hair texture, and lifestyle.' ),
	array( 'Hair Color',       'Lived-in balayage, dimensional highlights, and rich single-process colour.' ),
	array( 'Eyebrow Services', 'Shaping, tinting, and tidy-ups that frame your features beautifully.' ),
	array( 'Hair Styling',     'Blowouts, updos, and event styling that hold from morning to last dance.' ),
	array( 'Makeup',           'Soft, polished makeup for weddings, photoshoots, and special occasions.' ),
	array( 'Hair Treatments',  'Restorative care for shine, strength, and softness from root to ends.' ),
);
?>

<section class="section services">
	<div class="container">
		<div class="services__head reveal">
			<div>
				<span class="eyebrow"><?php esc_html_e( 'Services', 'tanya-hair-salon' ); ?></span>
				<h2 class="h2" style="margin-top:24px;"><?php esc_html_e( 'Considered care, from cut to finish.', 'tanya-hair-salon' ); ?></h2>
			</div>
			<p class="lede"><?php esc_html_e( 'Every appointment is unhurried — a quiet consultation first, then the work, then a finish you’ll want to recreate at home.', 'tanya-hair-salon' ); ?></p>
		</div>

		<div class="services__grid reveal">
			<?php
			if ( $services ) :
				$i = 0;
				foreach ( $services as $svc ) :
					$i++;
					setup_postdata( $svc );
					?>
					<article class="service-tile">
						<div class="service-tile__num"><?php echo esc_html( str_pad( $i, 2, '0', STR_PAD_LEFT ) ); ?></div>
						<h3 class="service-tile__title"><?php echo esc_html( get_the_title( $svc ) ); ?></h3>
						<p class="service-tile__desc"><?php echo esc_html( get_the_excerpt( $svc ) ); ?></p>
						<a href="<?php echo esc_url( get_permalink( $svc ) ); ?>" class="service-tile__cta"><?php esc_html_e( 'Details', 'tanya-hair-salon' ); ?> <span class="arrow">&rarr;</span></a>
					</article>
					<?php
				endforeach;
				wp_reset_postdata();
			else :
				$i = 0;
				foreach ( $fallback as $row ) :
					$i++;
					?>
					<article class="service-tile">
						<div class="service-tile__num"><?php echo esc_html( str_pad( $i, 2, '0', STR_PAD_LEFT ) ); ?></div>
						<h3 class="service-tile__title"><?php echo esc_html( $row[0] ); ?></h3>
						<p class="service-tile__desc"><?php echo esc_html( $row[1] ); ?></p>
					</article>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>
