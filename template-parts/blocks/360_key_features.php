<section>
<div class="container">
<div class="columns is-multiline">


        <?php if ( have_rows( 'feature' ) ) : 
            while ( have_rows( 'feature' ) ) : the_row(); ?>
        
        
            <div class="column is-12mobile is-6-tablet is-3-desktop">
            <div class="key-feature-360 card">
                <div class="key-feature-360__content">
                    <?php if ( $icon = get_sub_field( 'icon' ) ) : ?>
                        <div class="key-feature-360__icon">
                            <?php the_sub_field( 'icon' ); ?>
                        </div>
                    <?php endif; ?>
                    
                    
                    <?php if ( $title = get_sub_field( 'title' ) ) : ?>      
                            <h3 class="key-feature-360__title"><?php echo esc_html( $title ); ?></h3>
                    <?php endif; ?>

                </div>
                <?php if ( $text = get_sub_field( 'text' ) ) : ?>
                    <p class="key-feature-360__p"><?php echo esc_html( $text ); ?></p>
                <?php endif; ?>
            </div>
            </div>
    

            <?php endwhile; ?>
        <?php endif; ?>


</div>
</div>
</section>