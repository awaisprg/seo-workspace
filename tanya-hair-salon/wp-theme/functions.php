<?php
/**
 * Tanya Hair Salon — theme functions
 *
 * @package Tanya_Hair_Salon
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'THS_VERSION', '1.0.0' );
define( 'THS_DIR', get_template_directory() );
define( 'THS_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function ths_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );

	register_nav_menus( array(
		'primary'   => __( 'Primary (left)', 'tanya-hair-salon' ),
		'secondary' => __( 'Secondary (right)', 'tanya-hair-salon' ),
		'footer'    => __( 'Footer', 'tanya-hair-salon' ),
	) );

	add_editor_style( 'assets/css/main.css' );
}
add_action( 'after_setup_theme', 'ths_setup' );

/**
 * Enqueue assets
 */
function ths_assets() {
	wp_enqueue_style(
		'ths-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Inter:wght@400;500&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'ths-main', THS_URI . '/assets/css/main.css', array(), THS_VERSION );
	wp_enqueue_script( 'ths-main', THS_URI . '/assets/js/main.js', array(), THS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'ths_assets' );

/**
 * Custom Post Type: Services
 */
function ths_register_service_cpt() {
	register_post_type( 'service', array(
		'labels' => array(
			'name'          => __( 'Services', 'tanya-hair-salon' ),
			'singular_name' => __( 'Service', 'tanya-hair-salon' ),
			'add_new_item'  => __( 'Add new service', 'tanya-hair-salon' ),
		),
		'public'       => true,
		'has_archive'  => 'services',
		'rewrite'      => array( 'slug' => 'services' ),
		'menu_icon'    => 'dashicons-cut',
		'show_in_rest' => true,
		'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
	) );
}
add_action( 'init', 'ths_register_service_cpt' );

/**
 * Custom Post Type: Testimonials
 */
function ths_register_testimonial_cpt() {
	register_post_type( 'testimonial', array(
		'labels' => array(
			'name'          => __( 'Testimonials', 'tanya-hair-salon' ),
			'singular_name' => __( 'Testimonial', 'tanya-hair-salon' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-format-quote',
		'supports'     => array( 'title', 'editor' ),
	) );
}
add_action( 'init', 'ths_register_testimonial_cpt' );

/**
 * Theme options helper — wraps options that the customer/staff edit in Customizer.
 */
function ths_option( $key, $default = '' ) {
	$defaults = array(
		'phone'          => '(604) 917-0266',
		'phone_link'     => '+16049170266',
		'email'          => 'tanya.by.lillian@gmail.com',
		'address_line1'  => '8-2662 Austin Ave',
		'address_line2'  => 'Coquitlam, BC V3K 6C4',
		'hours_weekdays' => 'Mon – Sat · 10:00 AM – 6:00 PM',
		'hours_sunday'   => 'Sunday · Closed',
		'booking_url'    => 'https://tanya-hair-salon-2024.square.site/',
		'instagram_url'  => '#',
	);
	$value = get_theme_mod( 'ths_' . $key, $defaults[ $key ] ?? $default );
	return $value;
}

/**
 * Customizer
 */
function ths_customize( $wp_customize ) {
	$wp_customize->add_section( 'ths_business', array(
		'title'    => __( 'Salon Details', 'tanya-hair-salon' ),
		'priority' => 30,
	) );

	$fields = array(
		'phone'          => 'Phone (display)',
		'phone_link'     => 'Phone (tel: link)',
		'email'          => 'Email',
		'address_line1'  => 'Address line 1',
		'address_line2'  => 'Address line 2',
		'hours_weekdays' => 'Hours (Mon–Sat)',
		'hours_sunday'   => 'Hours (Sunday)',
		'booking_url'    => 'Booking URL',
		'instagram_url'  => 'Instagram URL',
	);

	foreach ( $fields as $key => $label ) {
		$wp_customize->add_setting( "ths_{$key}", array(
			'default'           => ths_option( $key ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( "ths_{$key}", array(
			'label'   => $label,
			'section' => 'ths_business',
			'type'    => 'text',
		) );
	}
}
add_action( 'customize_register', 'ths_customize' );

/**
 * Add `is-light-header` body class on every page except the homepage,
 * so the sticky header text stays legible against light page backgrounds.
 */
function ths_body_class( $classes ) {
	if ( ! is_front_page() ) {
		$classes[] = 'is-light-header';
	}
	return $classes;
}
add_filter( 'body_class', 'ths_body_class' );

/**
 * Customizer extras: brands list.
 */
function ths_customize_extras( $wp_customize ) {
	$wp_customize->add_setting( 'ths_brands', array(
		'default'           => 'Olaplex, K18, Davines, Kérastase, Wella',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ths_brands', array(
		'label'       => __( 'Trusted brands (comma-separated)', 'tanya-hair-salon' ),
		'section'     => 'ths_business',
		'type'        => 'text',
		'description' => __( 'Shown in the homepage Trusted Brands strip.', 'tanya-hair-salon' ),
	) );

	$wp_customize->add_setting( 'ths_hero_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ths_hero_image', array(
		'label'   => __( 'Homepage hero background image', 'tanya-hair-salon' ),
		'section' => 'ths_business',
	) ) );
}
add_action( 'customize_register', 'ths_customize_extras', 11 );

/**
 * Schema.org HairSalon JSON-LD output.
 */
require_once THS_DIR . '/inc/schema.php';
