<div>
    <div id="intro_section" class="d-flex flex-row align-items-end">
        <h1 class="adieu_black intro_title">Splay One</h1>
        <p class="intro_text"><?php echo the_field('home_intro_elevator_pitch'); ?></p>
    </div>
    <?php 
        $image = get_field('home_intro_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" />
    <?php endif; ?>
</div>