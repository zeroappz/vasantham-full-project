<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM category_video WHERE v_category_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
	
// Delete from category_video
$statement = $pdo->prepare("DELETE FROM category_video WHERE v_category_id=?");
$statement->execute(array($_REQUEST['id']));

// Delete from video
$statement = $pdo->prepare("DELETE FROM video WHERE v_category_id=?");
$statement->execute(array($_REQUEST['id']));

header('location: video-category.php');
?>