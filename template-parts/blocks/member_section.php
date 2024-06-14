<section class="section">
<div class="container">

    <?php if ( $members_header = get_sub_field( 'members_header' ) ) : ?>
        <header class="common-section__header">
            <h2 class="common-section__header-title  common-section__header-title--line"><?php echo esc_html( $members_header ); ?></h2>
        </header>
    <?php endif; ?>

    <div class="columns is-multiline" style="max-width: 1000px; margin: 0 auto;">

    <?php if ( have_rows( 'team_member' ) ) : 
        while ( have_rows( 'team_member' ) ) : the_row(); ?>


        <div class="column is-12-mobile is-6-tablet is-4-desktop">
            <div class="member js-hook__member">
    
          
            <div class="member__content-wrap">

                
                <div class="member__img-wrap">
                    <div class="member__img-circle">
                        <div class="member__overlay">
                            <span class="member__overlay-button">Read More</span>
                        </div>
                        <img data-member-picture="<?php the_sub_field( 'member_picture' ); ?>" class="member__img" src="<?php echo esc_url( get_sub_field( 'member_picture' ) ); ?>" />
                    </div>
                   
                </div>

                <div class="member__heading">
                    <div class="member__info">
                        <?php if( !empty($member_name = get_sub_field( 'member_name' ) )) : ?>
                            <h3 data-member-name="<?php echo esc_html( $member_name ); ?>" class="member__name"><?php echo esc_html( $member_name ); ?></h3>
                        <?php endif; ?>
                        
                        <?php  
                            $position = get_sub_field( 'member_position' ); ?>
                            <h5 class="member__role" data-member-position="<?php the_sub_field( 'member_position' ); ?>"><?php the_sub_field( 'member_position' ); ?></h5>
                    </div>
                    <!-- <div class="member__arrow"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-long-arrow-alt-right fa-w-14 fa-2x"><path fill="currentColor" d="M340.485 366l99.03-99.029c4.686-4.686 4.686-12.284 0-16.971l-99.03-99.029c-7.56-7.56-20.485-2.206-20.485 8.485v71.03H12c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h308v71.03c0 10.689 12.926 16.043 20.485 8.484z" class=""></path></svg></div> -->

                    <div class="member__social-icons">
                    <?php 
                    if ( have_rows( 'social_links' ) ) :
                        while ( have_rows( 'social_links' ) ) : the_row(); ?>
                            

                            <?php 
                                $linkedin_link = get_sub_field( 'linkedin_link' ); 
                                
                               
                                $link_target = $linkedin_link['target'] && $linkedin_link['target'] ? $linkedin_link['target'] : '_self';
                            
                            ?> 


                            <?php if ( $linkedin_link ) : ?>
                                    
                                <a data-member-linkedin="<?php echo esc_html( $linkedin_link['url'] ); ?>" data-member-target="<?php echo $link_target; ?>" href="<?php echo esc_html( $linkedin_link ); ?>">
                                    <i class="fab fa-linkedin icon-linkedin"></i>
                                </a> 
                            <?php endif; ?>

                        <?php 
                            endwhile; 
                            endif; 
                        ?>
                    </div><!-- /member__social-icons -->

                </div><!-- /member__content-wrap -->
                        
                <div class="member__text" data-member-description="<?php the_sub_field( 'member_text' ) ?>" style="display: none;">
                    <?php if ( $member_text = get_sub_field( 'member_text' ) ) : ?>
                        <?php echo esc_html( $member_text ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div><!-- /column -->

        <?php 
            endwhile;
            endif; 
        ?>

    </div>

</div>
</section>

<!-- <div class="member-modal">
<div class="member-modal__box">

    <div class="member-modal__close-button"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="member-modal__avatar-wrap">
        <img class="member-modal__avatar-img" src="http://localhost:3000/wp-content/uploads/2020/07/Lawrie-1-web-bw.jpg">
    </div>

    <div class="member-modal__content">
        <header class="member-modal__header">
            
           
              
                    <img class="member-modal__avatar-img--mobile" src="http://localhost:3000/wp-content/uploads/2020/07/Lawrie-1-web-bw.jpg">
                    <div class="member-modal__header-info">
                        <div>
                            <h3 class="member-modal__name">Pierre Lipton</h3>
                            <p class="member-modal__position">Chief Creative Officer</p>
                        </div>
                        <a href="" class="member-modal__icons">
                            <i class="fab fa-linkedin icon-linkedin"></i>
                        </a>
                    </div>
               
          
                
        </header>
        <section class="member-modal__section">
            <div class="member-modal__section-outer">
               <p>Lawrie retired from the Metropolitan Police in 2010 as a Detective having served 30 years and latterly specialising in Financial Investigation and economic crime. He has worked in 35 countries as a Subject Matter Expert delivering technical assistance and training. As a qualified Learning &amp; Development practitioner, he has been designing and delivering anti money laundering, anti-corruption, intelligence development, financial investigation and asset recovery relating to national and transnational crime for the international aid organisations and foreign governments in addition to managing short to long term international projects . He is the designer of View360 Global™ and as the Director and CEO he now oversees the day to day operations of three Consulting companies.</p>
            </div>
        </section>
    </div>

</div>
</div> -->

<!-- <div class="member-modal">
<div class="member-modal__box">

    <div class="member-modal__close-button"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="member-modal__avatar-wrap">
        <img class="member-modal__avatar-img" src=" + picture +">
    </div>

    <div class="member-modal__content">
        <header class="member-modal__header">
            
           
              
                    <img class="member-modal__avatar-img--mobile" src=" + picture +">
                    <div class="member-modal__header-info">
                        <div>
                            <h3 class="member-modal__name">" + name +"</h3>
                            <p class="member-modal__position"> " + position + "</p>
                        </div>
                        <a href=" + ' linkedin ' + " class="member-modal__icons">
                            <i class="fab fa-linkedin icon-linkedin"></i>
                        </a>
                    </div>
               
          
                
        </header>
        <section class="member-modal__section">
            <div class="member-modal__section-outer">
               <p>" + description + "</p>
            </div>
        </section>
    </div>

</div>
</div> -->
