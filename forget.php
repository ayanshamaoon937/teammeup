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
                        <div class="text-center h1 padding-bottom-15">Forget Password</div>
                        <form method="post" class="login">
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="Email">
                                    <input type="text" class="input-text" name="username" id="Email" value=""
                                           placeholder="Email">
                                </label>
                            </p>
                            <div class="utf_row_form text-center">
                                <input type="submit" class="button border margin-top-5" name="login" value="Submit">
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
