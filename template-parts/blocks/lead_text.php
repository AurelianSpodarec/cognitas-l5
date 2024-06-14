<section class="section">
<div class="container">


    <div>

    <?php if (get_sub_field( 'title' ) ) : ?>
        <h2 class="common-section__title"><?php the_sub_field('title') ?></h2>
    <?php endif; ?>
    
    <?php if(get_sub_field( 'title' )) : ?>
        <p style="font-size: 20px;">
    <?php else: ?>
        <p style="font-size: 24px;">
    <?php endif; ?>
    <?php the_sub_field('lead_text') ?>
        </p>
    </div>


</div>
</section>


<?php if ( have_rows( 'customisation' ) ) : 
    while ( have_rows( 'customisation' ) ) : the_row(); ?>
		
		<?php if ( get_sub_field( 'text_align' ) == 1 ) : ?>
		 
		<?php endif; ?>

        
	<?php endwhile; ?>
<?php endif; ?>