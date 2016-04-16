<?php
/**
 * ddementieva Theme Customizer.
 *
 * @package ddementieva
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ddementieva_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Accent color
	$wp_customize->add_setting('ddementieva_accent_color', array(
		'default' => '#ffd500',
		'transport' => 'refresh',
	) );

	$wp_customize->add_section('ddementieva_standard_color', array(
		'title' => __('Accent Color', 'ddementieva'),
		'priority' => 30,

	));

	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'ddementieva_accent_color_control', array(
		'label' => __('Accent Color', 'ddementieva'),
		'section' => 'ddementieva_standard_color',
		'settings' => 'ddementieva_accent_color',
	)));
	// End of Accent color

	// Changing Logo
	$wp_customize->add_setting( 'ddementieva_logo' );

	$wp_customize->add_section( 'ddementieva_logo_section' , array(
		'title'       => __( 'Logo', 'ddementieva' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ddementieva_logo', array(
		'label'    => __( 'Logo', 'ddementieva' ),
		'section'  => 'ddementieva_logo_section',
		'settings' => 'ddementieva_logo',
	) ) );
	// End of Changing Logo

	// Changing Banner
	$wp_customize->add_setting( 'ddementieva_banner' );

	$wp_customize->add_section( 'ddementieva_banner_section' , array(
		'title'       => __( 'Banner', 'ddementieva' ),
		'priority'    => 35,
		'description' => 'Upload a banner to replace the default site name and description in the header',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ddementieva_banner', array(
		'label'    => __( 'Banner', 'ddementieva' ),
		'section'  => 'ddementieva_banner_section',
		'settings' => 'ddementieva_banner',
	) ) );
	// End of Changing Banner

	// Sidebar Position
	$wp_customize->add_section( 'ddementieva_sidebar_section', array(
			'title' => __( 'Sidebar', 'ddementieva' ),
			'description' => 'Change sidebar position',
			'priority' => 35,
		));

	$wp_customize->add_setting( 'ddementieva_sidebar', array(
			'default' => 'right',
		));

	$wp_customize->add_control( 'ddementieva_sidebar', array(
			'type' => 'radio',
			'label' => 'Sidebar position',
			'section' => 'ddementieva_sidebar_section',
			'choices' => array(
				'left' => 'Left',
				'right' => 'Right',
			),
		)	);
	// End of Sidebar Position

	// Facebook
	$wp_customize->add_setting( 'social_links_facebook' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );

	$wp_customize->add_section( 'ddementieva_social_links' , array(
		'title'      => __( 'Social Links', 'ddementieva' ),
		'priority'   => 50,
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
		'label'        => __( 'Facebook', 'ddementieva' ),
		'section'    => 'ddementieva_social_links',
		'settings'   => 'social_links_facebook',
	) ) );
	// End of Facebook

	// Twitter
	$wp_customize->add_setting( 'social_links_twitter' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );

	$wp_customize->add_section( 'ddementieva_social_links' , array(
		'title'      => __( 'Social Links', 'ddementieva' ),
		'priority'   => 50,
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_twitter', array(
		'label'        => __( 'Twitter', 'ddementieva' ),
		'section'    => 'ddementieva_social_links',
		'settings'   => 'social_links_twitter',
	) ) );
	// End of LinkedIn

	// Twitter
	$wp_customize->add_setting( 'social_links_linkedin' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );

	$wp_customize->add_section( 'ddementieva_social_links' , array(
		'title'      => __( 'Social Links', 'ddementieva' ),
		'priority'   => 50,
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_linkedin', array(
		'label'        => __( 'LinkedIn', 'ddementieva' ),
		'section'    => 'ddementieva_social_links',
		'settings'   => 'social_links_linkedin',
	) ) );
	// End of LinkedIn

	// Contact Name
	$wp_customize->add_setting( 'contact-name' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );

	$wp_customize->add_section( 'ddementieva_contact' , array(
		'title'      => __( 'Contacts', 'ddementieva' ),
		'priority'   => 55,
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-name', array(
		'label'        => __( 'Name', 'ddementieva' ),
		'section'    => 'ddementieva_contact',
	) ) );
	// End of Contact Name

	// Contact Phone
	$wp_customize->add_setting( 'contact-phone' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );

	$wp_customize->add_section( 'ddementieva_contact' , array(
		'title'      => __( 'Contacts', 'ddementieva' ),
		'priority'   => 55,
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-phone', array(
		'label'        => __( 'Phone', 'ddementieva' ),
		'section'    => 'ddementieva_contact',
	) ) );
	// End of Contact Phone

	// Contact Info
	$wp_customize->add_setting( 'contact-info' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );

	$wp_customize->add_section( 'ddementieva_contact' , array(
		'title'      => __( 'Contacts', 'ddementieva' ),
		'priority'   => 55,
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-info', array(
		'label'        => __( 'Info', 'ddementieva' ),
		'section'    => 'ddementieva_contact',
	) ) );
	// End of Contact Mail

	// Contact Info
	$wp_customize->add_setting( 'contact-mail' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );

	$wp_customize->add_section( 'ddementieva_contact' , array(
		'title'      => __( 'Contacts', 'ddementieva' ),
		'priority'   => 55,
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-mail', array(
		'label'        => __( 'Mail', 'ddementieva' ),
		'section'    => 'ddementieva_contact',
	) ) );
	// End of Contact Mail
}
add_action( 'customize_register', 'ddementieva_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ddementieva_customize_preview_js() {
	wp_enqueue_script( 'ddementieva_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ddementieva_customize_preview_js' );
