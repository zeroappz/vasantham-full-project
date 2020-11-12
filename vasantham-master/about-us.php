<?php
include "submit.php";
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
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/e.jpg); padding:106px;">
            <div class="auto-container">
                <div class="title-outer">
                <!--   <h1 style="color:#ffffff !important;">About Us</h1>
                    <ul class="page-breadcrumb" style="padding-top: 25px;">
                        <li><a href="index.php" style="color:white;text-align:center;">Home</a></li>
                        <li style="color:white;text-align:center;">About</li>-->
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">OUR MEDICAL</span>
                                <h2>We're setting Standards in Research what's more, Clinical Care.</h2>
                                <span class="divider"></span>
                                <p>We provide the most full medical services, so every person could have the opportunity to receive quality medical help.</p>
                                <p> Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and bore advanced restorative dentistry. We are among the most qualified implant providers in the AUS with over 30 years of uality training and experience.</p>
                            </div>
                            <!--<div class="link-box">
                                <figure class="signature"><img src="images/resource/signature.png" alt=""></figure>
                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">More About</span></a>
                            </div>-->
                        </div>
                    </div>

                    <!-- Images Column -->
                    <div class="images-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="video-link">
                                <a href="https://www.youtube.com/watch?v=6Jo7jRsxnD8" class="play-btn lightbox-image" data-fancybox="images"><span class="flaticon-play-button-1"></span></a>
                            </div>
                            <figure class="image-1"><img src="images/resource/image-1.png" alt=""></figure>
                            <figure class="image-2"><img src="images/resource/image-2.png" alt=""></figure>
                            <figure class="image-3">
                                <span class="hex"></span>
                                <img src="images/resource/image-3.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Fun Fact Section Two-->
        <section class="fun-fact-section-two">
            <div class="auto-container">
                <div class="row">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-user-experience"></span></div>
                            <h4 class="counter-title">Years of Experience</h4>
                            <span class="count-text" data-speed="3000" data-stop="25">0</span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-team"></span></div>
                            <h4 class="counter-title">Medical Specialities</h4>
                            <span class="count-text" data-speed="3000" data-stop="470">0</span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-hospital"></span></div>
                            <h4 class="counter-title">Medical Specialities</h4>
                            <span class="count-text" data-speed="3000" data-stop="689">0</span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-add-friend"></span></div>
                            <h4 class="counter-title">Happy Patientss</h4>
                            <span class="count-text" data-speed="3000" data-stop="9036">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fun Fact Section Two -->

        <!-- Appointment Section Three -->
        <section class="appointment-section-three" style="background-image: url(images/background/2.jpg);">
            <div class="auto-container">
                <div class="row">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <span class="title">Need a Doctor for Check-up?</span>
                            <h3>Just Make an Appointment <br>and You’re Done!</h3>
                            <div class="text">Get Your Quote or Call: <strong>(04652) 222-626</strong></div>

                            <div class="timetable-info">
                                <h3>Opening Hours</h3>
                                <ul class="timing-list">
                                    <li>Monday - Sunday <span>24 * 7 / 365 days</span></li>
                                    <!--<li>Friday <span>09:00 - 19:00</span></li>
                                    <li>Saturday - Thursday <span>09:00 - 18:00</span></li>
                                    <li>Sunday - Thursday <span>09:00 - 18:00</span></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="appointment-form default-form">
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
                                        <textarea name="message" style="height: 200px;" cols="40" rows="10" class="form-control wpcf7-textarea" placeholder="Enter your message here"><?php echo $message; ?></textarea>
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
                </div>
            </div>
        </section>
        <!--End Appointment Section Three -->

        <!-- Team Section Two -->
        <section class="team-section-two alternate alternate2">
            <div class="auto-container">
                <div class="row">

                    <!-- Team Block -->
                    <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="doctor-detail.php"><img src="images/resource/team-6.jpg" alt=""></a></figure>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                            <div class="info-box">
                                <h5 class="name"><a href="doctor-detail.php">Dr. N.B.Venkataraman - MD, DM(CARDIO)</a></h5>
                                <span class="designation">Senior Dr. at Vasantham</span>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="doctor-detail.php"><img src="images/resource/team-7.jpg" alt=""></a></figure>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                            <div class="info-box">
                                <h5 class="name"><a href="doctor-detail.php">Dr. Venkatesh - MD, DCH(CARDIO)</a></h5>
                                <span class="designation">Senior Dr. at Vasantham</span>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="doctor-detail.php"><img src="images/resource/team-8.jpg" alt=""></a></figure>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                            <div class="info-box">
                                <h5 class="name"><a href="doctor-detail.php">Dr. B.V Selvan - MD(DERMATOLOGY)</a></h5>
                                <span class="designation">Senior Dr. at Vasantham</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="sec-bottom-text">Don’t hesitate, contact us for better help and services. <a href="doctors-detail.php">Explore all Dr. Team</a></div>
            </div>
        </section>
        <!--End Team Section -->

        <!-- Skill Section -->
        <section class="skill-section">
            <div class="outer-container clearfix">
                <div class="skill-column">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">BEST OF THE BEST</span>
                            <h2>High End Equipments.</h2>
                            <span class="divider"></span>
                            <div class="text">Surgery of the respiratory tract is generally performed by specialists in cardiothoracic surgery (or thoracic surgery) though minor procedures may be performed by pulmonologists. Pulmonology is closely.</div>
                        </div>

                        <!--Skills-->
                        <div class="skills">
                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">CARDIO-ONCOLOGY</div>
                                    <div class="skill-percentage">
                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="55">0</span>%</div>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="55"></div>
                                    </div>
                                </div>
                            </div>

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">HEART ASSESSMENT</div>
                                    <div class="skill-percentage">
                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="72">0</span>%</div>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="72"></div>
                                    </div>
                                </div>
                            </div>

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">DENTAL SURGERY</div>
                                    <div class="skill-percentage">
                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="88">0</span>%</div>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="88"></div>
                                    </div>
                                </div>
                            </div>

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">PLASTIC SURGERY</div>
                                    <div class="skill-percentage">
                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="78">0</span>%</div>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="78"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-box"><a href="#" class="theme-btn btn-style-three"><span class="btn-title">Learn More</span></a></div>
                    </div>
                </div>

                <div class="image-column" style="background-image: url(images/resource/image-7.jpg);">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/image-7.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </section>
        <!--End Skill Section -->

        <!-- Testimonial Section -->
        <section class="testimonial-section-two">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title text-center">
                    <span class="title">Happy Patients</span>
                    <h2>What Says Our Patients</h2>
                    <span class="divider"></span>
                </div>

                <div class="testimonial-outer">
                    <!-- Product Thumbs Carousel -->
                    <div class="client-thumb-outer">
                        <div class="client-thumbs-carousel owl-carousel owl-theme">
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/testi-thumb-2.jpg" alt=""></figure>
                                <div class="author-info">
                                    <span class="icon fa fa-quote-left"></span>
                                    <div class="author-name">Lenin Prakash</div>
                                    <div class="designation">CEO, Zeroappz</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/testi-thumb-3.jpg" alt=""></figure>
                                <div class="author-info">
                                    <span class="icon fa fa-quote-left"></span>
                                    <div class="author-name">Jabas Samuel</div>
                                    <div class="designation">Placement Officer</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/testi-thumb-2.jpg" alt=""></figure>
                                <div class="author-info">
                                    <span class="icon fa fa-quote-left"></span>
                                    <div class="author-name">Viswanathan</div>
                                    <div class="designation">Businessman</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/testi-thumb-3.jpg" alt=""></figure>
                                <div class="author-info">
                                    <span class="icon fa fa-quote-left"></span>
                                    <div class="author-name">Praveen Kumar</div>
                                    <div class="designation">Restaurant Owner</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Client Testimonial Carousel -->
                    <div class="client-testimonial-carousel default-dots owl-carousel owl-theme">

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call To Action -->
                <div class="call-to-action">
                    <div class="inner-container">
                        <div class="content-column">
                            <h4>We Employ The Latest Technology</h4>
                            <h2>We Ensure Safe Dental Surgery </h2>
                            <a href="appointment.php" class="theme-btn btn-style-three"><span class="btn-title">Take Appointment</span></a>
                        </div>

                        <div class="video-column">
                            <div class="btn-box">
                                <a href="https://www.youtube.com/watch?v=6Jo7jRsxnD8" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple"></span></a>
                                <span class="title">Watch now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Section -->

        <!-- Clients Section -->

        <?php
        include "clients_section.php";
        ?>
        <!--End Main Footer -->

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