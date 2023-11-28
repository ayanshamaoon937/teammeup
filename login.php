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
                        <div class="text-center h1 padding-bottom-15">Login</div>
                        <form method="post" class="login">
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="username">
                                    <input type="text" class="input-text" name="username" id="username" value=""
                                           placeholder="Username">
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password">
                                    <input class="input-text" type="password" name="password" id="password"
                                           placeholder="Password">
                                </label>
                            </p>
                            <div class="d-flex align-items-center justify-content-between margin-bottom-5">
                                <span class="link">Don't have an Account? <a href="register">Register</a></span>
                                <a class="link" href="forget">Forgot Password?</a>
                            </div>

                            <div class="radio-btn-wra">
                                <label class="radio-btn-w">
                                    <input type="radio" name="radio-btn">
                                    <span class="label">Login as Player</span>
                                </label>
                                <label class="radio-btn-w">
                                    <input type="radio" name="radio-btn">
                                    <span class="label">Login as Sportsman</span>
                                </label>
                                <label class="radio-btn-w">
                                    <input type="radio" name="radio-btn">
                                    <span class="label">Login as Club</span>
                                </label>
                            </div>
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
