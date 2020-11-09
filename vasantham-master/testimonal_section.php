<!-- DB connection -->

<?php
ob_start();
session_start();

include("../backend/admin/config.php");
?>
<?php
$BASE_URL = 'http://localhost/vasantham/';

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
    echo $testimonials[0]['name'];
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

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">Vasantham Health Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                    </div>
                </div>
            </div>

            <!-- Product Thumbs Carousel -->
            <div class="client-thumb-outer">
                <div class="client-thumbs-carousel owl-carousel owl-theme">
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name">Michael Albert</div>
                            <div class="designation">Businessman</div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="images/resource/testi-thumb-2.jpg" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name">Lenin Prakash</div>
                            <div class="designation">CEO, Zeroappz</div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="images/resource/testi-thumb-3.jpg" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name">Jabas Samuel</div>
                            <div class="designation">Placement Officer</div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="images/resource/testi-thumb-2.jpg" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name">Viswanathan</div>
                            <div class="designation">Businessman</div>
                        </div>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="images/resource/testi-thumb-3.jpg" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name">Praveen Kumar</div>
                            <div class="designation">Restaurant Owner</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>