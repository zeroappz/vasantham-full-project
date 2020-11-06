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

// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM department");
$statement->execute();
$departmentList = $statement->fetchAll();
$total = $statement->rowCount();
if ($total == 0) {
    header('location: ' . $BASE_URL);
    // echo 'no rows available';
    exit;
} else {
    // echo $departmentList[0]['dep_name'];
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

        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/8.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1>Departments</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Departments</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side / Our Blog-->
                    <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                        <div class="service-detail">
                            <div class="images-box">
                                <figure class="image wow fadeIn"><a href="images/resource/service-single.jpg" class="lightbox-image" data-fancybox="services"><img src="images/resource/service-single.jpg" alt=""></a></figure>
                            </div>

                            <div class="content-box">
                                <div class="title-box">
                                    <h2>Departments Of Neurology</h2>

                                    <span class="theme_color">ResoFus Alomar Treatment for Essential Tremor and Parkinson's Disease</span>
                                </div>
                                <p>Resofus combines MR imaging and focused ultrasound into MR guided Focused Ultrasound technology, and provides a transcranial, non-invasive image-guided personalized treatment modality with no incisions and with no ionizing radiation.</p>
                                <p>This combination of continuous MR imaging and very highly focused acoustic sound waves provides the ability to provide pinpoint precision treatment at the planned target, without causing damage to any of the normal surrounding tissue. This precise local lesioning stops the improper transfer of electrical signals that induce the tremor, and it stops.</p>
                                <!-- Two Column -->
                                <div class="two-column">
                                    <div class="row">
                                        <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                            <figure class="image"><a href="images/resource/post-img.jpg" class="lightbox-image"><img src="images/resource/post-img.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="text-column col-xl-6 col-lg-12 col-md-12">
                                            <p>Sample Content to be included</p>
                                            <ul class="list-style-one">
                                                <li>Facts about this department</li>
                                                <li>Facts about this department</li>
                                                <li>Facts about this department</li>
                                                <li>Facts about this department</li>
                                                <li>Facts about this department</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <h3>Why Choose This Service</h3>

                                <p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</p>

                                <!--Product Info Tabs-->
                                <div class="product-info-tabs">
                                    <!--Product Tabs-->
                                    <div class="prod-tabs tabs-box">
                                        <!--Tab Btns-->
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <li data-tab="#prod-details" class="tab-btn active-btn">Precautions</li>
                                            <li data-tab="#prod-spec" class="tab-btn">Intelligence</li>
                                            <li data-tab="#prod-reviews" class="tab-btn">Specializations</li>
                                        </ul>

                                        <!--Tabs Container-->
                                        <div class="tabs-content">

                                            <!--Tab / Active Tab-->
                                            <div class="tab active-tab" id="prod-details">
                                                <div class="content">
                                                    <p>Sample Content to be included here!</p>
                                                </div>
                                            </div>

                                            <!--Tab -->
                                            <div class="tab" id="prod-spec">
                                                <div class="content">
                                                    <p>Sample Content to be included here!</p>
                                                </div>
                                            </div>

                                            <!--Tab-->
                                            <div class="tab" id="prod-reviews">
                                                <div class="content">
                                                    <p>Sample Content to be included here!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar services-sidebar">

                            <!-- Category Widget -->
                            <div class="sidebar-widget categories">
                                <div class="widget-content">
                                    <!-- Services Category -->

                                    <ul class="services-categories">
                                        <?php
                                        $statement = $pdo->prepare("SELECT * FROM department ORDER BY dep_id ASC");
                                        $statement->execute();
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $row) {
                                        ?>
                                            <li><a href="departments.php"><?php echo $row['dep_name']; ?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>

                                </div>
                            </div>


                            <!--Brochures Box-->
                            <div class="brochures-box">
                                <div class="inner">
                                    <h4>Download Brochures</h4>
                                    <div class="text">Download the brouchure regarding the neurology department and success history from <strong>Vasantham Health Centre</strong></div>
                                    <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> About Neurology</span></a>
                                    <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> Brochure Updated</span></a>
                                </div>
                            </div>

                            <div class="help-box">
                                <span>Quick Contact</span>
                                <h4>Get Solution</h4>
                                <p>Contact us at the Medicoz office nearest to you or submit a business inquiry online.</p>
                                <a href="contact.php" class="theme-btn btn-style-one"><span class="btn-title">Contact</span></a>
                            </div>
                        </aside>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Sidebar Page Container -->

        <!-- Services Section -->
        <section class="services-section-two">
            <div class="auto-container">
                <div class="carousel-outer">
                    <!-- Services Carousel -->
                    <div class="services-carousel owl-carousel owl-theme default-dots">
                        <!-- service Block -->
                        <div class="service-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="department-detail.php"><img src="images/resource/service-1.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="title-box">
                                        <span class="icon flaticon-heart-2"></span>
                                        <h4><a href="department-detail.php">Cardiology Department</a></h4>
                                    </div>
                                    <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                    <span class="icon-right flaticon-heart-2"></span>
                                </div>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="department-detail.php"><img src="images/resource/service-2.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="title-box">
                                        <span class="icon flaticon-brain"></span>
                                        <h4><a href="department-detail.php">Neurology Department</a></h4>
                                    </div>
                                    <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                    <span class="icon-right flaticon-brain"></span>
                                </div>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="department-detail.php"><img src="images/resource/service-3.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="title-box">
                                        <span class="icon flaticon-kidney"></span>
                                        <h4><a href="department-detail.php">Urology Department</a></h4>
                                    </div>
                                    <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                    <span class="icon-right flaticon-kidney"></span>
                                </div>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="department-detail.php"><img src="images/resource/service-12.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="title-box">
                                        <span class="icon flaticon-ovum"></span>
                                        <h4><a href="department-detail.php">Gynecological</a></h4>
                                    </div>
                                    <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                    <span class="icon-right flaticon-ovum"></span>
                                </div>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="department-detail.php"><img src="images/resource/service-10.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="title-box">
                                        <span class="icon flaticon-parents"></span>
                                        <h4><a href="department-detail.php">Pediatrical</a></h4>
                                    </div>
                                    <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                    <span class="icon-right flaticon-parents"></span>
                                </div>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="department-detail.php"><img src="images/resource/service-11.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="title-box">
                                        <span class="icon flaticon-science"></span>
                                        <h4><a href="department-detail.php">Laboratory</a></h4>
                                    </div>
                                    <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                    <span class="icon-right flaticon-science"></span>
                                </div>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="department-detail.php"><img src="images/resource/service-10.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="title-box">
                                        <span class="icon flaticon-parents"></span>
                                        <h4><a href="department-detail.php">Pediatrical</a></h4>
                                    </div>
                                    <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                    <span class="icon-right flaticon-parents"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service Section -->
        <!-- Main Footer -->

        <?php
        include "footer.php";
        ?>
        <!--End Main Footer -->

    </div><!-- End Page Wrapper -->

    <?php

    include "script_includes.php";
    ?>
    <!-- Clients Section -->
</body>


</html>