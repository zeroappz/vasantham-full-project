<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Department</h1>
	</div>
	<div class="content-header-right">
		<a href="department-add.php" class="btn btn-primary btn-sm">Add New</a>
	</div>
</section>


<section class="content">

  <div class="row">
    <div class="col-md-12">


      <div class="box box-info">
        
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
			<thead class="thead-style" >
			    <tr>
			        <th>#</th>
			        <th>Department Name</th>
			        <th>Details</th>
			        <th>Action</th>
			    </tr>
			</thead>
            <tbody>
            	<?php
            	$i=0;
            	$statement = $pdo->prepare("SELECT * FROM department ORDER BY dep_name ASC");
            	$statement->execute();
            	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
            	foreach ($result as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['dep_name']; ?></td>
	                    <td><a href="" data-toggle="modal" data-target="#myModalDetail<?php echo $i; ?>" class="btn btn-warning btn-xs">See Details</a></td>
	                    <td>
	                        <a href="department-edit.php?id=<?php echo $row['dep_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
	                        <a href="#" class="btn btn-danger btn-xs" data-href="department-delete.php?id=<?php echo $row['dep_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
	                    </td>
	                </tr>

	                <!-- Modal Start -->   
					<div class="modal fade" id="myModalDetail<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Department - <?php echo $row['dep_name']; ?>
									</h4>
								</div>
								<div class="modal-body">
									<div class="rTable">
										<div class="rTableRow">
											<div class="rTableCell">
												Photo
											</div>
											<div class="rTableCell">
												<img src="../assets/uploads/<?php echo $row['dep_photo']; ?>" style="width:160px;">
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Banner
											</div>
											<div class="rTableCell">
												<img src="../assets/uploads/<?php echo $row['dep_banner']; ?>" style="width:400px;">
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Name
											</div>
											<div class="rTableCell">
												<?php echo $row['dep_name']; ?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Slug
											</div>
											<div class="rTableCell">
												<?php echo $row['dep_slug']; ?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Details
											</div>
											<div class="rTableCell">
												<?php echo $row['dep_detail']; ?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Address
											</div>
											<div class="rTableCell">
												<?php echo $row['dep_address']; ?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Phone
											</div>
											<div class="rTableCell">
												<?php echo $row['dep_phone']; ?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Fax
											</div>
											<div class="rTableCell">
												<?php echo $row['dep_fax']; ?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Email
											</div>
											<div class="rTableCell">
												<?php echo $row['dep_email']; ?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Openning Hours
											</div>
											<div class="rTableCell">
												<?php
												$statement1 = $pdo->prepare("SELECT * FROM department_openning_hour WHERE dep_id=?");
												$statement1->execute(array($row['dep_id']));
												$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);		
												foreach ($result1 as $row1) {
													echo $row1['oh_day'].' ('.$row1['oh_time'].')<br>';
												}
												?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												FAQ
											</div>
											<div class="rTableCell">
												<?php
												$statement1 = $pdo->prepare("SELECT * FROM department_faq WHERE dep_id=?");
												$statement1->execute(array($row['dep_id']));
												$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);		
												foreach ($result1 as $row1) {
													echo '<b>Q: </b>'.$row1['fq_title'].'<br>';
													echo '<b>A: </b>'.$row1['fq_content'].'<br><br>';
												}
												?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Meta Title
											</div>
											<div class="rTableCell">
												<?php echo $row['meta_title']; ?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Meta Keyword
											</div>
											<div class="rTableCell">
												<?php echo $row['meta_keyword']; ?>
											</div>
										</div>
										<div class="rTableRow">
											<div class="rTableCell">
												Meta Description
											</div>
											<div class="rTableCell">
												<?php echo $row['meta_description']; ?>
											</div>
										</div>
									</div>
								</div>
							</div>                                    
						</div>                                
					</div>
					<!-- Modal End -->
            		<?php
            	}
            	?>
            </tbody>
          </table>
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