<section class="callback">
<div class="quote">

<?php if ( $quote = get_sub_field( 'quote' ) ) : ?>
    <div class="quote__text">" <?php echo esc_html( $quote ); ?> "</div>
    <?php endif; ?>

    <?php if ( $author = get_sub_field( 'author' ) ) : ?>
    <div class="quote__author"> - <?php echo esc_html( $author ); ?></div>
    <?php endif; ?>
    
</div>
</section>
