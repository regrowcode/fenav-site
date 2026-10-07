<?php
/**
 * Single post template file.
 *
 * @package TailPress
 */

get_header();
?>

<div class="container my-12 md:my-20 mx-auto px-4 max-w-5xl">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/content', 'single'); ?>

            <?php if (comments_open() || get_comments_number()): ?>
                <div class="mt-16 pt-12 border-t border-gray-200 max-w-3xl mx-auto">
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php
get_footer();
