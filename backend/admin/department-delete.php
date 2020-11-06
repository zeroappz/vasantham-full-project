<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM department WHERE dep_id=?");
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
	$statement = $pdo->prepare("SELECT * FROM department WHERE dep_id=?");
	$statement->execute(array($_REQUEST['id']));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) {
		$photo = $row['dep_photo'];
		$banner = $row['dep_banner'];
	}

	// Unlink the photo
	if($photo!='') {
		unlink('../assets/uploads/'.$photo);
	}
	if($banner!='') {
		unlink('../assets/uploads/'.$banner);
	}

	// Delete from department
	$statement = $pdo->prepare("DELETE FROM department WHERE dep_id=?");
	$statement->execute(array($_REQUEST['id']));

	// Delete from department_faq
	$statement = $pdo->prepare("DELETE FROM department_faq WHERE dep_id=?");
	$statement->execute(array($_REQUEST['id']));

	// Delete from department_openning_hour
	$statement = $pdo->prepare("DELETE FROM department_openning_hour WHERE dep_id=?");
	$statement->execute(array($_REQUEST['id']));

	// Delete from department_appointment
	$statement = $pdo->prepare("DELETE FROM department_appointment WHERE dep_id=?");
	$statement->execute(array($_REQUEST['id']));

	header('location: department.php');
?>