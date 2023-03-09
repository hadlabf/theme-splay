<?php get_header(); ?>
    <section>
        <div class="page_container">
            <div class="content">
                <h1 class="adieu_bold people_title"><?php the_title(); ?> </h1>
                    <div class="row people_cards">
                        <?php 

                            if( have_rows('people_list') ):
                            
                                while( have_rows('people_list') ) : the_row();
                            
                                    $full_name = get_sub_field('people_full_name');
                                    $role = get_sub_field('people_role');
                                    $country = get_sub_field('people_country');
                                    $phone = get_sub_field('people_phone');
                                    $email = get_sub_field('people_email');
                                    $profile_picture = get_sub_field('people_profile_picture');
                                    
                                    $people_data = array( 
                                        'class' => 'featured-home',
                                        'data'  => array(
                                        'full_name' => $full_name,
                                        'role' => $role,
                                        'country' => $country,
                                        'phone' => $phone,
                                        'email' => $email,
                                        'profile_picture' => $profile_picture,
                                        )
                                        );
                                    
                                    get_template_part('includes/person', 'card', $people_data );

                                endwhile;                            
                            else :
                            endif;
                        ?>
                    </div>

            </div>
        </div>
    </section>
<?php get_footer(); ?>