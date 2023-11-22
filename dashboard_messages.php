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
              <li class="active"><a href="dashboard_messages"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
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
            <h2>Messages</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index">Home</a></li>
                <li><a href="dashboard">Dashboard</a></li>
                <li>Messages</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12 col-md-12">
          <div class="utf_dashboard_list_box margin-top-0">
            <h4 class="gray"><i class="fa fa-envelope-o"></i> Messages</h4>
              <div class="card">
                  <div class="row g-0">
                      <div class="col-12 col-lg-5 col-xl-4 border-end">

                          <div class="px-4 d-none d-md-block">
                              <div class="d-flex align-items-center">
                                  <div class="flex-grow-1">
                                      <input type="search" class="form-control my-3" placeholder="Search...">
                                  </div>
                              </div>
                          </div>

                          <a href="#" class="list-group-item list-group-item-action border-0">
                              <div class="d-flex align-items-start justify-content-between">
                                  <div class="d-flex align-items-start">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle me-1" alt="Vanessa Tucker" width="40" height="40">
                                      <div class="flex-grow-1 ms-3">
                                          Vanessa Tucker
                                          <div class="small"><span class="fa fa-circle text-success"></span> Online</div>
                                      </div>
                                  </div>
                                  <div class="badge bg-success">5</div>
                              </div>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action border-0">
                              <div class="d-flex align-items-start justify-content-between">
                                  <div class="d-flex align-items-start">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle me-1" alt="Vanessa Tucker" width="40" height="40">
                                      <div class="flex-grow-1 ms-3">
                                          Vanessa Tucker
                                          <div class="small"><span class="fa fa-circle text-danger"></span> Offline</div>
                                      </div>
                                  </div>
                                  <div class="badge bg-success">2</div>
                              </div>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action border-0">
                              <div class="d-flex align-items-start justify-content-between">
                                  <div class="d-flex align-items-start">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle me-1" alt="Vanessa Tucker" width="40" height="40">
                                      <div class="flex-grow-1 ms-3">
                                          Vanessa Tucker
                                      </div>
                                  </div>
                                  <div class="badge bg-success">5</div>
                              </div>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action border-0">
                              <div class="d-flex align-items-start justify-content-between">
                                  <div class="d-flex align-items-start">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle me-1" alt="Vanessa Tucker" width="40" height="40">
                                      <div class="flex-grow-1 ms-3">
                                          Vanessa Tucker
                                      </div>
                                  </div>
                                  <div class="badge bg-success">5</div>
                              </div>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action border-0">
                              <div class="d-flex align-items-start justify-content-between">
                                  <div class="d-flex align-items-start">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle me-1" alt="Vanessa Tucker" width="40" height="40">
                                      <div class="flex-grow-1 ms-3">
                                          Vanessa Tucker
                                      </div>
                                  </div>
                                  <div class="badge bg-success">5</div>
                              </div>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action border-0">
                              <div class="d-flex align-items-start justify-content-between">
                                  <div class="d-flex align-items-start">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle me-1" alt="Vanessa Tucker" width="40" height="40">
                                      <div class="flex-grow-1 ms-3">
                                          William Harris
                                      </div>
                                  </div>
                                  <div class="badge bg-success">5</div>
                              </div>
                          </a>

                          <hr class="d-block d-lg-none mt-1 mb-0">
                      </div>
                      <div class="col-12 col-lg-7 col-xl-8">
                          <div class="py-2 px-4 border-bottom d-none d-lg-block">
                              <div class="d-flex align-items-center py-1">
                                  <div class="position-relative">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                  </div>
                                  <div class="flex-grow-1 pl-3">
                                      <strong>Sharon Lessman</strong>
                                      <div class="text-muted small"><em>Typing...</em></div>
                                  </div>
                              </div>
                          </div>

                          <div class="position-relative">
                              <div class="chat-messages p-4">

                                  <div class="chat-message-right pb-4">
                                      <div>
                                          <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle me-1" alt="Chris Wood" width="40" height="40">
                                          <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                      </div>
                                      <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                          <div class="font-weight-bold mb-1">You</div>
                                          Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                      </div>
                                  </div>

                                  <div class="chat-message-left pb-4">
                                      <div>
                                          <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                          <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                      </div>
                                      <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                          <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                          Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                      </div>
                                  </div>

                                  <div class="chat-message-right mb-4">
                                      <div>
                                          <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle me-1" alt="Chris Wood" width="40" height="40">
                                          <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                                      </div>
                                      <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                          <div class="font-weight-bold mb-1">You</div>
                                          Cum ea graeci tractatos.
                                      </div>
                                  </div>

                                  <div class="chat-message-left pb-4">
                                      <div>
                                          <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                          <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                                      </div>
                                      <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                          <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                          Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit.
                                          Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                      </div>
                                  </div>

                                  <div class="chat-message-left pb-4">
                                      <div>
                                          <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                          <div class="text-muted small text-nowrap mt-2">2:37 am</div>
                                      </div>
                                      <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                          <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                          Cras pulvinar, sapien id vehicula aliquet, diam velit elementum orci.
                                      </div>
                                  </div>

                                  <div class="chat-message-right mb-4">
                                      <div>
                                          <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle me-1" alt="Chris Wood" width="40" height="40">
                                          <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                      </div>
                                      <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                          <div class="font-weight-bold mb-1">You</div>
                                          Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="flex-grow-0 py-3 px-4 border-top">
                              <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Type your message">
                                  <button class="btn bg-primary text-white"><i class="fa fa-send me-2"></i>Send</button>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>





          </div>
          <div class="clearfix"></div>
          <div class="utf_pagination_container_part margin-top-30 margin-bottom-0">
            <nav class="pagination">
              <ul>
			    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                <li><a href="#" class="current-page">1</a></li>
                <li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
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
<!-- Wrapper / End --> 
<?php include_once "includes/footerLinks.php";?>