<!-- DB connection -->

<?php
require_once("../backend/admin/config.php");
?>
<?php
$T_BASE_URL = 'http://localhost/vasantham/';

// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM testimonial ORDER BY id DESC");
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
<section class="testimonial-section">
    <div class="auto-container">
        <!-- Sec Title -->

        <div class="sec-title text-center">
            <span class="title">Happy Patients</span>
            <h2>What Our Patients Says!</h2>
            <span class="divider"></span>
        </div>
        
            <div class="testimonial-outer">
                <!-- Client Testimonial Carousel -->
                <div class="client-testimonial-carousel owl-carousel owl-theme">
                <?php foreach ($testimonials as $row) { ?>
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text"><?php echo $row['comment'] ?></div>
                        </div>
                    </div>

                </div>

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

            <?php } ?>
            </div>
    </div>
</section>