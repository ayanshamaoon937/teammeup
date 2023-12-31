<?php
$title = "Some Page Title";
$metaDescription = "This is the meta description for Some Page.";
$author = "Author Name";
include_once "includes/links.php";
?>
<!-- Preloader End -->

    <!-- Wrapper -->
<div id="main_wrapper">
  <?php include_once "includes/header.php" ?>
  <div class="clearfix"></div>
  <div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Listing Booking</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index_1.html">Home</a></li>
              <li>Listing Booking</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container margin-bottom-75">
    <div class="row">
      <div class="col-md-12">
        <div class="utf_booking_listing_confirmation_section"> 
		  <i class="sl sl-icon-check"></i>
          <h2>Thanks for your Booking!</h2>
          <p>You'll receive a confirmation email <a href="#">info@example.com</a></p>
          <a href="dashboard_invoice.html" class="button margin-top-30">Check Invoice</a> 
		</div>
      </div>
    </div>
  </div>
  
  <section class="utf_cta_area_item utf_cta_area2_block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf_subscribe_block clearfix">
                    <div class="col-md-8 col-sm-7">
                        <div class="section-heading">
                            <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Newsletter!</h2>
                            <p class="utf_sec_meta">
                                Subscribe to get latest updates and information.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <div class="contact-form-action">
                            <form method="post">
                                <span class="la la-envelope-o"></span>
                                <input class="form-control" type="email" placeholder="Enter your email" required="">
                                <button class="utf_theme_btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
	</section>
  
  <!-- Footer -->
 <?php include_once "includes/footer.php" ?>
</div>
<?php include_once "includes/footerLinks.php" ?>