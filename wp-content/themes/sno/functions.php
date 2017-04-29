<?php 
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	
	add_theme_support( 'custom-logo', array(
		'height'      => 65,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	register_nav_menus(array('primary' => 'Primary Navigation'));

	// header image activation
	$header_img = array(
	'default-image'          => '',
	'width'                  => 1200,
	'height'                 => 240,
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => true,
	'header-text'            => true,
);
add_theme_support( 'custom-header', $header_img );

	/* register widget area in functions file  */
	function sno_widgets_init() {
		register_sidebar( array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar-1',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'sno_widgets_init' );

function snofoot_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer-widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		// 'before_title'  => '<h1 class="widget-title">',
		// 'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'snofoot_widgets_init' );

function jeherve_add_mailto_widget() {
    echo "<a href='mailto:sno@sheridanneighborhood.org'>sno@sheridanneighborhood.org</a>";
}
add_action( 'jetpack_contact_info_widget_end', 'jeherve_add_mailto_widget' );

	function sno_copyright() {
		global $wpdb;
		$copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		$wpdb->posts
		WHERE
		post_status = 'publish'
		");
		$output = '';
		if($copyright_dates) {
			$copyright = "&copy; " . $copyright_dates[0]->firstdate;
			if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
						$copyright .= '-' . $copyright_dates[0]->lastdate;
					}
			$output = $copyright;
		}
		return $output;
	}
	
 ?>