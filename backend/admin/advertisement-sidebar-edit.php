<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path != '') {
    	$ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }
       
    if($valid == 1) {

    	if($path == '') {
    		// updating into the database
			$statement = $pdo->prepare("UPDATE advertisement_sidebar SET adv_url=? WHERE adv_id=?");
			$statement->execute(array($_POST['adv_url'],$_REQUEST['id']));
    	} else {
    		unlink('../assets/uploads/'.$_POST['previous_photo']);

    		$final_name = 'adv-sidebar-'.$_REQUEST['id'].'.'.$ext;
        	move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        	// updating into the database
			$statement = $pdo->prepare("UPDATE advertisement_sidebar SET adv_photo=?, adv_url=?, adv_location=? WHERE adv_id=?");
			$statement->execute(array($final_name,$_POST['adv_url'],$_POST['adv_location'],$_REQUEST['id']));
    	}
    	
    	$success_message = 'Advertisement (Sidebar) is updated successfully.';
    }
}
?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM advertisement_sidebar WHERE adv_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Advertisement (Sidebar)</h1>
	</div>
	<div class="content-header-right">
		<a href="advertisement-sidebar.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php							
foreach ($result as $row) {
	$adv_photo = $row['adv_photo'];
	$adv_url = $row['adv_url'];
	$adv_location = $row['adv_location'];
}
?>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error_message): ?>
			<div class="callout callout-danger">
			
			<p>
			<?php echo $error_message; ?>
			</p>
			</div>
			<?php endif; ?>

			<?php if($success_message): ?>
			<div class="callout callout-success">
			
			<p><?php echo $success_message; ?></p>
			</div>
			<?php endif; ?>

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

				<div class="box box-info">
					<div class="box-body">
						
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Existing Photo</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <img src="../assets/uploads/<?php echo $adv_photo; ?>" class="existing-photo" style="width:300px;">

				                <input type="hidden" name="previous_photo" value="<?php echo $adv_photo; ?>">
				            </div>
				        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Upload New Photo <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<input type="file" name="photo">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">URL </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="adv_url" value="<?php echo $adv_url ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Location </label>
							<div class="col-sm-2">
								<select name="adv_location" class="form-control">
									<?php
									if($adv_location == 'Sidebar Top') {
										?>
											<option value="Sidebar Top" selected>Sidebar Top</option>
											<option value="Sidebar Bottom">Sidebar Bottom</option>
										<?php
									} else {
										?>
											<option value="Sidebar Top">Sidebar Top</option>
											<option value="Sidebar Bottom" selected>Sidebar Bottom</option>
										<?php
									}
									?>
									
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php require_once('footer.php'); ?>