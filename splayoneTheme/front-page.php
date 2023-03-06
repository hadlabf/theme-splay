<?php get_header(); ?>

    <section class="row">
        <div class="container">
            <h1>Front-page: <?php the_title(); ?></h1>
            <?php get_template_part('includes/section', 'intro'); ?>
            <?php 
                if( have_posts() ){
                    while( have_posts() ){
                        the_post();
                        the_content();
                    }
                }
            ?>
        </div>

    </section>

<?php get_footer(); ?>