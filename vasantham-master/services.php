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
        <section class="page-title" style="background-image: url(images/background/8.jpg);">
            <div class="auto-container" style="height:40px;">
                <div class="title-outer">
                    <h1>Services</h1>
                    <ul class="page-breadcrumb" style="padding: 10px;">
                        <li><a href="index.php">Home</a></li>
                        <li>Services</li>
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
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="icon flaticon-heartbeat"></span>
                            <h5><a href="#">Health Check</a></h5>
                            <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="icon flaticon-surgery-room"></span>
                            <h5><a href="#">Operation Theater</a></h5>
                            <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="icon flaticon-pharmacy"></span>
                            <h5><a href="#">Pharmacy Support</a></h5>
                            <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="icon flaticon-transport"></span>
                            <h5><a href="#">Ambulance Car</a></h5>
                            <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="icon flaticon-lab"></span>
                            <h5><a href="#">Lab Tests</a></h5>
                            <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <span class="icon flaticon-first-aid"></span>
                            <h5><a href="#">Intensive Care</a></h5>
                            <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Services Section -->
        <br><br><br>

       <!------------------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------------------>
        <!------------------------------------TABLE----------------------------------------------------->
       
        <h3 style="border: black; text-align:center;color:#1370B5"> Our Services</h3><br>
        <center>
            <table id="customers" style="align-self: center;">

                <tr>
                    <td>ICU</td>
                    <td>CCU</td>

                </tr>
                <tr>
                    <td>ECHO</td>
                    <td>STRESS ECHO</td>

                </tr>
                <tr>
                    <td>FETAL ECHO</td>
                    <td>STRAIN IMAGING</td>

                </tr>
                <tr>
                    <td>HOLTER MONITORING </td>
                    <td>CATH LAB</td>

                </tr>
                <tr>
                    <td>ENDOSCOPY</td>
                    <td>CAROTID DOPPLER</td>

                </tr>
                <tr>
                    <td>C-ARM</td>
                    <td>EEG</td>

                </tr>


            </table>
        </center>
        <br>  <br>
        </div>
      
        <!------------------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------------------>




        <!------------------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------------------>

        <!-- Appointment Section -->
        <section class="appointment-section alternate">
            <div class="image-layer" style="background-image: url(images/background/2.jpg);"></div>
            <div class="auto-container">
                <div class="row">
                    <!-- Content Column -->
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
                </div>

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