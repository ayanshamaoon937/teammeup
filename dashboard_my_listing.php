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
              <li class="active"><a href="dashboard_my_listing.php"><i class="sl sl-icon-layers"></i> My Listings</a></li>
              <li ><a href="dashboard_bookings"><i class="sl sl-icon-docs"></i> Bookings</a></li>
              <li ><a href="dashboard_messages"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
              <li><a href="dashboard_my_profile"><i class="sl sl-icon-user"></i> My Profile</a></li>
              <li ><a href="dashboard_change_password"><i class="sl sl-icon-key"></i> Change Password</a></li>
              <li><a href="index"><i class="sl sl-icon-power"></i> Logout</a></li>
          </ul>
      </div>
    </div>
    <div class="utf_dashboard_content"> 
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>My Listings</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index">Home</a></li>
                <li><a href="dashboard">Dashboard</a></li>
                <li>My Listings</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12 col-md-12">
          <div class="utf_dashboard_list_box margin-top-0">
			<div class="sort-by my_sort_by">
                <div class="utf_sort_by_select_item">
                  <select data-placeholder="Default Listing" class="utf_chosen_select_single">
                    <option>Default Listing</option>
				    <option>Active Listing</option>
				    <option>Pending Listing</option>
                    <option>Expired Listing</option>
                  </select>
                </div>
            </div>
            <h4><i class="sl sl-icon-list"></i> My Listings</h4>
            <ul>
              <li>
                <div class="utf_list_box_listing_item">
                  <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-01.jpg" alt=""></a></div>
                  <div class="utf_list_box_listing_item_content">
                    <div class="inner">
                      <h3>Chontaduro Barcelona</h3>
					  <span><i class="im im-icon-Hotel"></i> Hotels</span> 
                      <span><i class="fa fa-map-marker"></i> The Ritz-Carlton, Hong Kong</span>
					  <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
						<div class="utf_star_rating_section" data-rating="4.5">
							<div class="utf_counter_star_rating">(4.5)</div>							
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                    </div>
                  </div>
                </div>
                <div class="buttons-to-right"> 
					<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a> 
					<a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a> 
				</div>
              </li>
              <li>
                <div class="utf_list_box_listing_item">
                  <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-02.jpg" alt=""></a></div>
                  <div class="utf_list_box_listing_item_content">
                    <div class="inner">
                      <h3>The Lounge & Bar</h3>
					  <span><i class="im im-icon-Hotel"></i> Hotels</span> 
                      <span><i class="fa fa-map-marker"></i> The Ritz-Carlton, Hong Kong</span>
					  <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
						<div class="utf_star_rating_section" data-rating="4.5">
							<div class="utf_counter_star_rating">(4.5)</div>							
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                    </div>
                  </div>
                </div>
                <div class="buttons-to-right"> 
					<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a> 
					<a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a> 
				</div>
              </li>
              <li>
                <div class="utf_list_box_listing_item">
                  <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-03.jpg" alt=""></a></div>
                  <div class="utf_list_box_listing_item_content">
                    <div class="inner">
                      <h3>Westfield Sydney</h3>
					  <span><i class="im im-icon-Hotel"></i> Hotels</span> 
                      <span><i class="fa fa-map-marker"></i> The Ritz-Carlton, Hong Kong</span>
					  <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
						<div class="utf_star_rating_section" data-rating="4.5">
							<div class="utf_counter_star_rating">(4.5)</div>							
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                    </div>
                  </div>
                </div>
                <div class="buttons-to-right"> 
					<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a> 
					<a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a> 
				</div>
              </li>
              <li>
                <div class="utf_list_box_listing_item">
                  <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-04.jpg" alt=""></a></div>
                  <div class="utf_list_box_listing_item_content">
                    <div class="inner">
                      <h3>Ruby Beauty Center</h3>
					  <span><i class="im im-icon-Hotel"></i> Hotels</span> 
                      <span><i class="fa fa-map-marker"></i> The Ritz-Carlton, Hong Kong</span>
					  <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
						<div class="utf_star_rating_section" data-rating="4.5">
							<div class="utf_counter_star_rating">(4.5)</div>							
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                    </div>
                  </div>
                </div>
                <div class="buttons-to-right"> 
					<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a> 
					<a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a> 
				</div>
              </li>
              <li>
                <div class="utf_list_box_listing_item">
                  <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-05.jpg" alt=""></a></div>				  
                  <div class="utf_list_box_listing_item_content">
                    <div class="inner">
                      <h3>UK Fitness Club</h3>
					  <span><i class="im im-icon-Hotel"></i> Hotels</span> 
                      <span><i class="fa fa-map-marker"></i> The Ritz-Carlton, Hong Kong</span>
					  <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
						<div class="utf_star_rating_section" data-rating="4.5">
							<div class="utf_counter_star_rating">(4.5)</div>							
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                    </div>
                  </div>
                </div>
                <div class="buttons-to-right"> 
					<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a> 
					<a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a> 
				</div>
              </li>
              <li>
                <div class="utf_list_box_listing_item">
                  <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-06.jpg" alt=""></a></div>
                  <div class="utf_list_box_listing_item_content">
                    <div class="inner">
                      <h3>Fairmont Pacific Rim</h3>
					  <span><i class="im im-icon-Hotel"></i> Hotels</span> 
                      <span><i class="fa fa-map-marker"></i> The Ritz-Carlton, Hong Kong</span>
					  <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
						<div class="utf_star_rating_section" data-rating="4.5">
							<div class="utf_counter_star_rating">(4.5)</div>							
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                    </div>
                  </div>
                </div>
                <div class="buttons-to-right"> 
					<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a> 
					<a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a> 
				</div>
              </li>
            </ul>
          </div>
		  <div class="clearfix"></div>
          <div class="utf_pagination_container_part margin-top-30 margin-bottom-30">
            <nav class="pagination">
              <ul>
			    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                <li><a href="#" class="current-page">1</a></li>
                <li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
              </ul>
            </nav>
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