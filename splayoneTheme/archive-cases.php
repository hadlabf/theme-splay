<?php get_header(); ?>
    <section>
        <div class="page_container pb-5">
            
<!-- SECTION: INTRO -->
            <div class="content">
                <h1 class="page_title">Work </h1>
            

            <div class="case_archive">
                <?php if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                $customer = get_field('case_customer');
                $name = get_field('case_name');
                $image = get_field('case_image');
                ?>
                <a href="<?php the_permalink();?>" class="case_item">
                    <img src="<?php echo $image['url'];?>"/>
                    <div class="d-flex flex-row align-items-center text-align-baseline">
                        <p class="text_2 adieu_light pr-3"><?php echo $customer; ?></p>
                        <p class="text_2"><?php echo $name; ?></p>
                    </div>
                </a>
                
                <?php endwhile; endif;?>
            </div>
            </div>

        </div>
    </section>



<?php get_footer(); ?>