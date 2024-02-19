<?php
/**
 * Architect Construction functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package architect-construction
 * @since architect-construction 1.0
 */

if ( ! function_exists( 'architect_construction_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since architect-construction 1.0
	 *
	 * @return void
	 */
	function architect_construction_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'architect_construction_support' );

if ( ! function_exists( 'architect_construction_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since architect-construction 1.0
	 *
	 * @return void
	 */
	function architect_construction_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'architect-construction-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'architect-construction-animate-css', 
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'architect-construction-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'architect_construction_styles' );

/* Enqueue Wow Js */
function architect_construction_scripts() {
	wp_enqueue_script( 
		'architect-construction-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);
}
add_action( 'wp_enqueue_scripts', 'architect_construction_scripts' );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// Get Started
require get_template_directory() . '/get-started/getstart.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Upsell
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Architect_Construction_Upsell_Section extends WP_Customize_Section {
		public $type = 'architect-construction-upsell';
		public $button_text = '';
		public $url = '';
		public $background_color = '';
		public $text_color = '';
		protected function render() {
			$background_color = ! empty( $this->background_color ) ? esc_attr( $this->background_color ) : '#ff9f33';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="architect_construction_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="color:#fff; background:<?php echo esc_attr( $background_color ); ?>;border-left-color:<?php echo esc_attr( $background_color ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

/**
 * Display the admin notice if not dismissed.
 */
function architect_construction_admin_notice() {
    // Check if the notice is dismissed
    $dismissed = get_user_meta(get_current_user_id(), 'architect_construction_dismissed_notice', true);

    // Display the notice only if not dismissed
    if (!$dismissed) {
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex;padding: 10px;">
            <p><?php echo esc_html('Initiate your theme exploration by clicking on the "Getting Started" Button.', 'architect-construction'); ?></p>
            <a style="margin-left: 30px;" class="button button-primary"
               href="<?php echo esc_url(admin_url('themes.php?page=architect-construction')); ?>"><?php esc_html_e('Getting Started', 'architect-construction') ?></a>
        </div>
        <?php
    }
}

// Hook to display the notice
add_action('admin_notices', 'architect_construction_admin_notice');

/**
 * AJAX handler to dismiss the notice.
 */
function architect_construction_dismissed_notice() {
    // Set user meta to indicate the notice is dismissed
    update_user_meta(get_current_user_id(), 'architect_construction_dismissed_notice', true);
    die();
}

// Hook for the AJAX action
add_action('wp_ajax_architect_construction_dismissed_notice', 'architect_construction_dismissed_notice');

/**
 * Clear dismissed notice state when switching themes.
 */
function architect_construction_switch_theme() {
    // Clear the dismissed notice state when switching themes
    delete_user_meta(get_current_user_id(), 'architect_construction_dismissed_notice');
}

// Hook for switching themes
add_action('after_switch_theme', 'architect_construction_switch_theme');