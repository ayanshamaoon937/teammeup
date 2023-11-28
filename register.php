<?php
$title = "Some Page Title";
$metaDescription = "This is the meta description for Some Page.";
$author = "Author Name";
include_once "includes/links.php";
?>
<!-- Wrapper -->
<div id="main_wrapper">
    <?php include_once "includes/header.php" ?>

    <div class="container">
        <div class="">
            <div class="row form-Login-row">
                <div class="col-lg-6">
                    <div class="form-Login">
                        <div class="text-center h1 padding-bottom-15">Register</div>
                        <form method="post" class="login">
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="username">
                                    <input type="text" class="input-text" name="firstname"  value=""
                                           placeholder="First Name">
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="username">
                                    <input type="text" class="input-text" name="lastname" value=""
                                           placeholder="Last Name">
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="email">
                                    <input type="email" class="input-text" name="email" value=""
                                           placeholder="Email">
                                </label>
                            </p>

                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password">
                                    <input class="input-text" type="password" name="password"
                                           placeholder="Password">
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password">
                                    <input class="input-text" type="password" name="ConfirmPassword"
                                           placeholder="Confirm Password">
                                </label>
                            </p>
                            <span class="link">Already have an Account? <a href="login">Login</a></span>
                            <div class="utf_row_form text-center">
                                <input type="submit" class="button border margin-top-5" name="login" value="Login">
                            </div>
                            <div class="utf-login_with my-3">
                                <span class="txt">Or Login in With</span>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-6">
                                    <a href="javascript:void(0);" class="social_bt google_btn mb-0"><i
                                                class="fa fa-google"></i> Google</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "includes/footer.php" ?>

</div>

<?php include_once "includes/footerLinks.php" ?>
