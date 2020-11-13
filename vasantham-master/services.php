<?php
include "header.php"
?>
<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 60%;
    }

    #customers td,
    #customers th {
        border: 1px solid #eee;
        padding: 8px;
        text-align: center;
    }

    #customers tr:nth-child(even) {
        background-color: #FFFFFF;
    }

    #customers tr:nth-child(odd) {
        background-color: #ECF7E6;
    }

    #customers tr:hover {
        background-color: #C6D3F3;
    }

    /*#customers tr:hover {background-color:#f1f1f1;}*/


    #customers th {

        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #1370B5;
        color: white;
    }
</style>


<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <?php
        include "header_main.php"
        ?>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/f1.jpg); padding:100px;">
            <div class="auto-container" style="height:40px;">
                <div class="title-outer" >
                    <h1 style="color:#ffffff !important;">Services</h1>
                    <ul class="page-breadcrumb" style="padding: 10px;">
                        <li><a href="index.php" style="color:#ffffff !important;">Home</a></li>
                        <li  style="color:#ffffff !important;">Services</li>
                    </ul>
                </div>
            </div>
        </section>
      <!--  End Page Title-->
  

        <!-- Services Section -->
        <section class="services-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-heartbeat"></span>
                            <h5><a href="#">ICU</a></h5>
                       <img src="images\1-Nov-20\icu\a.jpg" style="width: 150px; height:150px;border-radius: 18px;">
                     
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-surgery-room"></span>
                            <h5><a href="#">CCU</a></h5>
                            <img src="images\1-Nov-20\ccu\2.jpg" style="width: 150px; height:150px;border-radius: 18px;">
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-pharmacy"></span>
                            <h5><a href="#">ECHO</a></h5> 
                            <img src=" images\1-Nov-20\Echo\2.jpg" style="width: 150px; height:150px;border-radius: 18px;">
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                        <span class="icon flaticon-pharmacy"></span>
                            <h5><a href="#">STRESS ECHO</a></h5>
                            <img src=" images\1-Nov-20\Echo\a.jpg" style="width: 150px; height:150px;border-radius: 18px;">
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-lab"></span>
                            <h5><a href="#">FETAL ECHO</a></h5>
                            <img src=" images\1-Nov-20\fatalecho.jpg" style="width: 150px; height:150px;border-radius: 18px;">
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-lab"></span>
                            <h5><a href="#">STRAIN IMAGINE</a></h5>
                            <img src=" images\1-Nov-20\stain.jpeg" style="width: 150px; height:150px;border-radius: 18px;">
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-lab"></span>
                            <h5 style="font-size:19px !important;"><a href="#">HOLTER MONITORING</a></h6>
                            <img src=" images\1-Nov-20\holter.jpg" style="width: 150px; height:150px;border-radius: 18px;">
                       
                        </div>
                    </div>
                    
                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-lab"></span>
                            <h5><a href="#">ENDOSCOPY</a></h5>
                            <img src=" images\1-Nov-20\endoscopy.webp" style="width: 150px; height:150px;border-radius: 18px;">
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-lab"></span>
                            <h5 ><a href="#">CAROTID DOPPLER</a></h5>
                            <img src=" images\1-Nov-20\CAROTID DOPPLER.gif" style="width: 150px; height:150px;border-radius: 18px;">
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-lab"></span>
                            <h5><a href="#">C - ARM </a></h5>
                            <img src=" images\1-Nov-20\carm.jpg" style="width: 150px; height:150px;border-radius: 18px;">
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-first-aid"></span>
                            <h5><a href="#">EEG</a></h5>
                            <img src=" images\1-Nov-20\eeg.webp" style="width: 150px; height:150px;border-radius: 18px;">
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--End Services Section -->
        <br><br><br>

      <!-- Service Block -->
      <div class="service-block col-lg-3 col-md-4 col-sm-12" style="padding-left : 80px;">
                        <div class="inner-box" style="background:linear-gradient(to bottom, #ffffff 26%, #1370B5 134%)">
                            <span class="icon flaticon-lab"></span>
                            <h5><a href="#">CATH LAB</a></h5>
                            <img src="  images\1-Nov-20\cath\1.jpg" style="width: 250px; height:250px;border-radius: 18px;">
                        </div>
                    </div>
                   





        <!------------------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------------------>

        <!-- Appointment Section -->
        <section class="appointment-section alternate">
            <div class="image-layer" style="background-image: url(images/background/2.jpg);"></div>
            <div class="auto-container">
              <!--  <div class="row">
                     Content Column
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <span class="title">Need a Doctor for Check-up?</span>
                            <h2>Just Make an Appointment <br>and You’re Done!</h2>
                            <div class="number">Get Your Quote or Call: <strong>(04652) 222-626</strong></div>
                            <a href="appointment.php" class="theme-btn btn-style-three"><span class="btn-title">Get an Appointment</span></a>
                        </div>
                    </div>
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <figure class="image"><img src="images/resource/image-4.png" alt=""></figure>
                    </div>
                </div> -->

                <div class="fun-fact-section">
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
            </div>
        </section>
        <!-- End Appointment Section -->

     

        <!-- Clients Section -->
        <?php
        include "clients_section.php";
        ?>
        <!--End Clients Section -->

        <!-- Main Footer -->
        <?php
        include "footer.php";
        ?>
        <!--End Main Footer -->

    </div><!-- End Page Wrapper -->

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/mmenu.polyfills.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <!-- Color Setting -->
    <script src="js/color-settings.js"></script>
</body>

</html>