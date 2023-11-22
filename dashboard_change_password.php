<?php
$title = "Some Page Title";
$metaDescription = "This is the meta description for Some Page.";
$author = "Author Name";
include_once "includes/links.php";
?>

<!-- Wrapper -->
<div id="main_wrapper">
    <?php include_once "includes/dashboardHeader.php";?>
  <div class="clearfix"></div>
  
  <!-- Dashboard -->
  <div id="dashboard"> 
    <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
    <div class="utf_dashboard_navigation js-scrollbar">
      <div class="utf_dashboard_navigation_inner_block">
          <ul>
              <li ><a href="dashboard"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
              <li ><a href="dashboard_add_listing"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
              <li><a href="dashboard_my_listing.php"><i class="sl sl-icon-layers"></i> My Listings</a></li>
              <li ><a href="dashboard_bookings"><i class="sl sl-icon-docs"></i> Bookings</a></li>
              <li><a href="dashboard_messages"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
              <li><a href="dashboard_my_profile"><i class="sl sl-icon-user"></i> My Profile</a></li>
              <li class="active"><a href="dashboard_change_password"><i class="sl sl-icon-key"></i> Change Password</a></li>
              <li><a href="index"><i class="sl sl-icon-power"></i> Logout</a></li>
          </ul>
      </div>
    </div>
    <div class="utf_dashboard_content"> 
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>Change Password</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index">Home</a></li>
                <li><a href="dashboard">Dashboard</a></li>
                <li>Change Password</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12 col-md-12">
          <div class="utf_dashboard_list_box margin-top-0">
            <h4 class="gray"><i class="sl sl-icon-key"></i> Change Password</h4>
            <div class="utf_dashboard_list_box-static"> 
              <div class="my-profile">
			    <div class="row with-forms">
					<div class="col-md-4">
						<label>Current Password</label>						
						<input type="text" class="input-text" name="password" placeholder="*********" value="">
					</div>
					<div class="col-md-4">
						<label>New Password</label>						
						<input type="text" class="input-text" name="password" placeholder="*********" value="">
					</div>
					<div class="col-md-4">
						<label>Confirm New Password</label>
						<input type="text" class="input-text" name="password" placeholder="*********" value="">
					</div>
					<div class="col-md-12">
						<button class="button btn_center_item margin-top-15">Change Password</button>
					</div>
				</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
            <div class="footer_copyright_part">Copyright © <?php echo date("Y");?> All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once "includes/footerLinks.php";?>