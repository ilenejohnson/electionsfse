<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elections FSE
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function elections_fse_styles()
{
    wp_enqueue_style(
        'ec-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'elections_fse_styles');

if (! function_exists('elections_fse_setup')) {
    function elections_fse_setup()
    {
        add_theme_support('wp-block-styles');
    }
}
add_action('after_setup_theme', 'elections_fse_setup');
function fse_register_pattern_categories()
{
    $block_pattern_categories = array(
        'electionsfse-headers' => array('label' => __('Elections FSE: Header Layouts', 'electionsfse')),
        'electionsfse-footers' => array('label' => __('Elections FSE: Footer Layouts', 'electionsfse')),
        'electionsfse-page-parts' => array('label' => __('Elections FSE: Contents', 'electionsfse')),

        'electionsfse' => array('label' => __('Elections FSE: All Patterns', 'electionsfse')),
    );

    $block_pattern_categories = apply_filters('fse_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
        }
    }
}

add_action('init', 'fse_register_pattern_categories', 9);
function fse_block_assets()
{
    wp_enqueue_style('fse-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'fse_block_assets');

function fse_register_block_styles()
{
    register_block_style(
        'core/button',
        array(
            'name'  => 'button-hover-accent-lite-bgcolor',
            'label' => __('Button hover: Accent Lite', 'electionsfse')
        )
    );
    register_block_style(
        'core/image',
        array(
            'name'  => 'electionsfse-invertimage',
            'label' => __('Invert Image', 'electionsfse')
        )
    );
    register_block_style(
        'core/quote',
        array(
            'name'  => 'electionsfse-block-quote',
            'label' => __('Quotation marks', 'electionsfse')
        )
    );
    register_block_style(
        'core/list',
        array(
            'name'  => 'electionsfse-no-decoration',
            'label' => __('No decoration', 'electionsfse')
        )
    );



}

add_action('init', 'fse_register_block_styles');
