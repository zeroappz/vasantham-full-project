<!-- DB connection -->

<?php
ob_start();
session_start();

include("../backend/admin/config.php");
// include("blog.php");
// include("../backend/admin/functions.php");
$error_message = '';
$success_message = '';
?>
<?php

$IMG_URL = 'assets/uploads/';
$ID = $_GET['id'];
// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM news WHERE news_id=$ID");
$statement->execute();
$newsList = $statement->fetchAll(PDO::FETCH_ASSOC);

$total = $statement->rowCount();
if ($total == 0) {
    header('location: ' . BASE_URL . 'vasantham-master');
    //echo 'no rows available';
    exit;
} else {
    // echo $newsList[0]['category_name'];
}
?>

<?php
include "header.php"
?>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <?php include "header_main.php" ?>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/8.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h2 style="color: #1370b5;"><?php echo $newsList[0]['news_title']; ?></h2>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blog.php">News & Events</a></li>
                        <li><?php echo $newsList[0]['news_title']; ?></li>
                    </ul>
                </div>
            </div>
        </section>

        <!--End Page Title-->

        <!-- Sidebar Page Container -->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side-->

                    <?php foreach ($newsList as $row) { ?>
                        <div class="content-side col-lg-8 col-md-12 col-sm-12">
                            <div class="blog-post">
                                <!-- News Block -->
                                <div class="news-block">
                                    <div class="inner-box">
                                        <div class="image"><img src="<?php echo BASE_URL . $IMG_URL . $row['photo'];  ?>" alt="<?php echo $row['news_title']; ?>" /></div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><span class="far fa-user"></span><?php echo $row['publisher']; ?></li>
                                                <li><span class="far fa-calendar"></span> <?php echo $row['news_date']; ?></li>
                                            </ul>
                                            <h3><?php echo $row['news_title']; ?></h3>
                                            <div style="text-align: justify;"> <?php echo $row['news_content']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <!--search box
                            <div class="sidebar-widget search-box">
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>-->

                            <!-- Categories -->
                            <div class="sidebar-widget category-list">
                                <div class="sidebar-title">
                                    <h3>Categories</h3>
                                </div>
                                <?php
                                $statement = $pdo->prepare("SELECT * FROM category ORDER BY category_id DESC");
                                $statement->execute();
                                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($result as $row) { ?>
                                    <ul class="cat-list">
                                        <li class="active"><a href="blog.php"><?php echo $row['category_name']; ?></a></li>
                                    </ul>
                                <?php } ?>
                            </div>

                            <!-- Newsletters-->
                            <div class="sidebar-widget newslatters">
                                <div class="sidebar-title">
                                    <h3><span class="icon flaticon-rss-symbol"></span>Newsletter</h3>
                                </div>
                                <div class="text">Enter your email address below to subscribe to our newsletter</div>
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="text" name="input" value="" placeholder="Your email address..." required="">
                                        <button type="submit" class="theme-btn"><span class="btn-title">Subscribe</span></button>
                                    </div>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Container -->
        <!-- Main Footer -->
        <?php include "footer.php"; ?>
        <!--End Main Footer -->
    </div><!-- End Page Wrapper -->
    <?php include "script_includes.php"; ?>
</body>

</html>