<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM file WHERE file_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
?>

<?php
	
	// Getting photo ID to unlink from folder
	$statement = $pdo->prepare("SELECT * FROM file WHERE file_id=?");
	$statement->execute(array($_REQUEST['id']));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row)  {
		$file_name = $row['file_name'];
	}

	// Unlink the photo
	if($file_name!='') {
		unlink('../assets/uploads/'.$file_name);	
	}

	// Delete from photo
	$statement = $pdo->prepare("DELETE FROM file WHERE file_id=?");
	$statement->execute(array($_REQUEST['id']));

	header('location: file.php');
?>