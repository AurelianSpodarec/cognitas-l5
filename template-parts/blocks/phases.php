<section class="section section-padding-top-6 section-padding-bottom-6 <?php the_sub_field( 'section_background' ) ?>">
<div class="container">
<div class="phases <?php the_sub_field( 'alternate' ); ?>">

    <?php if ( $header_title = get_sub_field( 'header_title' ) ) : ?>
        <header class="common-section__header">
            <h2 class="common-section__header-title  common-section__header-title--line"><?php echo esc_html( $header_title ); ?></h2>

            <p><?php the_sub_field( 'header_subtitle' ); ?></p>
        </header>
    <?php endif; ?>

    <?php    
        if ( have_rows( 'phase' ) ) :  
            while ( have_rows( 'phase' ) ) : the_row();
     ?>

 

        <div class="phase  ">
            <div class="phase__image">
            <div class="phase__image-box">
                <?php echo do_shortcode(get_sub_field( 'icon' )) ?>
            </div>
            </div><!-- /phase-image-->
            <div class="phase__content">
                <h4 style="margin-bottom: 20px; font-size: 35px; font-weight: bold;"><?php the_sub_field( 'title' ) ?></h4>
                <p><?php the_sub_field( 'text' ) ?></p>
            </div>
        </div>

    <?php 
        endwhile;  
        endif; 
    ?>

      
</div><!-- /phasess -->
</div>
</section>