<?php require_once('header.php'); ?>

<?php
if( !isset($_REQUEST['id']) || !isset($_REQUEST['id1']) ) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM department_openning_hour WHERE oh_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
	
// Delete from video
$statement = $pdo->prepare("DELETE FROM department_openning_hour WHERE oh_id=?");
$statement->execute(array($_REQUEST['id']));

header('location: department-edit.php?id='.$_REQUEST['id1']);
?>