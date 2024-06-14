    </main>

    <footer class="footer">
    <div class="footer__outer">


        <div class="columns is-marginless">
        <div class="column is-full">

        <div class="footer__top">

            
            
            <div class="columns is-multiline">
                
                    <div class="column is-12-tablet is-3-desktop">
                        <img style="max-width: 220px;" src="https://i.imgur.com/obxWdF7.png" />
                    </div>

                    <div class="column is-12-tablet is-3-desktop">
                        
                        <h4>Where to find us</h4>
                        <div class="footer__company-info">
                            <i class="footer__company-info-icon fas fa-home"></i>
                            <span>
                            <?php if ( $address = get_field( 'address', 'options' ) ) : ?>
                                <?php echo $address; ?>
                            <?php endif; ?>
                            </span>
                        </div>
                    </div>

                    <div class="column is-12-tablet is-3-desktop">
                    <h4>Contact Details</h4>
                    <div class="footer__company-info">

                        <?php if ( $email = get_field( 'email', 'options' ) ) : ?>
                            <a href="mailto:<?php echo $email; ?>">
                                <i class="footer__company-info-icon far fa-envelope"></i>
                                <span><?php echo $email; ?></span>
                            </a>
                        <?php endif; ?>

                        </div>
                        <div class="footer__company-info">
                            
                        <?php if ( $telephone_number = get_field( 'telephone_number', 'options' ) ) : ?>
                            <a href="tel:<?php echo $telephone_number; ?>">
                                <i class="footer__company-info-icon fas fa-phone-alt"></i>
                                <span><?php echo $telephone_number; ?></span>
                            </a>
                        <?php endif; ?>
                        </div>
                    </div><!-- /column -->


                    <div class="column is-12-tablet is-3-desktop">
                        <div class="footer__logos">
                        <?php if ( have_rows( 'footer_logos', 'options' ) ) : ?>
                            <?php while ( have_rows( 'footer_logos', 'options' ) ) : the_row(); ?>

                                <?php if ( $link = get_sub_field( 'link', 'options' ) ) : ?>
                                    <a target="_blank" href="<?php echo esc_html( $link ); ?>">
                                        <img class="footer__logos-img" src="<?php echo esc_url( get_sub_field( 'logo', 'options' ) ); ?>" />
                                    </a>
                                    <?php else: ?> 

                                    <img class="footer__logos-img" src="<?php echo esc_url( get_sub_field( 'logo', 'options' ) ); ?>" />
                                <?php endif; ?> 

                            <?php endwhile; ?>
                        <?php endif; ?>


                          
                        </div>
                    </div>

                </div>

                
            </div><!-- /footer__top -->

        </div>
        </div> <!-- /columns -->

        <div class="columns is-marginless">
        <div class="column is-full">

            <div class="footer__bottom">

                <div class="footer__copywright">
                    <!-- &copy; Copyright <?php echo date('Y') ?> - Cognitas Global -->

                    <?php 
                        $footerMenu = array(
                            'theme_location' => 'footer',
                            'menu'            => 'footer',
                            'container'       => 'ul',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'footer__menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
 
                            // 'walker'        => new Primary_Walker_Nav_Menu()
                        );

                        wp_nav_menu($footerMenu);    
                    ?>
                </div>
                
                <div class="footer__social-icons">

                <?php if ( have_rows( 'social_links', 'options' ) ) : ?>
                    <?php while ( have_rows( 'social_links', 'options' ) ) : the_row(); ?>
                        
                        <?php if ( $linkedin = get_sub_field( 'linkedin', 'options' ) ) : ?>
                            <a href="<?php echo esc_html( $linkedin ); ?>" target="_blank"><i class="icon-linkedin fab fa-linkedin"></i></a>
                        <?php endif; ?>

                        <?php if ( $twitter = get_sub_field( 'twitter', 'options' ) ) : ?>
                            <a href="<?php echo esc_html( $twitter ); ?>" target="_blank"><i class="icon-twitter fab fa-twitter-square"></i></a>
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>

                  
                </div>       
            </div><!-- /footer__bottom -->

        </div>
        </div> <!-- /columns -->


    </div>
    </footer>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
   
    <?php wp_footer(); ?>
</body>
</html>
