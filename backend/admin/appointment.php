<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Appointments List -- Patient Details</h1>
	</div>
</section>


<section class="content">

  <div class="row">
    <div class="col-md-12">


      <div class="box box-info">
        
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
			<thead class="thead-style">
			    <tr>
			        <th>#</th>
			        <th>Patient Name</th>
			        <th>Patient Phone</th>
                    <th>Patient Email</th>
                    <th>Patient Name</th>
			        <th>Department</th>
                    <th>Schedule date</th>
                    <th>Schedule Time</th>
			        <th>Message</th>
			    </tr>
			</thead>
            <tbody>
            	<?php
            	$i=0;
            	$statement = $pdo->prepare("SELECT * FROM appointment ORDER BY id DESC");
            	$statement->execute();
            	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
            	foreach ($result as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['patient_name']; ?></td>
	                    <td><?php echo $row['patient_email']; ?></td>
                        <td><?php echo $row['patient_phone']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['patient_phone']; ?></td>
                        <td><?php echo $row['schedule_date']; ?></td>
                        <td><?php echo $row['schedule_time']; ?></td>
                        <td><?php echo $row['message']; ?></td>
	                </tr>
            		<?php
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
</section>
<?php require_once('footer.php'); ?>