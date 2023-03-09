<?php get_header(); ?>
    <div class="contact_page page_container">
        <div class="content">
            <div class="row">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="adieu_bold people_title">Curious to know more? </h1>
                </div>
                
                <div class="col-sm-6">
                    <div class="contact_person_list ">
                        <?php 

                            if( have_rows('contact_person_list') ):
                            
                                while( have_rows('contact_person_list') ) : the_row();
                            
                                    $full_name = get_sub_field('contact_full_name');
                                    $role = get_sub_field('contact_role');
                                    $country = get_sub_field('contact_country');
                                    $phone = get_sub_field('contact_phone');
                                    $email = get_sub_field('contact_email');
                                    
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

                                    get_template_part('includes/contact', 'person', $people_data );

                                endwhile;                            
                            else :
                            endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>