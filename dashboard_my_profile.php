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
                    <li><a href="dashboard"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
                    <li><a href="dashboard_add_listing"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                    <li><a href="dashboard_my_listing"><i class="sl sl-icon-layers"></i> My Listings</a></li>
                    <li><a href="dashboard_bookings"><i class="sl sl-icon-docs"></i> Bookings</a></li>
                    <li><a href="dashboard_messages"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                    <li class="active"><a href="dashboard_my_profile"><i class="sl sl-icon-user"></i> My Profile</a></li>
                    <li><a href="dashboard_change_password"><i class="sl sl-icon-key"></i> Change Password</a></li>
                    <li><a href="index"><i class="sl sl-icon-power"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="utf_dashboard_content">
            <div id="titlebar" class="dashboard_gradient">
                <div class="row">
                    <div class="col-md-12">
                        <h2>My Profile</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li><a href="dashboard">Dashboard</a></li>
                                <li>My Profile</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="utf_dashboard_list_box margin-top-0">
                        <h4 class="gray"><i class="sl sl-icon-user"></i> Profile Details</h4>
                        <div class="utf_dashboard_list_box-static">
                            <div class="edit-profile-photo"> <img src="images/user-avatar.jpg" alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload"> <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload" />
                                    </div>
                                </div>
                            </div>
                            <div class="my-profile">
                                <div class="row with-forms">
                                    <div class="col-md-4">
                                        <label>Name</label>
                                        <input type="text" class="input-text" placeholder="Alex Daniel" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                        <input type="text" class="input-text" placeholder="(123) 123-456" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Company</label>
                                        <input type="text" class="input-text" placeholder="ABC Company" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                        <input type="text" class="input-text" placeholder="test@example.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Designation</label>
                                        <input type="text" class="input-text" placeholder="Account Manager" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>State</label>
                                        <input type="text" class="input-text" placeholder="London" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Birth</label>
                                        <input type="text" class="input-text" placeholder="20 March 2000" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Country</label>
                                        <input type="text" class="input-text" placeholder="England" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Age</label>
                                        <input type="text" class="input-text" placeholder="18 Year" value="">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <textarea name="notes" cols="30" rows="10">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Notes</label>
                                        <textarea name="notes" cols="30" rows="10">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Facebook</label>
                                        <input type="text" class="input-text" placeholder="https://www.facebook.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Twitter</label>
                                        <input type="text" class="input-text" placeholder="https://www.twitter.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Linkedin</label>
                                        <input type="text" class="input-text" placeholder="https://www.linkedin.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Google+</label>
                                        <input type="text" class="input-text" placeholder="https://plus.google.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Instagram</label>
                                        <input type="text" class="input-text" placeholder="http://instagram.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Skype</label>
                                        <input type="text" class="input-text" placeholder="https://www.skype.com" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <button class="button preview">Save Changes</button>
                                <button class="button preview bg-danger">Delete Profile</button>
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