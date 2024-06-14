<?php get_header(); ?>

 

<section class="header-page container--is-fluid section js-parallax" data-parallax-speed="0.3" style="background-image: url('<?php echo esc_url( get_sub_field( 'background_image' ) ); ?>');">
    <div class="header-page__inner js-parallax" data-parallax-speed="0.5">

            <h1 class="header-page__title">
                Not Found 404
            </h1>

            <?php if(get_sub_field('page_subtitle')) :  ?>
                <p class="header-page__subtitle"><?php the_sub_field('page_subtitle'); ?></p>
            <?php endif;  ?>  

    </div>
    </section>

    <div class="section thin error404-content">
    <div class="container">


        <h1 class="entry-title"><?php _e( 'Page Not Found', 'cognitas' ); ?></h1>

        <div class="intro-text">
            <p>
                <?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'cognitas' ); ?>
            </p>
        </div>

        <?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'cognitas' ),
			)
		);
		?>

    </div>
    </div><!-- .section-inner -->
 


<?php get_footer(); ?>