<?php
/**
 * Displays widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 * @since Hoka 1.0
 */

$has_sidebar_1 = is_active_sidebar('sidebar-1');
$has_sidebar_2 = is_active_sidebar('sidebar-2');
$has_sidebar_3 = is_active_sidebar('sidebar-3');

// Only output the container if there are elements to display.
if ($has_sidebar_1 || $has_sidebar_2 || $has_sidebar_3) {
    ?>

    <div class="footer-top">
        <div class="row">

            <div class="ft-col-1 col-sm-12 col-lg-4">
                <?php if ($has_sidebar_1) { ?>
                    <?php dynamic_sidebar('sidebar-1'); ?>
                <?php } ?>
            </div>

            <div class="ft-col-2 col-sm-12 col-lg-4">
                <?php if ($has_sidebar_2) { ?>
                    <?php dynamic_sidebar('sidebar-2'); ?>
                <?php } ?>
            </div>

            <div class="ft-col-3 col-lg-4">
                <?php if ($has_sidebar_3) { ?>
                    <?php dynamic_sidebar('sidebar-3'); ?>
                <?php } ?>
            </div>

        </div>
    </div>

<?php } ?>