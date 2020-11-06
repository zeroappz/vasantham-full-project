<?php require_once('header.php'); ?>

<?php
if (isset($_POST['form1'])) {
	$valid = 1;

	$path = $_FILES['photo_logo']['name'];
	$path_tmp = $_FILES['photo_logo']['tmp_name'];

	if ($path == '') {
		$valid = 0;
		$error_message .= 'You must have to select a photo<br>';
	} else {
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$file_name = basename($path, '.' . $ext);
		if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif') {
			$valid = 0;
			$error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
		}
	}

	if ($valid == 1) {
		// removing the existing photo
		$statement = $pdo->prepare("SELECT * FROM settings WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			$logo = $row['logo'];
			unlink('../assets/uploads/' . $logo);
		}

		// updating the data
		$final_name = 'logo' . '.' . $ext;
		move_uploaded_file($path_tmp, '../assets/uploads/' . $final_name);

		// updating the database
		$statement = $pdo->prepare("UPDATE settings SET logo=? WHERE id=1");
		$statement->execute(array($final_name));

		$success_message = 'Logo is updated successfully.';
	}
}

if (isset($_POST['form2'])) {
	$valid = 1;

	$path = $_FILES['photo_favicon']['name'];
	$path_tmp = $_FILES['photo_favicon']['tmp_name'];

	if ($path == '') {
		$valid = 0;
		$error_message .= 'You must have to select a photo<br>';
	} else {
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$file_name = basename($path, '.' . $ext);
		if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif') {
			$valid = 0;
			$error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
		}
	}

	if ($valid == 1) {
		// removing the existing photo
		$statement = $pdo->prepare("SELECT * FROM settings WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			$favicon = $row['favicon'];
			unlink('../assets/uploads/' . $favicon);
		}

		// updating the data
		$final_name = 'favicon' . '.' . $ext;
		move_uploaded_file($path_tmp, '../assets/uploads/' . $final_name);

		// updating the database
		$statement = $pdo->prepare("UPDATE settings SET favicon=? WHERE id=1");
		$statement->execute(array($final_name));

		$success_message = 'Favicon is updated successfully.';
	}
}

if (isset($_POST['form3'])) {

	// updating the database
	$statement = $pdo->prepare("UPDATE settings SET footer_about=?, footer_copyright=?, contact_address=?, contact_email=?, contact_phone=?, contact_fax=?, contact_map_iframe=? WHERE id=1");
	$statement->execute(array($_POST['footer_about'], $_POST['footer_copyright'], $_POST['contact_address'], $_POST['contact_email'], $_POST['contact_phone'], $_POST['contact_fax'], $_POST['contact_map_iframe']));

	$success_message = 'General content settings is updated successfully.';
}

if (isset($_POST['form4'])) {
	// updating the database
	$statement = $pdo->prepare("UPDATE settings SET receive_email=?, receive_email_subject=?,receive_email_thank_you_message=? WHERE id=1");
	$statement->execute(array($_POST['receive_email'], $_POST['receive_email_subject'], $_POST['receive_email_thank_you_message']));

	$success_message = 'Contact form settings information is updated successfully.';
}


if (isset($_POST['form5'])) {
	// updating the database
	$statement = $pdo->prepare("UPDATE settings SET total_recent_news_footer=?, total_popular_news_footer=?, total_recent_news_sidebar=?, total_popular_news_sidebar=?, total_recent_news_home_page=? WHERE id=1");
	$statement->execute(array($_POST['total_recent_news_footer'], $_POST['total_popular_news_footer'], $_POST['total_recent_news_sidebar'], $_POST['total_popular_news_sidebar'], $_POST['total_recent_news_home_page']));

	$success_message = 'Sidebar settings is updated successfully.';
}

if (isset($_POST['form6'])) {
	// updating the database
	$statement = $pdo->prepare("UPDATE settings SET meta_title_home=?, meta_keyword_home=?, meta_description_home=? WHERE id=1");
	$statement->execute(array($_POST['meta_title_home'], $_POST['meta_keyword_home'], $_POST['meta_description_home']));

	$success_message = 'Home Meta settings is updated successfully.';
}

if (isset($_POST['form7'])) {

	if (isset($_POST['home_status_service'])) {
		$home_status_service = 1;
	} else {
		$home_status_service = 0;
	}

	if (isset($_POST['home_status_department'])) {
		$home_status_department = 1;
	} else {
		$home_status_department = 0;
	}

	if (isset($_POST['home_status_doctor'])) {
		$home_status_doctor = 1;
	} else {
		$home_status_doctor = 0;
	}

	if (isset($_POST['home_status_pricing'])) {
		$home_status_pricing = 1;
	} else {
		$home_status_pricing = 0;
	}

	if (isset($_POST['home_status_testimonial'])) {
		$home_status_testimonial = 1;
	} else {
		$home_status_testimonial = 0;
	}

	if (isset($_POST['home_status_news'])) {
		$home_status_news = 1;
	} else {
		$home_status_news = 0;
	}

	if (isset($_POST['home_status_partner'])) {
		$home_status_partner = 1;
	} else {
		$home_status_partner = 0;
	}


	// updating the database
	$statement = $pdo->prepare("UPDATE 
	                           
	                           settings 
	                           
	                           SET 
	                           home_title_service=?, 
	                           home_subtitle_service=?,
	                           home_status_service=?, 
	                           home_title_department=?,
	                           home_subtitle_department=?,
	                           home_status_department=?, 
	                           home_title_doctor=?,
	                           home_subtitle_doctor=?,
	                           home_status_doctor=?, 
	                           home_title_pricing=?,
	                           home_subtitle_pricing=?,
	                           home_status_pricing=?, 
	                           home_title_testimonial=?,
	                           home_subtitle_testimonial=?,
	                           home_status_testimonial=?, 
	                           home_title_news=?,
	                           home_subtitle_news=?,
	                           home_status_news=?, 
	                           home_title_partner=?,
	                           home_subtitle_partner=?,
	                           home_status_partner=?

	                           WHERE id=1");
	$statement->execute(array(
		$_POST['home_title_service'],
		$_POST['home_subtitle_service'],
		$home_status_service,
		$_POST['home_title_department'],
		$_POST['home_subtitle_department'],
		$home_status_department,
		$_POST['home_title_doctor'],
		$_POST['home_subtitle_doctor'],
		$home_status_doctor,
		$_POST['home_title_pricing'],
		$_POST['home_subtitle_pricing'],
		$home_status_pricing,
		$_POST['home_title_testimonial'],
		$_POST['home_subtitle_testimonial'],
		$home_status_testimonial,
		$_POST['home_title_news'],
		$_POST['home_subtitle_news'],
		$home_status_news,
		$_POST['home_title_partner'],
		$_POST['home_subtitle_partner'],
		$home_status_partner,
	));

	$success_message = 'Home Title and Subtitle are updated successfully.';
}

if (isset($_POST['form8'])) {
	// updating the database
	$statement = $pdo->prepare("UPDATE settings SET color=? WHERE id=1");
	$statement->execute(array($_POST['color']));

	$success_message = 'Color is updated successfully.';
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Settings</h1>
	</div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$logo                            = $row['logo'];
	$favicon                         = $row['favicon'];
	$footer_about                    = $row['footer_about'];
	$footer_copyright                = $row['footer_copyright'];
	$contact_address                 = $row['contact_address'];
	$contact_email                   = $row['contact_email'];
	$contact_phone                   = $row['contact_phone'];
	$contact_fax                     = $row['contact_fax'];
	$contact_map_iframe              = $row['contact_map_iframe'];
	$receive_email                   = $row['receive_email'];
	$receive_email_subject           = $row['receive_email_subject'];
	$receive_email_thank_you_message = $row['receive_email_thank_you_message'];
	$total_recent_news_footer        = $row['total_recent_news_footer'];
	$total_popular_news_footer       = $row['total_popular_news_footer'];
	$total_recent_news_sidebar       = $row['total_recent_news_sidebar'];
	$total_popular_news_sidebar      = $row['total_popular_news_sidebar'];
	$total_recent_news_home_page     = $row['total_recent_news_home_page'];
	$meta_title_home                 = $row['meta_title_home'];
	$meta_keyword_home               = $row['meta_keyword_home'];
	$meta_description_home           = $row['meta_description_home'];
	$home_title_service              = $row['home_title_service'];
	$home_subtitle_service           = $row['home_subtitle_service'];
	$home_status_service             = $row['home_status_service'];
	$home_title_department           = $row['home_title_department'];
	$home_subtitle_department        = $row['home_subtitle_department'];
	$home_status_department          = $row['home_status_department'];
	$home_title_doctor               = $row['home_title_doctor'];
	$home_subtitle_doctor            = $row['home_subtitle_doctor'];
	$home_status_doctor              = $row['home_status_doctor'];
	$home_title_pricing              = $row['home_title_pricing'];
	$home_subtitle_pricing           = $row['home_subtitle_pricing'];
	$home_status_pricing             = $row['home_status_pricing'];
	$home_title_testimonial          = $row['home_title_testimonial'];
	$home_subtitle_testimonial       = $row['home_subtitle_testimonial'];
	$home_status_testimonial         = $row['home_status_testimonial'];
	$home_title_news                 = $row['home_title_news'];
	$home_subtitle_news              = $row['home_subtitle_news'];
	$home_status_news                = $row['home_status_news'];
	$home_title_partner              = $row['home_title_partner'];
	$home_subtitle_partner           = $row['home_subtitle_partner'];
	$home_status_partner             = $row['home_status_partner'];
	$color                           = $row['color'];
}
?>


<section class="content" style="min-height:auto;margin-bottom: -30px;">
	<div class="row">
		<div class="col-md-12">
			<?php if ($error_message) : ?>
				<div class="callout callout-danger">

					<p>
						<?php echo $error_message; ?>
					</p>
				</div>
			<?php endif; ?>

			<?php if ($success_message) : ?>
				<div class="callout callout-success">

					<p><?php echo $success_message; ?></p>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					
					<!--
						<li><a href="#tab_2" data-toggle="tab">Favicon</a></li>
						<li><a href="#tab_3" data-toggle="tab">General Content</a></li>
						<li><a href="#tab_5" data-toggle="tab">News</a></li>
						<li><a href="#tab_8" data-toggle="tab">Color</a></li>
						<li><a href="#tab_7" data-toggle="tab">Home Page Title and Subtitles</a></li>
					-->
					<li class="active"><a href="#tab_4" data-toggle="tab">Email Settings</a></li>
					<li ><a href="#tab_1" data-toggle="tab">Logo</a></li>
					<li><a href="#tab_6" data-toggle="tab">Home Page Meta</a></li>
					
				</ul>
				<div class="tab-content">
					<div class="tab-pane" id="tab_1">


						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Existing Photo</label>
										<div class="col-sm-6" style="padding-top:6px;">
											<img src="../assets/uploads/<?php echo $logo; ?>" class="existing-photo" style="height:80px;">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">New Photo</label>
										<div class="col-sm-6" style="padding-top:6px;">
											<input type="file" name="photo_logo">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form1">Update Logo</button>
										</div>
									</div>
								</div>
							</div>
						</form>




					</div>
					<div class="tab-pane" id="tab_2">

						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Existing Photo</label>
										<div class="col-sm-6" style="padding-top:6px;">
											<img src="../assets/uploads/<?php echo $favicon; ?>" class="existing-photo" style="height:40px;">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">New Photo</label>
										<div class="col-sm-6" style="padding-top:6px;">
											<input type="file" name="photo_favicon">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form2">Update Favicon</button>
										</div>
									</div>
								</div>
							</div>
						</form>


					</div>
					<div class="tab-pane" id="tab_3">

						<form class="form-horizontal" action="" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Footer - About Us </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="footer_about" id="editor1"><?php echo $footer_about; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Footer - Copyright </label>
										<div class="col-sm-9">
											<input class="form-control" type="text" name="footer_copyright" value="<?php echo $footer_copyright; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Address </label>
										<div class="col-sm-6">
											<textarea class="form-control" name="contact_address" style="height:140px;"><?php echo $contact_address; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Email </label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="contact_email" value="<?php echo $contact_email; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Phone Number </label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="contact_phone" value="<?php echo $contact_phone; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Fax Number </label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="contact_fax" value="<?php echo $contact_fax; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Map iFrame </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="contact_map_iframe" style="height:200px;"><?php echo $contact_map_iframe; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form3">Update</button>
										</div>
									</div>
								</div>
							</div>
						</form>


					</div>

					<div class="tab-pane active" id="tab_4">

						<form class="form-horizontal" action="" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Email Address <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="receive_email" value="<?php echo $receive_email; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Email Subject <span>*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="receive_email_subject" value="<?php echo $receive_email_subject; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Thank you message <span>*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="receive_email_thank_you_message"><?php echo $receive_email_thank_you_message; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form4">Update</button>
										</div>
									</div>
								</div>
							</div>
						</form>


					</div>

					<div class="tab-pane" id="tab_5">

						<form class="form-horizontal" action="" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">Footer (How many recent news?)<span>*</span></label>
										<div class="col-sm-2">
											<input type="text" class="form-control" name="total_recent_news_footer" value="<?php echo $total_recent_news_footer; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">Footer (How many popular news?)<span>*</span></label>
										<div class="col-sm-2">
											<input type="text" class="form-control" name="total_popular_news_footer" value="<?php echo $total_popular_news_footer; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">Sidebar (How many recent news?)<span>*</span></label>
										<div class="col-sm-2">
											<input type="text" class="form-control" name="total_recent_news_sidebar" value="<?php echo $total_recent_news_sidebar; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">Sidebar (How many popular news?)<span>*</span></label>
										<div class="col-sm-2">
											<input type="text" class="form-control" name="total_popular_news_sidebar" value="<?php echo $total_popular_news_sidebar; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">Home Page (How many recent news?)<span>*</span></label>
										<div class="col-sm-2">
											<input type="text" class="form-control" name="total_recent_news_home_page" value="<?php echo $total_recent_news_home_page; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form5">Update</button>
										</div>
									</div>
								</div>
							</div>
						</form>


					</div>


					<div class="tab-pane" id="tab_6">

						<form class="form-horizontal" action="" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Meta Title </label>
										<div class="col-sm-9">
											<input type="text" name="meta_title_home" class="form-control" value="<?php echo $meta_title_home ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Meta Keyword </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="meta_keyword_home" style="height:100px;"><?php echo $meta_keyword_home ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Meta Description </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="meta_description_home" style="height:200px;"><?php echo $meta_description_home ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form6">Update</button>
										</div>
									</div>
								</div>
							</div>
						</form>


					</div>



					<div class="tab-pane" id="tab_7">

						<form class="form-horizontal" action="" method="post">



							<div class="box-group" id="accordion">

								<!-- Service Section -->
								<div class="panel box box-primary">
									<div class="box-header">
										<h4 class="box-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
												Service
											</a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse">
										<div class="box-body">
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Title </label>
												<div class="col-sm-9">
													<input type="text" name="home_title_service" class="form-control" value="<?php echo $home_title_service; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">SubTitle </label>
												<div class="col-sm-9">
													<input type="text" name="home_subtitle_service" class="form-control" value="<?php echo $home_subtitle_service; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Show on Home? </label>
												<div class="col-sm-9" style="padding-top:7px;">
													<input type="checkbox" name="home_status_service" value="<?php echo $home_status_service; ?>" <?php if ($home_status_service == 1) {
																																						echo 'checked';
																																					} ?>>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- // Service Section -->


								<!-- Department Section -->
								<div class="panel box box-primary">
									<div class="box-header">
										<h4 class="box-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
												Department
											</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="box-body">
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Title </label>
												<div class="col-sm-9">
													<input type="text" name="home_title_department" class="form-control" value="<?php echo $home_title_department; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">SubTitle </label>
												<div class="col-sm-9">
													<input type="text" name="home_subtitle_department" class="form-control" value="<?php echo $home_subtitle_department; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Show on Home? </label>
												<div class="col-sm-9" style="padding-top:7px;">
													<input type="checkbox" name="home_status_department" value="<?php echo $home_status_department; ?>" <?php if ($home_status_department == 1) {
																																							echo 'checked';
																																						} ?>>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- // Department Section -->



								<!-- Doctor Section -->
								<div class="panel box box-primary">
									<div class="box-header">
										<h4 class="box-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
												Doctor
											</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="box-body">
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Title </label>
												<div class="col-sm-9">
													<input type="text" name="home_title_doctor" class="form-control" value="<?php echo $home_title_doctor; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">SubTitle </label>
												<div class="col-sm-9">
													<input type="text" name="home_subtitle_doctor" class="form-control" value="<?php echo $home_subtitle_doctor; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Show on Home? </label>
												<div class="col-sm-9" style="padding-top:7px;">
													<input type="checkbox" name="home_status_doctor" value="<?php echo $home_status_doctor; ?>" <?php if ($home_status_doctor == 1) {
																																					echo 'checked';
																																				} ?>>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- // Doctor Section -->



								<!-- Pricing Section -->
								<div class="panel box box-primary">
									<div class="box-header">
										<h4 class="box-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
												Pricing
											</a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="box-body">
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Title </label>
												<div class="col-sm-9">
													<input type="text" name="home_title_pricing" class="form-control" value="<?php echo $home_title_pricing; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">SubTitle </label>
												<div class="col-sm-9">
													<input type="text" name="home_subtitle_pricing" class="form-control" value="<?php echo $home_subtitle_pricing; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Show on Home? </label>
												<div class="col-sm-9" style="padding-top:7px;">
													<input type="checkbox" name="home_status_pricing" value="<?php echo $home_status_pricing; ?>" <?php if ($home_status_pricing == 1) {
																																						echo 'checked';
																																					} ?>>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- // Pricing Section -->



								<!-- Testimonial Section -->
								<div class="panel box box-primary">
									<div class="box-header">
										<h4 class="box-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
												Testimonial
											</a>
										</h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse">
										<div class="box-body">
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Title </label>
												<div class="col-sm-9">
													<input type="text" name="home_title_testimonial" class="form-control" value="<?php echo $home_title_testimonial; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">SubTitle </label>
												<div class="col-sm-9">
													<input type="text" name="home_subtitle_testimonial" class="form-control" value="<?php echo $home_subtitle_testimonial; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Show on Home? </label>
												<div class="col-sm-9" style="padding-top:7px;">
													<input type="checkbox" name="home_status_testimonial" value="<?php echo $home_status_testimonial; ?>" <?php if ($home_status_testimonial == 1) {
																																								echo 'checked';
																																							} ?>>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- // Testimonial Section -->



								<!-- Latest News Section -->
								<div class="panel box box-primary">
									<div class="box-header">
										<h4 class="box-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
												Latest News
											</a>
										</h4>
									</div>
									<div id="collapse6" class="panel-collapse collapse">
										<div class="box-body">
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Title </label>
												<div class="col-sm-9">
													<input type="text" name="home_title_news" class="form-control" value="<?php echo $home_title_news; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">SubTitle </label>
												<div class="col-sm-9">
													<input type="text" name="home_subtitle_news" class="form-control" value="<?php echo $home_subtitle_news; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Show on Home? </label>
												<div class="col-sm-9" style="padding-top:7px;">
													<input type="checkbox" name="home_status_news" value="<?php echo $home_status_news; ?>" <?php if ($home_status_news == 1) {
																																				echo 'checked';
																																			} ?>>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- // Latest News Section -->



								<!-- Partner Section -->
								<div class="panel box box-primary">
									<div class="box-header">
										<h4 class="box-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
												Partner
											</a>
										</h4>
									</div>
									<div id="collapse7" class="panel-collapse collapse">
										<div class="box-body">
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Title </label>
												<div class="col-sm-9">
													<input type="text" name="home_title_partner" class="form-control" value="<?php echo $home_title_partner; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">SubTitle </label>
												<div class="col-sm-9">
													<input type="text" name="home_subtitle_partner" class="form-control" value="<?php echo $home_subtitle_partner; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Show on Home? </label>
												<div class="col-sm-9" style="padding-top:7px;">
													<input type="checkbox" name="home_status_partner" value="<?php echo $home_status_partner; ?>" <?php if ($home_status_partner == 1) {
																																						echo 'checked';
																																					} ?>>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- // Partner Section -->


							</div>


							<div class="form-group">
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form7">Update</button>
								</div>
							</div>


						</form>


					</div>




					<div class="tab-pane" id="tab_8">

						<form class="form-horizontal" action="" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Select Color </label>
										<div class="col-sm-2">
											<input type="text" name="color" class="form-control jscolor" value="<?php echo $color; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form8">Update</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>



			</form>
		</div>
	</div>

</section>

<?php require_once('footer.php'); ?>