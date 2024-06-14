<section class="section"  style="background: #fafafa;">
<div class="container">

       
    <header class="common-section__header">
        <!-- <p class="common-section__caption">Case Studies</p>
        <h2 class="common-section__header-title  common-section__header-title--line">Read about the success achieved by some of our clients who have used our services</h2> -->

        <?php if ( $heading_title = get_sub_field( 'heading_title' ) ) : ?>
            <h2 class="common-section__header-title  common-section__header-title--line"><?php echo esc_html( $heading_title ); ?></h2>
        <?php endif; ?>
        
        <?php if ( $heading_subtitle = get_sub_field( 'heading_subtitle' ) ) : ?>
            <p class="common-section__caption"><?php echo esc_html( $heading_subtitle ); ?></p>
        <?php endif; ?>

    </header>



    <div style="flex-direction: column;" class="js-hook_slider-case-studies columns">
 
        <?php
            $args = array( 
                'post_type' => 'case-studies'
            );

            $loop = new WP_Query( $args );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
            <article class="column is-4">
            <div class="case-studies">
               
                    <heading class="case-studies__heading">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php echo get_the_post_thumbnail(); ?>
                        </a>
                    </heading>

                    <section class="case-studies__content">
                        <?php if ( have_rows( 'case_study_brief' ) ) : 
                            while ( have_rows( 'case_study_brief' ) ) : the_row(); ?>
                                <a href="<?php echo get_permalink(); ?>">
                                    <h3 class="case-studies__title">
                                        <?php if ( get_sub_field( 'title' ) ) : ?>
                                            <?php the_sub_field( 'title' ); ?>
                                        <?php else: ?>     
                                            <?php the_title(); ?>
                                        <?php  endif; ?>
                                    </h3>
                                    </a>
                                <?php if ( $brief_description = get_sub_field( 'brief_description' ) ) : ?>
                                    <p><?php echo esc_html( $brief_description ); ?></p>
                                <?php endif; ?>    
                        <?php endwhile; ?>
                            <?php endif; ?>

                        <a class="case-studies__link" href="<?php echo get_permalink(); ?>">Read the Case Study</a>
                    </section>


            </div><!-- /case-studies -->
            </article><!-- /column -->

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
                             
    </div><!-- /columns -->

</div>
</section>