<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
    <script type="text/javascript">base_url = '<?php echo home_url() ?>/'</script>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" <?php body_class(); ?>>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
          <img src="<?php echo get_template_directory_uri();?>/img/logo/sss_trust_loder.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- Preloader Start -->
    
<header>
<!-- Header Start -->
  <div class="header-area">
    <div class="main-header ">
      <div class="header-top">
        <div class="container-fluid">
          <div class="col-xl-12">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="header-info-left d-flex">
                <ul style="display: flex;">
                  <li>demo@gmail.com</li>
                  <li>+91-45465465478, +91-45465465478</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom  header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">
          <!-- Logo -->
            <div class="col-xl-2 col-lg-2">
              <div class="logo">
                <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo/sss_trust.jpg" alt="" data-pagespeed-url-hash="934479784"></a>
              </div>
            </div>
          <div class="col-xl-10 col-lg-10">
            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
              <!-- Main-menu -->
              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li><a href="<?php echo home_url() ?>">Home</a></li>
                    <li><a href="<?php echo home_url() ?>/about">About Us</a></li>
                    <!-- <li><a href="<?php //echo home_url() ?>/blogs">Blogs</a></li> -->
                    <li><a href="<?php echo home_url() ?>/contact">Contact Us</a></li>
                  </ul>
                </nav>
              </div>
              <!-- Header-btn -->
              <!-- <div class="header-right-btn d-none d-lg-block ml-20">
                <a href="<?php //echo home_url() ?>/donate" class="btn header-btn">Donate</a>
              </div> -->
            </div>
          </div>
          <!-- Mobile Menu -->
          <div class="col-12">
          <div class="mobile_menu d-block d-lg-none"></div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Header End -->
</header>
<!-- header end -->

    