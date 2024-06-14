<section id="main-header" class="header-main">


<div class="header-main__background-image " data-parallax-speed="0.5" style="background-image: url(<?php the_sub_field('background_image'); ?>);">

    <div id="particles-js" style=" position: absolute; width: 100%; height: 100%; z-index: 1;"></div>

    <div class="container">
    <div class="header-main__outer " data-parallax-speed="0.4">


        <div class="header-main__inner ">
            <div class="header-main__caption-wrap">
                <!-- TODO: Put this into a class -->
                <h1 class="header-main__title">
                <?php if(!empty(get_sub_field('page_title'))) : 
                        the_sub_field('page_title');
                        else:  
                            wp_title('');  
                        endif;  
                ?>
                </h1>

            <?php if(!empty(get_sub_field('page_subtitle'))) :  ?>
                <p class="header-main__subtitle"><?php the_sub_field('page_subtitle') ?></p>
            <?php endif; ?>
            
               
               

<!-- 
                <div style="text-align: center; margin-top: 50px;">
                    <button class="button animated-button--thar">View360 Global</button>
                    <button class="button animated-button--thar">Contact Us</button>
                </div> -->
            </div>

            <div class="header-main__arrow">
                <svg class="arrowsxxx">
                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                </svg>
            </div>
        </div>


    </div><!-- / -->
    </div><!-- /container -->

    <svg class="header-main__bottom-graphic " data-parallax-speed="-0.5" fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path d="M 0 14 s 88.64 3.48 300 36 c 260 40 514 27 703 -10 l 12 28 l 3 36 h -1018 z"></path>
        <path d="M 0 45 s 271 45.13 500 32 c 157 -9 330 -47 515 -63 v 86 h -1015 z"></path>
        <path d="M 0 58 s 188.29 32 508 32 c 290 0 494 -35 494 -35 v 45 h -1002 z"></path> 
    </svg>

</div><!-- js-parralax -->
</section>