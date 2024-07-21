<footer id="site-footer" <?php
if (is_page_template('page-templates/template-full-width-page-without-header-title-white.php')){
    echo 'class="nav-white-desktop"';
}
?> role="contentinfo">

    <div id="footer-wave"></div>

    <div class="footer-bg">

        <div class="footer-inner container-xl">

            <?php get_template_part('template-parts/footer-widgets'); ?>

            <div class="footer-bottom">

                <div class="footer-credits">

                    <p class="footer-copyright"><?php if (false == get_theme_mod('copyright_text_switcher')) {
                            echo 'Copyright ';
                        } ?>&copy;<?php
                        echo date_i18n(
                        /* translators: Copyright date format, see https://www.php.net/date */
                            esc_html_x('Y ', 'copyright date format', 'hoka')
                        );
                        $cop_txt = get_theme_mod('copyright_text');
                        if ('' == $cop_txt) {
                            bloginfo('name');
                            esc_html_e('. All rights reserved. ', 'hoka');
                        } else {
                            echo wp_kses($cop_txt, 'regular');
                        } ?>

                    </p><!-- .footer-copyright -->

                </div><!-- .footer-credits -->

                <nav class="footer-menu-wrapper" aria-label="<?php esc_attr_e('Footer', 'hoka'); ?>" role="navigation">
                    <ul class="footer-menu">
                        <?php
                        if (has_nav_menu('footer')) {
                            wp_nav_menu(
                                array(
                                    'container' => '',
                                    'depth' => 1,
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'footer',
                                )
                            );
                        }
                        ?>
                    </ul>
                </nav>

            </div><!-- .footer-bottom  -->

        </div><!-- .footer-inner -->

    </div>

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>
