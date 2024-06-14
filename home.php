<?php
/*
Template Name: Blog Posts
*/
?>

<?php get_header(); ?>

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

         
          
        
</div>
</section>

 

<section class="section news-section">
<div class="container">

    <div class="columns is-multiline">
 
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array( 
                'showposts' => '9',
                'paged' => $paged,
            );

            $loop = new WP_Query( $args );
        ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <article class="column is-one-third">
            <div class="case-studies" style="position: relative;">
                
                <heading class="case-studies__heading">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php echo get_the_post_thumbnail(); ?>
                    </a>
                </heading>

                <section class="case-studies__content" style="min-height: 261px;">
                    
                            <!-- <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );   ?>
                            <div class="main-banner__promotion-img" style="    min-height: 260px;background-image: url('<?php echo $thumbnail[0]; ?>')"></div> -->

                            <a href="<?php echo get_permalink(); ?>">
                                <h3 class="case-studies__title" style="margin-bottom: 3px;">       
                                    <?php echo the_title(); ?>
                                </h3>
                            </a>
                            <span style=" font-size: 14px;   display: block;margin-bottom: 20px;"><?php echo get_the_date(); ?></span>


                                <?php if(has_excerpt()) : ?>
                                    <p><?php echo substr(get_the_excerpt(), 0, 200); ?></p>
                                <?php else: ?>
                                    <p><?php echo substr(get_the_content(), 0, 170); ?></p>
                                <?php endif; ?>
                                

                            </section>
                            
                            
                            <a class="case-studies__link" style="padding:15px 20px 6px" href="<?php echo get_permalink(); ?>">Read more</a>
                        </div><!-- /case-studies -->
                </article><!-- /column -->
                <?php echo paginate_links(); ?>
        <?php endwhile; ?>
                                </div>

    <div class="columns">
        <div class="pagination" style="margin-top: 20px">
            <?php 
              $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

              // WP_Query arguments
              $args = array (
                  'post_type'              => 'post',
                  'posts_per_page'         => '9',
                  'paged' => $paged
              );
              
              // The Query
              $cquery = new WP_Query( $args );
              while ( $cquery->have_posts() ) : $cquery->the_post();
            //   echo $post->ID;
              endwhile;
              
              $big = 999999999; // need an unlikely integer
              
              echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' =>  $cquery->max_num_pages
              ) );
            ?>
        </div>
     </div>


        <?php wp_reset_postdata(); ?>
 
</div>
</section>

<?php get_footer(); ?>