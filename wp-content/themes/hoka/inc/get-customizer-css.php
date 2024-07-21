<?php
/*
 * Generates inline CSS from Customizer settings.
 */
if (!function_exists('hoka_get_customizer_css')) {
    function hoka_get_customizer_css()
    {
        ob_start();

        get_template_part('template-parts/header-variables');

        echo '#main-header {position: relative; margin-bottom: 32px;}';
        echo '#site-footer {position: relative;}';
        echo '#header-wave {margin-bottom: -1px; width: 100%;}';
        echo '#magic-search .search-submit {display: none;}';
        echo '.onsale .onsale-svg {height: 100%;}';
        echo '#header-wave * {fill: transparent;} @media (max-width: 1199px){#header-wave {height: 20px;} :root #main-header{margin-bottom: 32px;}} @media (min-width: 1200px){#header-wave {height: 45px;} :root #main-header{padding-top: 50px; margin-bottom: 50px;}}';
        echo '.header-icons {display: none;} @media (max-width: 1199px) {.header-info {margin-top: 1rem;}}'; // Disable header search and cart icons

        if (get_theme_mod('meta_cat_switcher', true)) {
            echo '.entry-categories {display: none;}';
        }

        if (get_theme_mod('meta_author_switcher', true)) {
            echo '.post-author {display: none;}';
        }

        if (get_theme_mod('meta_date_switcher', true)) {
            echo '.blog-tile .post-date {display: none;}';
        }

        if (get_theme_mod('meta_comm_switcher', true)) {
            echo '.post-comment-link {display: none;}';
        }

        if (get_theme_mod('meta_pr_cat_switcher', true)) {
            echo '.product_meta .posted_in {display: none;}';
        }

        // Disable icon before title
        if (get_theme_mod('icon_before_title_switcher', false)) {
            echo '.wrap-entry-categories-inner:before, .widget-title:before, .single-product .product_meta > span:before, form[name="checkout"] h4:before, .elementor-accordion .elementor-accordion-title:before, .ngg-album-compact h4 .ngg-album-desc:before, .wpcf7-form .theme-contact-form h6:before, .blog-tile .entry-categories-inner:before, .related.products h6:before, .upsells.products h6:before, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a:before, .woocommerce div.product .woocommerce-tabs ul.tabs li a:before, .woocommerce div.product form.cart .variations label:before, #review_form .comment-reply-title:before, .woocommerce ul.product_list_widget li .reviewer:before, .woocommerce-result-count:before, .cart_totals h4:before, .woocommerce-MyAccount-navigation li a:before, .h5-styled:before {display: none;}';
        }

        return ob_get_clean();
    }
}