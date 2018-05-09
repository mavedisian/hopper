<?php get_header(); ?>

    <?php if (have_posts()): ?>

        <?php while (have_posts()): the_post(); ?>

            <?php get_template_part('parts/content', get_post_type()); ?>

        <?php endwhile; ?>

    <?php else: ?>

        <?php get_template_part('parts/content', 'none'); ?>

    <?php endif; ?>

	<?php if (function_exists('hopper_pagination')) hopper_pagination(); ?>

<?php get_footer(); ?>