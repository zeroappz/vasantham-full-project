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
$IMG_URL = 'assets/uploads/';
$ID = $_GET['id'];
// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM department WHERE dep_id=$ID");
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
        <section class="page-title" style="background-image: url(<?php echo BASE_URL . $IMG_URL . $departmentList[0]['dep_banner'] ?>);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1><?php echo $departmentList[0]['dep_name'] ?> </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Departments</li>
                        <li><?php echo $departmentList[0]['dep_name'] ?></li>
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
                                <figure class="image wow fadeIn">
                                    <a href="<?php echo BASE_URL . $IMG_URL . $departmentList[0]['dep_photo'] ?>" class="lightbox-image" data-fancybox="services">
                                        <img src="<?php echo BASE_URL . $IMG_URL . $departmentList[0]['dep_photo'] ?>" alt=""></a></figure>
                            </div>

                            <div class="content-box">
                                <div class="title-box">
                                    <h2>Departments Of <?php echo $departmentList[0]['dep_name'] ?></h2>

                                    <span class="theme_color">Why choose our Service?</span>
                                </div>
                                <?php echo $departmentList[0]['dep_detail'] ?></p>
                                <!--
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
                                </div>-->

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
                                            <li><a href="department-detail.php?id=<?php echo $row['dep_id']; ?>"><?php echo $row['dep_name']; ?></a></li>
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