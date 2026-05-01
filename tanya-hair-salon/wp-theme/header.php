<?php
/**
 * Site header
 *
 * @package Tanya_Hair_Salon
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tanya-hair-salon' ); ?></a>

<header class="site-header">
	<div class="container site-header__inner">

		<nav class="site-header__nav site-header__nav--left" aria-label="<?php esc_attr_e( 'Primary', 'tanya-hair-salon' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'items_wrap'     => '%3$s',
				'fallback_cb'    => false,
				'depth'          => 1,
			) );
			?>
		</nav>

		<a class="site-header__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			<small><?php echo esc_html( get_bloginfo( 'description' ) ); ?></small>
		</a>

		<nav class="site-header__nav site-header__nav--right" aria-label="<?php esc_attr_e( 'Secondary', 'tanya-hair-salon' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'secondary',
				'container'      => false,
				'items_wrap'     => '%3$s',
				'fallback_cb'    => false,
				'depth'          => 1,
			) );
			?>
			<a href="<?php echo esc_url( ths_option( 'booking_url' ) ); ?>" class="btn btn--primary">
				<?php esc_html_e( 'Book Now', 'tanya-hair-salon' ); ?> <span class="arrow">&rarr;</span>
			</a>
		</nav>

		<button class="nav-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'tanya-hair-salon' ); ?>" aria-expanded="false"><span></span></button>

	</div>
</header>

<div id="content" class="site-content">
