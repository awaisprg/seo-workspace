<?php
/**
 * Pull-quote band — single editorial testimonial on dark background.
 */
?>
<section class="pull-quote reveal">
	<div class="pull-quote__inner">
		<span class="eyebrow"><?php esc_html_e( 'Why Clients Stay', 'tanya-hair-salon' ); ?></span>
		<p><?php echo wp_kses_post( __( '&ldquo;Tanya listens. She actually hears what you want and then makes it better than you imagined.&rdquo;', 'tanya-hair-salon' ) ); ?></p>
		<cite><?php esc_html_e( '— Jessica L., client since 2020', 'tanya-hair-salon' ); ?></cite>
	</div>
</section>
