<?php
/**
 * A template partial to output pagination.
 */

$prev_text = sprintf(
    '%s <span class="nav-prev-text">%s</span>',
    '<span aria-hidden="true">&larr;</span>',
    sprintf(wp_kses(__( 'Newer %sPosts%s', 'hoka' ), 'regular'), '<span class="nav-short">', '</span>')
);

$next_text = sprintf(
    '<span class="nav-next-text">%s</span> %s',
    sprintf(wp_kses(__( 'Older %sPosts%s', 'hoka' ), 'regular'), '<span class="nav-short">', '</span>'),
    '<span aria-hidden="true">&rarr;</span>'
);

$posts_pagination = get_the_posts_pagination(
	array(
		'mid_size'  => 1,
		'prev_text' => $prev_text,
		'next_text' => $next_text,
	)
);

// If we're not outputting the previous page link, prepend a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'prev page-numbers' ) === false ) {
	$posts_pagination = str_replace( '<div class="nav-links">', '<div class="nav-links"><span class="prev page-numbers placeholder" aria-hidden="true">' . $prev_text . '</span>', $posts_pagination );
}

// If we're not outputting the next page link, append a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'next page-numbers' ) === false ) {
	$posts_pagination = str_replace( '</div>', '<span class="next page-numbers placeholder" aria-hidden="true">' . $next_text . '</span></div>', $posts_pagination );
}

if ( $posts_pagination ) { ?>

	<div class="pagination-wrapper section-inner">

		<?php
        // Already escaped during generation.
        echo wp_kses($posts_pagination, 'post'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- already escaped during generation. ?>

	</div><!-- .pagination-wrapper -->

	<?php
}
