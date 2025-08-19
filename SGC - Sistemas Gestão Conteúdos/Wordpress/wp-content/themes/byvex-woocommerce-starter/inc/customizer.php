<?php

if (!defined('ABSPATH')) exit;

if (!class_exists('Byvex_Woocommerce_Starter_Customizer')) {
    class Byvex_Woocommerce_Starter_Customizer
    {

        private $tpl_dir_uri;

        private $default_body_font_url;
        private $default_body_font_name;
        private $default_excerpt_length;
        private $default_mail_from;
        private $default_mail_from_name;
        private $default_post_thumbnail_url;

        public function __construct()
        {
            $this->tpl_dir_uri = get_stylesheet_directory_uri();

            $this->default_body_font_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap';
            $this->default_body_font_name = 'Inter';
            $this->default_excerpt_length = 27;
            $this->default_mail_from = get_bloginfo('admin_email');
            $this->default_mail_from_name = get_bloginfo('name');
            $this->default_post_thumbnail_url = $this->tpl_dir_uri . '/img/default_post_thumbnail.png';

            add_filter('wp_mail_from', array($this, 'mail_from'));
            add_filter('wp_mail_from_name', array($this, 'mail_from_name'));
            add_action('customize_register', array($this, 'customize_register'));
            add_filter('excerpt_length', array($this, 'excerpt_length'));
            add_action('wp_head', array($this, 'customize_css'), 100);
            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        }

        function customize_register($wp_customize)
        {
            $wp_customize->add_panel('byvex_woocommerce_starter_customize_panel', array(
                'title' => __('Theme Settings', 'byvex-woocommerce-starter'),
            ));


            /**
             * Colors Section
             */
            $wp_customize->add_section('byvex_woocommerce_starter_colors', array(
                'title' => __('Colors', 'byvex-woocommerce-starter'),
                'panel' => 'byvex_woocommerce_starter_customize_panel'
            ));

            // Website Primary Color
            $wp_customize->add_setting('bws_primary_color', array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default' => '#6f42c1',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color',
            ));
            $wp_customize->add_control('bws_primary_color', array(
                'label' => __('Website Primary Color', 'byvex-woocommerce-starter'),
                'type' => 'color',
                'section' => 'byvex_woocommerce_starter_colors',
            ));

            // Primary Button Color
            $wp_customize->add_setting('bws_btn_primary_color', array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default' => '#6f42c1',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color',
            ));
            $wp_customize->add_control('bws_btn_primary_color', array(
                'label' => __('Primary Button Color', 'byvex-woocommerce-starter'),
                'type' => 'color',
                'section' => 'byvex_woocommerce_starter_colors',
            ));

            // Secondary Button Color
            $wp_customize->add_setting('bws_btn_secondary_color', array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default' => '#212529',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color',
            ));
            $wp_customize->add_control('bws_btn_secondary_color', array(
                'label' => __('Secondary Button Color', 'byvex-woocommerce-starter'),
                'type' => 'color',
                'section' => 'byvex_woocommerce_starter_colors',
            ));


            /**
             * General Section
             */
            $wp_customize->add_section('byvex_woocommerce_starter_general', array(
                'title' => __('General', 'byvex-woocommerce-starter'),
                'panel' => 'byvex_woocommerce_starter_customize_panel'
            ));

            // Excerpt Length
            $wp_customize->add_setting('bws_excerpt_length', array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default' => $this->default_excerpt_length,
                'transport' => 'refresh',
                'sanitize_callback' => 'absint',
            ));
            $wp_customize->add_control('bws_excerpt_length', array(
                'label' => __('Excerpt Length', 'byvex-woocommerce-starter'),
                'type' => 'number',
                'description' => esc_html('Default: ' . $this->default_excerpt_length, 'byvex-woocommerce-starter'),
                'section' => 'byvex_woocommerce_starter_general',
            ));

            // Default Post Thumbnail URL
            $wp_customize->add_setting('bws_post_thumbnail_url', array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default' => $this->default_post_thumbnail_url,
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field',
            ));
            $wp_customize->add_control('bws_post_thumbnail_url', array(
                'label' => __('Default Post Thumbnail Url', 'byvex-woocommerce-starter'),
                'type' => 'text',
                'description' => esc_html('Default: ' . $this->default_post_thumbnail_url, 'byvex-woocommerce-starter'),
                'section' => 'byvex_woocommerce_starter_general',
            ));

            // Body Font URL
            $wp_customize->add_setting('bws_body_font_url', array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default' => $this->default_body_font_url,
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field',
            ));
            $wp_customize->add_control('bws_body_font_url', array(
                'label' => __('Body Font Url', 'byvex-woocommerce-starter'),
                'type' => 'url',
                'description' => esc_html('Default: ' . $this->default_body_font_url, 'byvex-woocommerce-starter'),
                'section' => 'byvex_woocommerce_starter_general',
            ));

            // Body Font Name
            $wp_customize->add_setting('bws_body_font_name', array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default' => $this->default_body_font_name,
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field',
            ));
            $wp_customize->add_control('bws_body_font_name', array(
                'label' => __('Body Font Name', 'byvex-woocommerce-starter'),
                'type' => 'text',
                'description' => esc_html('Default: ' . $this->default_body_font_name, 'byvex-woocommerce-starter'),
                'section' => 'byvex_woocommerce_starter_general',
            ));


            /**
             * Backend Section
             */
            $wp_customize->add_section('byvex_woocommerce_starter_backend', array(
                'title' => __('Backend', 'byvex-woocommerce-starter'),
                'description' => __('These are server side settings and will not show prominent changes in look of website', 'byvex-woocommerce-starter'),
                'panel' => 'byvex_woocommerce_starter_customize_panel'
            ));

            // Mail From
            $wp_customize->add_setting('bws_mail_from', array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default' => $this->default_mail_from,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_email',
            ));
            $wp_customize->add_control('bws_mail_from', array(
                'label' => __('Mail from', 'byvex-woocommerce-starter'),
                'type' => 'email',
                'description' => esc_html('Default: ' . $this->default_mail_from, 'byvex-woocommerce-starter'),
                'section' => 'byvex_woocommerce_starter_backend',
            ));

            // Mail From Name
            $wp_customize->add_setting('bws_mail_from_name', array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default' => $this->default_mail_from_name,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field',
            ));
            $wp_customize->add_control('bws_mail_from_name', array(
                'label' => __('Mail from name', 'byvex-woocommerce-starter'),
                'type' => 'text',
                'description' => esc_html('Default: ' . $this->default_mail_from_name, 'byvex-woocommerce-starter'),
                'section' => 'byvex_woocommerce_starter_backend',
            ));
        }

        function mail_from($original_email_address)
        {
            $email = get_theme_mod('bws_mail_from', $this->default_mail_from);
            if (is_email($email)) {
                return $email;
            }
            return $original_email_address;
        }

        function mail_from_name($original_email_from)
        {
            $name = get_theme_mod('bws_mail_from_name', $this->default_mail_from_name);
            if ($name && trim($name) !== '') {
                return $name;
            }
            return $original_email_from;
        }

        function enqueue_scripts()
        {
            $font = get_theme_mod('bws_body_font_url', $this->default_body_font_url);
            wp_enqueue_style('bws-body-font', $font);
        }

        function excerpt_length($length)
        {
            $custom = get_theme_mod('bws_excerpt_length', $this->default_excerpt_length);
            if ($custom && absint($custom)) {
                return absint($custom);
            }
            return $length;
        }

        function customize_css()
        {
            $body_font = get_theme_mod('bws_body_font_name', $this->default_body_font_name);
            $primary_color = get_theme_mod('bws_primary_color', '#6f42c1');
            $btn_primary_color = get_theme_mod('bws_btn_primary_color', '#6f42c1');
            $btn_secondary_color = get_theme_mod('bws_btn_secondary_color', '#212529'); ?>
            <style>
                :root {
                    --bs-link-color: <?php echo esc_html($primary_color); ?>;
                    --bs-link-hover-color: <?php echo esc_html($primary_color); ?>;
                    --bs-primary-rgb: <?php echo esc_html(hex2rgb($primary_color, 1, true)); ?>;
                }

                body {
                    font-family: "<?php echo esc_html($body_font); ?>", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                }

                .accordion {
                    --bs-accordion-active-color: <?php echo esc_html($primary_color); ?>;
                    --bs-accordion-active-bg: <?php echo esc_html(hex2rgb($primary_color, 0.1)); ?>;
                    --bs-accordion-btn-focus-border-color: <?php echo esc_html(hex2rgb($primary_color, 0.2)); ?>;
                    --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem <?php echo esc_html(hex2rgb($primary_color, 0.25)); ?>;
                }

                .alert-primary {
                    --bs-alert-color: <?php echo esc_html(hex2rgb($primary_color, 0.9)); ?>;
                    --bs-alert-bg: <?php echo esc_html(hex2rgb($primary_color, 0.1)); ?>;
                    --bs-alert-border-color: <?php echo esc_html(hex2rgb($primary_color, 0.2)) ?>;
                }

                .alert-primary .alert-link {
                    color: <?php echo esc_html($primary_color); ?>;
                }

                .btn-close:focus {
                    box-shadow: 0 0 0 0.25rem <?php echo esc_html(hex2rgb($primary_color, 0.25)); ?>;
                }

                .btn-primary {
                    --bs-btn-bg: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-border-color: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-hover-border-color: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-hover-bg: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-active-bg: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-active-border-color: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-focus-box-shadow: 0 0 0 0.25rem <?php echo esc_html(hex2rgb($btn_primary_color, 0.25)); ?>;
                    --bs-btn-disabled-bg: <?php echo esc_html(hex2rgb($btn_primary_color, 0.5)); ?>;
                    --bs-btn-disabled-border-color: <?php echo esc_html(hex2rgb($btn_primary_color, 0.5)); ?>;
                }

                .btn-outline-primary {
                    --bs-btn-color: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-border-color: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-hover-bg: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-hover-border-color: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-active-bg: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-active-border-color: <?php echo esc_html($btn_primary_color); ?>;
                    --bs-btn-focus-box-shadow: 0 0 0 0.25rem <?php echo esc_html(hex2rgb($btn_primary_color, 0.25)); ?>;
                    --bs-btn-disabled-color: <?php echo esc_html(hex2rgb($btn_primary_color, 0.5)); ?>;
                    --bs-btn-disabled-border-color: <?php echo esc_html(hex2rgb($btn_primary_color, 0.5)); ?>;
                }

                .dropdown-menu {
                    --bs-dropdown-link-active-bg: <?php echo esc_html($primary_color); ?>;
                }

                .list-group {
                    --bs-list-group-active-bg: <?php echo esc_html($primary_color); ?>;
                    --bs-list-group-active-border-color: <?php echo esc_html($primary_color); ?>;
                }

                .list-group-item-primary {
                    color: <?php echo esc_html($primary_color); ?>;
                    background-color: <?php echo esc_html(hex2rgb($primary_color, 0.1)); ?>;
                }

                .nav-pills {
                    --bs-nav-pills-link-active-bg: <?php echo esc_html($primary_color); ?>;
                }

                .pagination {
                    --bs-pagination-focus-box-shadow: 0 0 0 0.25rem <?php echo esc_html(hex2rgb($primary_color, 0.25)); ?>;
                    --bs-pagination-focus-bg: <?php echo esc_html(hex2rgb($primary_color, 0.05)) ?>;
                    --bs-pagination-hover-bg: <?php echo esc_html(hex2rgb($primary_color, 0.05)) ?>;
                    --bs-pagination-active-bg: <?php echo esc_html($primary_color); ?>;
                    --bs-pagination-active-border-color: <?php echo esc_html($primary_color); ?>;
                }

                .progress {
                    --bs-progress-bar-bg: <?php echo esc_html($primary_color); ?>;
                }

                .form-control:focus,
                .form-select:focus {
                    border-color: <?php echo esc_html(hex2rgb($primary_color, 0.7)); ?>;
                    box-shadow: 0 0 0 0.25rem <?php echo esc_html(hex2rgb($primary_color, 0.25)); ?>;
                }

                .form-check-input:checked {
                    border-color: <?php echo esc_html($primary_color); ?>;
                    background-color: <?php echo esc_html($primary_color); ?>;
                }

                .form-check-input:focus {
                    border-color: <?php echo esc_html(hex2rgb($primary_color, 0.7)); ?>;
                    box-shadow: 0 0 0 0.25rem <?php echo esc_html(hex2rgb($primary_color, 0.25)); ?>;
                }

                .form-range::-webkit-slider-thumb {
                    background-color: <?php echo esc_html($primary_color); ?>;
                }

                .form-range:focus::-webkit-slider-thumb {
                    box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem <?php echo esc_html(hex2rgb($primary_color, 0.25)); ?>;
                }

                .form-range:focus::-moz-range-thumb {
                    box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem <?php echo esc_html(hex2rgb($primary_color, 0.25)); ?>;
                }

                .form-range::-webkit-slider-thumb:active {
                    background-color: <?php echo esc_html(hex2rgb($primary_color, 0.5)); ?>
                }
            </style><?php
                }
            }

            new Byvex_Woocommerce_Starter_Customizer();
        }
