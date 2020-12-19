
<div class="toast-feedback" id="toast"></div>

<footer>
<div class="footer-wrapper section-bg2" data-background="<?php echo get_template_directory_uri();?>/img/gallery/footer_bg.png">
<!-- Footer Top-->
<div class="footer-area footer-padding">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Contact Info</h4>
<ul>
<li>
<p><span style="color: #fff">Address :</span> No: 4/112-B Jayam Complex, Navalady Road, Thisayanvilai- 627 657, Tirunelveli District, Tamilnadu, India.</p>
</li>
<li><a href="#"><span style="color: #fff">Phone :</span> +91-9843782281, +91-9487530305</a></li>
<li><a href="#"><span style="color: #fff">Email :</span> starsstrust@gmail.com</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4">
<div class="single-footer-caption">
<div class="footer-tittle">
<h4>Important Link</h4>
<ul>
<li><a href="<?php echo home_url() ?>">Home</a></li>
<li><a href="<?php echo home_url() ?>/blog-theme">Blog</a></li>
<li><a href="<?php echo home_url() ?>/donate">Donate</a></li>
<li><a href="<?php echo home_url() ?>/gallery">Gallery</a></li>
<li><a href="<?php echo home_url() ?>/contact-us">Contact Us</a></li>
<li><a href="<?php echo home_url() ?>/about-us">About Us</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
<div class="single-footer-caption">
<div class="footer-tittle">
<h4>Newsletter</h4>
<div class="footer-pera footer-pera2">
<p>Want to join in our next event or to get updates from our team, enter your email address below.</p>
</div>
<!-- Form -->
<div class="footer-form">
<form action="" class="subscribe_form" id="subscribeForm" method="post">
<input type="email" name="sub_email" id="sub_email" placeholder="Email Address">
<div class="form-icon">
<?php wp_nonce_field( 'woocommerce_subscribe', 'woocommerce-subscribe-nonce' ); ?>
<button type="submit" name="submit"><img src="<?php echo get_template_directory_uri();?>/img/gallery/form.png" alt=""></button>
</div>
<!-- <div class="mt-10 info"></div> -->
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- footer-bottom -->
<div class="footer-bottom-area">
<div class="container">
<div class="footer-border">
<div class="row d-flex justify-content-between align-items-center">
<div class="col-xl-10 col-lg-9 ">
<div class="footer-copy-right">
<p><!-- Link back to Star Suthan Subiksham can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<?php echo date("Y"); ?> All rights reserved by <a href="#" target="_blank" style="color: #fff">Star Suthan Subiksham</a>
<!-- Link back to Star Suthan Subiksham can't be removed. Template is licensed under CC BY 3.0. --></p>
</div>
</div>
<div class="col-xl-2 col-lg-3">
<div class="footer-social f-right">
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fas fa-globe"></i></a>
<a href="#"><i class="fab fa-behance"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>
<!-- Scroll Up -->
<div id="back-top">
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<?php wp_footer();?>
</body>
</html>