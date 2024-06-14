<section class="header-page container--is-fluid section js-parallax" data-parallax-speed="0.3" style="background-image: url('<?php echo esc_url( get_sub_field( 'background_image' ) ); ?>');">
<div class="header-page__inner js-parallax" data-parallax-speed="0.5">


        <h1 class="header-page__title">
            <?php 
                if((get_sub_field('page_title'))) {
                    the_sub_field('page_title');
                } else {
                    wp_title('');
                }
            ?>
        </h1>

        <?php if(get_sub_field('page_subtitle')) :  ?>
            <div class="header-page__subtitle"><?php the_sub_field('page_subtitle'); ?></div>
        <?php endif;  ?>
        

</div>
</section>