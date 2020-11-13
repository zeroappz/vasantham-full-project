<?php
ob_start();
session_start();

require_once("../backend/admin/config.php");
// include("../backend/admin/functions.php");
$error_message = '';
$success_message = '';
?>
<?php
$BASE_URL = 'http://localhost/vasantham-full-project/vasantham-master';

// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM doctor");
$statement->execute();
// $doctorsList = $statement->fetchAll();
$total = $statement->rowCount();
if ($total == 0) {
    header('location: ' . $BASE_URL);
    echo 'no rows available';
    exit;
} else {
    //echo $doctorsList[0]['name'];
}


/*
$statement = $pdo->prepare("SELECT * FROM designation where designation_id=$designation_id");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);				
foreach ($result as $row)
{
    $designation_name = $row['designation_name'];
    echo $designation_name;
}*/


?>
<?php
include 'header.php';
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

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/8a.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1 style="color:white">Dedicated Doctors</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php" style="color:white">Home</a></li>
                        <li style="color:white">Doctors</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Team Section Two -->
        <section class="team-section-two alternate alternate2">
            <div class="auto-container">
                <div class="row">
                    <!-- Team Block -->

                    <?php
                    $statement = $pdo->prepare("SELECT
												t1.id,
												t1.name,
												t1.slug,
												t1.designation_id,
												t1.photo,
												t1.facebook,
												t1.twitter,
												t1.linkedin,
												t1.instagram,
												t2.designation_id,
												t2.designation_name,
                                                t2.department_tamil
					                            FROM doctor t1
					                            JOIN designation t2
					                            ON t1.designation_id = t2.designation_id
					                            WHERE t1.status=?
					                            ");
                    $statement->execute(array('Active'));
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row) {
                    ?>
                        <div class="team-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="doctor-detail.php?id=<?php echo $row['id']; ?>"><img src="<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row['photo']; ?>" alt=""></a></figure>
                                    <ul class="social-links">
                                        <li><a href="<?php echo $row['facebook']; ?>"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="<?php echo $row['twitter']; ?>"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="<?php echo $row['instagram']; ?>"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="<?php echo $row['linkedin']; ?>"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                </div>
                                <div class="info-box">
                                    <h5 class="name" style="font-size: 18px"><a href="doctor-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h5>
                                    <span class="designation"><?php echo $row['designation_name']; ?></span> | <span class="designation"><?php echo $row['department_tamil']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="sec-bottom-text">Don’t hesitate, contact us for better help and services. <a href="doctor-detail.php">Explore all Dr. Team</a></div>
            </div>
        </section>

        <?php
            // include "testimonial_section_2.php";
        ?>
        <!-- Time Table Section -->
        <section class="time-table-section">
            <div class="auto-container">
                <div class="table-outer">
                    <!-- Doctors Time Table -->
                    <table class="doctors-time-table">
                        <thead>
                            <tr>
                                <th class="dark">Time Table</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thrusday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- Table Row 08:00am -->
                            <tr>
                                <th>08:00am</th>
                                <td>
                                    <strong>Dental Care</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Orthopaedics</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Medicine</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Orthopaedics</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                            </tr>

                            <!-- Table Row 10:00am -->
                            <tr>
                                <th>10:00am</th>
                                <td class="empty"></td>
                                <td>
                                    <strong>Gynecology</strong>
                                    <p> 9:00 am - 10:00 am <br> Room: 301</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Cardiology</strong>
                                    <p> 9:00 am - 10:00 am <br> Room: 301</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Dental Care</strong>
                                    <p> 9:00 am - 10:00 am <br> Room: 301</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                            </tr>

                            <!-- Table Row 11:00am -->
                            <tr>
                                <th>11:00am</th>
                                <td>
                                    <strong>Dental Care</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Orthopaedics</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Medicine</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Orthopaedics</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                            </tr>

                            <!-- Table Row 11:30am -->
                            <tr>
                                <th>11:30am</th>
                                <td class="empty"></td>
                                <td>
                                    <strong>Gynecology</strong>
                                    <p> 9:00 am - 10:00 am <br> Room: 301</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Cardiology</strong>
                                    <p> 9:00 am - 10:00 am <br> Room: 301</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Dental Care</strong>
                                    <p> 9:00 am - 10:00 am <br> Room: 301</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                            </tr>

                            <!-- Table Row 12:00am -->
                            <tr>
                                <th>12:00am</th>
                                <td>
                                    <strong>Dental Care</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Orthopaedics</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Medicine</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Orthopaedics</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                            </tr>

                            <!-- Table Row 01:00pm -->
                            <tr>
                                <th>01:00pm</th>
                                <td class="empty"></td>
                                <td>
                                    <strong>Gynaecology</strong>
                                    <p> 9:00 am - 10:00 am <br> Room: 301</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Cardiology</strong>
                                    <p> 9:00 am - 10:00 am <br> Room: 301</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Dental Care</strong>
                                    <p> 9:00 am - 10:00 am <br> Room: 301</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                            </tr>

                            <!-- Table Row 02:00pm -->
                            <tr>
                                <th>02:00pm</th>
                                <td>
                                    <strong>Dental Care</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Orthopaedics</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Medicine</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                                <td class="empty"></td>
                                <td>
                                    <strong>Orthopaedics</strong>
                                    <p> 8:00 am - 9:00 am <br> Room: 303</p>
                                    <!--<div class="doctor-info">
                                        <figure class="thumb"><img src="images/resource/doctor-thumb.jpg" alt=""></figure>
                                        <h4 class="name">Dr. Ajitha Sekar MD(OBG)</h4>
                                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
                                    </div>-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- End Time Table Section -->

        <!-- Clients Section -->

        <?php
        include "testimonial_section.php";
        ?>
        <!--End Clients Section -->

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