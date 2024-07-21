<?php
/**
 * Customizer settings for this theme.
 * @since Hoka 1.0
 */
if (!class_exists('hoka_Customize')) {
    /**
     * CUSTOMIZER SETTINGS
     */
    class hoka_Customize
    {

        /**
         * Register customizer options.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public static function register($wp_customize)
        {
            /* ========================================================================= */
            /*
             * COLORS
             */

            // Primary color
            $wp_customize->add_setting('pr_color', array(
                'default' => '#2d65ee',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pr_color', array(
                'section' => 'colors',
                'label' => esc_html__('Primary color', 'hoka'),
                'description' => esc_html__('Sets main accent color.', 'hoka'),
            )));


            // Primary links hover color
            $wp_customize->add_setting('pr_links_h_color', array(
                'default' => '#161518',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pr_links_h_color', array(
                'section' => 'colors',
                'label' => esc_html__('Primary hover color', 'hoka'),
                'description' => esc_html__('Sets link hover color.', 'hoka'),
            )));


            // Primary background color
            $wp_customize->add_setting('pr_bg_color', array(
                'default' => '#eef3ff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pr_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Primary background color', 'hoka'),
                'description' => esc_html__("Changes accent background color.", 'hoka'),
            )));


            // Header background color
            $wp_customize->add_setting('h_bg_color', array(
                'default' => '#f8f9fa',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Header background color', 'hoka'),
                'description' => esc_html__("Changes header background color. If there is no changing of the header color that means the current page uses Elementor builder’s header instead of the site's global, so you need to change the color on the page.", 'hoka'),
            )));


            // Footer background color
            $wp_customize->add_setting('f_bg_color', array(
                'default' => '#f8f8f8',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'f_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Footer background color', 'hoka'),
                'description' => esc_html__("Changes footer background color.", 'hoka'),
            )));


            // Primary dark color
            $wp_customize->add_setting('pr_d_color', array(
                'default' => '#161518',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pr_d_color', array(
                'section' => 'colors',
                'label' => esc_html__('Primary dark color', 'hoka'),
                'description' => esc_html__('Sets text color in paragraphs.', 'hoka'),
            )));


            // h1 title color
            $wp_customize->add_setting('title_color', array(
                'default' => '#161518',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'title_color', array(
                'section' => 'colors',
                'label' => esc_html__('Title color', 'hoka'),
                'description' => esc_html__('Sets color for titles.', 'hoka'),
            )));


            // Footer widget title color
            $wp_customize->add_setting('fw_title_color', array(
                'default' => '#161518',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fw_title_color', array(
                'section' => 'colors',
                'label' => esc_html__('Footer widget title color', 'hoka'),
            )));


            // Button background color
            $wp_customize->add_setting('btn_bg_color', array(
                'default' => '#2d65ee',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'btn_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Button background color', 'hoka'),
            )));


            // Button hover color
            $wp_customize->add_setting('btn_h_color', array(
                'default' => '#161518',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'btn_h_color', array(
                'section' => 'colors',
                'label' => esc_html__('Button hover color', 'hoka'),
            )));


            // Text selection background color
            $wp_customize->add_setting('txt_select_bg_color', array(
                'default' => '#ffe8e6',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'txt_select_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Text selection background color', 'hoka'),
                'description' => esc_html__('Changes text selection background color. Try to select text on a page.', 'hoka'),
            )));
            

            /* end COLORS */
            /* ========================================================================= */
            /*
             * HEADER
             */

            $wp_customize->add_section('header', array(
                'title' => esc_html__('Header', 'hoka')
            ));


            // Enable CTA button in the header
            $wp_customize->add_setting('h_cta_btn_switcher', array(
                'default' => false,
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('h_cta_btn_switcher', array(
                'section' => 'header',
                'label' => esc_html__('Enable CTA button (call-to-action).', 'hoka'),
                'type' => 'checkbox'
            ));


            // Header CTA button link
            $wp_customize->add_setting('h_cta_btn_link', array(
                'default' => esc_html__('/contact-us', 'hoka'),
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('h_cta_btn_link', array(
                'section' => 'header',
                'label' => esc_html__('CTA button link:', 'hoka'),
                'type' => 'text'
            ));


            // Header CTA button text
            $wp_customize->add_setting('h_cta_btn_txt', array(
                'default' => esc_html__('Buy Now', 'hoka'),
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('h_cta_btn_txt', array(
                'section' => 'header',
                'label' => esc_html__('CTA button text:', 'hoka'),
                'type' => 'text'
            ));


            // Sticky header
            $wp_customize->add_setting('sticky_header_switcher', array(
                'default' => false,
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('sticky_header_switcher', array(
                'section' => 'header',
                'label' => esc_html__('Sticky header', 'hoka'),
                'type' => 'checkbox'
            ));


            /* end HEADER */
            /* ========================================================================= */
            /*
             * FOOTER
             */

            $wp_customize->add_section('footer', array(
                'title' => esc_html__('Footer', 'hoka')
            ));

            // Switcher for Copyright text
            $wp_customize->add_setting('copyright_text_switcher', array(
                'default' => false,
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('copyright_text_switcher', array(
                'section' => 'footer',
                'label' => esc_html__('Disable "Copyright" text before the year', 'hoka'),
                'type' => 'checkbox'
            ));

            // Custom copyright
            $wp_customize->add_setting('copyright_text', array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('copyright_text', array(
                'section' => 'footer',
                'label' => esc_html__('Custom copyright text.', 'hoka'),
                'description' => esc_html__('Leave blank to use default copyright.', 'hoka'),
                'type' => 'text'
            ));


            /* end FOOTER */
            /* ========================================================================= */
            /*
             * TWEAKS
             */

            $wp_customize->add_section('tweaks', array(
                'title' => esc_html__('Tweaks', 'hoka')
            ));


            // Disable post category meta text
            $wp_customize->add_setting('meta_cat_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('meta_cat_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable post category meta text', 'hoka'),
                'type' => 'checkbox'
            ));


            // Disable date meta text
            $wp_customize->add_setting('meta_date_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('meta_date_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable date meta text', 'hoka'),
                'type' => 'checkbox'
            ));


            // Disable post author meta text
            $wp_customize->add_setting('meta_author_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('meta_author_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable post author meta text', 'hoka'),
                'type' => 'checkbox'
            ));


            // Disable post comments meta text
            $wp_customize->add_setting('meta_comm_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('meta_comm_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable post comments meta text', 'hoka'),
                'type' => 'checkbox'
            ));


            // Disable icon before title
            $wp_customize->add_setting('icon_before_title_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('icon_before_title_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable icon before title', 'hoka'),
                'type' => 'checkbox'
            ));


            /* end TWEAKS */
            /* ========================================================================= */


            /* -----------------------------*/
            /* end Customize Settings */
            /* -----------------------------*/
        }
    }


    // Setup the Theme Customizer settings and controls.
    add_action('customize_register', array('hoka_Customize', 'register'));

}