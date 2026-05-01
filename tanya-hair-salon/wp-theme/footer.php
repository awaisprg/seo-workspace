<?php
/**
 * Site footer
 *
 * @package Tanya_Hair_Salon
 */
?>
</div><!-- /.site-content -->

<footer class="site-footer">
	<div class="container">
		<div class="site-footer__grid">

			<div class="site-footer__col">
				<div class="site-footer__brand"><?php bloginfo( 'name' ); ?></div>
				<p><?php esc_html_e( 'A boutique hair studio in Coquitlam offering cuts, colour, eyebrow services, styling, makeup, and restorative treatments — by appointment.', 'tanya-hair-salon' ); ?></p>
			</div>

			<div class="site-footer__col">
				<h4><?php esc_html_e( 'Explore', 'tanya-hair-salon' ); ?></h4>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'container'      => false,
					'menu_class'     => '',
					'fallback_cb'    => false,
					'depth'          => 1,
				) );
				?>
			</div>

			<div class="site-footer__col">
				<h4><?php esc_html_e( 'Hours', 'tanya-hair-salon' ); ?></h4>
				<ul>
					<li><?php echo esc_html( ths_option( 'hours_weekdays' ) ); ?></li>
					<li><?php echo esc_html( ths_option( 'hours_sunday' ) ); ?></li>
				</ul>
			</div>

			<div class="site-footer__col">
				<h4><?php esc_html_e( 'Visit', 'tanya-hair-salon' ); ?></h4>
				<ul>
					<li><?php echo esc_html( ths_option( 'address_line1' ) ); ?></li>
					<li><?php echo esc_html( ths_option( 'address_line2' ) ); ?></li>
					<li><a href="tel:<?php echo esc_attr( ths_option( 'phone_link' ) ); ?>"><?php echo esc_html( ths_option( 'phone' ) ); ?></a></li>
					<li><a href="mailto:<?php echo esc_attr( ths_option( 'email' ) ); ?>"><?php esc_html_e( 'Email the salon', 'tanya-hair-salon' ); ?></a></li>
				</ul>
			</div>

		</div>

		<div class="site-footer__legal">
			<span>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'tanya-hair-salon' ); ?></span>
			<span><?php esc_html_e( 'Coquitlam · British Columbia', 'tanya-hair-salon' ); ?></span>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
