<?php

function amsel_enqueue_styles() {
	wp_enqueue_style(
		'amsel-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'amsel_enqueue_styles' );

if ( ! function_exists( 'amsel_setup' ) ) {
	function amsel_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'amsel_setup' );

function amsel_register_block_styles() {
	$uri = esc_url( get_template_directory_uri() );

	// Accent: Waves — decorative blob behind image, fully absolute, no layout impact
	register_block_style( 'core/image', array(
		'name'         => 'accent-waves',
		'label'        => __( 'Accent: Waves', 'amsel' ),
		'inline_style' => '
			.wp-block-image.is-style-accent-waves {
				position: relative;
				overflow: visible;
				padding: 40px;
				margin-right: -40px;
			}
			.wp-block-image.is-style-accent-waves::before {
				content: "";
				position: absolute;
				top: -60px;
				left: -80px;
				right: -80px;
				bottom: -60px;
				background-image: url("' . $uri . '/assets/images/hero-blob.svg");
				background-repeat: no-repeat;
				background-position: center center;
				background-size: contain;
				z-index: 0;
				pointer-events: none;
			}
			.wp-block-image.is-style-accent-waves img {
				position: relative;
				z-index: 1;
			}
			@media (max-width: 781px) {
				.wp-block-image.is-style-accent-waves {
					padding: 0px;
					margin-right: 0;
				}
				.wp-block-image.is-style-accent-waves::before {
					top: -30px;
					left: -40px;
					right: -40px;
					bottom: -30px;
				}
			}
		',
	) );
}
add_action( 'init', 'amsel_register_block_styles' );

function amsel_register_pattern_categories() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'amsel',
			array(
				'label' => __( 'Amsel', 'amsel' ),
				'description' => __( 'Amsel patterns', 'amsel' ),
			)
		);
	}
}

add_action( 'init', 'amsel_register_pattern_categories' );

function amsel_setup_notice() {
	$is_dismissed = get_option( 'amsel_setup_notice_dismissed' );

	if ( ! $is_dismissed && current_user_can( 'edit_theme_options' ) ) {
		$image_url   = get_template_directory_uri() . '/assets/images/me.jpg';
		$notice_text = '<img src="' . esc_url( $image_url ) . '" style="max-width: 100%;" alt="" />
		<div class="amsel-notice-text" style="margin-top: 15px;">
			<h3 style="margin-top: 0px; font-size: 18px;">' . __( 'Hi, I\'m Roman Fink, the creator of the Amsel theme!', 'amsel' ) . ' 😊</h3>
			<p style="margin: 5px 0 0;"><b>' . __( 'Just CLOSE this notice to hide it forever. Thanks for your support!', 'amsel' ) . ' 🚀</b></p>
		</div>';
		echo '<div id="amsel-notice" class="notice notice-info is-dismissible">' . wp_kses_post( $notice_text ) . '</div>';
	}
}
add_action( 'admin_notices', 'amsel_setup_notice' );

function amsel_notice_assets() {
	if ( get_option( 'amsel_setup_notice_dismissed' ) || ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}
	wp_enqueue_style( 'amsel-admin-notice', get_template_directory_uri() . '/assets/css/admin-notice.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'amsel-notice-script', get_template_directory_uri() . '/assets/js/admin-notice.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
	wp_localize_script(
		'amsel-notice-script',
		'amselNotice',
		array(
			'nonce' => wp_create_nonce( 'amsel_dismiss_notice' ),
		)
	);
}
add_action( 'admin_enqueue_scripts', 'amsel_notice_assets' );

function amsel_dismiss_notice() {
	check_ajax_referer( 'amsel_dismiss_notice', 'nonce' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die();
	}
	update_option( 'amsel_setup_notice_dismissed', true );
	wp_die();
}
add_action( 'wp_ajax_amsel_dismiss_notice', 'amsel_dismiss_notice' );

// --- Amsel About Page ---

function amsel_add_about_page() {
	add_theme_page(
		__( 'About Amsel', 'amsel' ),
		__( 'About Amsel', 'amsel' ),
		'edit_theme_options',
		'amsel-about',
		'amsel_about_page_html'
	);
}
add_action( 'admin_menu', 'amsel_add_about_page' );

function amsel_about_page_styles( $hook ) {
	if ( 'appearance_page_amsel-about' !== $hook ) {
		return;
	}
	wp_enqueue_style( 'amsel-about-page', get_template_directory_uri() . '/assets/css/admin-about.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'admin_enqueue_scripts', 'amsel_about_page_styles' );

function amsel_about_page_html() {
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' );
	$image   = get_template_directory_uri() . '/assets/images/me.jpg';
	?>
	<div class="wrap amsel-about-wrap">
		<h1><?php esc_html_e( 'Amsel Theme', 'amsel' ); ?> <span class="amsel-version"><?php echo esc_html( $version ); ?></span></h1>

		<div class="amsel-about-columns">
			<div class="amsel-about-card amsel-about-author">
				<img src="<?php echo esc_url( $image ); ?>" alt="Roman Fink" class="amsel-author-photo" />
				<h2><?php esc_html_e( 'Hi, I\'m Roman Fink', 'amsel' ); ?></h2>
				<p><?php esc_html_e( 'The creator of the Amsel theme! With alpaca\'s help, of course.', 'amsel' ); ?> 😊</p>
			</div>



		</div>
	</div>
	<?php
}
