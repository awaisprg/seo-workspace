<?php
/**
 * Services preview — image-led cards.
 */

$services = get_posts( array(
	'post_type'      => 'service',
	'posts_per_page' => 6,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
) );

$fallback = array(
	array( 'haircut',    'Haircut',          'Precision Cuts',     'Shaped to your face, hair texture, and lifestyle.',                                'https://images.unsplash.com/photo-1595475884562-073c30d45670?auto=format&fit=crop&w=900&q=70' ),
	array( 'color',      'Colour',           'Lived-in Colour',    'Balayage, highlights, and rich single-process colour.',                            'https://images.unsplash.com/photo-1605497788044-5a32c7078486?auto=format&fit=crop&w=900&q=70' ),
	array( 'brows',      'Brows',            'Eyebrow Services',   'Shaping, tinting, and tidy-ups that frame your features.',                         'https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?auto=format&fit=crop&w=900&q=70' ),
	array( 'styling',    'Styling',          'Hair Styling',       'Blowouts, updos, and event styling that hold all night.',                          'https://images.unsplash.com/photo-1633681926022-84c23e8cb2d6?auto=format&fit=crop&w=900&q=70' ),
	array( 'makeup',     'Makeup',           'Polished Makeup',    'Soft, long-wearing makeup for weddings and special occasions.',                    'https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=900&q=70' ),
	array( 'treatments', 'Treatments',       'Restorative Care',   'Olaplex, K18, and bespoke deep conditioning for shine and strength.',              'https://images.unsplash.com/photo-1521146764736-56c929d59c83?auto=format&fit=crop&w=900&q=70' ),
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
					$thumb = get_the_post_thumbnail_url( $svc, 'large' );
					if ( ! $thumb ) {
						$thumb = $fallback[ ( $i - 1 ) % count( $fallback ) ][4];
					}
					$short_label = get_post_meta( $svc->ID, '_ths_short_label', true );
					if ( ! $short_label ) {
						$short_label = get_the_title( $svc );
					}
					?>
					<a class="service-card" href="<?php echo esc_url( get_permalink( $svc ) ); ?>">
						<div class="service-card__media">
							<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( get_the_title( $svc ) ); ?>" loading="lazy" />
						</div>
						<div class="service-card__body">
							<div class="service-card__num"><?php echo esc_html( str_pad( $i, 2, '0', STR_PAD_LEFT ) . ' — ' . $short_label ); ?></div>
							<h3 class="service-card__title"><?php echo esc_html( get_the_title( $svc ) ); ?></h3>
							<p class="service-card__desc"><?php echo esc_html( get_the_excerpt( $svc ) ); ?></p>
							<span class="service-card__cta"><?php esc_html_e( 'Details', 'tanya-hair-salon' ); ?> <span class="arrow">&rarr;</span></span>
						</div>
					</a>
					<?php
				endforeach;
			else :
				$i = 0;
				foreach ( $fallback as $row ) :
					$i++;
					list( $slug, $tag, $title, $desc, $img ) = $row;
					?>
					<a class="service-card" href="<?php echo esc_url( home_url( '/services/#' . $slug ) ); ?>">
						<div class="service-card__media">
							<img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy" />
						</div>
						<div class="service-card__body">
							<div class="service-card__num"><?php echo esc_html( str_pad( $i, 2, '0', STR_PAD_LEFT ) . ' — ' . $tag ); ?></div>
							<h3 class="service-card__title"><?php echo esc_html( $title ); ?></h3>
							<p class="service-card__desc"><?php echo esc_html( $desc ); ?></p>
							<span class="service-card__cta"><?php esc_html_e( 'Details', 'tanya-hair-salon' ); ?> <span class="arrow">&rarr;</span></span>
						</div>
					</a>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>
