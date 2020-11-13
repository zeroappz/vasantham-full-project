<!-- DB connection -->

<?php
require_once("../backend/admin/config.php");
?>
<?php
$F_BASE_URL = 'http://localhost/vasantham-full-project/';
$F_IMG_URL = 'backend/assets/uploads/';
// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM news ORDER BY news_id DESC LIMIT 3");
$statement->execute();
$newsList = $statement->fetchAll(PDO::FETCH_ASSOC);
$total = $statement->rowCount();
if ($total == 0) {
    header('location: ' . $BASE_URL . 'vasantham-master');
    //echo 'no rows available';
    exit;
} else {
    // echo $newsList[0]['news_title'];
}
?>

<!-- Main Footer -->
<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section" style="background-image: url(images/background/7.jpg);">
        <div class="auto-container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo-2.png" alt="" /></a>
                                </div>
                                <div class="text">
                                    <p>Vasantham Health Centre Pvt Ltd in Vadasery, Nagercoil has a well-equipped clinic with all the modern equipment.
                                        Our Clinic has grown to provide a world class facility for the clinic advanced restorative. Being a specialized Hospitals, the doctor offers a number of medical services.
                                        These include Heart Conditions, Chest Pain Treatment, Neurology, Cardiology, Nephrology, Dental Examination, Clinical Cardiology among others.</p>
                                </div>
                                <ul class="social-icon-three">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h2 class="widget-title">Departments</h2>
                                <ul class="user-links">
                                    <?php
                                        $statement = $pdo->prepare("SELECT * FROM department ORDER BY dep_id ASC LIMIT 7");
                                        $statement->execute();
                                        $departmentList = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($departmentList as $row) {
                                    ?>
                                    <li>
                                        <a href="department-detail.php?id=<?php echo $row['dep_id']; ?>">
                                            <?php echo $row['dep_name']; ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <li><a href="departments.php">and more...</a></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>


                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget recent-posts">
                                <h2 class="widget-title">Latest News</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <?php foreach ($newsList as $row) { ?>
                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.php?id=<?php echo $row['news_id']; ?>"><img src="<?php echo $F_BASE_URL . $F_IMG_URL . $row['photo']; ?>" alt="<?php echo $row['news_title']; ?>"></a></div>
                                            <h4><a href="blog-detail.php?id=<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></h4>
                                            <span class="date"><?php echo $row['news_date']; ?></span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Contact Us</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li>
                                            <span class="icon flaticon-placeholder"></span>
                                            <div class="text">Dennison road, Nagercoil-629001 <Br>TN, India</div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-call-1"></span>
                                            <div class="text">Mon to Sat : 06:30 - 20:00</div>
                                            <a href="tel:+89868679575"><strong>04652-222526</strong></a>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-email"></span>
                                            <div class="text">Feel free to reach us?<br>
                                                <a href="mailto:vasanthamhealthcentre@gmail.com">vasanthamhealthcentre@gmail.com</a></div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-back-in-time"></span>
                                            <div class="text">Monday - Sunday<br>
                                                <strong>24*7</strong></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer Column-->
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="footer-nav">
                    <ul class="clearfix">
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="insurance.php">Supplier</a></li>
                    </ul>
                </div>

                <div class="copyright-text">
                    <p>Copyright © 2020 <a href="#"> Vasantham Health Centre </a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer -->