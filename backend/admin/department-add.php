<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$valid = 1;

	if(empty($_POST['dep_name'])) {
        $valid = 0;
        $error_message .= "Department Name can not be empty<br>";
    }

	$path = $_FILES['dep_photo']['name'];
    $path_tmp = $_FILES['dep_photo']['tmp_name'];

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
        }
    } else {
    	$valid = 0;
        $error_message .= 'You must have to select a photo for featured photo<br>';
    }

    $path1 = $_FILES['dep_banner']['name'];
    $path_tmp1 = $_FILES['dep_banner']['tmp_name'];

    if($path1!='') {
        $ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
        $file_name1 = basename( $path1, '.' . $ext1 );
        if( $ext1!='jpg' && $ext1!='png' && $ext1!='jpeg' && $ext1!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
        }
    } else {
    	$valid = 0;
        $error_message .= 'You must have to select a photo for banner<br>';
    }

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

		// getting auto increment id for photo renaming
		$statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'department'");
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row) {
			$ai_id=$row[10];
		}

		if($_POST['dep_slug'] == '') {
    		// generate slug
    		$temp_string = strtolower($_POST['dep_name']);
    		$dep_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
    	} else {
    		$temp_string = strtolower($_POST['dep_slug']);
    		$dep_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
    	}

    	// if slug already exists, then rename it
		$statement = $pdo->prepare("SELECT * FROM department WHERE dep_slug=?");
		$statement->execute(array($dep_slug));
		$total = $statement->rowCount();
		if($total) {
			$dep_slug = $dep_slug.'-1';
		}


		$final_name = 'department-'.$ai_id.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        $final_name1 = 'department-banner-'.$ai_id.'.'.$ext1;
        move_uploaded_file( $path_tmp1, '../assets/uploads/'.$final_name1 );

		
		// Insert into department
		$statement = $pdo->prepare("INSERT INTO department (dep_name,dep_slug,dep_detail,dep_address,dep_phone,dep_fax,dep_email,dep_photo,dep_banner,meta_title,meta_keyword,meta_description) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
		$statement->execute(array($_POST['dep_name'],$dep_slug,$_POST['dep_detail'],$_POST['dep_address'],$_POST['dep_phone'],$_POST['dep_fax'],$_POST['dep_email'],$final_name,$final_name1,$_POST['meta_title'],$_POST['meta_keyword'],$_POST['meta_description']));


		// Insert into department_faq
		if($fq_empty == 1) {
			for($i=0;$i<count($new_arr1);$i++) {
				$statement = $pdo->prepare("INSERT INTO department_faq (fq_title,fq_content,dep_id) VALUES (?,?,?)");
				$statement->execute(array($new_arr1[$i],$new_arr2[$i],$ai_id));
			}
		}

		// Insert into department_openning_hour
		if($oh_empty == 1) {
			for($i=0;$i<count($new_arr3);$i++) {
				$statement = $pdo->prepare("INSERT INTO department_openning_hour (oh_day,oh_time,dep_id) VALUES (?,?,?)");
				$statement->execute(array($new_arr3[$i],$new_arr4[$i],$ai_id));
			}
		}
			
		$success_message = 'Department is added successfully!';

		unset($_POST['dep_name']);
		unset($_POST['dep_slug']);
		unset($_POST['dep_detail']);
		unset($_POST['dep_address']);
		unset($_POST['dep_phone']);
		unset($_POST['dep_fax']);
		unset($_POST['dep_email']);
		unset($_POST['meta_title']);
		unset($_POST['meta_keyword']);
		unset($_POST['meta_description']);
	}
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Department</h1>
	</div>
	<div class="content-header-right">
		<a href="department.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


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
							<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="dep_name" placeholder="Example: Dental Surgery" value="<?php if(isset($_POST['dep_name'])){echo $_POST['dep_name'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Slug </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="dep_slug" placeholder="Example: dental-surgery">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Detail </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="dep_detail" id="editor1"><?php if(isset($_POST['dep_detail'])){echo $_POST['dep_detail'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Address </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="dep_address" style="height:140px;"><?php if(isset($_POST['dep_address'])){echo $_POST['dep_address'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Phone </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="dep_phone" value="<?php if(isset($_POST['dep_phone'])){echo $_POST['dep_phone'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Fax </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="dep_fax" value="<?php if(isset($_POST['dep_fax'])){echo $_POST['dep_fax'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Email </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="dep_email" value="<?php if(isset($_POST['dep_email'])){echo $_POST['dep_email'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Featured Photo <span>*</span></label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="dep_photo">(Only jpg, jpeg, gif and png are allowed)
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
									</tbody>
								</table>
								<input type="button" class="btn btn-primary btn-xs" id="btnAddFaq" value="+ Add Row" style="margin-bottom:10px;">
							</div>
						</div>

						

						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keywords </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_keyword">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:200px;"></textarea>
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