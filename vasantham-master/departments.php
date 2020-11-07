<!-- DB connection -->

<?php
ob_start();
session_start();

include("../backend/admin/config.php");
// include("../backend/admin/functions.php");
$error_message = '';
$success_message = '';
?>
<?php
$BASE_URL = 'http://localhost/vasantham/';

// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM department ORDER BY dep_id ASC");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);	
$total = $statement->rowCount();
if ($total == 0) {
    header('location: ' . $BASE_URL . 'vasantham-master');
    //echo 'no rows available';
    exit;
} else {
    //echo $departmentList[0]['dep_name'];
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
        <!----------------------------------------------------------------------------------------->
        <!-- Services Section ----------------------------------------------------------------------->
        <section class="services-section-two">
            <div class="auto-container">
                <div class="carousel-outer">
                    <div class="row">
                        <!-- service Block -->
                        <?php
                        						
							foreach ($result as $row) {
                        ?>
                        <div class="service-block-two col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="department-detail.php"><img src="images/resource/Cardiology.jpg" alt="" style="height:200px;"></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="title-box">
                                        <span class="icon flaticon-heart-2"></span>
                                        <h4><a href="department-detail.php"><?php echo $row['dep_name']; ?></a>
                                            <p style="font-size:16px;"><a href="department-detail.php"><?php echo $row['dept_tamil']; ?></a></p>
                                        </h4>
                                    </div>
                                    <!--<div class="text"><?php echo $row['dep_detail']; ?></div>-->
                                    <span class="icon-right flaticon-heart-2"></span>
                                </div>
                            </div>
                        </div>
                        <?php
                             }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service Section -->
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
    <!-- Scripts Section -->
</body>

</html>