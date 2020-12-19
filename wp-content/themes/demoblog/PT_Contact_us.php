<?php 
/*
* Template Name: Contact us
*/
get_header();?>
  
<!--? Hero Start -->
<div class="slider-area2 volunteer-desktop-screen" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url(<?php echo get_template_directory_uri();?>/img/gallery/footer_bg.png);background-size: cover;background-attachment: fixed;">
  <div class="slider-height2 d-flex align-items-center">
    <div class="container">
      <div class="row">
      <div class="col-xl-12">
        <div class="hero-cap hero-cap2 pt-20 text-center">
          <h2 style="color: #fff!important;">Contact Us</h2>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->

<img src="<?php echo get_template_directory_uri();?>/img/gallery/c.jpg" class="slider-area2 volunteer-mobile-screen" width="100%"> 


<!--?  Contact Area start  -->
<section class="contact-section">
<div class="container">
<div class="d-none d-sm-block mb-5 pb-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7895.422883119797!2d77.85842017700006!3d8.33144407112041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b047e50930e95e5%3A0x1d70ec9eff576a24!2sThisayanvilai%2C%20Tamil%20Nadu%20627657!5e0!3m2!1sen!2sin!4v1606469888105!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="row">
<div class="col-12">
<h2 class="contact-title">Get in Touch</h2>
</div>
<div class="col-lg-8">
<div class="contact-form-area">
<form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="contact_name" id="contact_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
</div>
</div>
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
</div>
</div>
</div>
<?php wp_nonce_field( 'woocommerce-contact', 'woocommerce-contact-nonce' ); ?>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn">Send</button>
</div>
</form>
</div>
</div>

<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="fa fa-home"></i></span>
<div class="media-body">
<h3>Thirunelvelli Tamil Nadu</h3>
<p>No: 4/112-B Jayam Complex, Navalady Road, Thisaiyanvilai- 627 657</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="fa fa-tablet"></i></span>
<div class="media-body">
<h3>+91-9843782281, +91-9487530305</h3>
<p>Mon to Fri 9am to 6pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="fa fa-envelope"></i></span>
<div class="media-body">
<h3>starsstrust@gmail.com</h3>
<p>Send us your query anytime!</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Contact Area End -->

<?php get_footer();?>