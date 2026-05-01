<?php
$quotes = get_posts( array(
	'post_type'      => 'testimonial',
	'posts_per_page' => 5,
) );

$fallback = array(
	array( 'Tanya listens. She actually hears what you want and then makes it better than you imagined.', 'Jessica L.' ),
	array( 'My favourite balayage in the Tri-Cities. Soft, sun-kissed, and grows out beautifully.',          'Maria C.'  ),
	array( 'Walked in tired, walked out glowing. The whole experience felt like a small luxury.',           'Aisha R.'  ),
);
?>
<section class="section testimonials">
	<div class="container testimonials__inner reveal">
		<span class="eyebrow"><?php esc_html_e( 'Kind Words', 'tanya-hair-salon' ); ?></span>
		<div class="testimonials__track" aria-live="polite">
			<?php
			if ( $quotes ) {
				foreach ( $quotes as $i => $q ) {
					$active = 0 === $i ? ' is-active' : '';
					echo '<article class="testimonial' . esc_attr( $active ) . '">';
					echo '<p class="testimonial__quote">' . esc_html( wp_strip_all_tags( $q->post_content ) ) . '</p>';
					echo '<p class="testimonial__name">' . esc_html( get_the_title( $q ) ) . '</p>';
					echo '</article>';
				}
			} else {
				foreach ( $fallback as $i => $row ) {
					$active = 0 === $i ? ' is-active' : '';
					echo '<article class="testimonial' . esc_attr( $active ) . '">';
					echo '<p class="testimonial__quote">' . esc_html( $row[0] ) . '</p>';
					echo '<p class="testimonial__name">' . esc_html( $row[1] ) . '</p>';
					echo '</article>';
				}
			}
			?>
		</div>
		<div class="testimonials__dots" role="tablist">
			<?php
			$count = $quotes ? count( $quotes ) : count( $fallback );
			for ( $i = 0; $i < $count; $i++ ) :
				$cls = 0 === $i ? ' class="is-active"' : '';
				echo '<button' . $cls . ' aria-label="Show testimonial ' . esc_attr( $i + 1 ) . '"></button>';
			endfor;
			?>
		</div>
	</div>
</section>
