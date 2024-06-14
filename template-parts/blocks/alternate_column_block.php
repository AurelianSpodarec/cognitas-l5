



<section class="section" style="background-color: #fafafa;">
<div class="container">
    
<?php if ( have_rows( 'column' ) ) : $i = 0;
        $counter = 0;
        while ( have_rows( 'column' ) ) : the_row();  $i++;
        $number = "0$i";
    ?>

       

    <?php if ($counter % 2 === 0) :?>
        
        <div class="columns" style="margin-bottom: 3rem;">
            <div class="column is-12-mobile is-half">
            <div style="position: relative; height: 100%;">

                <div class="text-vertical-middle">
                    <h2><?php the_sub_field( 'title' ) ?></h2>
                    <p><?php the_sub_field( 'text' ) ?></p>

                    <a href="<?php the_sub_field( 'link_url' ) ?>"><?php  the_sub_field( 'link_text' )  ?></a>
                </div>

            </div>
            </div>
            <div class="column is-12-mobile is-half">
                <img style="border-radius: 7px;" src="<?php the_sub_field( 'image' ) ?>" />
            </div>
        </div><!-- columns -->

    <?php else: ?>

        <div class="columns reverse-column-mobile" style="margin-bottom: 3rem;">
       
            <div class="column is-12-mobile is-half">
                <img style="border-radius: 7px;" src="<?php the_sub_field( 'image' ) ?>" />
            </div>

            <div class="column is-12-mobile is-half">
                <div style="position: relative; height: 100%;">
                <div class="text-vertical-middle">
                    <h2><?php the_sub_field( 'title' ) ?></h2>
                    <p><?php the_sub_field( 'text' ) ?></p>
                </div>
                <a href="<?php the_sub_field( 'link_url' ) ?>"><?php  the_sub_field( 'link_text' )  ?></a>
                </div>
            </div>
        
        </div><!-- columns -->
    <?php endif; ?>


<?php 
	$counter++;
	endwhile; 
	endif; 
?>
  




</div><!-- container -->
</section>
