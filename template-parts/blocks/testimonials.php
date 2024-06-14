<section id="testimonials" class="section" >
 


    <header class="common-section__header">
        <h2 class="common-section__header-title  common-section__header-title--line">What our clients say</h2>
    </header>


    <div class="is-marginless js-hook_home-slider">


    <?php if ( have_rows( 'testimonial' ) ) : ?>
        <?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
            

           

        

            <div class="testimonial card">
                <div class="testimonial__details">
                    <div>
                        <?php if ( $testimonial_name = get_sub_field( 'testimonial_name' ) ) : ?>
                            <h5 class="testimonial__details-name"><?php echo esc_html( $testimonial_name ); ?></h5>
                        <?php endif; ?>

                        <?php if ( $company_name = get_sub_field( 'company_name' ) ) : ?>
                            <h6 class="testimonial__details-company"><?php echo esc_html( $company_name ); ?></h6>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="testimonial__quote">
                    <blockquote class="testimonial__blockquote">
                        <?php if ( $testimonial_text = get_sub_field( 'testimonial_text' ) ) : ?>
                            <p class="testimonial__p"><?php echo esc_html( $testimonial_text ); ?></p>
                        <?php endif; ?>
                    </blockquote>
                </div>
            </div>  

        <?php endwhile; ?>
    <?php endif; ?>

           
 
    
 
 
    
    
    </div><!-- /columnss -->

 
</section>