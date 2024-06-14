<section id="home-infographics" class="section" style="text-align: center; max-width: 940px; margin: 0 auto; padding-top: 0;">
<div class="container">

    <div class="home-infographics--image-wrap">
        <?php
        $image = get_sub_field( 'image' );
        if ( $image ) : ?>
        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
        <?php endif; ?>
    </div>

    <div class="home-infographics--columns columns">

    <?php if ( have_rows( 'mobile_text' ) ) : 
         while ( have_rows( 'mobile_text' ) ) : the_row(); ?>
        
        
        <div class="column" style="margin-bottom: 20px;">
        <div class="home-infographics__item">

                <?php if ( $icon = get_sub_field( 'icon' ) ) : ?>
                <div class="home-infographics">
                    <img style="max-width: 75px;" src="<?php echo esc_html( $icon ); ?>" />
                </div>
                <?php endif; ?>

                <?php if ( $text = get_sub_field( 'text' ) ) : ?>
                    <p style="font-weight: bold;"> <?php echo esc_html( $text ); ?></p>
                <?php endif; ?>                 
        </div>    
        </div><!-- /column -->
        
    <?php 
        endwhile;  
        endif; 
    ?>

    </div><!-- /columns -->


</div><!-- /container -->
</section>