<?php
if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'computer_repair_opt';

$theme      = wp_get_theme(); // For use with some settings. Not necessary.
$opt_prefix = 'computer_repair';

$args = array(
	// TYPICAL -> Change these values as you need/desire
	'opt_name'                  => $opt_name,
	// This is where your data is stored in the database and also becomes your global variable name.
	'display_name'              => $theme->get( 'Name' ),
	// Name that appears at the top of your panel
	'display_version'           => $theme->get( 'Version' ),
	// Version that appears at the top of your panel
	'menu_type'                 => 'menu',
	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
	'allow_sub_menu'            => true,
	// Show the sections below the admin menu item or not
	'menu_title'                => esc_html__( 'Computer Repair', 'computer-repair' ),
	'page_title'                => esc_html__( 'Computer Repair', 'computer-repair' ),
	// You will need to generate a Google API key to use this feature.
	// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
	'google_api_key'            => '',
	// Set it you want google fonts to update weekly. A google_api_key value is required.
	'google_update_weekly'      => false,
	// Must be defined to add google fonts to the typography module
	'disable_google_fonts_link' => true,
	'async_typography'          => false,
	// Use a asynchronous font on the front end or font string
	'admin_bar'                 => true,
	// Show the panel pages on the admin bar
	'admin_bar_icon'            => 'dashicons-portfolio',
	// Choose an icon for the admin bar menu
	'admin_bar_priority'        => 50,
	// Choose an priority for the admin bar menu
	'global_variable'           => '',
	// Set a different name for your global variable other than the opt_name
	'dev_mode'                  => false,
	// Show the time the page took to load, etc
	'update_notice'             => true,
	// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
	'customizer'                => false,
	// OPTIONAL -> Give you extra features
	'page_priority'             => null,
	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_parent'               => 'themes.php',
	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	'page_permissions'          => 'manage_options',
	// Permissions needed to access the options panel.
	'menu_icon'                 => '',
	// Specify a custom URL to an icon
	'last_tab'                  => '',
	// Force your panel to always open to a specific tab (by id)
	'page_icon'                 => 'icon-themes',
	// Icon displayed in the admin panel next to your menu_title
	'page_slug'                 => '',
	// Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
	'save_defaults'             => true,
	// On load save the defaults to DB before user clicks save or not
	'default_show'              => false,
	// If true, shows the default value next to each field that is not the default value.
	'default_mark'              => '',
	// What to print by the field's title if the value shown is default. Suggested: *
	'show_import_export'        => true,
	// Shows the Import/Export panel when not used as a field.
	// CAREFUL -> These options are for advanced use only
	'transient_time'            => 60 * MINUTE_IN_SECONDS,
	'output'                    => true,
	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	'output_tag'                => true,
	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	'database'                  => '',
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'use_cdn'                   => true,
	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	// HINTS
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),
);


Redux::setArgs( $opt_name, $args );

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Header Settings', 'computer-repair' ),
		'id'               => 'header_settings',
		'desc'             => esc_html__( 'All header settings', 'computer-repair' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . '-header-style',
				'type'     => 'select',
				'title'    => __( 'Header Design', 'computer-repair' ),
				'subtitle' => __( 'Select header design type', 'computer-repair' ),
				'options'  => array(
					'1' => 'Style 1',
					'2' => 'Style 2',
					'3' => 'Style 3',
				),
				'default'  => '1',
			),
			array(
				'id'       => $opt_prefix . '-header-transparent',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show Transparent Header', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable site Transparent Header', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-site-preloader',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display preloader before page load', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable site preloader', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-site-preloader-text',
				'type'     => 'text',
				'default'  => 'Loading ...',
				'subtitle' => esc_html__( 'Change loading text', 'computer-repair' ),
				'title'    => esc_html__( 'Loading Text', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-site-preloader-image',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload preloader using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Site Preloader', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-is_sticky_header',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Header Sticky', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable Header Sticky', 'computer-repair' ),
				'default'  => true,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-is_cart_in_home',
				'type'     => 'switch',
				'title'    => esc_html__( 'Disable Cart in Home', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable the cart button in home page?', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-is_cart_in_all_page',
				'type'     => 'switch',
				'title'    => esc_html__( 'Disable Cart in Full Site', 'computer-repair' ),
				'subtitle' => esc_html__( 'Disable or Enable the cart button in full Site?', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-is_cart_in_mobile',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable Cart Always in Mobile', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable the cart button Always in Mobile?', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-logo',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Site Logo', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/logo.gif' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-logo-mobile',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload mobile logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Site mobile Logo', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/logo-mobile.png' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-site-favicon',
				'type'     => 'media',
				'url'      => true,
				'title'    => esc_html__( 'Favicon URL', 'computer-repair' ),
				'compiler' => 'true',
				'desc'     => esc_html__( 'Set favicon for your theme', 'computer-repair' ),
				'subtitle' => esc_html__( 'Upload favicon for the theme', 'computer-repair' ),
				'default'  => array( 'url' => COMPUTER_REPAIR_THEME_URI . '/images/favicon.ico' ),
			),
			array(
				'id'       => $opt_prefix . '-page-header-bg',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload mobile logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Inner Page header image', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/header-bg.jpg' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-page-header-mobile',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Header Top Mobile', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or disable header mobile content', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'      => $opt_prefix . '-page-header-mobile-location',
				'type'    => 'editor',
				'title'   => 'Page Header location',
				'default' => '3261 Anmoore Road Brooklyn, NY 11230',
			),
			array(
				'id'      => $opt_prefix . '-page-header-mobile-phone',
				'type'    => 'editor',
				'title'   => 'Page Header Phone',
				'default' => '800-123-4567, Fax: 718-724-3312',
			),
			array(
				'id'      => $opt_prefix . '-page-header-mobile-email',
				'type'    => 'editor',
				'title'   => 'Page Header Email',
				'default' => 'officeone@youremail.com',
			),
			array(
				'id'      => $opt_prefix . '-page-header-mobile-hour',
				'type'    => 'editor',
				'title'   => 'Page Header Hour',
				'default' => 'Mon-Fri: 9:00 am – 5:00',
			),
			array(
				'id'       => $opt_prefix . '-disable-contact-info',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show Contact Info Header', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable Contact Info Header', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'      => $opt_prefix . '-header-map-info',
				'type'    => 'editor',
				'title'   => 'Page Header location',
				'default' => '5604 Willow Crossing Ct,Clifton, VA, 20124',
			),
			array(
				'id'      => $opt_prefix . '-header-hours-info',
				'type'    => 'editor',
				'title'   => 'Page Header Hour',
				'default' => 'Mon-Fri: 9:00 am – 5:00 Sat & Sun: By Appt.',
			),
			array(
				'id'       => $opt_prefix . '-site-contact-info',
				'type'     => 'text',
				'title'    => esc_html__( 'Contact Text', 'computer-repair' ),
				'subtitle' => esc_html__( 'Contact Info Text', 'computer-repair' ),
				'default'  => 'Need tech support?',
			),
			array(
				'id'       => $opt_prefix . '-site-contact-no',
				'type'     => 'text',
				'title'    => esc_html__( 'Contact No', 'computer-repair' ),
				'subtitle' => esc_html__( 'Contact No Text', 'computer-repair' ),
				'default'  => '+1-800-1234567',
			),
			array(
				'id'       => $opt_prefix . '-site-email-no',
				'type'     => 'text',
				'title'    => esc_html__( 'Email Address', 'computer-repair' ),
				'subtitle' => esc_html__( 'Email Address Text', 'computer-repair' ),
				'default'  => 'noreply@envato.com',
			),
			array(
				'id'       => $opt_prefix . '-call-us-arrow-1',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload mobile logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Call Us Arrow 1', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/call-us-arrow-1.png' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-call-us-arrow-2',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload mobile logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Call Us Arrow 2', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/call-us-arrow-2.png' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-call-us-arrow-3',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload mobile logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Call Us Arrow 3', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/call-us-arrow-3.png' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-call-us-arrow-1-1',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload mobile logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Call Us Arrow 1 1', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/call-us-arrow-1-1.png' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-call-us-arrow-2-1',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload mobile logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Call Us Arrow 2 1', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/call-us-arrow-2-1.png' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-call-us-arrow-3-1',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload mobile logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Call Us Arrow 3 1', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/call-us-arrow-3-1.png' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-page-header-search-icon',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Header Search Icon', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or disable header Search Icon', 'computer-repair' ),
				'default'  => true,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'      => $opt_prefix . '-header_social_facebook',
				'type'    => 'text',
				'title'   => esc_html__( 'Facebook URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-header_social_twitter',
				'type'    => 'text',
				'title'   => esc_html__( 'Twitter URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-header_social_google_plus',
				'type'    => 'text',
				'title'   => esc_html__( 'Google Plus URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'    => $opt_prefix . '-header_social_youtube',
				'type'  => 'text',
				'title' => esc_html__( 'Youtube URL', 'computer-repair' ),
			),
			array(
				'id'    => $opt_prefix . '-header_social_whatsapp',
				'type'  => 'text',
				'title' => esc_html__( 'Whatsapp URL', 'computer-repair' ),
			),
			array(
				'id'    => $opt_prefix . '-header_social_snapchat',
				'type'  => 'text',
				'title' => esc_html__( 'Snapchat URL', 'computer-repair' ),
			),
			array(
				'id'          => $opt_prefix . '-social-widgets',
				'type'        => 'slides',
				'title'       => __( 'Add Social', 'computer-repair' ),
				'subtitle'    => __( 'Add Social link.', 'computer-repair' ),
				'placeholder' => array(
					'title'       => __( 'Give the Title', 'computer-repair' ),
					'url'         => __( 'Give Url', 'computer-repair' ),
					'image'       => __( 'insert Image', 'computer-repair' ),
					'thumb'       => __( 'This Field Not Working', 'computer-repair' ),
					'description' => __( 'You can give here Icon Class', 'computer-repair' ),
				),
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Modal Settings', 'computer-repair' ),
		'id'               => 'modal_settings',
		'desc'             => esc_html__( 'Modal Settings form', 'computer-repair' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website-alt',
		'fields'           => array(
			array(
				'id'       => 'is_modal_enable',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable or Disable', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable modal on site', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => 'modal_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Modal Title', 'computer-repair' ),
				'subtitle' => esc_html__( 'Modal title which one will be shown at top of modal', 'computer-repair' ),
				'default'  => 'Book an Engineer',
			),
			array(
				'id'      => 'modal_mc_form',
				'type'    => 'textarea',
				'title'   => esc_html__( 'Apointment Form', 'computer-repair' ),
				'default' => '',
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Modal 2 Settings', 'computer-repair' ),
		'id'               => 'modal2_settings',
		'desc'             => esc_html__( 'Modal 2 Settings form', 'computer-repair' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website-alt',
		'fields'           => array(
			array(
				'id'       => 'is_modal2_enable',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable or Disable', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable modal 2 on site', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => 'modal2_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Modal 2 Title', 'computer-repair' ),
				'subtitle' => esc_html__( 'Modal 2 title which one will be shown at top of modal', 'computer-repair' ),
				'default'  => 'Make an Appointment',
			),
			array(
				'id'      => 'modal2_mc_form',
				'type'    => 'textarea',
				'title'   => esc_html__( 'Apointment Form', 'computer-repair' ),
				'default' => '',
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Typography', 'computer-repair' ),
		'id'               => 'fonts_settings',
		'desc'             => esc_html__( 'Typography', 'computer-repair' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-font',
		'fields'           => array(
			array(
				'id'         => $opt_prefix . '-body_typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'Body Typography', 'computer-repair' ),
				'subtitle'   => esc_html__( 'Select body font family, size, line height, color and weight.', 'computer-repair' ),
				'text-align' => false,
				'subsets'    => false,
				'default'    => array(
					'font-family' => 'Open Sans',
					'google'      => true,
					'font-size'   => '14px',
					'line-height' => '22px',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-1-2-lg-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H1, H2 lg Font', 'computer-repair' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'computer-repair' ),
				'text-align' => false,
				'default'    => array(
					'font-family' => "'Chivo', sans-serif",
					'google'      => true,
					'font-size'   => '40px',
					'line-height' => '50px',
					'color'       => '#292929',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-2-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H2 Font', 'computer-repair' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'computer-repair' ),
				'text-align' => false,
				'default'    => array(
					'font-family' => "'Chivo', sans-serif",
					'google'      => true,
					'font-size'   => '40px',
					'line-height' => '40px',
					'color'       => '#292929',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-3-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H3 Font', 'computer-repair' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'computer-repair' ),
				'text-align' => false,
				'default'    => array(
					'font-family' => "'Chivo', sans-serif",
					'google'      => true,
					'font-size'   => '32px',
					'color'       => '#292929',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-4-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H4 Font', 'computer-repair' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'computer-repair' ),
				'text-align' => false,
				'default'    => array(
					'font-family' => "'Chivo', sans-serif",
					'google'      => true,
					'font-size'   => '22px',
					'line-height' => '28px',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-5-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H5 Font', 'computer-repair' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'computer-repair' ),
				'text-align' => false,
				'default'    => array(
					'google'      => true,
					'font-size'   => '18px',
					'line-height' => '24px',
				),
			),
			array(
				'id'         => $opt_prefix . '-heading-6-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H6 Font', 'computer-repair' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'computer-repair' ),
				'text-align' => false,
				'default'    => array(
					'google'      => true,
					'font-size'   => '15px',
					'line-height' => '20px',
				),
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Footer Settings', 'computer-repair' ),
		'id'               => 'footer_settings',
		'desc'             => esc_html__( 'These are really basic fields!', 'computer-repair' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-share',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . '-footer-style',
				'type'     => 'select',
				'title'    => __( 'Footer Design', 'computer-repair' ),
				'subtitle' => __( 'Select header design type', 'computer-repair' ),
				'options'  => array(
					'1' => 'Style 1',
					'2' => 'Style 2',
				),
				'default'  => '1',
			),
			array(
				'id'      => $opt_prefix . '-footer_social_facebook',
				'type'    => 'text',
				'title'   => esc_html__( 'Facebook URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-footer_social_twitter',
				'type'    => 'text',
				'title'   => esc_html__( 'Twitter URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-footer_social_google_plus',
				'type'    => 'text',
				'title'   => esc_html__( 'Google Plus URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-footer_social_pinterest',
				'type'    => 'text',
				'title'   => esc_html__( 'Pinterest URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-footer_social_linkedin',
				'type'    => 'text',
				'title'   => esc_html__( 'Linkedin URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-footer_social_instagram',
				'type'    => 'text',
				'title'   => esc_html__( 'Instagram URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-footer_social_tumblr',
				'type'    => 'text',
				'title'   => esc_html__( 'Tumblr URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . '-footer_social_vimeo',
				'type'    => 'text',
				'title'   => esc_html__( 'Vimeo URL', 'computer-repair' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'    => $opt_prefix . '-footer_social_youtube',
				'type'  => 'text',
				'title' => esc_html__( 'Youtube URL', 'computer-repair' ),
			),
			array(
				'id'    => $opt_prefix . '-footer_social_whatsapp',
				'type'  => 'text',
				'title' => esc_html__( 'Whatsapp URL', 'computer-repair' ),
			),
			array(
				'id'    => $opt_prefix . '-footer_social_snapchat',
				'type'  => 'text',
				'title' => esc_html__( 'Snapchat URL', 'computer-repair' ),
			),
			array(
				'id'      => $opt_prefix . '-footer_contact_info',
				'type'    => 'text',
				'title'   => esc_html__( 'Contact Text', 'computer-repair' ),
				'default' => false,
			),
			array(
				'id'      => $opt_prefix . '-footer_contact_phone',
				'type'    => 'text',
				'title'   => esc_html__( 'Contact Phone No', 'computer-repair' ),
				'default' => false,
			),
			array(
				'id'      => $opt_prefix . '-footer_contact_location',
				'type'    => 'editor',
				'title'   => esc_html__( 'Contact Location', 'computer-repair' ),
				'default' => false,
			),
			array(
				'id'      => $opt_prefix . '-footer_business_hours',
				'type'    => 'editor',
				'title'   => esc_html__( 'Business Hours', 'computer-repair' ),
				'default' => false,
			),
			array(
				'id'      => $opt_prefix . '-footer_email',
				'type'    => 'editor',
				'title'   => esc_html__( 'Footer Email Address', 'computer-repair' ),
				'default' => false,
			),
			array(
				'id'      => $opt_prefix . '-footer_link_one_url',
				'type'    => 'text',
				'title'   => esc_html__( 'Footer Quick Link One URL', 'computer-repair' ),
				'default' => false,
			),
			array(
				'id'      => $opt_prefix . '-footer_link_one_text',
				'type'    => 'text',
				'title'   => esc_html__( 'Footer Quick Link One Text', 'computer-repair' ),
				'default' => false,
			),
			array(
				'id'      => $opt_prefix . '-footer_link_two_url',
				'type'    => 'text',
				'title'   => esc_html__( 'Footer Quick Link Two URL', 'computer-repair' ),
				'default' => false,
			),
			array(
				'id'      => $opt_prefix . '-footer_link_two_text',
				'type'    => 'text',
				'title'   => esc_html__( 'Footer Quick Link Two Text', 'computer-repair' ),
				'default' => false,
			),
			array(
				'id'       => $opt_prefix . '-footer_copyright',
				'type'     => 'text',
				'title'    => esc_html__( 'Copyright', 'computer-repair' ),
				'subtitle' => esc_html__( 'Copyright Text', 'computer-repair' ),
				'default'  => false,
			),
			array(
				'id'       => $opt_prefix . '-footer_map',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show Contact Map In Footer', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable Show Contact Map In Footer', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-gmap_api_key',
				'type'     => 'text',
				'title'    => esc_html__( 'Google Map Api Key', 'computer-repair' ),
				'subtitle' => esc_html__( 'Set Google Map Api Key', 'computer-repair' ),
				'default'  => '',
			),
			array(
				'id'       => $opt_prefix . '-gmap_latitude',
				'type'     => 'text',
				'title'    => esc_html__( 'Latitude', 'computer-repair' ),
				'subtitle' => esc_html__( 'The latitude  to center the map ', 'computer-repair' ),
				'default'  => '37.36274700000004',
			),
			array(
				'id'       => $opt_prefix . '-gmap_longitude',
				'type'     => 'text',
				'title'    => esc_html__( 'Longitude', 'computer-repair' ),
				'subtitle' => esc_html__( 'The longitude  to center the map ', 'computer-repair' ),
				'default'  => '-122.03525300000001',
			),
			array(
				'id'       => $opt_prefix . '-gmap_marker',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Google Map Marker.', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload mobile logo using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Map Marker', 'computer-repair' ),
				'default'  => array(
					'url' => esc_url( COMPUTER_REPAIR_THEME_URI . '/images/map-marker.png' ),
				),
			),
			array(
				'id'       => $opt_prefix . '-backTo_tor',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Back To Top Icon Change', 'computer-repair' ),
				'subtitle' => esc_html__( 'Add/Upload back to top icon using the WordPress native uploader', 'computer-repair' ),
				'title'    => esc_html__( 'Back To Top', 'computer-repair' ),
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Device Settings', 'computer-repair' ),
		'id'               => 'device_settings',
		'desc'             => esc_html__( 'These are really basic fields!', 'computer-repair' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-share',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . '-device_cart',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show Cart Button In Device Service', 'computer-repair' ),
				'subtitle' => esc_html__( 'Show Cart Button In Device Service', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-slug_postype_computer_devices',
				'type'     => 'text',
				'title'    => esc_html__( 'Slug Computer Repair Device', 'computer-repair' ),
				'subtitle' => esc_html__( 'Change Computer Repair Device Slug Name', 'computer-repair' ),
				'default'  => 'devices',
			),
			array(
				'id'      => $opt_prefix . '-device_virtual',
				'type'    => 'switch',
				'title'   => esc_html__( 'Is Virtual Product', 'computer-repair' ),
				'default' => true,
				'on'      => esc_html__( 'Enable', 'computer-repair' ),
				'off'     => esc_html__( 'Disable', 'computer-repair' ),
			),

		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'  => esc_html__( 'Shop Section', 'computer-repair' ),
		'id'     => 'shop_option_panale',
		'desc'   => esc_html__( 'Change Shop Option', 'computer-repair' ),
		'icon'   => 'el el-home',
		'fields' => array(
			array(
				'id'       => $opt_prefix . '-product_per_page',
				'type'     => 'text',
				'title'    => esc_html__( 'Product Per Page', 'computer-repair' ),
				'subtitle' => esc_html__( 'Change Product Per page', 'computer-repair' ),
				'default'  => '9',
			),
		),
	)
);


Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Extra Settings', 'computer-repair' ),
		'id'               => 'extra_settings',
		'desc'             => esc_html__( 'These are really basic fields!', 'computer-repair' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-share',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . '-gradient_enable',
				'type'     => 'switch',
				'title'    => esc_html__( 'Gradient Color Enable or Disable', 'computer-repair' ),
				'subtitle' => esc_html__( 'Enable or Disable Gradient for site', 'computer-repair' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'computer-repair' ),
				'off'      => esc_html__( 'Disable', 'computer-repair' ),
			),
			array(
				'id'       => $opt_prefix . '-slug_postype_computer_services',
				'type'     => 'text',
				'title'    => esc_html__( 'Slug Computer Repair Services', 'computer-repair' ),
				'subtitle' => esc_html__( 'Change Computer Repair Service Slug Name', 'computer-repair' ),
				'default'  => '', // laundry_services
			),
			array(
				'id'       => $opt_prefix . '-slug_postype_computer_service_price_tab',
				'type'     => 'text',
				'title'    => esc_html__( 'Slug Computer Repair Service Price Tab', 'computer-repair' ),
				'subtitle' => esc_html__( 'Change Computer Repair Service Price Tab Slug Name', 'computer-repair' ),
				'default'  => '', // laundry_services
			),
			array(
				'id'       => $opt_prefix . '-slug_postype_computer_services_archive',
				'type'     => 'text',
				'title'    => esc_html__( 'Computer Repair Services Archive Page Name', 'computer-repair' ),
				'subtitle' => esc_html__( 'Change Computer Repair Service Page Name', 'computer-repair' ),
				'default'  => '', // laundry_services
			),
			array(
				'id'       => 'extra_css',
				'type'     => 'ace_editor',
				'title'    => esc_html__( 'Extra CSS', 'computer-repair' ),
				'subtitle' => esc_html__( 'Extra CSS just after theme styles', 'computer-repair' ),
				'mode'     => 'css',
			),
		),
	)
);
