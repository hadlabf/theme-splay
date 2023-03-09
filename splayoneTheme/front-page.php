<?php get_header(); ?>
    <section>
        <div class="page_container">
            
            <div class="content">
                <?php get_template_part('includes/section', 'intro'); ?>
            </div>

            <?php get_template_part('includes/section', 'awards' ); ?>

            <div class="content">
                <div class="thumbnail_container d-flex flex-row flex-wrap">
                    <?php 
                        // Check rows existexists.
                        if( have_rows('home_case_thumbnails') ):
                        
                            // Loop through rows.
                            while( have_rows('home_case_thumbnails') ) : the_row();
                        
                                // Load sub field value.
                                $client = get_sub_field('home_case_client');
                                $case_name = get_sub_field('home_case_name');
                                $displayed_width = get_sub_field('home_case_displayed_width');
                                $image = get_sub_field('home_case_image');
                                $description = get_sub_field('home_case_description');
                                
                                // Send sub field value to template.
                                $case_thumbnail_data = array( 
                                    'class' => 'featured-home',
                                    'data'  => array(
                                    'client' => $client,
                                    'case_name' => $case_name,
                                    'displayed_width' => $displayed_width,
                                    'image' => $image,
                                    'description' => $description,
                                    )
                                    );
                                if( $displayed_width === 'row'){
                                    get_template_part('includes/cases/thumbnail', 'row', $case_thumbnail_data );
                                }
                                if( $displayed_width === 'fullscreen'){
                                    get_template_part('includes/cases/thumbnail', 'fullscreen', $case_thumbnail_data);
                                }
                    
                            // End loop.
                            endwhile;
                        
                        // No value.
                        else :
                            // Do something...
                        endif;
                    ?>
                </div>
            </div>

            <?php get_template_part('includes/section', 'contact' ); ?>

        </div>
    </section>
<?php get_footer(); ?>