<?php get_header(); ?>

singular
    <?php
    

        $flexibleContentPath = dirname(__FILE__) . '/template-parts/blocks/';
        if ( have_rows( 'blocks' ) ) :
            while ( have_rows( 'blocks' ) ) :
                the_row();
                $layout = get_row_layout();
                $file = ( $flexibleContentPath . '/' . $layout . '.php' );
                if ( file_exists( $file ) ) {
                    include( $file );
                }
            endwhile;
        endif;  
        

    ?>
    

<?php get_footer(); ?>