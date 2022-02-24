<?php
/**
 * Register theme customizer
 */


// Import custom controls

//require get_parent_theme_file_path( '/inc/customizer/custom-controls/TinyMCE.php' );

function kongresszentrum_theme_customizer_register( $wp_customize ) {
	// New panel for the theme options.
	$wp_customize->add_panel(
		'kongresszentrum_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'Kongresszentrum Kreuz Theme Options', 'kongresszentrum-kreuz' ),
			'description'    => __( 'Theme options for the Kongresszentrum Kreuz Theme', 'kongresszentrum-kreuz' ),
		)
	);

	require get_parent_theme_file_path( '/inc/customizer/footer.php' );
	//require get_parent_theme_file_path( '/inc/customizer/socials.php' );

}
add_action( 'customize_register', 'kongresszentrum_theme_customizer_register' );
