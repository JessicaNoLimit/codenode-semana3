<?php get_header(); ?>

<main>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>
        <h1><?php the_title(); ?></h1>

        <p><?php the_field('informacion_extra'); ?></p>

        <div>
            <?php the_content(); ?>
        </div>
    </article>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>