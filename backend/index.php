<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	$total_recent_news_home_page = $row['total_recent_news_home_page'];
	$home_title_service          = $row['home_title_service'];
	$home_subtitle_service       = $row['home_subtitle_service'];
	$home_status_service         = $row['home_status_service'];
	$home_title_department       = $row['home_title_department'];
	$home_subtitle_department    = $row['home_subtitle_department'];
	$home_status_department      = $row['home_status_department'];
	$home_title_doctor           = $row['home_title_doctor'];
	$home_subtitle_doctor        = $row['home_subtitle_doctor'];
	$home_status_doctor          = $row['home_status_doctor'];
	$home_title_pricing          = $row['home_title_pricing'];
	$home_subtitle_pricing       = $row['home_subtitle_pricing'];
	$home_status_pricing         = $row['home_status_pricing'];
	$home_title_testimonial      = $row['home_title_testimonial'];
	$home_subtitle_testimonial   = $row['home_subtitle_testimonial'];
	$home_status_testimonial     = $row['home_status_testimonial'];
	$home_title_news             = $row['home_title_news'];
	$home_subtitle_news          = $row['home_subtitle_news'];
	$home_status_news            = $row['home_status_news'];
	$home_title_partner          = $row['home_title_partner'];
	$home_subtitle_partner       = $row['home_subtitle_partner'];
	$home_status_partner         = $row['home_status_partner'];
}
?>

<!-- Slider Start -->
<section class="main-slider">
	<div class="slider">
		<ul class="bxslider">
				
			<?php
			$statement = $pdo->prepare("SELECT * FROM slider WHERE status=? ORDER BY id DESC");
			$statement->execute(array('Active'));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) 
			{
				if($row['position']=='Left') {$align='tal';}
				if($row['position']=='Center') {$align='tac';}
				if($row['position']=='Right') {$align='tar';}
				?>
				<li style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);">
					<div class="overlay"></div>
					<div class="content">
						<div class="inner <?php echo $align; ?>">
							<div class="text">
							
								<?php if($row['heading']!=''): ?>
								<h2>
									<?php echo $row['heading']; ?>
								</h2>
								<?php endif; ?>

								<?php if($row['subheading']!=''): ?>
								<h3>
									<?php echo $row['subheading']; ?>
								</h3>
								<?php endif; ?>
								
								<?php if($row['content']!=''): ?>
								<p>
									<?php echo nl2br($row['content']); ?>
								</p>
								<?php endif; ?>
								
								<?php if($row['button_text']!=''): ?>
								<p class="button">
									<a href="<?php echo $row['button_url']; ?>" class="btn btn-flat"><?php echo $row['button_text']; ?></a>
								</p>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</li>
				<?php
			}
			?>			
		</ul>
	</div>
</section>
<!-- Slider End -->


<?php if($home_status_service == 1): ?>
<!-- Service Start -->
<section class="service-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2><?php echo $home_title_service; ?></h2>
					<p><?php echo $home_subtitle_service; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$statement = $pdo->prepare("SELECT * FROM service ORDER BY id ASC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) {
				?>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="item">
						<div class="photo" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);">
						</div>
						<div class="text">
							<div class="inner">
								<h3><a href="<?php echo BASE_URL; ?>service/<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></h3>
								<p><?php echo $row['short_description']; ?></p>
								<p class="button">
									<a href="<?php echo BASE_URL; ?>service/<?php echo $row['slug']; ?>">Read More</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
<!-- Service End -->
<?php endif; ?>




<?php if($home_status_department == 1): ?>
<!-- Department Start -->
<section class="department-v2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2><?php echo $home_title_department; ?></h2>
					<p><?php echo $home_subtitle_department; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
				<!-- Department Tab Start -->
				<div class="department-tab">

					<ul class="nav nav-tabs col-md-4">
						<?php
						$i=0;
						$statement = $pdo->prepare("SELECT * FROM department ORDER BY dep_id ASC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
						foreach ($result as $row) {
							$i++;
							?>
								<li class="<?php if($i==1) {echo 'active';} ?>"><a href="#tab<?php echo $i; ?>" data-toggle="tab" aria-expanded="<?php if($i==1) {echo 'true';}else{echo 'false';} ?>"><?php echo $row['dep_name']; ?></a></li>
							<?php
						}
						?>
					</ul>
					
					<!-- Tab Content Start -->
					<div class="tab-content col-md-8">
						<?php
						$i=0;
						$statement = $pdo->prepare("SELECT * FROM department ORDER BY dep_id ASC");
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
						foreach ($result as $row) {
							$i++;
							?>
							<div class="tab-pane fade <?php if($i==1) {echo 'active in';} ?>" id="tab<?php echo $i; ?>">
								<div class="row">										
									<div class="col-md-7">
										<div class="department-content">
											<h2><?php echo $row['dep_name']; ?></h2>
											<p>
												<?php echo $row['dep_detail']; ?>
											</p>
											<p class="button">
												<a href="<?php echo BASE_URL; ?>department/<?php echo $row['dep_slug']; ?>">See Details</a>
											</p>											
										</div>
									</div>
									<div class="col-md-5">
										<div class="thumb">
											<img class="img-fullwidth" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['dep_photo']; ?>" alt="<?php echo $row['dep_name']; ?>">
										</div>
									</div>
								</div>
							</div>
							<?php
						}
						?>
						

					</div>
					<!-- Tab Content End -->
				</div>
				<!-- Department Tab End -->


			</div>
		</div>
	</div>
</section>
<!-- Department End -->
<?php endif; ?>



<?php if($home_status_doctor == 1): ?>
<!-- Doctors Start -->
<section class="doctor-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2><?php echo $home_title_doctor; ?></h2>
					<p><?php echo $home_subtitle_doctor; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
				<!-- Doctor Carousel Start -->
				<div class="doctor-carousel">


					<?php
					$statement = $pdo->prepare("SELECT 
												
												t1.id,
												t1.name,
												t1.slug,
												t1.designation_id,
												t1.photo,
												t1.facebook,
												t1.twitter,
												t1.linkedin,
												t1.youtube,
												t1.google_plus,
												t1.instagram,
												t1.flickr,

												t2.designation_id,
												t2.designation_name

					                           FROM doctor t1
					                           JOIN designation t2
					                           ON t1.designation_id = t2.designation_id
					                           WHERE t1.status = ?
					                           ");
					$statement->execute(array('Active'));
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
					foreach ($result as $row) {
						?>
						<div class="item">
							<div class="thumb">
								<div class="photo" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);"></div>
								<div class="overlay"></div>
								<div class="social-icons">
									<ul>
										<?php if($row['facebook']!=''): ?>
											<li><a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<?php endif; ?>

										<?php if($row['twitter']!=''): ?>
											<li><a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<?php endif; ?>

										<?php if($row['linkedin']!=''): ?>
											<li><a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<?php endif; ?>

										<?php if($row['youtube']!=''): ?>
											<li><a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
										<?php endif; ?>

										<?php if($row['google_plus']!=''): ?>
											<li><a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
										<?php endif; ?>

										<?php if($row['instagram']!=''): ?>
											<li><a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
										<?php endif; ?>

										<?php if($row['flickr']!=''): ?>
											<li><a href="<?php echo $row['flickr']; ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
										<?php endif; ?>
									</ul>
								</div>
							</div>
							<div class="text">
								<h3><a href="<?php echo BASE_URL; ?>doctor/<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></h3>
								<p><?php echo $row['designation_name']; ?></p>
							</div>
						</div>
						<?php
					}
					?>

					
					
				</div>
				<!-- Doctor Carousel End -->

			</div>
		</div>
	</div>
</section>
<!-- Doctors End -->
<?php endif; ?>



<?php if($home_status_pricing == 1): ?>
<!-- Pricing Start -->
<section class="pricing-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2><?php echo $home_title_pricing; ?></h2>
					<p><?php echo $home_subtitle_pricing; ?></p>
				</div>
			</div>
		</div>
		<div class="row">

			<?php
			$statement = $pdo->prepare("SELECT * FROM pricing_plan ORDER BY pricing_plan_id ASC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $row) {
				?>
				<div class="col-md-4">
					<div class="pricing-item">
						<div class="title"><?php echo $row['pricing_plan_name']; ?></div>
						<div class="price">
							<div class="hexa">
								<div class="amount"><span>$</span><?php echo $row['pricing_plan_price']; ?></div>
								<div class="time">per month</div>
							</div>
						</div>
						<div class="offer">
							<ul>
								<?php
								$statement1 = $pdo->prepare("SELECT * FROM pricing_item WHERE pricing_plan_id=?");
								$statement1->execute(array($row['pricing_plan_id']));
								$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);							
								foreach ($result1 as $row1) {
									?>
									<li><?php echo $row1['pricing_item_name']; ?></li>
									<?php
								}
								?>
							</ul>
						</div>
						<?php if($row['pricing_plan_button_text']!=''): ?>
						<div class="button">
							<a href="<?php echo $row['pricing_plan_button_url']; ?>"><?php echo $row['pricing_plan_button_text']; ?></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php
			}
			?>

			
		</div>
	</div>
</section>
<!-- Pricing End -->
<?php endif; ?>




<?php if($home_status_testimonial == 1): ?>
<!-- Testimonial Start -->
<section class="testimonial-v1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2><?php echo $home_title_testimonial; ?></h2>
					<p><?php echo $home_subtitle_testimonial; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
				<!-- Testimonial Carousel Start -->
				<div class="testimonial-carousel">
					<?php
					$statement = $pdo->prepare("SELECT * FROM testimonial ORDER BY id ASC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
					foreach ($result as $row) {
						?>
						<div class="item">
							<div class="testimonial-wrapper">								
								<div class="content">
									<div class="comment">
										<p>
											<?php echo nl2br($row['comment']); ?>
										</p>
										<div class="icon"></div>
									</div>
									<div class="author">
										<div class="photo">
											<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
										</div>
										<div class="text">
											<h3><?php echo $row['name']; ?></h3>
											<h4><?php echo $row['designation']; ?> 
											<?php if($row['company']!=''): ?>
											<span>(<?php echo $row['company']; ?>)</span>
											<?php endif; ?>
											</h4>
										</div>
									</div>										
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
				<!-- Testimonial Carousel End -->

			</div>
		</div>
	</div>
</section>
<!-- Testimonial End -->
<?php endif; ?>




<?php if($home_status_news == 1): ?>
<!-- News Start -->
<section class="news-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2><?php echo $home_title_news; ?></h2>
					<p><?php echo $home_subtitle_news; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
				<!-- News Carousel Start -->
				<div class="news-carousel">

					<?php
					$i=0;
					$statement = $pdo->prepare("SELECT * FROM news ORDER BY news_id DESC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
					foreach ($result as $row) {
						$i++;
						if($i>$total_recent_news_home_page) {break;}
						?>
						<div class="item">
							<div class="thumb">
								<div class="photo" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);"></div>
							</div>
							<div class="text">
								<h3><a href="<?php echo BASE_URL; ?>news/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a></h3>
								<?php echo substr($row['news_content'],0,200).' ...'; ?>
							</div>
						</div>
						<?php
					}
					?>
					
				</div>
				<!-- News Carousel End -->

			</div>
		</div>
	</div>
</section>
<!-- News End -->
<?php endif; ?>
	


<?php if($home_status_partner == 1): ?>
<!-- Partner Start -->
<section class="partner-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2><?php echo $home_title_partner; ?></h2>
					<p><?php echo $home_subtitle_partner; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="partner-carousel">
					<?php
					$statement = $pdo->prepare("SELECT * FROM partner ORDER BY id ASC");
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
					foreach ($result as $row) {
						?>
						<div class="item">
							<div class="inner">
								<?php if($row['url']==''): ?>
									<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
								<?php else: ?>
									<a href="<?php echo $row['url']; ?>" target="_blank"><img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>"></a>
								<?php endif; ?>
								
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Partner End -->
<?php endif; ?>

<?php require_once('footer.php'); ?>