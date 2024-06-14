<!-- Cognitas decided to remove the component -->

<section class="section"  style="background: #fafafa;">
<div class="container">

<div class="columns is-multiline">
            <h1>Component Removed</h1>
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
                
                    <h3><?php the_title(); ?></h3>


                    <?php if ( have_rows( 'case_study_brief' ) ) : 
                        while ( have_rows( 'case_study_brief' ) ) : the_row(); ?>
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