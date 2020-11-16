
<script>
  /*  $('#appointment-test-2').on('click', function(event) {
	  event.preventDefault();
	  this.blur();
	  $.get(this.href, function(html) {
	    $(html).appendTo('body').modal({
			clickClose: false,
			fadeDuration: 300,
			fadeDelay: 0.15,
	    });
	  });
	});*/
</script>
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
<!--End Team Section -->
<section class="testimonial-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <span class="title">Happy Patients</span>
            <h2>What Says Our Patients</h2>
            <span class="divider"></span>
        </div>
        <?php foreach ($testimonials as $row) { ?>
            <div class="testimonial-outer">
                <!-- Product Thumbs Carousel -->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="<?php echo $T_BASE_URL . 'backend/assets/uploads/' . $row['photo'] ?>" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name"><?php echo $row['name'] ?></div>
                                <div class="designation"><?php echo $row['designation'] ?></div>
                                <div class="designation"><?php echo $row['company'] ?></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Client Testimonial Carousel -->
                <div class="client-testimonial-carousel default-dots owl-carousel owl-theme">
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text"><?php echo $row['comment'] ?></div>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>

        <!-- Call To Action -->
        <div class="call-to-action">
            <div class="inner-container">
                <div class="content-column">
                    <h4>We Employ The Latest Technology</h4>
                    <h2>We Ensure Safe Dental Surgery </h2>
                    <a href="appointment.php" id="appointment-test-2" class="theme-btn btn-style-three"><span class="btn-title">Take Appointment</span></a>
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