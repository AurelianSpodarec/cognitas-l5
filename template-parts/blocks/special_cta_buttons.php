<section class="section" style="padding-top: 0;">
<div class="container">
<div class="columns">



<?php if ( have_rows( 'button' ) ) : ?>
	<?php while ( have_rows( 'button' ) ) : the_row(); ?>
        
    
        <div style="padding: 0;" class="column is-half">
        <a href="<?php the_sub_field( 'button_link' ) ?>" class="special-cta-button <?php the_sub_field( 'variation' ) ?>">

            <?php if ( $icon = get_sub_field( 'icon' ) ) : ?>
             
                    <img class="special-cta-button__bg-icon" src="<?php echo esc_html( $icon ); ?>" />
                 
            <?php endif; ?>

            <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                <h3 class="special-cta-button__title"><?php echo esc_html( $title ); ?> </h3>
            <?php endif; ?>
            <?php if ( $text = get_sub_field( 'text' ) ) : ?>
                <p class="special-cta-button__body-text"><?php echo $text; ?></p>
            <?php endif; ?>
        </a>
        </div>
        
  

	<?php endwhile; ?>
<?php endif; ?>



</div>
</div>
</section>