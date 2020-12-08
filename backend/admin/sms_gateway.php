<?php require_once('header.php');
$mobile = '9047048344';
$err = '';
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Send SMS - Patient Details</h1>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body table-responsive">

					<form method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<fieldset>
									<div class="form-group">
										<label>Patient Mobile Number</label>
										<input class="form-control" value="<?php echo $mobile; ?>" name="mobile" type="number" required placeholder="Enter Your mobile">
									</div>
									<div class="form-group">
										<label>Enter Your message</label>
										<textarea class="form-control" name="msg"></textarea>
									</div>
									<div class="form-group">
										<input name="register" type="submit" value="Send Message" class="btn  btn-primary">
									</div>
									<div class="form-group">
										<label>
											<?php echo $err; ?>
										</label>
									</div>
								</fieldset>
							</div>
						</div>
					</form>
				</div>
			</div>
</section>
<?php require_once('footer.php'); ?>