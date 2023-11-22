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
          <h2>Choose Payment Option</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index_1.html">Home</a></li>
              <li>Choose Payment Option</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container margin-bottom-75">
    <div class="row">
      <div class="col-lg-8 col-md-8 utf_listing_payment_section">
	    <div class="utf_booking_listing_section_form margin-bottom-40">
		  <h3><i class="sl sl-icon-paper-plane"></i> Billing Information</h3>
			<div class="row">
			  <div class="col-md-6">
				<label>First Name</label>
				<input type="text" value="" placeholder="First Name">
			  </div>
			  <div class="col-md-6">
				<label>Last Name</label>
				<input type="text" value="" placeholder="Last Name">
			  </div>
			  <div class="col-md-6">
				<div class="medium-icons">
				  <label>E-Mail</label>
				  <input type="text" value="" placeholder="Email">
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="medium-icons">
				  <label>Phone</label>
				  <input type="text" value="" placeholder="Phone">
				</div>
			  </div>
			</div>
		</div>
		
		<div class="utf_booking_payment_option_form">
		  <h3><i class="sl sl-icon-credit-card "></i> Payment Method</h3>
			<div class="payment">
			  <div class="utf_payment_tab_block">
				<div class="utf_payment_trigger_tab">
				  <input checked="" id="stripe" name="cardType" type="radio" value="stripe">
				  <label for="stripe">Paywith Stripe</label>
				  <img class="utf_payment_logo stripe" src="images/stripe.png" alt=""> 
				</div>
				<div class="utf_payment_tab_block_content">				  
				  <div class="row">
					<div class="col-md-6">
					  <div class="card-label">
						<label for="name">Name</label>
						<input id="nameOnCard" name="stripename" placeholder="Name" required="" type="text">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="card-label">
						<label for="email">Email</label>
						<input id="email" name="email" placeholder="Email" required="" type="text">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="card-label">
						<label for="phoneNumber">Phone Number</label>
						<input id="phoneNumber" placeholder="Phone Number" required="" type="text">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="card-label">
						<label for="couponCode">Coupon Code?</label>
						<input id="couponCode" placeholder="Coupon Code" required="" type="text">
					  </div>
					</div>
				  </div>
				</div>
			  </div>
				
			  <div class="utf_payment_tab_block">
				<div class="utf_payment_trigger_tab">
				  <input checked="" id="paypal" name="cardType" type="radio" value="paypal">
				  <label for="paypal">PayPal</label>
				  <img class="utf_payment_logo paypal" src="images/paypal_pay.png" alt=""> 
				</div>
				<div class="utf_payment_tab_block_content">				  
				  <p>You will be Redirected to PayPal to Complete Payment.</p>
				</div>
			  </div>			  			 
			  
			  <div class="utf_payment_tab_block utf_payment_tab_block_active">
				<div class="utf_payment_trigger_tab">
				  <input type="radio" name="cardType" id="creditCart" value="creditCard">
				  <label for="creditCart">Credit / Debit Card</label>
				  <img class="utf_payment_logo" src="images/pay_icon.png" alt=""> 
				</div>
				<div class="utf_payment_tab_block_content">
				  <div class="row">					
					<div class="col-md-6">
					  <div class="card-label">
						<label for="cardNumber">Card Number</label>
						<input id="cardnumber" name="cardNumber" placeholder="0000  0000  0000  0000" required="" type="text">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="card-label">
						<label for="nameOnCard">Card Holder Name</label>
						<input id="cardname" name="cardName" placeholder="Card Holder Name" required="" type="text">
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="card-label">
						<label for="expirynDate">Expiry Month</label>
						<input id="expiryDate" placeholder="MM" required="" type="text">
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="card-label">
						<label for="expiryDate">Expiry Year</label>
						<input id="expirynDate" placeholder="YYYY" required="" type="text">
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="card-label">
						<label for="cvv">CVV Code</label>
						<input id="cvv" required="" placeholder="***" type="text">
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<a href="booking_confirmation" class="button utf_booking_confirmation_button margin-top-20 margin-bottom-10">Confirm Now</a>
		</div>
	  </div>
      <div class="col-lg-4 col-md-4 margin-top-0 utf_listing_payment_section">
        <div class="utf_booking_listing_item_container compact utf_order_summary_widget_section">
          <div class="listing-item"> <img src="images/listing-item-04.jpg" alt="">
            <div class="utf_listing_item_content">              
              <h3>Vintage Italian Beer Bar & Restaurant</h3>
              <span><i class="fa fa-map-marker"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>											
			  <div class="utf_star_rating_section" data-rating="4.5">
				<div class="utf_counter_star_rating">(18) Reviews</div>
			  </div>
			</div>
          </div>
        </div>
        <div class="boxed-widget opening-hours summary margin-top-0">
          <h3><i class="fa fa-calendar-check-o"></i> Booking Summary</h3>
          <ul>
            <li>Appearing <span>10 Jan 2022</span></li>
			<li>Hour <span>1:30 PM</span></li>
			<li>Disappearing <span>16 Jan 2022</span></li>            
            <li>Guests <span>3 Adults</span></li>
			<li>Deposit <span>$230.00</span></li>
			<li>V.A.T <span>$18.00</span></li>
			<li class="total-costs">Sub Total <span>$248.00</span></li>
			<li class="total-costs">
				<div class="col-md-8">
				  <input id="couponCode" placeholder="Have a coupon enter here..." required="" type="text">
				</div>
				<div class="col-md-4">
				  <input type="submit" class="coupon_code" value="Apply">	
				</div>
				<div class="clearfix"></div>
			</li>
            <li class="total-costs">Total Cost <span>$248.00</span></li>
          </ul>
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

<!-- Scripts --> 
<?php include_once "includes/footerLinks.php" ?>