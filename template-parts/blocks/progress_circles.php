<section class="section">
<div class="container">


    <div class="columns">
    <div class="content">


        <?php if ( have_rows( 'progress_item' ) ) : $i = 0;
            $counter = 0; 
              while ( have_rows( 'progress_item' ) ) : the_row();  $i++;
               
              ?>
                
                <div class="column is-6-tablet is-3-desktop">
                <div class="group">
                    <div class="circular-progress<?php echo 25 * $i ?>">

                        <div style="position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        font-size: 41px;     color: #ee689a;">
                            <?php the_sub_field( 'icon' ) ?>
                        </div>
                    </div><!-- /circular-progress -->

                    <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                        <h2 class="circular-text"><?php echo esc_html( $title ); ?></h2>     
                    <?php endif; ?>

                    <?php if ( $description = get_sub_field( 'description' ) ) : ?>
                        <p style="text-align: center; font-size: 14px;"><?php echo esc_html( $description ); ?></p>
                    <?php endif; ?>

                </div><!-- /group -->
                </div><!-- /column -->

            <?php $counter++; endwhile; ?>
        <?php endif; ?>
            
    </div>
    </div>



</div>
</section>