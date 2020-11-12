<?php
ob_start();
session_start();

include("../backend/admin/config.php");
// include("../backend/admin/functions.php");
$error_message = '';
$success_message = '';
?>
<?php
$BASE_URL = 'http://localhost/vasantham/vasantham-master';
$ID = $_GET['id'];
$IMG_URL = 'assets/uploads/';
// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM doctor WHERE id=$ID");
$statement->execute();
$doctorsList = $statement->fetchAll();
$total = $statement->rowCount();
if ($total == 0) {
    header('location: ' . $BASE_URL);
    echo 'no rows available';
    exit;
} else {
    //echo $doctorsList[0]['name'];
}
// Getting the detailed data of a service from slug
// $statement = $pdo->prepare("SELECT * FROM doctor ORDER BY id ASC");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($doctorsList as $row) {
    $name              = $row['name'];
    $slug              = $row['slug'];
    $designation_id    = $row['designation_id'];
    $photo             = $row['photo'];
    $banner            = $row['banner'];
    $degree            = $row['degree'];
    $detail            = $row['detail'];
    $facebook          = $row['facebook'];
    $twitter           = $row['twitter'];
    $linkedin          = $row['linkedin'];
    $youtube           = $row['youtube'];
    $google_plus       = $row['google_plus'];
    $instagram         = $row['instagram'];
    $flickr            = $row['flickr'];
    $address           = $row['address'];
    $practice_location = $row['practice_location'];
    $phone             = $row['phone'];
    $email             = $row['email'];
    $website           = $row['website'];
    $status            = $row['status'];
}

$statement = $pdo->prepare("SELECT * FROM designation WHERE designation_id=$ID");
$statement->execute(array($designation_id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo 'output:'.$result[0]['designation_name'];			
foreach ($result as $row) {
    $designation_name = $row['designation_name'];
    // echo 'output:'.$designation_name
}


?>

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
        </header>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/8.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1>Dedicated Doctor</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="doctors.php">Doctors</li>
                        <li><?php echo $name ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Doctor Detail Section -->
        <section class="doctor-detail-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Content Side -->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12 order-2">
                        <div class="docter-detail">
                            <h3 class="name"><?php echo $name; ?> <?php echo $designation_name; ?></h3>
                            <span class="designation"><?php echo $designation_name. ' ('. $practice_location. ')'; ?></span>
                            <div class="text"><?php echo $detail; ?></div>
                            <ul class="doctor-info-list">
                                <li>
                                    <strong>Speciality</strong>
                                    <p>Endocrinology <br>Paediatric Medicine <br>Urology</p>
                                </li>
                                <li>
                                    <strong>Education</strong>
                                    <p><?php echo $degree; ?></p>
                                </li>
                                <li>
                                    <strong>Experience</strong>
                                    <p>25 years of Experience in Medicine <br> Vice President and Chief Medical Officer, Kessler Institute for Rehabilitation <br>Medical Corporation Professor, Institute Of Coast Private Hospital Campus</p>
                                </li>
                                <li>
                                    <strong>Address</strong>
                                    <p><?php echo $address; ?></p>
                                </li>
                                <li>
                                    <strong>Phone</strong>
                                    <p><a href="tel:+919047048344">+91-90470-48344</a></p>
                                </li>
                                <li>
                                    <strong>Email</strong>
                                    <p><a href="#">myemail@yourdomain.com</a></p>
                                </li>
                                <li>
                                    <strong>Website</strong>
                                    <p><a href="#"><?php echo $website; ?></a></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sidebar Side -->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <div class="sidebar">
                            <!-- Team Block -->
                            <div class="team-block wow fadeInUp">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/resource/team-1.jpg" alt=""></figure>
                                    <ul class="social-links">
                                        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Doctor Availability
                            <div class="docter-availability">
                                <div class="inner">
                                    <div class="sec-title">
                                        <span class="sub-title">Timining</span>
                                        <h2>Availability</h2>
                                        <span class="divider"></span>
                                        <div class="text">Availability in most of the time and in case of emergency</div>
                                    </div>
                                    <ul class="timing-list-two">
                                        <li>Monday - Friday <span>08:00 - 20:00</span></li>
                                        <li>Saturday <span>09:00 - 18:00</span></li>
                                        <li>Sunday <span>09:00 - 18:00</span></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Doctor Detail Section -->
        <!-- Clients Section -->
        <?php
        //include "clients_section.php";
        include "footer.php";
        ?>
        <!--End Main Footer -->

    </div><!-- End Page Wrapper -->
    <?php
    include "script_includes.php";
    ?>


</body>

</html>