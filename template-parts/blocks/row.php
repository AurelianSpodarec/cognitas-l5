

<?php if ( have_rows( 'section_padding' ) ) : ?>
	<?php while ( have_rows( 'section_padding' ) ) : the_row(); ?>
	
            <section class="section <?php the_sub_field( 'section_background_color' ) ?> <?php the_sub_field( 'padding_top' ) ?> <?php the_sub_field( 'section_bottom' )?>">

	<?php endwhile; ?>
<?php endif; ?>

 


<div class="container">

    <?php if ( !empty(get_sub_field( 'heading_title' )) ) : ?>


        
    <header class="common-section__header <?php the_sub_field( 'heading_customisation' ); ?>">

<!-- if true do x -->

        <?php if ( !empty(get_sub_field( 'heading_title' )) ) : ?>
            <h2 class="common-section__<?php the_sub_field( 'heading_customisation' );?> common-section__<?php the_sub_field( 'heading_customisation' );?>--line"><?php the_sub_field( 'heading_title' ); ?></h2>
        <?php endif; ?>


        
 
        
        <?php if ( !empty(get_sub_field( 'heading_subtitle' ) )) : ?>
            <p><?php the_sub_field( 'heading_subtitle' ); ?></p>
        <?php endif; ?>
    </header>
    <?php endif; ?>


    <div class="columns">

    <?php  if ( have_rows( 'column' ) ) :
            while ( have_rows( 'column' ) ) : the_row(); ?>

        <?php if( get_row_layout() == '1-2' ): ?>





            <div class="column <?php echo get_sub_field( 'column_variation' ) ?>"">
            <div style="height: 100%; position: relative;">
            <div class=" <?php  echo get_sub_field( 'custom_text_align' ) ?> ">

            
  
                <?php 
                    if ( have_rows( 'block' ) ) :
                    while ( have_rows( 'block' ) ) : the_row();
                ?>

                    <?php if ( !empty(get_sub_field( 'text' ) ) ) : ?>
                        <?php the_sub_field( 'text' ) ?>
                    <?php endif; ?>



                    <?php if ( have_rows( 'button' ) ) : ?>
                        <div style="text-align: center;">
                        <?php while ( have_rows( 'button' ) ) :
                            the_row(); ?>
                            
                            <?php
                            $link = get_sub_field( 'button_page_link' );
                            if ( $link ) : ?>
                                <a class="button" style="margin: 10px; width: <?php echo get_sub_field( 'button_custom_width' ) ?>" href="<?php echo esc_url( $link ); ?>"><?php echo get_sub_field( 'button_text' )?></a>
                            <?php endif; ?>

                        <?php endwhile; ?>
                            </div>
                    <?php endif; ?>

   

 
                   

                    <?php if ( !empty(get_sub_field( 'image' ) ) ) : ?>
                        <img class="<?php the_sub_field( 'rounded_corners' ) ?>" src="<?php the_sub_field( 'image' ); ?>" />
                    <?php endif; ?>

                    <?php if ( !empty(get_sub_field( 'video' ) ) ) : ?>
                        <video class="<?php the_sub_field( 'rounded_corners' ) ?>"  playsinline autoplay muted loop width="100%" preload="yes"  >
                            <source src="<?php the_sub_field( 'video' ) ?>" type="video/mp4">
                            <source src="<?php the_sub_field( 'video' ) ?>" type="video/webm">
                            <source src="<?php the_sub_field( 'video' ) ?>" type='video/webm;codecs="vp8, vorbis"'> 
                            <source src="<?php the_sub_field( 'video' ) ?>" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>
                        </video>
                    <?php endif; ?>

                <?php  endwhile;
                    endif; ?>


                </div>
                </div>
                </div><!-- /column -->





            <?php endif;?>
            
            <?php endwhile;
            endif; ?>
            </div><!-- /columns -->
    

</div>
</section>


