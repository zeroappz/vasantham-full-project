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
	$statement = $pdo->prepare("SELECT * FROM department WHERE dep_slug=?");
	$statement->execute(array($_REQUEST['slug']));
	$total = $statement->rowCount();
	if( $total == 0 )
	{
		header('location: '.BASE_URL);
		exit;
	}
}

// Getting the detailed data of a department from slug
$statement = $pdo->prepare("SELECT * FROM department WHERE dep_slug=?");
$statement->execute(array($_REQUEST['slug']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);				
foreach ($result as $row)
{
	$dep_id      = $row['dep_id'];
	$dep_name    = $row['dep_name'];
	$dep_slug    = $row['dep_slug'];
	$dep_detail  = $row['dep_detail'];
	$dep_address = $row['dep_address'];
	$dep_phone   = $row['dep_phone'];
	$dep_fax     = $row['dep_fax'];
	$dep_email   = $row['dep_email'];
	$dep_photo   = $row['dep_photo'];
	$dep_banner  = $row['dep_banner'];
}

$statement = $pdo->prepare("SELECT * FROM department_openning_hour WHERE dep_id=?");
$statement->execute(array($dep_id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);				
foreach ($result as $row)
{
	$arr_oh_day[]  = $row['oh_day'];
	$arr_oh_time[] = $row['oh_time'];
}

$statement = $pdo->prepare("SELECT * FROM department_faq WHERE dep_id=?");
$statement->execute(array($dep_id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);				
foreach ($result as $row)
{
	$arr_fq_title[]   = $row['fq_title'];
	$arr_fq_content[] = $row['fq_content'];
}
?>
				
<!-- Banner Start -->
<div class="page-banner" style="background-image: url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $dep_banner; ?>);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-text">
					<h1>Department: <?php echo $dep_name; ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->


<!-- Service Start -->
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				
				<!-- Blog Classic Start -->
				<div class="blog-grid">
					<div class="row">
						<div class="col-md-12">
							

							<!-- Post Item Start -->
							<div class="post-item">
								<div class="image-holder">
									<img class="img-responsive" src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $dep_photo; ?>" alt="">
								</div>
								<div class="text">
									<p>
										<?php echo $dep_detail; ?>
									</p>
								</div>
							</div>
							<!-- Post Item End -->

						</div>

					</div>
				</div>
				<!-- Blog Classic End -->

			</div>
			<div class="col-md-4">
				
				<!-- Sidebar Container Start -->
				<div class="sidebar">
					<div class="widget">
						<h4>Services</h4>
						<ul>
							<?php
							$statement = $pdo->prepare("SELECT * FROM department ORDER BY dep_name ASC");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
							foreach ($result as $row) {
								?>
								<li><a href="<?php echo BASE_URL; ?>department/<?php echo $row['dep_slug']; ?>"><?php echo $row['dep_name']; ?></a></li>
								<?php
							}
							?>							
						</ul>
					</div>

					<?php if(isset($arr_oh_day)): ?>
					<div class="widget">
						<h4>Openning Hours</h4>
						<table class="table table-bordered">
							<tbody>
							<?php
							for($i=0;$i<count($arr_oh_day);$i++) {
								?>
								<tr>
									<td><?php echo $arr_oh_day[$i]; ?></td>
									<td><?php echo $arr_oh_time[$i]; ?></td>
								</tr>
								<?php
							}
							?>
							</tbody>
						</table>
					</div>
					<?php endif; ?>


					<?php if(isset($arr_fq_title)): ?>
					<div class="widget">
						<h4>FAQ</h4>
						<div class="panel-group dep-panel-sidebar" id="accordion1" role="tablist" aria-multiselectable="true">
							<?php
							for($i=0;$i<count($arr_fq_title);$i++) {
								?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
												<?php echo $arr_fq_title[$i]; ?>
											</a>
										</h4>										
									</div>
									<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
										<div class="panel-body">
											<?php echo nl2br($arr_fq_content[$i]); ?>
										</div>
									</div>
								</div>
								<?php
							}
							?>
						</div>

						<div class="gap-small"></div>
						<div class="widget">
						<h4>Contact Information</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td style="width:100px;">Address: </td>
									<td><?php echo $dep_address; ?></td>
								</tr>
								<tr>
									<td>Phone: </td>
									<td><?php echo $dep_phone; ?></td>
								</tr>
								<tr>
									<td>Fax: </td>
									<td><?php echo $dep_fax; ?></td>
								</tr>
								<tr>
									<td>Email: </td>
									<td><?php echo $dep_email; ?></td>
								</tr>
							</tbody>
						</table>
					</div>

						
							
							
					</div>
					<?php endif; ?>

				</div>
				<!-- Sidebar Container End -->
			
			</div>

			


		</div>
	</div>
</section>
<!-- Service End -->
			
<?php require_once('footer.php'); ?>