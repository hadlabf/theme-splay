<?php get_header(); ?>

    <section class="page">
        <div class="container">
            <h1>Front-page: <?php the_title(); ?></h1>
        </div>

        <?php get_template_part('includes/section', 'intro'); ?>
    </section>

<?php get_footer(); ?>