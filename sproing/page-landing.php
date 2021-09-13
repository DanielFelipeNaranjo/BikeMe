<?php
/*
Template Name: Sproing
*/
?>


<!-- Header Section -->
<?php get_header();?>
<!-- Header Section -->



<div class="row sp-main">
    <div class="col-sm-12 col-md-6 mx-auto sp-vmargin text-center">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sp-tag"><?php bloginfo( 'name' ); ?></a>
        <h1 class="sp-xvmargin">Vernon's Cycle and <br> Accessory Store</h1>
        <p>Spring is just around the corner and we have everything your cycle needs for all of your adventures. Shop our products in-store today.</p>
        <a href="#location" class="btn btn-danger sp-vmargin">LOCATE US</a>
    </div>
    <div class="sp-banner col d-none d-md-block col-md-6">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/09/background.png" class="img-fluid" alt="Banner Picture">
    </div>
</div>



<div class="row text-center sp-vmargin sp-vpadding">
<!-- <div class="container"> -->

    <div class="col-md-12 mx-auto sp-vmargin" style="width: 18rem;">
    <img src="http://localhost/wordpress/wp-content/uploads/2021/09/product-1.png" class="img-fluid" alt="...">
    <div class="sp-card">
        <h5 class="">Product A</h5>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ut ad excepturi voluptatibus. Ullam, optio error.</p>
        <a href="#" class="btn btn-danger">LEARN MORE</a>
    </div>
    </div>

    <div class="col-md-12 mx-auto sp-vmargin" style="width: 18rem;">
    <img src="http://localhost/wordpress/wp-content/uploads/2021/09/product-2.png" class="img-fluid" alt="...">
    <div class="sp-card">
        <h5 class="">Product B</h5>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ut ad excepturi voluptatibus. Ullam, optio error.</p>
        <a href="#" class="btn btn-danger">LEARN MORE</a>
    </div>
    </div>

    <div class="col-md-12 mx-auto sp-vmargin" style="width: 18rem;">
    <img src="http://localhost/wordpress/wp-content/uploads/2021/09/product-3.png" class="img-fluid" alt="...">
    <div class="sp-card">
        <h5 class="">Product C</h5>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ut ad excepturi voluptatibus. Ullam, optio error.</p>
        <a href="#" class="btn btn-danger">LEARN MORE</a>
    </div>
    </div>
<!-- </div> -->
</div>




<div id="location" class="row sp-vpadding">
    <div class="col-sm-12 col-md-6 mx-auto">
    <h3>Get in Touch</h3>
    <p>Do you have a question for us, or are you looking for a specific product for your cycle? We would love to hear from you.</p>
    <p>Call Us: <a href="tel:12505491200">(250) 549-1200</a></p>
    <p>Get Directions: <a href="#">2520 53 Ave #302, Vernon, BC V1T 9W8</a></p>
    <h3>Sign up to Our Newsletter</h3>
    <p>Receive all the latest news about Bike-Me</p>
    <form action="">
        <input type="text" class="form-control sp-vmargin" placeholder="Enter your email adress">
        <button type="submit" class="btn btn-danger">SUBMIT</button>
    </form>
    </div>
    <div class="col-sm-12 col-md-6 mx-auto">
        <iframe class="vertical-margin" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.2350890332133!2d-119.2738062038731!3d50.265994115660355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537dd892861880bb%3A0xb223e1b61f3d9b3c!2sSproing%20Creative!5e0!3m2!1sen!2sca!4v1631344660543!5m2!1sen!2sca" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>


<div class="row sp-blog sp-vpadding">
    <div class="col d-none d-sm-block col-sm-6 mx-auto">
        
    </div>
    <div class="col text-center sm-12 mx-auto">
        <h3>Get yourself ready for spring!</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At officiis laborum velit, odio similique animi quas accusantium in repellendus?</p>
        <a href="#" class="btn btn-danger">BLOG</a>
    </div>
</div>




<!-- Footer Section -->
<?php get_footer(); ?>
<!-- Footer Section -->