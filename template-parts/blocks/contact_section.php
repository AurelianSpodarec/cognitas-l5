
<section class="section" style="background: #f8f8f8;; box-shadow: inset 0 -0.1rem 0.5rem 0 #dedede;">
<div class="container">

    <div class="columns" style="text-align: center;">
        
        <div class="column is-4">
        <?php if ( $address = get_field( 'address', 'options' ) ) : ?>
            <div class="contact-section__block-image">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">   
                <i style="color: #cb0678; font-size: 30px;" class="fas fa-map-marker-alt"></i>
            </div>
            </div>
            <div class="contact-section__block-content">
                <h4 class="contact-section__block-title">Address</h4>
                <div class="contact-section__address-p">
                    <?php echo $address; ?>
                </div>
            </div>
            <?php endif; ?>
        </div><!-- /column -->
           

        <div class="column is-4">
        <?php if ( $telephone_number = get_field( 'telephone_number', 'options' ) ) : ?>
            <a href="tel:<?php echo $telephone_number; ?>" class="contact-section__block-image">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">   
                <i style="color: #cb0678; font-size: 30px;" class="fas fa-phone-alt"></i>
            </div>
            </a>
            
            <div class="contact-section__block-content">
                <h4 class="contact-section__block-title">Telephone</h4>
                <a href="tel:<?php echo $telephone_number; ?>"><?php echo $telephone_number; ?></a>
            </div>
            <?php endif; ?>
        </div><!-- /column -->


        <div class="column is-4">
        <?php if ( $email = get_field( 'email', 'options' ) ) : ?>
            <a href="mailto:<?php echo $email; ?>" class="contact-section__block-image">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
                <i style="color: #cb0678; font-size: 30px;" class="far fa-envelope"></i>
            </div>
            </a>
            
            <div class="contact-section__block-content">
                <h4 class="contact-section__block-title">E-mail</h4>
                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            </div>
            <?php endif; ?>
        </div><!-- /column -->

    </div>

</div>
</section>

<section id="client-logos" class="section" style=" text-align: center;">
    <div class="container">

        <header class="common-section__header">
            <h2 style="    font-size: 40px;" class="common-section__header-title  common-section__header-title--line">
                Get in touch with us!         
            </h2>
        </header>
    
            <?php echo do_shortcode( '[contact-form-7 id="139" title="Main Contact"]'); ?>


        </div> 
        </div> 

</section>

<section>
<div class="container">

    <div class="columns">
    <div class="column">
    
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.2407400527613!2d0.33067841576733076!3d51.43537257962325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8b7608362b093%3A0x32dc9a03d16b6ab4!2sCognitas%20Global%20Limited!5e0!3m2!1sen!2suk!4v1595345512824!5m2!1sen!2suk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    </div>
    
</div>
</section>