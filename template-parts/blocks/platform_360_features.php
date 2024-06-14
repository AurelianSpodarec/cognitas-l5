<section class="section">
<div class="container">

        
    <header class="common-section__header">
        <?php if ( $header_title = get_sub_field( 'header_title' ) ) : ?>
            <h2 class="common-section__header-title  common-section__header-title--line"><?php echo esc_html( $header_title ); ?></h2>
        <?php endif; ?>

        <?php if ( $header_subtitle = get_sub_field( 'header_subtitle' ) ) : ?>
            <p><?php echo esc_html( $header_subtitle ); ?></p>
        <?php endif; ?>
    </header>

    <div class="columns is-multiline">
    <?php if ( have_rows( 'features' ) ) : $counter = 0;
        while ( have_rows( 'features' ) ) : the_row(); ?>
    

            <div class="column is-4">     
                <?php $link_url = get_sub_field('link_url');
                    if(!empty($link_url)) :
                ?>
                <a target="_blank" href="<?php echo get_sub_field('link_url') ?>">   
                    <?php endif; ?>          
               
                <div class="card" style=" height: 100%; border-radius: 4px; border-radius: 14px; position: relative; background-image: url('<?php the_sub_field( 'background_image' ); ?>')">

                    <div style="position: absolute; border-radius: 14px; width: 100%; background: <?php echo ($counter % 2 === 0) ?  '#0c1d4ee3' : '#ab0f6c' ?>; height: 100%; top:0; right: 0; bottom: 0; left: 0;"></div>

                    <div style="position: relative; z-index: 10; color: white;">
                        <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                            <h3 style="margin-bottom: 15px; font-weight: 500;"><?php echo esc_html( $title ); ?></h3>
                        <?php endif; ?>

                        <?php if ( $text = get_sub_field( 'text' ) ) : ?>
                            <p style="line-height: 1.65;"><?php echo esc_html( $text ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $link_url = get_sub_field('link_url');
                    if(!empty($link_url)) :
                ?>
                </a>
                 
                    <?php endif; ?>   

            </div><!-- /column -->


        <?php $counter++; 
        endwhile; ?>
    <?php endif; ?>
    </div><!-- /columns -->


</div>
</section>