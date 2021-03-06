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
    // echo 'no rows available';
    exit;
} else {
    // echo $testimonials[3]['name'];
}
?>
<!--End Team Section -->
<section class="testimonial-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <span class="title">Happy Patients</span>
            <h2>What Says Our Patients</h2>
            <span class="divider"></span>
        </div>

        <div class="testimonial-outer">
            <!-- Product Thumbs Carousel -->
            <div class="client-thumb-outer">
                <div class="client-thumbs-carousel owl-carousel owl-theme">
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="images/resource/testi-thumb-2.jpg" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testimonials[4]['name'] ?></div>
                            <div class="designation"><?php echo $testimonials[4]['designation'] ?></div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="images/resource/testi-thumb-3.jpg" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testimonials[3]['name'] ?></div>
                            <div class="designation"><?php echo $testimonials[3]['designation'] ?></div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="images/resource/testi-thumb-2.jpg" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testimonials[2]['name'] ?></div>
                            <div class="designation"><?php echo $testimonials[2]['designation'] ?></div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="images/resource/testi-thumb-3.jpg" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testimonials[1]['name'] ?></div>
                            <div class="designation"><?php echo $testimonials[1]['designation'] ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Client Testimonial Carousel -->
            <div class="client-testimonial-carousel default-dots owl-carousel owl-theme">

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text"><?php echo $testimonials[4]['comment'] ?></div>
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
                        <div class="text"><?php echo $testimonials[2]['comment'] ?></div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text"><?php echo $testimonials[1]['comment'] ?></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call To Action -->
        <div class="call-to-action">
            <div class="inner-container">
                <div class="content-column">
                    <h4>We Employ The Latest Technology</h4>
                    <h2>We Ensure Safe Dental Surgery </h2>
                    <a href="appointment.php" class="theme-btn btn-style-three"><span class="btn-title">Take Appointment</span></a>
                </div>

                <div class="video-column">
                    <div class="btn-box">
                        <a href="https://www.youtube.com/watch?v=6Jo7jRsxnD8" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple"></span></a>
                        <span class="title">Watch now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->