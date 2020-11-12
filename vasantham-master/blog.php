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
$IMG_URL = 'backend/assets/uploads/';
// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM news ORDER BY news_id DESC");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$total = $statement->rowCount();
if ($total == 0) {
    header('location: ' . $BASE_URL . 'vasantham-master');
    //echo 'no rows available';
    exit;
} else {
    // echo $newsList[0]['news_title'];
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
                    <h1>News & Events</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Blog Section -->
        <section class="blog-section blog-checkerboard">
            <div class="auto-container">
                <!-- News Block -->
                <?php if (!$total) : ?>
                    <h3 style="color:red;">Sorry! No News or Events available.</h3>
                <?php else : ?>
                <?php endif; ?>

                <?php
                foreach ($result as $row) { ?>
                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-detail.php"><img src="<?php echo $BASE_URL . $IMG_URL . $row['photo'];  ?>" alt="<?php echo $row['news_title']; ?>"></a></figure>
                                <a href="#" class="date"> <?php echo $row['news_date']; ?> </a>
                            </div>
                            <div class="content-box">
                                <h4><a href="blog-detail.php"><?php echo $row['news_title']; ?></a></h4>
                                <div class="text"><?php echo substr($row['news_content'], 0, 200,) . ' ...'; ?> </div>
                                <a href="blog-detail.php?id=<?php echo $row['news_id']; ?>" class="theme-btn btn-style-one read-more"><span class="btn-title">Read More</span></a>
                                <div class="post-info">
                                    <div class="post-author">By <a href="#"><?php echo $row['publisher']; ?></a></div>
                                    <!--<ul class="post-option">
                                        <li><a href="#">0 <i class="far fa-heart"></i></a></li>
                                        <li><a href="#">0 <i class="far fa-comments"></i></a></li>
                                    </ul>-->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!--End Blog Section -->
        <!-- Main Footer -->
        <?php include "footer.php"; ?>
        <!--End Main Footer -->


    </div><!-- End Page Wrapper -->

    <?php include "script_includes.php"; ?>
</body>

</html>