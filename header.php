<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content= "width=device-width, initial-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="RSCfzB4oRPrCDdagTTTPHVCgdfMwJEe_1WdX7SEvWO0" />
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="header header--fixed">
    <div class="container--is-fluid">
    <div class="columns">
    <div class="column is-full">



        <div class="header__outer">
        <div class="header__inner">

 
            <div class="header__logo-wrap">
            <a class="header__logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <!-- <img class="header__logo-img" src="https://i.imgur.com/JTSDR8P.png" /> -->
                <!-- "https://i.imgur.com/SPYyRRs.png"  -->

                <img class="header__logo-img" src=<?php echo esc_url( get_field( 'logo_image', 'options' ) ); ?> >
            </a>
            </div>

          


            <div class="header-menu__wrap" >
                <div class="header-menu" >
                <nav class="header-menu__nav" data-effect="mfp-move-horizontal" >
                    <ul class="header-menu__ul">
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'header',
                                    'menu'            => 'header',
                                    'container'       => 'ul',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'nav navbar-nav',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
            
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 3,
                                    'walker'        => new Primary_Walker_Nav_Menu()
                                )
                            );
                        ?>
                    </ul>
                </nav>
                </div><!-- /header-menu--> 
            </div><!-- /header-menu__wrap -->

            <div class="header__extra" >
            <div style="    display: flex;
    align-items: center;">
                
                    <a href="#search"><i class="header__search fas fa-search js-hook__header-search-button"></i></a>
                    <div><?php echo do_shortcode('[gtranslate]'); ?></div>
           
       
            </div>
            </div>

            <button class="header__hamburger">
            <div class="header__hamburger-bars">
                <span class="header__hamburger--bar"></span>
                <span class="header__hamburger--bar"></span>
                <span class="header__hamburger--bar"></span>
            </div>
            </button>
        </div><!-- /header__inner -->
        </div><!-- /header__outer -->


    </div><!-- /column -->
    </div><!-- /columns -->
    </div>
    </header>


    <div class="mobile-menu">
        <div class="mobile-menu__close"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10 fa-3x"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg></div>
        <ul class="mobile-menu__ul">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'header',
                        'menu'            => 'header',
                        'container'       => 'ul',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'nav navbar-nav',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',

                        'items_wrap'      => '%3$s',
                        'depth'           => 3,
                        'walker'        => new Primary_Walker_Nav_Menu()
                    )
                );
            ?>
        </ul>
    </div>



    <div id="search" class="search-modal"> 
    
        <span class="search-modal__close"><svg style="font-size: 46px;" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10 fa-3x"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg></span>
        <div class="search-modal__outer">
            
                <div>
                    <?php get_search_form(); ?> 
                </div>
            
        </div>
    </div>


    <main>