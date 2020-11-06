<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$valid = 1;

	if(empty($_POST['dep_name'])) {
		$valid = 0;
		$error_message .= 'Department Name can not be empty<br>';
	} else {
		// Duplicate Category checking
    	// current department name that is in the database
    	$statement = $pdo->prepare("SELECT * FROM department WHERE dep_id=?");
		$statement->execute(array($_REQUEST['id']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row) {
			$current_dep_name = $row['dep_name'];
		}

		$statement = $pdo->prepare("SELECT * FROM department WHERE dep_name=? and dep_name!=?");
    	$statement->execute(array($_POST['dep_name'],$current_dep_name));
    	$total = $statement->rowCount();							
    	if($total) {
    		$valid = 0;
        	$error_message .= 'Department Name already exists<br>';
    	}
	}
	
    $path = $_FILES['dep_photo']['name'];
    $path_tmp = $_FILES['dep_photo']['tmp_name'];

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file for Featured Photo<br>';
        }
    }

    $path1 = $_FILES['dep_banner']['name'];
    $path_tmp1 = $_FILES['dep_banner']['tmp_name'];

    if($path1!='') {
        $ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
        $file_name1 = basename( $path1, '.' . $ext1 );
        if( $ext1!='jpg' && $ext1!='png' && $ext1!='jpeg' && $ext1!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file for Banner<br>';
        }
    }

    

    // Updating Old Fields
    

    // Updating New Fields
    $fq_empty = 0;
    if( !empty($_POST['fq_title']) && !empty($_POST['fq_content']) ) {
    	$fq_empty = 1;
		foreach ($_POST['fq_title'] as $value) {
			$arr1[] = $value;
		}
		foreach ($_POST['fq_content'] as $value) {
			$arr2[] = $value;
		}
		$j=0;
		for($i=0;$i<count($arr1);$i++) {
			if($arr1[$i]=='' && $arr2[$i]=='') {continue;}
			else {
				$new_arr1[$j] = $arr1[$i];
				$new_arr2[$j] = $arr2[$i];
				$j++;
			}
		}
	}

	// Updating New Fields
	$oh_empty = 0;
    if( !empty($_POST['oh_day']) && !empty($_POST['oh_time']) ) {
    	$oh_empty = 1;
		foreach ($_POST['oh_day'] as $value) {
			$arr3[] = $value;
		}
		foreach ($_POST['oh_time'] as $value) {
			$arr4[] = $value;
		}
		$j=0;
		for($i=0;$i<count($arr3);$i++) {
			if($arr3[$i]=='' && $arr4[$i]=='') {continue;}
			else {
				$new_arr3[$j] = $arr3[$i];
				$new_arr4[$j] = $arr4[$i];
				$j++;
			}
		}
	}

	if($valid == 1) {

		if($_POST['dep_slug'] == '') {
    		// generate slug
    		$temp_string = strtolower($_POST['dep_name']);
    		$dep_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);;
    	} else {
    		$temp_string = strtolower($_POST['dep_slug']);
    		$dep_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
    	}

    	// if slug already exists, then rename it
		$statement = $pdo->prepare("SELECT * FROM department WHERE dep_slug=? AND dep_name!=?");
		$statement->execute(array($dep_slug,$current_dep_name));
		$total = $statement->rowCount();
		if($total) {
			$dep_slug = $dep_slug.'-1';
		}



		if($path == '' && $path1 == '') {
			$statement = $pdo->prepare("UPDATE department SET dep_name=?, dep_slug=?, dep_detail=?, dep_address=?, dep_phone=?, dep_fax=?, dep_email=?, meta_title=?, meta_keyword=?, meta_description=? WHERE dep_id=?");
    		$statement->execute(array($_POST['dep_name'],$dep_slug,$_POST['dep_detail'],$_POST['dep_address'],$_POST['dep_phone'],$_POST['dep_fax'],$_POST['dep_email'],$_POST['meta_title'],$_POST['meta_keyword'],$_POST['meta_description'],$_REQUEST['id']));
		}
		if($path != '' && $path1 == '') {
			unlink('../assets/uploads/'.$_POST['current_photo']);

			$final_name = 'department-'.$_REQUEST['id'].'.'.$ext;
        	move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        	$statement = $pdo->prepare("UPDATE department SET dep_name=?, dep_slug=?, dep_detail=?, dep_address=?, dep_phone=?, dep_fax=?, dep_email=?, dep_photo=?, meta_title=?, meta_keyword=?, meta_description=? WHERE dep_id=?");
    		$statement->execute(array($_POST['dep_name'],$dep_slug,$_POST['dep_detail'],$_POST['dep_address'],$_POST['dep_phone'],$_POST['dep_fax'],$_POST['dep_email'],$final_name,$_POST['meta_title'],$_POST['meta_keyword'],$_POST['meta_description'],$_REQUEST['id']));
		}
		if($path == '' && $path1 != '') {
			unlink('../assets/uploads/'.$_POST['current_banner']);

			$final_name1 = 'department-banner-'.$_REQUEST['id'].'.'.$ext1;
        	move_uploaded_file( $path_tmp1, '../assets/uploads/'.$final_name1 );

        	$statement = $pdo->prepare("UPDATE department SET dep_name=?, dep_slug=?, dep_detail=?, dep_address=?, dep_phone=?, dep_fax=?, dep_email=?, dep_banner=?, meta_title=?, meta_keyword=?, meta_description=? WHERE dep_id=?");
    		$statement->execute(array($_POST['dep_name'],$dep_slug,$_POST['dep_detail'],$_POST['dep_address'],$_POST['dep_phone'],$_POST['dep_fax'],$_POST['dep_email'],$final_name1,$_POST['meta_title'],$_POST['meta_keyword'],$_POST['meta_description'],$_REQUEST['id']));
		}
		if($path != '' && $path1 != '') {
			unlink('../assets/uploads/'.$_POST['current_photo']);
			unlink('../assets/uploads/'.$_POST['current_banner']);

			$final_name = 'department-'.$_REQUEST['id'].'.'.$ext;
        	move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        	$final_name1 = 'department-banner-'.$_REQUEST['id'].'.'.$ext1;
        	move_uploaded_file( $path_tmp1, '../assets/uploads/'.$final_name1 );

        	$statement = $pdo->prepare("UPDATE department SET dep_name=?, dep_slug=?, dep_detail=?, dep_address=?, dep_phone=?, dep_fax=?, dep_email=?, dep_photo=?, dep_banner=?, meta_title=?, meta_keyword=?, meta_description=? WHERE dep_id=?");
    		$statement->execute(array($_POST['dep_name'],$dep_slug,$_POST['dep_detail'],$_POST['dep_address'],$_POST['dep_phone'],$_POST['dep_fax'],$_POST['dep_email'],$final_name,$final_name1,$_POST['meta_title'],$_POST['meta_keyword'],$_POST['meta_description'],$_REQUEST['id']));
		}





		// Insert into department_faq
		if($fq_empty == 1) {
			for($i=0;$i<count($new_arr1);$i++) {
				$statement = $pdo->prepare("INSERT INTO department_faq (fq_title,fq_content,dep_id) VALUES (?,?,?)");
				$statement->execute(array($new_arr1[$i],$new_arr2[$i],$_REQUEST['id']));
			}
		}

		// Insert into department_openning_hour
		if($oh_empty == 1) {
			for($i=0;$i<count($new_arr3);$i++) {
				$statement = $pdo->prepare("INSERT INTO department_openning_hour (oh_day,oh_time,dep_id) VALUES (?,?,?)");
				$statement->execute(array($new_arr3[$i],$new_arr4[$i],$_REQUEST['id']));
			}
		}  

	    $success_message = 'Department is updated successfully!';
	}
}
?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM department WHERE dep_id=?");
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
		<h1>Edit Department</h1>
	</div>
	<div class="content-header-right">
		<a href="department.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM department WHERE dep_id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$dep_name         = $row['dep_name'];
	$dep_slug         = $row['dep_slug'];
	$dep_detail       = $row['dep_detail'];
	$dep_address      = $row['dep_address'];
	$dep_phone        = $row['dep_phone'];
	$dep_fax          = $row['dep_fax'];
	$dep_email        = $row['dep_email'];
	$dep_photo        = $row['dep_photo'];
	$dep_banner       = $row['dep_banner'];
	$meta_title       = $row['meta_title'];
	$meta_keyword     = $row['meta_keyword'];
	$meta_description = $row['meta_description'];
}
$statement = $pdo->prepare("SELECT * FROM department_faq WHERE dep_id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$arr_fq_id[] = $row['fq_id'];
	$arr_fq_title[] = $row['fq_title'];
	$arr_fq_content[] = $row['fq_content'];
}

$statement = $pdo->prepare("SELECT * FROM department_openning_hour WHERE dep_id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$arr_oh_id[] = $row['oh_id'];
	$arr_oh_day[] = $row['oh_day'];
	$arr_oh_time[] = $row['oh_time'];
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
				<input type="hidden" name="current_photo" value="<?php echo $dep_photo; ?>">
				<input type="hidden" name="current_banner" value="<?php echo $dep_banner; ?>">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="dep_name" value="<?php echo $dep_name; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Slug </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="dep_slug" value="<?php echo $dep_slug; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Detail </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="dep_detail" id="editor1"><?php echo $dep_detail; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Address </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="dep_address" style="height:140px;"><?php echo $dep_address; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Phone </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="dep_phone" value="<?php echo $dep_phone; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Fax </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="dep_fax" value="<?php echo $dep_fax; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Email </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="dep_email" value="<?php echo $dep_email; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $dep_photo; ?>" alt="Department Photo" style="width:400px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Featured Photo <span>*</span></label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="dep_photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Banner</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $dep_banner; ?>" alt="Department Photo" style="width:400px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Banner <span>*</span></label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="dep_banner">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Openning Hours Section</label>
							<div class="col-sm-9" style="padding-top:5px">
								<table id="ohSection" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width:50%;">Day</th>
											<th>Time</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php
										if(isset($arr_oh_day)):
										for($i=0;$i<count($arr_oh_day);$i++) {
											?>
											<tr>
												<td>
													<input autocomplete="off" type="text" class="form-control" style="width:100%" value="<?php echo $arr_oh_day[$i]; ?>">
												</td>
												<td>
													<input autocomplete="off" type="text" class="form-control" style="width:100%" value="<?php echo $arr_oh_time[$i]; ?>">
												</td>
												<td><a href="#" data-href="department-oh-delete.php?id=<?php echo $arr_oh_id[$i]; ?>&id1=<?php echo $_REQUEST['id']; ?>" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirm-delete">X</a></td>
											</tr>
											<?php
										}
										endif;
										?>
									</tbody>
								</table>
								<input type="button" class="btn btn-primary btn-xs" id="btnAddOpenningHour" value="+ Add Row" style="margin-bottom:10px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">FAQ Section</label>
							<div class="col-sm-9" style="padding-top:5px">
								<table id="fqSection" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width:50%;">Title</th>
											<th>Content</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php
										if(isset($arr_fq_title)):
										for($i=0;$i<count($arr_fq_title);$i++) {
											?>
											<tr>
												<td>
													<input autocomplete="off" type="text" class="form-control" style="width:100%" value="<?php echo $arr_fq_title[$i]; ?>">
												</td>
												<td>
													<textarea class="form-control" cols="30" rows="10" style="width:100%;height:50px;"><?php echo $arr_fq_content[$i]; ?></textarea>
												</td>
												<td><a href="#" data-href="department-fq-delete.php?id=<?php echo $arr_fq_id[$i]; ?>&id1=<?php echo $_REQUEST['id']; ?>" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirm-delete">X</a></td>
											</tr>
											<?php
										}
										endif;
										?>
									</tbody>
								</table>
								<input type="button" class="btn btn-primary btn-xs" id="btnAddFaq" value="+ Add Row" style="margin-bottom:10px;">
							</div>
						</div>
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title" value="<?php echo $meta_title; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keywords </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_keyword" value="<?php echo $meta_keyword; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:200px;"><?php echo $meta_description; ?></textarea>
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

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>