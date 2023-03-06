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
            <?php 
                // Check rows existexists.
                if( have_rows('case_thumbnails') ):
                
                    // Loop through rows.
                    while( have_rows('case_thumbnails') ) : the_row();
                
                        // Load sub field value.
                        $customer = get_sub_field('customer');
                        $case_name = get_sub_field('case_name');
                        $size_of_thumbnail = get_sub_field('size_of_thumbnail');
                        $image = get_sub_field('image');
                        $description = get_sub_field('description');
                        // Do something...
                        echo $size_of_thumbnail;
                        if( $size_of_thumbnail === 'sm'){
                            get_template_part('includes/cases/thumbnail', 'small');
                        }
                        if( $size_of_thumbnail === 'md'){
                            get_template_part('includes/cases/thumbnail', 'medium');
                        }
                        if( $size_of_thumbnail === 'lg'){
                            get_template_part('includes/cases/thumbnail', 'large');
                        }
                    // End loop.
                    endwhile;
                
                // No value.
                else :
                    // Do something...
                endif;
            ?>
        </div>

    </section>

<?php get_footer(); ?>