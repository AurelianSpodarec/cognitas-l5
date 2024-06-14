<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<section class="header-page container--is-fluid section js-parallax" data-parallax-speed="0.3" style="background-image: url('<?php echo esc_url( get_sub_field( 'background_image' ) ); ?>');">
<div class="header-page__inner js-parallax" data-parallax-speed="0.5">

        <h1 class="header-page__title">
            Search Results
        </h1>

        <?php if(get_sub_field('page_subtitle')) :  ?>
            <p class="header-page__subtitle"><?php the_sub_field('page_subtitle'); ?></p>
        <?php endif;  ?>  

</div>
</section>



<section class="section">
<div class="container">

        <header>
        <h1> 
            
            <?php _e( 'Found', 'locale' ); ?> <?php echo $wp_query->found_posts; ?> results for  "<?php the_search_query(); ?>" 
        </h1>
        </header>

        <div class="search-page__content">
            <?php if ( have_posts() ) { ?>
                
              
                    <div class="columns is-multiline">
            <?php while ( have_posts() ) { the_post(); ?>

                <div class="column is-6">
                  
<div style="display: flex;
    align-items: baseline;">
                     <span style="font-size: 14px; padding-top: 1px; line-height: 1.3; color: #202124;"><?php echo substr(get_permalink(), 0, 100); ?></span>

                        <?php if(strpos(get_permalink(), "news") !== false){ ?>
                            <div style="background: #4ed5eb;
                                    color: white;
                                    width: auto;
                                    margin-left: 5px;
                                    padding: 6px 8px;
                                    font-size: 12px;
                                    border-radius: 9px;
                                    display: inline;">Article</div>
                        <?php } ?>
</div>
<h3 style="color: #1a0dab;">
                        <a href="<?php echo get_permalink(); ?>"><?php the_title();  ?></a>
                    </h3>
                    <?php echo substr(get_the_excerpt(), 0,200); ?> 
                </div>

            <?php } ?>
          
        </div>
            <?php echo paginate_links(); ?>

        <?php } ?>
        </div><!-- /search-page__content -->

</div>
</section>


<?php get_footer(); ?>