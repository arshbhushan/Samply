<?php
get_header();
?>
    <main id="site-content" class="container flex-grow-1 pb-5 mt-3" role="main">
        <h2 class="text-center mb-4 font-weight-600"><?php
            printf(wp_kses(__('Ooops. %sPage Not Found!%s', 'hoka'), 'regular'),'<span class="pr-color">', '</span>' ); ?></h2>
        <div class="text-center">
            <h6><?php
                printf(wp_kses(__('The page you are looking for doesnt exist.%s Looks like you are in the wrong place.%s Let us guide you back!', 'hoka'), 'regular'),'<br>','<br>'); ?></h6>
        </div>
        <a class="d-block text-center my-5" href="<?php echo home_url(); ?>">
            <div class="d-inline-block elementor-button-link elementor-button elementor-size-md"><?php esc_html_e('Go to homepage', 'hoka'); ?></div>
        </a>
    </main><!-- #site-content -->
<?php
get_footer();