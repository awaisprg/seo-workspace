<section class="section visit-band">
	<div class="container visit-band__inner reveal">
		<div class="visit-band__col">
			<h3><?php esc_html_e( 'Visit', 'tanya-hair-salon' ); ?></h3>
			<p>
				<?php echo esc_html( ths_option( 'address_line1' ) ); ?><br/>
				<?php echo esc_html( ths_option( 'address_line2' ) ); ?>
			</p>
		</div>
		<div class="visit-band__col">
			<h3><?php esc_html_e( 'Hours', 'tanya-hair-salon' ); ?></h3>
			<p>
				<?php echo esc_html( ths_option( 'hours_weekdays' ) ); ?><br/>
				<?php echo esc_html( ths_option( 'hours_sunday' ) ); ?>
			</p>
		</div>
		<div class="visit-band__col">
			<h3><?php esc_html_e( 'Contact', 'tanya-hair-salon' ); ?></h3>
			<p>
				<a href="tel:<?php echo esc_attr( ths_option( 'phone_link' ) ); ?>"><?php echo esc_html( ths_option( 'phone' ) ); ?></a><br/>
				<a href="mailto:<?php echo esc_attr( ths_option( 'email' ) ); ?>"><?php echo esc_html( ths_option( 'email' ) ); ?></a>
			</p>
		</div>
	</div>
</section>
