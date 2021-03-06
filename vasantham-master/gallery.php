<!-- DB connection -->

<?php
require_once("../backend/admin/config.php");
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
        <section class="page-title" style="background-image: url(images/background/Gallery-Banner.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1>Gallery</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index-2.php">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Portfolio Section -->
        <section class="portfolio-section alternate" style="position: 80px 0;">
            <div class="auto-container">
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">

                    <div class="btns-outer">
                        <!--Filter-->
                        <ul class="filter-tabs filter-btns clearfix" style="margin-bottom: 25px;;">
                            <li class="filter active " data-role="button" data-filter="all">All</li>
                            <?php
                            $statement = $pdo->prepare("SELECT * FROM category_photo WHERE status=?");
                            $statement->execute(array('Active'));
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($result as $row) {
                                $temp_string = strtolower($row['p_category_name']);
                                $temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
                            ?>
                                <li class="filter" data-role="button" data-filter=".<?php echo $temp_slug; ?>"><?php echo $row['p_category_name']; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="filter-list row mid-spacing">
                    <?php
						$i = 0;
						$statement = $pdo->prepare("SELECT
					                           	t1.photo_id,
												t1.photo_caption,
												t1.photo_name,
												t1.p_category_id,
												t2.p_category_id,
												t2.p_category_name,
												t2.status
					                            FROM photo t1
					                            JOIN category_photo t2
					                            ON t1.p_category_id = t2.p_category_id 
					                            ");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $row) {
							$i++;
							$temp_string = strtolower($row['p_category_name']);
							$temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
						?>
                        
                        <!-- Portfolio Block -->
                        <div class="portfolio-block all mix <?php echo $temp_slug; ?> col-lg-3 col-md-4 col-sm-12" data-my-order="<?php echo $i; ?>">
                            <div class="image-box">
                                <figure class="image"><img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo_name']; ?>" alt="" width="50px" height="15px"></figure>
                                <div class="overlay">
                                    <a href="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo_name']; ?>" class="icon-box lightbox-image" data-fancybox="gallery"><span class="fa fa-expand"></span></a>
                                    <div class="title-box">
                                        <h5><?php echo $temp_string; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
						}
						?>
                    </div>
                </div>

                <!--<div class="btn-box">
                    <a href="#" class="theme-btn btn-style-three load-more"><span class="btn-title">Load More</span></a>
                </div>-->
            </div>
        </section>

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