<?php require_once('header.php'); ?>

<?php
// Preventing the direct access of this page.
if(!isset($_REQUEST['slug']))
{
	header('location: '.BASE_URL);
	exit;
}
else
{
	// Check the page slug is valid or not.
	$statement = $pdo->prepare("SELECT * FROM doctor WHERE slug=?");
	$statement->execute(array($_REQUEST['slug']));
	$total = $statement->rowCount();
	if( $total == 0 )
	{
		header('location: '.BASE_URL);
		exit;
	}
}

// Getting the detailed data of a service from slug
$statement = $pdo->prepare("SELECT * FROM doctor WHERE slug=?");
$statement->execute(array($_REQUEST['slug']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);				
foreach ($result as $row)
{
	$name              = $row['name'];
	$slug              = $row['slug'];
	$designation_id    = $row['designation_id'];
	$photo             = $row['photo'];
	$banner            = $row['banner'];
	$degree            = $row['degree'];
	$detail            = $row['detail'];
	$facebook          = $row['facebook'];
	$twitter           = $row['twitter'];
	$linkedin          = $row['linkedin'];
	$youtube           = $row['youtube'];
	$google_plus       = $row['google_plus'];
	$instagram         = $row['instagram'];
	$flickr            = $row['flickr'];
	$address           = $row['address'];
	$practice_location = $row['practice_location'];
	$phone             = $row['phone'];
	$email             = $row['email'];
	$website           = $row['website'];
	$status            = $row['status'];
}

$statement = $pdo->prepare("SELECT * FROM designation WHERE designation_id=?");
$statement->execute(array($designation_id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);				
foreach ($result as $row)
{
	$designation_name = $row['designation_name'];
}


?>

<!-- Banner Start -->
<div class="page-banner" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $banner; ?>);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-text">
					<h1>Doctor: <?php echo $name; ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->


<!-- Doctor Start -->
<section class="doctor-detail">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="doctor-single">
					<div class="thumb">
						<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $photo; ?>" alt="<?php echo $name; ?>">
					</div>
					<div class="text">
						<h2><?php echo $name; ?></h2>
						<h3><?php echo $designation_name; ?></h3>
						<p>
						<?php echo $designation_name; ?>
						</p>
					</div>
					<div class="social">
						<div class="title">
							Social Media Activities
						</div>
						<ul>
							<?php if($facebook!=''): ?>
								<li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<?php endif; ?>

							<?php if($twitter!=''): ?>
								<li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<?php endif; ?>

							<?php if($linkedin!=''): ?>
								<li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<?php endif; ?>

							<?php if($youtube!=''): ?>
								<li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
							<?php endif; ?>

							<?php if($google_plus!=''): ?>
								<li><a href="<?php echo $google_plus; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<?php endif; ?>

							<?php if($instagram!=''): ?>
								<li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<?php endif; ?>

							<?php if($flickr!=''): ?>
								<li><a href="<?php echo $flickr; ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				
				<!-- Doctor Detail Tab Start -->
				<div class="doctor-detail-tab">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">About</a></li>
						<li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Contact</a></li>
					</ul>
					
					<!-- Tab Content Start -->
					<div class="tab-content">
						<div class="tab-pane fade active in" id="tab1">
							<div class="row">										
								<div class="col-md-12">
									<div class="content">
										<?php echo $detail; ?>										
									</div>
								</div>
							</div>
						</div>
						
						<div class="tab-pane fade" id="tab2">
							<div class="row">
								<div class="col-md-12">
									<div class="content">									
										<div class="row">
											<div class="col-md-6">
												<div class="contact">
													<div class="icon"><i class="fa fa-map-o"></i></div>
													<div class="text">
														<h4>Address</h4>
														<p>
															<?php if($address!=''): ?>
																<?php echo $address; ?>
															<?php else: ?>
																N/A
															<?php endif; ?>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="contact">
													<div class="icon"><i class="fa fa-phone"></i></div>
													<div class="text">
														<h4>Phone</h4>
														<p>
															<?php if($phone!=''): ?>
																<?php echo $phone; ?>
															<?php else: ?>
																N/A
															<?php endif; ?>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="contact">
													<div class="icon"><i class="fa fa-envelope"></i></div>
													<div class="text">
														<h4>Email</h4>
														<p>
															<?php if($email!=''): ?>
																<?php echo $email; ?>
															<?php else: ?>
																N/A
															<?php endif; ?>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="contact">
													<div class="icon"><i class="fa fa-globe"></i></div>
													<div class="text">
														<h4>Website</h4>
														<p>
															<?php if($website!=''): ?>
																<?php echo $website; ?>
															<?php else: ?>
																N/A
															<?php endif; ?>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>									
						</div>
					</div>
					<!-- Tab Content End -->
				</div>
				<!-- Doctor Detail Tab End -->

			</div>
		</div>
	</div>
</section>
<!-- Doctor End -->


<!-- Doctors Start -->
<section class="doctor-v2" style="padding-top:0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-normal">
					<h2>Our Qualified Doctors</h2>
				</div>
			</div>
		</div>
		<div class="gap-small"></div>
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
						<div class="item wow fadeInUp">
							<div class="thumb">
								<div class="photo" style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);"></div>
							</div>
							<div class="text">
								<h3><a href="<?php echo BASE_URL; ?>doctor/<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></h3>
								<p><?php echo $row['designation_name']; ?></p>
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

<?php require_once('footer.php'); ?>