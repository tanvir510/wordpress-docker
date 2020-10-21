<?php
	// Require inclueded file here
    require_once(get_template_directory().'/inc/custom-post-type.php');

function fc_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // Custom logo.
	$logo_width  = 160;
	$logo_height = 26;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}

add_action( 'after_setup_theme', 'fc_theme_support' );

function fc_register_assets() {
	// wp_enqueue_style( 'fc-fonts', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap' );
	wp_enqueue_style( 'fc-style', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_script( 'fc-js', get_template_directory_uri() . '/assets/js/build.min.js', array( 'jquery' ), false, true );
}

add_action( 'wp_enqueue_scripts', 'fc_register_assets' );

function fc_menus() {

	$locations = array(
		'primary'  => __( 'Primary Menu', 'fabbit-corporate' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'fc_menus' );
