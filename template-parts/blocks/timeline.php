<section class="section">
<div class="container">
<div class="timeline">


    <div class="timeline__line"></div>

    <?php 

        $timeline_fields_count =  count( get_sub_field('timeline_item') ); 
    
        if ( have_rows( 'timeline_item' ) ) :  

            $i = 0;
            $max_width = 86; 
            $a = $max_width / $timeline_fields_count;
                    
            while ( have_rows( 'timeline_item' ) ) : the_row();  $i++;
            $number = "0$i";
     ?>

        <div class="timeline-item" style="width:<?php echo $a ?>%;">
            <div class="timeline-item__content">
                <div class="timeline-item__header">
                    <!-- <i class="fas fa-search"></i> -->
                    <h3 class="timeline-item__title"><?php the_sub_field( 'title' ) ?></h3>
                </div>        
                <p class="timeline-item__text"><?php the_sub_field( 'text' ) ?></p>
            </div><!-- /timeline-item__content -->

            <div class="timeline-item__line"></div>
            <div class="timeline-item__circle"><?php echo $number; ?></div>
        </div><!-- /timeline-item -->


    <?php 
        $counter++;
        endwhile;  
        endif; 
    ?>


</div><!-- /timeline -->
</div>
</section>
