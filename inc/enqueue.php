<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	//wp_register_script( 'choose_img', get_template_directory_uri() . '/js/idwp.js' );
	wp_enqueue_script( 'choose_img', get_template_directory_uri() .  '/js/idwp.js', array('jquery'), '1.0', true );
	wp_localize_script( 'choose_img', 'ajax_object', array(
		'ajax_url' => admin_url('admin-ajax.php'),
	) );
	// For jquery.matchHeight.js
	wp_enqueue_script( 'jqueryMatchHeight', get_template_directory_uri() .  '/js/jquery.matchHeight.js', array('jquery'), '1.0', true );

	// For jquery.matchHeight.js
	wp_enqueue_script( 'waypoints', get_template_directory_uri() .  '/js/jquery.waypoints.min.js', array('jquery'), '1.0', true );

} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
