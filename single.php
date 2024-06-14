<?php
/*
Template Name: Blog Posts
*/
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <section class="header-page container--is-fluid section js-parallax" data-parallax-speed="0.3" style="background-image: url('<?php echo esc_url( get_sub_field( 'background_image' ) ); ?>');">
        <div class="header-page__inner js-parallax" data-parallax-speed="0.5">

                <h1 class="header-page__title blog-title-single">
                    <?php wp_title(''); ?>
                </h1>
                <div class="header-page__subtitle"><?php the_date(); ?></div>
                
        </div>
        </section>

        <article class="section" style="padding-top: 2rem;">
        <div class="container">
        
                <!-- <a href="javascript:history.go(-1)" style="color: #c9379c; margin-bottom: 3rem; display: block;">Back to news articles</a> -->
                <?php the_content(); ?>
                <a href="javascript:history.go(-1)" style="color: #c9379c; margin-top: 3rem; display: block;">Back to news articles</a>

        </div>
        </article>


    <?php endwhile; else : ?>

        <p><?php esc_html_e( 'Sorry, no contentfound.' ); ?></p>

	<?php endif; ?>

<?php get_footer(); ?>