<?php
include "appointment_mail.php";
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

        <!-- Contact Section -->
        <section class="contact-section" id="contact">

            <div class="sec-title text-center">
                <span class="sub-title">OUR SERVICES</span>
                <h2>We Care Our Patients.</h2>
                <span class="divider"></span>
            </div>
            <div class="small-container">
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

                                    <div class="form-group">
                                        <label>Choose Department</label>
                                        <select name="departments" id="departments" onchange="appointment();" required>
                                            <option value="default" selected disabled>Select Departments</option>
                                            <!--  <option value="Cardiology"><?php echo $row['dep_name']; ?></option>-->
                                            <option value="<?php echo $department ?>">Neurology</option>
                                            <option value="Urology">Urology</option>
                                            <option value="Gynecological">Gynecological</option>
                                            <option value="Pediatrical">Pediatrical</option>
                                            <option value="Laboratory">Laboratory</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Date for Appointment</label>
                                        <input style="height: 60px;" type="date" name="date" placeholder="Select Date" class="form-control" value="<?php echo $date ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Select your time</label>
                                        <select name="time" required id="timing">
                                            <option value="" selected disabled>Select Time</option>
                                            <option value="<?php echo $time ?>" data-value="Cardiology">10:00AM - 12:00AM</option>
                                            <option value="12:00AM - 02:00AM" data-value="Cardiology">12:00AM - 02:00AM</option>
                                            <option value="02:00PM - 04:00PM" data-value="Neurology">02:00PM - 04:00PM</option>
                                            <option value="04:00PM - 06:00PM" data-value="Neurology">04:00PM - 06:00PM</option>
                                            <option value="06:00PM - 08:00PM" data-value="Urology">06:00PM - 08:00PM</option>
                                            <option value="10:00AM - 12:00AM" data-value="Urology">10:00AM - 12:00AM</option>
                                            <option value="12:00AM - 02:00AM" data-value="Gynecological">12:00AM - 02:00AM</option>
                                            <option value="02:00PM - 04:00PM" data-value="Gynecological">02:00PM - 04:00PM</option>
                                            <option value="04:00PM - 06:00PM" data-value="Pediatrical">04:00PM - 06:00PM</option>
                                            <option value="06:00PM - 08:00PM" data-value="Pediatrical">06:00PM - 08:00PM</option>
                                            <option value="10:00AM - 12:00AM" data-value="Laboratory">10:00AM - 12:00AM</option>
                                            <option value="12:00AM - 02:00AM" data-value="Laboratory">12:00AM - 02:00AM</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Message</label>
                                        <textarea style="height: 177px;" name="message" cols="40" rows="10" class="form-control wpcf7-textarea" placeholder="Enter your message here"><?php echo $message; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group" align="center">
                                        <button style="width: 33%;top: 10px;" class="theme-btn btn-style-one submit" type="submit" name="submit" value="SEND US"><span class="btn-title text-center">Send Message</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
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