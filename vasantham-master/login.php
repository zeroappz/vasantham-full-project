<?php
include "header.php"
?>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <?php
        include "header_main.php"
        ?>
        <!--End Main Header -->
        <!--Login Section-->
        <section class="login-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <!-- Login Form -->
                        <div class="login-form">
                            <h2>Login</h2>
                            <!--Login Form-->
                            <form method="post" action="http://ary-themes.com/html/bold_touch/medicoz/contact.html">
                                <div class="form-group">
                                    <label>Username or Email</label>
                                    <input type="text" name="username" placeholder="Name or Email " required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Your Password</label>
                                    <input type="email" name="email" placeholder="Password" required>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" name="shipping-option" id="account-option-1">&nbsp; <label for="account-option-1">Remember me</label>
                                </div>

                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">LOGIN</span></button>
                                </div>

                                <div class="form-group pass">
                                    <a href="#" class="psw">Lost your password?</a>
                                </div>
                            </form>
                        </div>
                        <!--End Login Form -->
                    </div>

                    <div class="column col-lg-6 col-md-6 col-sm-12">

                        <!-- Register Form -->
                        <div class="login-form register-form">
                            <h2>Register</h2>
                            <!--Login Form-->
                            <form method="post" action="http://ary-themes.com/html/bold_touch/medicoz/contact.html">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="username" placeholder="Your Name" required>
                                </div>

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="form-group">
                                    <label>Your Password</label>
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>

                                <div class="form-group text-right">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Register</span></button>
                                </div>
                            </form>
                        </div>
                        <!--End Register Form -->
                    </div>
                </div>
            </div>
        </section>
        <!--End Login Section-->
        <!-- Main Footer -->

        <?php
        include "footer.php";
        ?>
        <!--End Main Footer -->

    </div><!-- End Page Wrapper -->

    <?php

    include "script_includes.php";
    ?>
</body>

</html>