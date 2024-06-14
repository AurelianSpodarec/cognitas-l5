<section class="section banner callout">
<div class="container">


    <?php if(!empty(get_sub_field( 'text' ))): ?>
        <div class="columns is-marginless is-multiline">
            <div class="banner__normal-text">
                <?php the_sub_field( 'text' ) ?>
            </div>
        </div>
    <?php else: ?>

        <div class="banner__contact">
            <div style="margin-bottom: 15px;">
                <p class="banner__contact-p"><?php the_sub_field( 'cta_text' ); ?></p>
            </div>

            <div>
                <a href="<?php the_sub_field( 'cta_button_link' ) ?>" class="banner__contact-button button button--hover-1"><?php the_sub_field( 'cta_button_text' ); ?></a> 
            </div>

            
        </div>

    <?php endif; ?>


</div>
</section>

