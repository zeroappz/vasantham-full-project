

<?php
include "submit.php";
include "header.php";
//require_once "submit.php"
?>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <?php
        include "header_main.php"
        ?>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/a.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1 style="color: #ffffff !important;">Contact Us</h1>
                    <ul class="page-breadcrumb">
                        <li style="color: #ffffff !important;"><a href="index.php" style="color: #ffffff !important;">Home</a></li>
                        <li style="color: #ffffff !important;">Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Map Section -->
        <section class="map-section">
            <div class="auto-container">
                <div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15796.564087024202!2d77.41787581981126!3d8.188545994730864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04f126107188a3%3A0xdc19b9454b1d617c!2sVasantham%20HEALTH%20Centre%20PVt!5e0!3m2!1sen!2sin!4v1603695445200!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>
        <!-- End Map Section -->

        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <div class="small-container">
                <div class="sec-title text-center">
                    <span class="sub-title">Contact Now</span>
                    <h2>Write us a Message !</h2>
                    <span class="divider"></span>
                </div>

                <!-- Contact box -->
                <div class="contact-box">
                    <div class="row">
                        <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner">
                                <span class="icon flaticon-worldwide"></span>
                                <h4><strong>Address</strong></h4>
                                <p>Dennison road, Nagercoil-629001<br>Tamilnadu, IN</p>
                            </div>
                        </div>

                        <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner">
                                <span class="icon flaticon-phone"></span>
                                <h4><strong>Phone</strong></h4>
                                <p><a href="tel:04652222526">(04652) - 222526</a></p>
                                <p><a href="tel:04652222626">(04652) - 222626</a></p>
                            </div>
                        </div>

                        <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner">
                                <span class="icon flaticon-email"></span>
                                <h4><strong>Email</strong></h4>
                                <p><a style="font-size: 13px;" href="mailto:vasanthamhealthcentre@gmail.com">vasanthamhealthcentre@gmail.com</a></p>
                                <!--<p><a href="mailto:support@example.com">support@example.com</a></p>-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form box -->
                <div class="form-box">
                    <div class="contact-form">
                        <?php echo $error; ?>
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Enter Name</label>
                                        <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Phone Number</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Mobile Number" value="<?php echo $phone; ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Enter Message</label>
                                        <textarea name="message" cols="40" rows="10" class="form-control wpcf7-textarea" placeholder="Enter your message here"><?php echo $message; ?></textarea>
                                    </div>
                                    <div class="form-group" align="center">
                                        <button class="theme-btn btn-style-one submit" type="submit" name="submit" value="SEND US"><span class="btn-title text-center">Send Message</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact Section -->


        <!--End Clients Section -->

        <!-- Main Footer -->
        <?php
        include "footer.php"
        ?>
        <!--End Main Footer -->

    </div><!-- End Page Wrapper -->

    <?php
    // include "color-switcher.php";
    include "script_includes.php";
    ?>
</body>

</html>