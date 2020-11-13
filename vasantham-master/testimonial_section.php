<!-- DB connection -->

<?php
require_once("../backend/admin/config.php");
?>
<?php
$T_BASE_URL = 'http://localhost/vasantham-full-project/';

// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM testimonial ORDER BY id DESC LIMIT 5");
$statement->execute();
$testimonials = $statement->fetchAll(PDO::FETCH_ASSOC);
$total = $statement->rowCount();
if ($total == 0) {
    header('location: ' . $BASE_URL . 'vasantham-master');
    //echo 'no rows available';
    exit;
} else {
    // echo $testimonials[3]['name'];
}

?>
<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <span class="title">HAPPY Patient</span>
            <h2>What Says Our Patients</h2>
            <span class="divider"></span>
        </div>

        <div class="testimonial-outer">
            <!-- Client Testimonial Carousel -->
            <div class="client-testimonial-carousel owl-carousel owl-theme">

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text"><?php echo $testimonials[2]['comment'] ?></div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text"><?php echo $testimonials[1]['comment'] ?></div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text"><?php echo $testimonials[3]['comment'] ?></div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text"><?php echo $testimonials[0]['comment'] ?></div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text"><?php echo $testimonials[4]['comment'] ?></div>
                    </div>
                </div>
            </div>

            <!-- Product Thumbs Carousel -->
            <div class="client-thumb-outer">
                <div class="client-thumbs-carousel owl-carousel owl-theme">
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?php echo $T_BASE_URL . 'backend/assets/uploads/' . $testimonials[4]['photo'] ?>" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testimonials[4]['name'] ?></div>
                            <div class="designation"><?php echo $testimonials[4]['designation'] ?></div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?php echo $T_BASE_URL . 'backend/assets/uploads/' . $testimonials[3]['photo'] ?>" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testimonials[3]['name'] ?></div>
                            <div class="designation"><?php echo $testimonials[3]['designation'] ?></div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?php echo $T_BASE_URL . 'backend/assets/uploads/' . $testimonials[2]['photo'] ?>" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testimonials[2]['name'] ?></div>
                            <div class="designation"><?php echo $testimonials[2]['designation'] ?></div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?php echo $T_BASE_URL . 'backend/assets/uploads/' . $testimonials[1]['photo'] ?>" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testimonials[1]['name'] ?></div>
                            <div class="designation"><?php echo $testimonials[1]['designation'] ?></div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?php echo $T_BASE_URL . 'backend/assets/uploads/' . $testimonials[0]['photo'] ?>" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testimonials[0]['name'] ?></div>
                            <div class="designation"><?php echo $testimonials[0]['designation'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->