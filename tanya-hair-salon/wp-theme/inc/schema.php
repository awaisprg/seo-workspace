<?php
/**
 * Local-business JSON-LD schema for the salon.
 * Outputs in <head> on the front page and contact page.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

function ths_render_local_schema() {
	$data = array(
		'@context' => 'https://schema.org',
		'@type'    => 'HairSalon',
		'name'     => 'Tanya Hair Salon',
		'image'    => get_site_icon_url() ?: THS_URI . '/assets/images/og.jpg',
		'url'      => home_url( '/' ),
		'telephone'=> ths_option( 'phone' ),
		'email'    => ths_option( 'email' ),
		'priceRange' => '$$',
		'address'  => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => ths_option( 'address_line1' ),
			'addressLocality' => 'Coquitlam',
			'addressRegion'   => 'BC',
			'postalCode'      => 'V3K 6C4',
			'addressCountry'  => 'CA',
		),
		'geo' => array(
			'@type'     => 'GeoCoordinates',
			'latitude'  => 49.2566,
			'longitude' => -122.8568,
		),
		'openingHoursSpecification' => array(
			array(
				'@type'      => 'OpeningHoursSpecification',
				'dayOfWeek'  => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ),
				'opens'      => '10:00',
				'closes'     => '18:00',
			),
		),
		'sameAs' => array_filter( array( ths_option( 'instagram_url' ) ) ),
		'makesOffer' => array(
			array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Haircut' ) ),
			array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Hair Color' ) ),
			array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Eyebrow Services' ) ),
			array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Hair Styling' ) ),
			array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Makeup' ) ),
			array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Hair Treatments' ) ),
		),
	);

	echo "\n<script type=\"application/ld+json\">" . wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . "</script>\n";
}

function ths_maybe_output_schema() {
	if ( is_front_page() || is_page( 'contact' ) || is_page( 'about' ) ) {
		ths_render_local_schema();
	}
}
add_action( 'wp_head', 'ths_maybe_output_schema', 20 );
