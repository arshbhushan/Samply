<?php
/**
 * The template for displaying Author info.
 */
if ((bool)get_the_author_meta('description') && (bool)get_theme_mod('show_author_bio', true)) : ?>
    <div class="author-bio">
        <div class="author-title-wrapper">
            <div class="author-avatar">
                <?php echo get_avatar(get_the_author_meta('ID'), 160); ?>
            </div>
            <h6 class="author-title">
                <?php
                printf(
                /* translators: %s: Author name. */
                    esc_html__('By %s', 'hoka'),
                    esc_html(get_the_author())
                );
                ?>
            </h6>
        </div><!-- .author-name -->
        <div class="author-description">
            <?php echo wp_kses(wpautop(get_the_author_meta('description')),'post'); ?>
            <a class="author-link" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
               rel="author">
                <?php printf(wp_kses(__('View Archive %s&rarr;%s', 'hoka'), 'regular'),'<span aria-hidden="true">','</span>'); ?>
            </a>
        </div><!-- .author-description -->
    </div><!-- .author-bio -->
<?php endif; ?>